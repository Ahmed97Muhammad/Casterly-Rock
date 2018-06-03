<?php
// Start the session
if (!isset($_SESSION))
{
  session_start();
  $_SESSION['msg']="Please Make Accomodation Reservation";
}
if(!isset($_SESSION['roomType']))
{
  echo "<script type='text/javascript'>
            alert('" . $_SESSION['msg'] . "');
          </script>";
  header('location:Rb.php?err=Invalid Registration');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Facilities Selection Form</title>
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

$s = $spa = $is = $fc = "";
$_SESSION["s"] = $_SESSION["spa"] =  $_SESSION["is"] =     $_SESSION["fc"] = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if (!empty($_POST["c1"])) 
  {
    $s = $_POST["c1"];
    $_SESSION["s"] = $s;

  }

  if (!empty($_POST["c2"])) 
  {
    $fc = $_POST["c2"];
    $_SESSION["fc"] = $fc;

  } 
   
  if (!empty($_POST["c3"])) 
  {
    $is = $_POST["c3"];
    $_SESSION["is"] = $is;

  } 

  if (!empty($_POST["c4"])) 
  {
    $spa = $_POST["c4"];
    $_SESSION["spa"] = $spa;

  } 
    
}
?>

     <h1 style='margin-left: 80px; color: black; font-size: 30px'>     FACILITIES SELECTED</h1>

     <br>
     <br>
     <br>
     <br>


     <h2 style="font-size: 24px; text-align: center">
        <bold>Facilities Selected: </bold>
     </h2>

     <br>
      <p style="font-size: 18px;margin-left: 20px">
        <?php echo '-> ',$s; ?>
     </p>
      <p style="font-size: 18px;margin-left: 20px">
        <?php echo '-> ',$fc; ?>
     </p>
     
     <p style="font-size: 18px;margin-left: 20px">
        <?php echo '-> ',$is; ?>
     </p>

     <p style="font-size: 18px;margin-left: 20px">
        <?php echo '-> ',$spa; ?>
     </p>
<br>
     <br>
     
              

    <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="facilities.php"> <strong>Click Here To GO Back</strong> </a> </li>
     <br>
     <br>   
            
            <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="reg.php"> <strong>Click Here To Complete Booking</strong> </a> </li>
        <br>
     <br>



        </div>
    </div>  
  </div>
</div>   
    
    
    
<script type="text/javascript">Cufon.now();</script>
</body>
</html>