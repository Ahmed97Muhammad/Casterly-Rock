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
<title>Event Booking Form</title>
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

   
$type12 = $capacity = "";
    $_SESSION["type12"] =   $_SESSION["capacity"] = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if (!empty($_POST["s1"])) 
  {
    $type12 = $_POST["s1"];
    $_SESSION["type12"] = $type12;

  }

  if (!empty($_POST["s2"])) 
  {
    $capacity = $_POST["s2"];
    $_SESSION["capacity"] = $capacity;

  } 
   
if (!empty($_POST["r3"])) 
  {
    $rdate3 = $_POST["r3"];
    $date3 = DateTime::createFromFormat('m/d/Y',$rdate3);
    $rdate4 = $date3->format('Y-m-d');
    
    $_SESSION["rdate3"] = $rdate4;
  }

include "sqlfunctions.php";

if(isEventPossible($capacity,$rdate4) == false)
{
  session_unset();
  session_destroy();
  header('location:events.php?err=No Halls Available');
}

}
?> 
     <h1 style='margin-left: 80px; color: black; font-size: 30px'>     EVENT BOOKING FORM CONFIRMATION PAGE</h1>

     <br>
     <br>
     <br>
     <br>


     <p style="font-size: 18px">
        <bold>Event Type: </bold> <?php echo $type12; ?>
     </p>

     <br>

      <p style="font-size: 18px">
        <bold>Capacity: </bold> <?php echo $capacity; ?>
     </p>

      <br>

<p style="font-size: 18px">
        <bold>Event Date: </bold> <?php echo $rdate4; ?>
     </p>

<br>
     <br>
     
              
                <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="events.php"> <strong>Click Here To Go Back</strong> </a> </li>
            
<br>
<br>


                <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="reg.php"> <strong>Click Here To Complete Booking</strong> </a> </li>
        
        



        </div>
    </div>  
  </div>
</div>   
    
    
    
<script type="text/javascript">Cufon.now();</script>
</body>
</html>