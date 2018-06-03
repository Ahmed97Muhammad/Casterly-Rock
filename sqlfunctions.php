<?php


if (!isset($_SESSION))
{
  session_start();
}


	function connectDB()
	{
		$dbname='CasterlyRock';
		try{
			return new PDO('mysql:host=127.0.0.1;dbname='.$dbname,'root','');
		}
		catch(PDOException $ex)
		{
			die($ex->getMessage());
		}
	}
	
	function insertPerson($fname,$lname,$cnic,$address,$phone,$email,$card)
	{
		$pdo=connectDB();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql="select count(*) from person where CNIC='$cnic';";
		try{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
		
		$rows=$statement->fetchColumn();
		
		if($rows!=1)
		{
			return newPerson($fname,$lname,$cnic,$address,$phone,$email,$card);
		}
		else
		{
			return oldPerson($fname,$lname,$cnic,$address,$phone,$email,$card);
		}		
	}
	
	function oldPerson($fname,$lname,$cnic,$address,$phone,$email,$card)
	{
		$pdo=connectDB();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql="update person set FNAME='$fname', LNAME='$lname', Address='$address', PhoneNumber='$phone',Email='$email',CreditCardNo='$card' where CNIC='$cnic';";
		
		try{
			$statement=$pdo->prepare($sql);			
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
			return false;
		}
		$statement->execute();
		return true;
	}
	
	function newPerson($fname,$lname,$cnic,$address,$phone,$email,$card)
	{
		$pdo=connectDB();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql="INSERT into person values('$cnic','$fname','$lname','$address','$phone','$email','$card');";
		
		try{
			$statement=$pdo->prepare($sql);
			$statement->execute();
			return true;
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
			return false;
		}
		
	}
	
	function insertCustomer($fname,$lname,$cnic,$address,$phone,$email,$card,$category,$cname)
	{
		$result=false;
		$result=insertPerson($fname,$lname,$cnic,$address,$phone,$email,$card);
		if($result==true)
		{
			$pdo=connectDB();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql="INSERT into customer values(NULL,'$cnic');";
			try{
				$statement=$pdo->prepare($sql);
			}
			catch(PDOException $e)
			{
				var_dump($e->getMessage());
			}
			$statement->execute();
			$custid=$pdo->lastInsertId();
			
			$_SESSION['mydiscount']=0;
			
			
			if($category == "Company Affiliated")
			{
				$sql="select count(*) from company where name='$cname';";
				try{
					$statement=$pdo->prepare($sql);
				}
				catch(PDOException $e)
				{
					var_dump($e->getMessage());
				}
				$statement->execute();
				$comp=$statement->fetchColumn();
				if($comp!=0)
				{
					$sql="INSERT into customer_company values('$custid','$cname');";
					try{
						$statement=$pdo->prepare($sql);
					}
					catch(PDOException $e)
					{
					var_dump($e->getMessage());
					}
					$statement->execute();

					$sql="select discount from company where name='$cname';";
					try{
						$statement=$pdo->prepare($sql);
					}
					catch(PDOException $e)
					{
					var_dump($e->getMessage());
					}
					$statement->execute();
					$_SESSION['mydiscount'] = $statement->fetchcolumn();
				}
			}
			
			return $custid;
		}
	}
	
	function insertDining($type,$ppl,$date,$name,$custid)
	{
		$price=5;
		$pdo=connectDB();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		
		
		if($type=='Buffet')
		{
			$price=$price+(20*$ppl);
		}
					
		$sql="INSERT into dining values(NULL,'$type','$ppl',curdate(),'$date','$name','$price','$custid');";
		try{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		$statement->execute();
		//echo 'executed';
		
		return $price;
	}
	
	//insertDining('Buffet',54,'2017-11-20','NoName',NULL);
	
	function isEventPossible($cap,$date)
	{
		$pdo=connectDB();
		
		//$sql="SELECT count(*) FROM room where Capacity>=$cap and Room_ID not in(SELECT r.Room_ID from roomstatus r,package p where r.P_ID=p.P_ID and p.E_Date=$date)";
		$sql="SELECT count(*) FROM room where Capacity>='$cap' and Type='Hall' and Room_ID not in(SELECT Hall_ID from event where E_Date='$date');";
		
		$statement=$pdo->prepare($sql);
		$statement->execute();
		
		$rows=$statement->fetchColumn();
		//echo 'in event';
		//echo $rows;
		
		if($rows>0)
		{
			//echo 'true';
			return true;
		}
		else
		{
			//echo 'false';
			return false;
		}
	}
	
	function insertEvent($type,$date,$ppl,$cust_id)
	{
		$pdo=connectDB();
		
		//$sql="SELECT Room_ID,Capacity FROM room where Capacity>=$ppl and Room_ID not in(SELECT r.Room_ID from roomstatus r,package p where r.P_ID=p.P_ID and p.E_Date=$date) order by Capacity asc";
		$sql="SELECT Room_ID,Capacity FROM room where Capacity>='$ppl' and Type='Hall' and Room_ID not in(SELECT Hall_ID from event where E_Date='$date') order by Capacity;";
		
		try
		{$statement=$pdo->prepare($sql);}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}

		$statement->execute();
	
		$roomid=$statement->fetchColumn();		
			
		$sql="SELECT Cost FROM room where Room_ID='$roomid';";
		
		try{$statement=$pdo->prepare($sql);
		}catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
	
		$price=$statement->fetchColumn();
		
		$sql="INSERT into event values(NULL,'$type',curdate(),'$date','$ppl','$price','$cust_id','$roomid');";
		
		try{$statement=$pdo->prepare($sql);
		}catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		$statement->execute();
	
		$eventid=$pdo->lastInsertId();
		
		return $price;
	}
	
	function isRoomAvailable($type,$ppl,$s_date,$e_date)
	{
		$pdo=connectDB();
		
		$sql="SELECT count(*) FROM room where Capacity>='$ppl' and type='$type' and Room_ID not in(SELECT r.Room_ID from roomstatus r,package p where r.P_ID=p.P_ID and ('$s_date' between p.S_Date and p.E_Date) ) order by Capacity asc;";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
		$rows=$statement->fetchColumn();
		
		//echo $rows;
		
		if($rows>0)
		{
			//echo 'true';
			return true;
		}
		else
		{
			//echo 'false';
			return false;
		}
		
	}
	
	function getRoom($type,$ppl,$s_date,$e_date)
	{
		$pdo=connectDB();
		
			
		$sql="SELECT Room_ID FROM room where Capacity>='$ppl' and type='$type' and Room_ID not in(SELECT r.Room_ID from roomstatus r,package p where r.P_ID=p.P_ID and ('$s_date' between p.S_Date and p.E_Date) ) order by Capacity asc;";

		$statement=$pdo->prepare($sql);
		$statement->execute();
		
		$roomid=$statement->fetchColumn();
		
		return $roomid;		
	}

	function insertPackage($type,$ppl,$s_date,$e_date,$custid)
	{
		//run isRoomAvailable() before calling this
		
		$pdo=connectDB();
		
		$roomid=getRoom($type,$ppl,$s_date,$e_date);
		echo $roomid.' room id';
		$sql="SELECT cost FROM room where Room_ID='$roomid';";
		
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		$statement->execute();
		
		$price=$statement->fetchColumn();
//		echo $price . " price ";
		

		$date1=date_create($s_date);
		$date2=date_create($e_date);
		$dayy=date_diff($date1,$date2);
		$days=$dayy->format("%R%a days");

//		echo $days . " days ";
		$price=$price*$days;
//		echo '<br>'.$price . ' price ';
		$sql="insert into package values(NULL,'$ppl',curdate(),'$s_date','$e_date','$price','$custid');";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}		
		
		$statement->execute();
		

		$sql="SELECT P_ID FROM package where Cust_ID='$custid';";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		$statement->execute();
		
		$pid=$statement->fetchColumn();
		
//		echo "string" . $pid;

		$sql="insert into roomstatus values('$pid','$roomid');";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}		
		
		$statement->execute();
		
		return $pid;	
		
	}
	
	function getFID($fname)
	{
		$pdo=connectDB();
		
		$sql="select Fac_ID from facility where Name='$fname';";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
		$fid=$statement->fetchColumn();
		
		return $fid;
	}
	
	function addFacility($pid,$fname)
	{
		$pdo=connectDB();
		
		$fid=getFID($fname);
		
		$sql="insert into facilitystatus values('$pid','$fid');";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}		
		
		$statement->execute();
		
		$sql="select Cost from facility where Fac_ID='$fid';";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
		$cost=$statement->fetchColumn();
		
		$sql="select Price from Package where P_ID='$pid';";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
		$price=$statement->fetchColumn();
		
		$sql="select no_of_ppl from Package where P_ID='$pid';";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
		$ppl=$statement->fetchColumn();
		
		$price=$price+($ppl*$cost);
		
		$sql="update Package set Price='$price' where P_ID='$pid';";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
	}
	
	function getSID($sname)
	{
		$pdo=connectDB();
		
		$sql="select Ser_ID from service where Name='$sname';";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
		$sid=$statement->fetchColumn();
		
		return $sid;
	}
	
	function addService($pid,$sname)
	{
		$pdo=connectDB();
		
		$sid=getSID($sname);
		
		$sql="insert into servicestatus values('$pid','$sid');";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}		
		
		$statement->execute();
		
		$sql="select Cost from service where Ser_ID='$sid';";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
		$cost=$statement->fetchColumn();
		//echo $cost.'<br>';
		
		$sql="select Price from Package where P_ID='$pid';";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
		$price=$statement->fetchColumn();
		//echo $price.'<br>';			
		$price=$price+$cost;
		//echo $price.'<br>';
		$sql="update Package set Price='$price' where P_ID='$pid';";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}
		
		$statement->execute();
	}

	function getpackageprice($pid)
	{
		$pdo=connectDB();
		
		$sql="select price from package where P_ID='$pid';";
		
		try
		{
			$statement=$pdo->prepare($sql);
		}
		catch(PDOException $e)
		{
			var_dump($e->getMessage());
		}

		$statement->execute();
		$price=$statement->fetchColumn();
		
		return $price;
	}

?>