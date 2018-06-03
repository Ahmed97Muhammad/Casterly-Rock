<?php

if (!isset($_SESSION))
{
  session_start();
}

//Error Check rediecting to desired page
if(!isset($_SESSION['roomType']) && !isset($_SESSION['diningtype']) && !isset($_SESSION['type12']))
{
  header('location:reg.php?err=Invalid Registration Please Fill Previous Forms First');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Personal Information Form</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Adamina_400.font.js"></script>
<script type="text/javascript" src="js/formvalidate.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/script.js" ></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
    <script type="text/javascript" src="js/angular.min.js">
    </script>
    <script type="text/javascript" src="js/validateform.js">
    </script>
    <script type="text/javascript" src="js/dropdownform.js">
    </script>
    
</head>
<body id="page4">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- header -->
      <header>
          <li><a href="index.html"><img src="images/logo.png" height="120px" width="300px" alt=""></a> </li>
      </header>
      
      <div class="box">
     
      


<?php
$price=0;
$price1=0;
$price2=0;
$price3=0;

$fname = $lname = $cnic = $address = $pnumber = $email = $cnumber = "";
$cname = $rdate = $category = "";
  

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if (!empty($_POST["firstname"])) 
  {
    $fname = $_POST["firstname"];
    $_SESSION["fname"] = $fname;
  } 
 
 if (!empty($_POST["lastname"])) 
  {
    $lname = $_POST["lastname"];
    $_SESSION["lname"] = $lname;
  }

  if (!empty($_POST["cnic"])) 
  {
    $cnic = $_POST["cnic"];
    $_SESSION["cnic"] = $cnic;
  }

if (!empty($_POST["Address"])) 
  {
    $address = $_POST["Address"];
    $_SESSION["address"] = $address;
  }

  if (!empty($_POST["Email"])) 
  {
    $email = $_POST["Email"];
    $_SESSION["email"] = $email;
  }
  
  if (!empty($_POST["pm"])) 
  {
    $cnumber = $_POST["pm"];
    $_SESSION["cnumber"] = $cnumber;
  }

 if (!empty($_POST["PhoneNumber"])) 
  {
    $pnumber = $_POST["PhoneNumber"];
    $_SESSION["pnumber"] = $pnumber;
  }

  if(!empty($_POST["cname"]))
  {
    $cname=$_POST["cname"];
  }

  if (!empty($_POST["category"])) 
  {
    $category = $_POST["category"];
    $_SESSION["category"] = $category;

        if($category == "Company Affiliated")
          {
             if(empty($_POST["cname"]))
                header('location:reg.php?err=CompanyName Not Provided Refiil All The Forms Again');
          } 
    }      
}

?>


     <h1 style='margin-left: 80px; margin-bottom: 40px; color: black; font-size: 30px'>     PERSONAL INFORMATION FORM CONFIRMATION PAGE</h1>
  


<h2 style='text-align: center; color: black; font-size: 30px'>PERSONAL INFO</h2>

     <br>


     <p style="font-size: 18px">
        <bold>First Name: </bold> <?php echo $_SESSION["fname"]; ?>
     </p>


      <p style="font-size: 18px">
        <bold>Last Name: </bold> <?php echo $_SESSION["lname"]; ?>
     </p>

      <br>
     
     <p style="font-size: 18px">
        <bold>CNIC: </bold> <?php echo $_SESSION["cnic"]; ?>
     </p>

<p style="font-size: 18px">
        <bold>Address: </bold> <?php echo $_SESSION["address"]; ?>
     </p>

     <p style="font-size: 18px">
        <bold>PhoneNumber: </bold> <?php echo $_SESSION["pnumber"]; ?>
     </p>

     <p style="font-size: 18px">
        <bold>Email: </bold> <?php echo $_SESSION["email"]; ?>
     </p>

     <p style="font-size: 18px">
        <bold>Credit Card No: </bold> <?php echo $_SESSION["cnumber"]; ?>
     </p>


      <p style="font-size: 18px">
        <bold>Category: </bold> <?php echo $_SESSION["category"]; ?>
     </p>

      <?php 
        if(!empty($cname))
             echo "<p style='font-size: 18px;'> <bold>Company Name: </bold> .$cname </p>";
        ?> 

