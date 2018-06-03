<?php
// Start the session
if (!isset($_SESSION))
{
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Room Booking Form</title>
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

$roomType = $numberOfBeds = $NumbeOfRooms = $cdate = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if (!empty($_POST["sel1"])) 
  {
    $roomType = $_POST["sel1"];
    $_SESSION["roomType"] = $roomType;
  }

   
  if (!empty($_POST["sel3"])) 
  {
    $numberOfBeds = $_POST["sel3"];
    $_SESSION["numberOfBeds"] = $numberOfBeds;
  }   
  if (!empty($_POST["cd"])) 
  {
    $cdate1 = $_POST["cd"];
    $date5 = DateTime::createFromFormat('m/d/Y',$cdate1);
    $cdate = $date5->format('Y-m-d');
    
    $_SESSION["cdate"] = $cdate;

  }
  if (!empty($_POST["r1"])) 
  {
    $rdate1 = $_POST["r1"];
    $date1 = DateTime::createFromFormat('m/d/Y',$rdate1);
    $rdate2 = $date1->format('Y-m-d');
    
    $_SESSION["rdate1"] = $rdate2;
  }
include "sqlfunctions.php";

if(isRoomAvailable($roomType,$numberOfBeds,$rdate2,$cdate) == false)
{
  session_unset();
  session_destroy();
 header('location:Rb.php?err=NoRoomsAvailable');
}


}
?>  
     <h1 style='margin-left: 80px; color: black; font-size: 30px'>     ROOM BOOKING FORM CONFIRMATION PAGE</h1>

     <br>
     <br>
     <br>
     <br>


     <p style="font-size: 18px">
        <bold>Room Type: </bold> <?php echo $roomType; ?>
     </p>
 
     <p style="font-size: 18px">
        <bold>Number Of Beds: </bold> <?php echo $numberOfBeds; ?>
     </p>


     <p style="font-size: 18px">
        <bold>Reservation Date: </bold> <?php echo $rdate2; ?>
     </p>

     <p style="font-size: 18px">
        <bold>Checkout Date: </bold> <?php echo $cdate; ?>
     </p>

<br>
     <br>
     
              

    <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="Rb.php"> <strong>Click Here To GO Back</strong> </a> </li>
     <br>
     <br>


  <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="services.php"> <strong>Click Here To Book Serices</strong> </a> </li>
          
<br>
<br>

            <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="facilities.php"> <strong>Click Here To Book Facilities</strong> </a> </li>
      
<br>
<br>          

            <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="Rb.php"> <strong>Click Here To Continue</strong> </a> </li>
          
<br>
<br>        
        



        </div>
    </div>  
  </div>
</div>   
    
    
    
<script type="text/javascript">Cufon.now();</script>
</body>
</html>