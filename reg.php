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
<title>Reservation</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
<script type="text/javascript" src="js/lib2.js">
</script>
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
    <script type="text/javascript" src="js/lib1.js">
    </script>
  
<script>
  $(document).ready(function() {
    $(".datepicker").datepicker();
  });
  </script>

<<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('CA').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else document.getElementById('ifYes').style.display = 'none';

}

</script>

<script>

$(document).ready(function(){

$('#cnic').keydown(function(){

  var length = $(this).val().length; 
              
  if(length == 5 || length == 13)
   $(this).val($(this).val()+'-');

 });

});

</script>

</head>
<body id="page4">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- header -->
      <header>
          <li><a href="index.php"><img src="images/logo.png" height="120px" width="300px" alt=""></a> </li>
      </header>
      <div class="box">
        <nav>
          <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li ><a href="Rb.php">Room Packages</a></li>
            <li><a href="Gastronomy.php">Gastronomy</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li class="active"><a href="reg.php">Reservation</a></li>
            <li><a href="cencel.php">CBooking</a></li>
             
            </ul>
        </nav>
          

          
          
          
          
<?php

$fnameErr = $lnameErr = $addressErr = $phoneNumberErr = $categoryrErr = $emailerr = "";
$fname = $lname = $addr = $pno = $cat = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["firstname"])) 
  {
    $fnameErr = "";
  } 
  else 
  {
    $fname = ($_POST["firstname"]);
  }

  if (empty($_POST["lastname"])) 
  {
    $lnameErr = "";
  } 
  else 
  {
    $lname = $_POST["lastname"];
  }
   
  if (empty($_POST["Address"])) 
  {
    $addressErr = "";
  } 
  else 
  {
    $addr = ($_POST["Address"]);
  }

  if (empty($_POST["PhoneNumber"])) 
  {
    $phoneNumberErr = "";
  } 
  else 
  {
    $pno = ($_POST["PhoneNumber"]);
  }
  if (empty($_POST["Email"]))
  {
      $emailerr = "";
  }
  else
  {
      $email = ($_POST["Email"]);
  }
    if(!empty($_POST["PhoneNumber"]) && !empty($_POST["Address"]) && !empty($_POST["lastname"]) && !empty($_POST["firstname"]) && !empty($_POST["Email"]) && !empty($_POST["category"]) && !empty($_POST["pm"]) && !empty($_POST["Dp"]) && !empty($_POST["cd"]))
    {
         echo "BOOKING CONFIRMED";
    }   
    
}
?>

     <div id="frm">
      
   <form action="regform.php"  method="post" name="regform">    
       
       <h2 class="bilal" style="color:#b09012; margin-top: 20px;margin-bottom: 10px ">Personal Information</h2>  
        <table style="margin-left: 240px;margin-right: 150px; margin-top: 10px;margin-bottom: 10px;table-layout: fixed;">
         <tr>
          <td> 
            <input type="text" name="firstname" placeholder="First Name" id="firstname" pattern="[A-Za-z]+" maxlength="35" required/>
            
          </td>
          <td>
            <input type="text" id="lastname" name="lastname" placeholder="Last Name" pattern="[A-Za-z]+" maxlength="35" required/>
                      
          </td>
         </tr>
         <tr>
          <td>
             <input type="text" id="cnic" name="cnic" pattern="[0-9]{5}-[0-9]{7}-[0-9]{1}" placeholder="CNIC" minlength="15" maxlength="15" required/>
           </td>
          <td>
              <input type="text" id="Address" name="Address" placeholder="Address" maxlength="40" required/>
             
          </td>
         </tr>
         <tr>
          <td>
              <input type="number" id="PhoneNumber" name="PhoneNumber" placeholder="Phone Number" min=0 max="99999999999" required/>
             </td>
          <td>
              <input type="email" id="Email" name="Email" ng-model="Email" placeholder="Email"  required/>
             </td>
          </tr>
          <tr>
          <td>
              <input type="text" name="pm" id="pm" placeholder="Credit Card Number" minlength="10" maxlength="10" required/>
             </td>
          <td>

               <div id="ifYes" style="display:none">
        
                <input type="text" name="cname" id="cname" placeholder="Company Name" display:none />
        
                </div> 
          </td>
         </tr>


          

       </table>   
    <input type="radio" id="CA" name="category" value="Company Affiliated" onclick="javascript:yesnoCheck();" required>Company Affiliated    
    <input type="radio" id="ID" name="category" value="Independent" onclick="javascript:yesnoCheck();" required>Independent
    <br>
    <input type="submit" value="Submit" class="subbutton" style="margin: 35px;">
    <input type="reset" value="Cancel" class="subbutton" style="margin: 35px;">
   
   </form>
          </div>
        </div>
    </div>  
  </div>
</div>
    
    <div class="main">
  <!-- footer -->
  <footer>
    <div class="col2">
        
        <h2>LOCATION 
        </h2>
        <p>
            SHAH LATIF TOWN, NEAR BHAINS COLONY KARACHI,PAKISTAN
        </p>
        <h2>CONTACT NUMBER
        </h2>    
        <p>
            021-987654321
        </p>
      <nav>
          <ul id="footer_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="Rb.php">Room Packages</a></li>
            <li><a href="Gastronomy.php">Gastronomy</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li class="active"><a href="reg.php">Reservation</a></li>
            </ul>
      </nav>
    </div>
    <div class="col1 pad_left1">
      <ul id="icons">
        <li><a href="https://pk.linkedin.com" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
        <li><a href="https://www.facebook.com" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        <li><a href="https://twitter.com/login?lang=en" class="normaltip"><img src="images/icon4.jpg" alt=""></a></li>
      </ul>
    </div>
    <!-- {%FOOTER_LINK} -->
  </footer>
  <!-- footer end -->
</div>
   
    
    
    
<script type="text/javascript">Cufon.now();</script>
</body>
</html>