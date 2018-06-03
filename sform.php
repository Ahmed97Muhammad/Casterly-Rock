<?php
// Start the session
if (!isset($_SESSION))
{
  session_start();
}
if(!isset($_SESSION['roomType']))
{
  header('location:Rb.php?err=Invalid Registration');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Services Selection Form</title>
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


$v = $rc = $rs = "";
 $_SESSION["v"] =  $_SESSION["rc"] = $_SESSION["rs"] = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if (!empty($_POST["c1"])) 
  {
    $v = $_POST["c1"];
    $_SESSION["v"] = $v;

  } 

  if (!empty($_POST["c2"])) 
  {
    $rc = $_POST["c2"];
    $_SESSION["rc"] = $rc;

  } 
   
  if (!empty($_POST["c3"])) 
  {
    $rs = $_POST["c3"];
    $_SESSION["rs"] = $rs;

  } 

    
 
}
?>

     <h1 style='margin-left: 80px; color: black; font-size: 30px'>     SERVICES SELECTED</h1>

     <br>
     <br>
     <br>
     <br>


     <h2 style="font-size: 24px; text-align: center">
        <bold>Services Selected: </bold>
     </h2>

     <br>
      <p style="font-size: 18px;margin-left: 20px">
        <?php echo '-> ',$v; ?>
     </p>
      <p style="font-size: 18px;margin-left: 20px">
        <?php echo '-> ',$rc; ?>
     </p>
     
     <p style="font-size: 18px;margin-left: 20px">
        <?php echo '-> ',$rs; ?>
     </p>

<br>
     <br>
     

    <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="services.php"> <strong>Click Here To GO Back</strong> </a> </li>
     <br>
     <br>

       <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="facilities.php"> <strong>Click Here To Book Facilities</strong> </a> </li>
          
              
    <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="reg.php"> <strong>Click Here To Complete Booking</strong> </a> </li>
                



        </div>
    </div>  
  </div>
</div>   
    
    
    
<script type="text/javascript">Cufon.now();</script>
</body>
</html>