<br>
     <br>     



    <br>
     <br>

      <h2 style='text-align: center; color: black; font-size: 30px'>     ROOM BOOKING INFO</h2>

    
     <br>
     <p style="font-size: 18px">
        <bold>Room Type: </bold> <?php  if(isset($_SESSION['roomType']))
             echo $_SESSION["roomType"];
          else
           echo "NOT SELECTED"; ?>
     </p>

      <br>
     
     <p style="font-size: 18px">
        <bold>Number Of Beds: </bold> <?php  if(isset($_SESSION['numberOfBeds']))
             echo $_SESSION["numberOfBeds"];
          else
           echo "NOT SELECTED"; ?>
     </p>

     <p style="font-size: 18px">
        <bold>Reservation Date: </bold> <?php if(isset($_SESSION['rdate1']))
            echo $_SESSION["rdate1"];
            else
           echo "NOT SELECTED";
            ?>
     </p>

     <p style="font-size: 18px">
        <bold>Checkout Date: </bold> <?php if(isset($_SESSION["cdate"])) 
        	echo $_SESSION["cdate"];
        	else
        		echo "NOT SELECTED";
        ?>
     </p>

<br>
     <br>
    
     <h2 style='text-align: center; color: black; font-size: 30px'>     DINING RESERVATION INFO</h2>


     <br>
     <p style="font-size: 18px">
        <bold>Dining Type: </bold> <?php  if(isset($_SESSION['diningtype']))
             echo $_SESSION["diningtype"];
          else
           echo "NOT SELECTED"; ?>
     </p>


      <p style="font-size: 18px">
        <bold>Number Of Diners: </bold> <?php  if(isset($_SESSION['diningnum']))
             echo $_SESSION["diningnum"];
          else
           echo "NOT SELECTED"; ?>
     </p>

     
     <p style="font-size: 18px">
        <bold>Meal Selected: </bold> <?php  if(isset($_SESSION['mealselect']))
             echo $_SESSION["mealselect"];
          else
           echo "NOT SELECTED"; ?>
     </p>

     <p style="font-size: 18px">
        <bold>Reservation Date: </bold> <?php if(isset($_SESSION['rdate2']))
            echo $_SESSION["rdate2"];
            else
           echo "NOT SELECTED";
            ?>
     </p>
<br>
     <br>


<h2 style='text-align: center; color: black; font-size: 30px'>     EVENT BOOKING INFO</h2>

     <br>
     <p style="font-size: 18px">
        <bold>Event Type: </bold> <?php 


          if(isset($_SESSION['type12']))
             echo $_SESSION["type12"];
          else
           echo "NOT SELECTED";?>
     </p>

     
      <p style="font-size: 18px">
        <bold>Capacity: </bold> <?php 
        if(isset($_SESSION['capacity']))
             echo $_SESSION["capacity"];
          else
           echo "NOT SELECTED"; ?>
     </p>


<p style="font-size: 18px">
        <bold>Reservation Date: </bold> <?php if(isset($_SESSION['rdate3']))
            echo $_SESSION["rdate3"];
            else
           echo "NOT SELECTED";
            ?>
     </p>
      <br>
     <br>
     

          <h2 style='text-align: center; color: black; font-size: 30px'>     SERVICES SELECTION INFO</h2>
     <br>
      
      <p style="font-size: 18px;margin-left: 20px"><bold>Valet Service: </bold> 
        <?php  if(isset($_SESSION['v']))
                  echo '-> ', $_SESSION["v"];
          else
           echo "NOT SELECTED";?>
        
     </p>
      <p style="font-size: 18px;margin-left: 20px"><bold>Room Cleaning: </bold> 
        <?php if(isset($_SESSION['rc']))
                echo '-> ', $_SESSION["rc"];
          else
           echo "NOT SELECTED"; ?> 
     </p>
     
     <p style="font-size: 18px;margin-left: 20px"><bold>Food Service: </bold> 
        <?php  if(isset($_SESSION['rs']))
                echo '-> ', $_SESSION["rs"];
              else
                echo "NOT SELECTED"; ?>
     </p>

      <br>
     <br>


     <h2 style='text-align: center; color: black; font-size: 30px'>     FACILITIES SELECTION INFO</h2>


     <br>
     
      <p style="font-size: 18px;margin-left: 20px"><bold>Swimming: </bold> 
        <?php if(isset($_SESSION['s']))
                echo '-> ', $_SESSION["s"];
              else
                echo "NOT SELECTED"; ?>
     </p>
      <p style="font-size: 18px;margin-left: 20px"><bold>Fitness Center: </bold> 
        <?php if(isset($_SESSION['fc']))
                echo '-> ', $_SESSION["fc"];
              else
                echo "NOT SELECTED"; ?>
     </p>
     
     <p style="font-size: 18px;margin-left: 20px"><bold>Indoor Sports: </bold> 
        <?php if(isset($_SESSION['is']))
                echo '-> ', $_SESSION["is"];
              else
                echo "NOT SELECTED"; ?>
     </p>

     <p style="font-size: 18px;margin-left: 20px"><bold>Spa: </bold> 
        <?php if(isset($_SESSION['spa']))
                echo '-> ', $_SESSION["spa"];
              else
                echo "NOT SELECTED"; ?>
     </p>
      
      <br>
     <br>



