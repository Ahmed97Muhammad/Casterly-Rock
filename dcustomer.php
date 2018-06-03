<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

$var=$_POST["cnic"];


        include "Connection.php";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $q = $conn->query("SELECT Cust_ID from customer where customer.CNIC = '$var' ");
    $f = $q->fetch();
    $result = $f['Cust_ID'];

    if($result == "")
        header('location:cencel.php?err=WRONG CNIC');
    
    $conn = null;


		include "Connection.php";
try
{
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $q = $conn->query("DELETE FROM dining WHERE Cust_ID = '$result' ");
    
}   
catch(PDOException $e)
    {

    }
$conn=null;
include "Connection.php";

try
{
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $q = $conn->query("DELETE FROM event WHERE Cust_ID = '$result' ");
    
 }   
catch(PDOException $e)
    {

    }
$conn=null;



    include "Connection.php";
try
{
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $q1 = $conn->query("SELECT P_ID from package where Cust_ID = '$result' ");
    $f1 = $q1->fetch();
    $pid = $f1['P_ID'];

}    
catch(PDOException $e)
    {

    }

$conn = null;

    if($pid == "")
     {

     } 
     else
     {
        include "Connection.php";
try
{
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $q = $conn->query("DELETE FROM roomstatus WHERE P_ID = '$pid' ");
} 
catch(PDOException $e)
    {

    }
$conn=null;


include "Connection.php";
try
{
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $q = $conn->query("DELETE FROM servicestatus WHERE P_ID = '$pid' ");
    
  }  
catch(PDOException $e)
    {

    }
$conn=null;


include "Connection.php";
try
{
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $q = $conn->query("DELETE FROM facilitystatus WHERE P_ID = '$pid' ");
 }   
catch(PDOException $e)
    {

    }
$conn=null;


include "Connection.php";
try
{
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $q = $conn->query("DELETE FROM package WHERE Cust_ID = '$result' ");
}    
    
catch(PDOException $e)
    {

    }
$conn=null;


     }  

include "Connection.php";


try
{    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $q = $conn->query("DELETE FROM customer WHERE CNIC = '$var' ");
}    
catch(PDOException $e)
    {

    }

include "Connection.php";
try
{
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $q = $conn->query("DELETE FROM person WHERE CNIC = '$var' ");
    
 }   
catch(PDOException $e)
    {

    }


$conn = null;


echo "Booking Has Been Cencelled";
    

$conn = null;

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CONFIRMATION</title>
</head>
<body>


<li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="cencel.php"> <strong>Click Here To Continue</strong> </a> </li>
            

</body>
</html>
