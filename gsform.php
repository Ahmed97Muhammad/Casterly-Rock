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
<title>Dining Reservation Form</title>
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


$diningtype = $diningnum = $mealselect = $_SESSION["diningtype"] = $_SESSION["diningnum"] =  $_SESSION["mealselect"] ="";
  
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if (!empty($_POST["s1"])) 
  {
    $diningtype = $_POST["s1"];
    $_SESSION["diningtype"] = $diningtype;
  }

  if (!empty($_POST["s2"])) 
  {
    $diningnum = $_POST["s2"];
    $_SESSION["diningnum"] = $diningnum;
  }
   
  if (!empty($_POST["s3"])) 
  {
    $mealselect = $_POST["s3"];
    $_SESSION["mealselect"] = $mealselect;
  }
if (!empty($_POST["r2"])) 
  {
    $rdate2 = $_POST["r2"];
    $date2 = DateTime::createFromFormat('m/d/Y',$rdate2);
    $rdate2 = $date2->format('Y-m-d');
    
    $_SESSION["rdate2"] = $rdate2;
  }

}
?>

     <h1 style='margin-left: 80px; color: black; font-size: 30px'>     DINING RESERVATION</h1>

     <br>
     <br>
     <br>
     <br>


     <p style="font-size: 18px">
        <bold>Dining Type: </bold> <?php echo $diningtype; ?>
     </p>

     <br>

      <p style="font-size: 18px">
        <bold>Number Of Diners: </bold> <?php echo $diningnum; ?>
     </p>

      <br>
     
     <p style="font-size: 18px">
        <bold>Meal Selected: </bold> <?php echo $mealselect; ?>
     </p>

<br>
     <br>
     
              
            <li style="float: right; color: white; font-size: 30px; list-style-type: none;
    "> <a href="Gastronomy.php"> <strong>Click Here To Go Back</strong> </a> </li>
            
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