<?php

include "sqlfunctions.php";

$cust_id=insertCustomer($fname,$lname,$cnic,$address,$pnumber,$email,$cnumber,$category,$cname);

if(isset($_SESSION['roomType']))
{

$p_id=insertPackage($_SESSION['roomType'],$_SESSION['numberOfBeds'],$_SESSION['rdate1'],$_SESSION["cdate"],$cust_id);

      if(isset($_SESSION['v']))
      {
        addService($p_id,$_SESSION['v']);
      }          
      if(isset($_SESSION['rc']))
       {
        addService($p_id,$_SESSION['rc']);
       }              
      if(isset($_SESSION['rs']))
      {
        addService($p_id,$_SESSION['rs']);
      }            

      if(isset($_SESSION['s']))
      {
        addFacility($p_id,$_SESSION['s']);
      }
      if(isset($_SESSION['fc']))
      {
      addFacility($p_id,$_SESSION['fc']);
      }
      if(isset($_SESSION['is']))
      {
      addFacility($p_id,$_SESSION['is']);
      }
      if(isset($_SESSION['spa']))
      {
      addFacility($p_id,$_SESSION['spa']);
      }


    $price2 = getpackageprice($p_id);
echo'<p style="font-size: 18px; margin-left: 20px;"><bold>COST OF ROOM PACKAGE: </bold> 
        </p>';
  echo "<div class='mahmed'>$price2</div>";
              

}



if(isset($_SESSION['diningtype']))
{
  $price1=insertDining($_SESSION["diningtype"],$_SESSION['diningnum'],$_SESSION['rdate2'],$fname,$cust_id);

echo'<p style="font-size: 18px; margin-left: 20px;"><bold>COST OF DININING:  </bold> 
        </p>' ;
         echo "<div class='mahmed'>$price1</div>";
       

} 
if(isset($_SESSION['type12']))
{
    $price = insertEvent($_SESSION["type12"],$_SESSION["rdate3"],$_SESSION['capacity'],$cust_id);
echo'<p style="font-size: 18px;margin-left: 20px"><bold>COST OF EVENT: </bold> 
        </p>';
 echo "<div class='mahmed'>$price</div>";

}

$price3 = $price + $price2 + $price1;
    echo'<p style="font-size: 18px;margin-left: 20px"><bold>TOTAL PRICE IS: </bold></p>';
     echo "<div class='mahmed'>$price3</div>";
       
      if($category=="Company Affiliated")
       { 
        $price3 = ( $price3 - ( ($price3) * (($_SESSION['mydiscount'])/100) ) );  
        echo'<p style="font-size: 18px;margin-left: 20px"><bold>TOTAL PRICE WITH DISCOUNT IS:  </bold></p>';
        echo "<div class='mahmed'>$price3</div>";
        }



session_unset(); 
session_destroy();   

?>

            <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="index.php"> <strong>Click Here To Continue</strong> </a> </li>



        </div>
    </div>  
  </div>
</div>   
    
    
    
<script type="text/javascript">Cufon.now();</script>
</body>
</html>