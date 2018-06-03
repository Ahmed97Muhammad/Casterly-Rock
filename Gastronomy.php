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
<title>Casterly Rock-Gastronomy</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Adamina_400.font.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/script.js" ></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/lib1.js">
    </script>
    <script type="text/javascript" src="js/angular.min.js">
    </script>
    <script type="text/javascript" src="js/validateform.js">
    </script>
    <script type="text/javascript" src="js/dropdownform.js">
    </script>
<script>
  $(document).ready(function( ) {
    $(".datepicker").datepicker({ minDate: 0});
  });
  </script>    
<script>
  window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
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
            <li class="active"><a href="Gastronomy.php">Gastronomy</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="reg.php">Reservation</a></li>
            <li><a href="cencel.php">CBooking</a></li>
             
            </ul>
        </nav>
          <article id="content">
          <div class="box1">
            <div class="wrapper">
              

<div id="frm">
  <form action="gsform.php" method="post" name="gasbook" style="text-align: center;">
    
    <h2 class="bilal" style="color:#b09012; margin-top: 20px;margin-bottom: 10px ">Dining Reservation</h2>

 Select Type of Dining:
  <select style="margin: 7px" ng-model="myVar" name="s1" required>
    <option value=""> </option>
    <option value="On-Order">On-Order </option>
    <option value="Buffet">Buffet </option>
  </select>
<br>Select Number of Diners:
  <select style="margin: 7px" ng-model="myVar" name="s2" required>
    <option value=""> </option>
    <option value="1">Table for One </option>
    <option value="2">Table for Two </option>
    <option value="3">Table for Three </option>
    <option value="4">Table for Four </option>
  </select>
<br> Select Meal:
  <select style="margin: 7px" ng-model="myVar" name="s3" required>
    <option value=""> </option>
    <option value="Breakfast">Breakfast </option>
    <option value="Lunch">Lunch </option>
    <option value="Dinner">Dinner </option>
  </select>
  <br>
      <input style="background-color : black; border-radius: 20px; color: white; margin: 20px; padding: 15px" class="datepicker" placeholder="Pick Reservation Date" name="r2" required/>
  <br>
  <input type="submit" value="Book" name="gsubmit" class="subbutton" style="padding: 9px">
  <input type="reset" value="Cancel" class="subbutton" style="padding: 9px">
</form>
</div>


              <div class="col2 pad">
                <h2><img src="images/title_marker4.jpg" alt="">Restaurant and Bars</h2>
                
				
                <div class="center marg_left">
                    <figure style="text-align:center"><img src="images/g_img1.jpg" height="400px" width="720px" alt=""></figure>
                  <p class="pad_bot12 marg_center"><strong class="color3"> La Bourgogne</strong><br>
                     At La Bourgogne, celebrated grand chef Relais and Chateaux Jean Paul draws on his vast experience to offer the most refined French cuisine.</p>
                  </div>
                <div class="center marg_left">
                  <figure><img src="images/g_img2.jpg" height="400px" width="720px" alt=""></figure>
                  <p class="pad_bot12 marg_center"><strong class="color3">L'Orangerie</strong><br>
                    A traditional eeting place in Casterly Rock; L'Orangerie is the perfect place to enjoy a decadent breakfast, an international lunch buffet, an afternoon tea with the classic Casterly Rock Tea.</p>
                  </div>
                <div class="center marg_left">
                  <figure><img src="images/g_img3.jpg" height="400px" width="720px" alt=""></figure>
                  <p class="pad_bot12 marg_center"><strong class="color3">Casterly Roof Bar</strong><br>
                    Overlooking Casterly Rock from the 13th floor, the new Casterly roof bar is available to hotel guests and open to the public as well. </p>
                  </div>
                  <div class="center marg_left">
                  <figure><img src="images/g_img4.jpg" height="400px" width="720px" alt=""></figure>
                  <p class="pad_bot12 marg_center"><strong class="color3">La Boutique de Jaun Paul</strong><br>
                    In addition to a full renovation of the facilities, the new gourmet site offers visitors a special area to enjoy the delicacies prepared by the chef. </p>
                  </div>
                   <button onclick="topFunction()" id="myBtn" title="Go to top" style="background-color: #000;color:#b09012;padding: 15px;border-radius: 10px;">To Booking</button>
              </div>

            </div>

          </div>
          
        </article>

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
            <li class="active"><a href="Gastronomy.php">Gastronomy</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="reg.php">Reservation</a></li>
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