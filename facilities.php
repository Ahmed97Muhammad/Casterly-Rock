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
<title>Casterly Rock-Facilities</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Adamina_400.font.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/script.js" ></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
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
            <li><a href="Gastronomy.php">Gastronomy</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="services.php">Services</a></li>
            <li class="active"><a href="facilities.php">Facilities</a></li>
            <li><a href="reg.php">Reservation</a></li>
            <li><a href="cencel.php">CBooking</a></li>
             
            </ul>
        </nav>
          <div class="box1">
            <div class="wrapper">
              


  <div id="frm">
  <form action="fform.php" method="post" name="fsel">
    
    <h2 class="bilal" style="color:#b09012; margin-top: 20px;margin-bottom: 10px "> Choose Facilities</h2>

Choose The Facilities That You Want:
<br> 
  <input type="checkbox" name="c1" value="Swimming"> Swimming
  <br>
  <input type="checkbox" name="c2" value="Fitness Center"> Fitness Center
  <br>
  <input type="checkbox" name="c3" value="Indoor Sports"> Indoor Sports
  <br>
  <input type="checkbox" name="c4" value="Spa"> Spa
  <br>

  <input type="submit" value="Book" name="fsubmit" class="subbutton" style="padding: 9px">
  <input type="reset" value="Cancel" class="subbutton" style="padding: 9px">
</form>
          </div>


              <div class="col2 pad">
                <h2 ><img src="images/title_marker5.jpg" alt="">Featured Facilities</h2>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/f_img1.jpg" height="151px" width="220px" alt=""></figure>
                  <p class="pad_bot12"><strong class="color3">Swimming</strong><br>
                     The rooftop indoor pool and accompanying pool bar are located on the 11th floor, with complimentary access for hotel guests year-round. The pool is sustainably heated and has an additional space for whirlpool baths.</p>
                  </div>
                <div class="wrapper">
                  <figure class="left marg_right1 "><img src="images/f_img2.jpg" height="151px" width="220px" alt=""></figure>
                  <p class="pad_bot12"><strong class="color3">Fitness Centre</strong><br>
                    Casterly Rock's Fitness Center is equipped with state-of-the-art cardiovascular and muscle-building technology. One area devotes a special place to cardiovascular training and another to muscle building, with the assistance of specialized staff and top-notch equipment. Guests can enjoy TV screens, italian technogym training, and fitness test programs.</p>
                  </div>
                <div class="wrapper">
                  <figure class="left marg_right1 "><img src="images/f_img3.jpg" height="151px" width="220px" alt=""></figure>
                  <p class="pad_bot12"><strong class="color3">Spa</strong><br>
                      The guests can enjoy and refresh themselves from a variety of relaxation programs such as a relaxing massage, deep tissue massage, aromatherapy massage, hot stone massge, reflexology, 4 hand massage and pindas massage. To crown this experience, a hydro-massage circuit allows for a well-deserved relaxation session. 
                     </p>
                  </div>
                  <div class="wrapper">
                  <figure class="left marg_right1 "><img src="images/f_img4.jpg" height="151px" width="220px" alt=""></figure>
                  <p class="pad_bot12"><strong class="color3">Indoor Sports</strong><br>
                    This area, created specifically to provide an intimate atmosphere, features indoor sports usch as billards, 9 ball pool, squash, badminton, table tennis and bowling. </p>
                  </div>
                  <button onclick="topFunction()" id="myBtn" title="Go to top" style="background-color: #000;color:#b09012;padding: 15px;border-radius: 10px;">To Booking</button>
              </div>
            </div>
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
            <li class="active"><a href="facilities.php">Facilities</a></li>
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

