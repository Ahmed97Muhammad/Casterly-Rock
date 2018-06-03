<?php

if (!isset($_SESSION))
{
  session_start();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Casterly Rock</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<script type="text/javascript" src="js/kwicks-1.5.1.pack.js" ></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
</head>
<body id="page1">
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="Rb.php">Room Packages</a></li>
            <li><a href="Gastronomy.php">Gastronomy</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="reg.php">Reservation</a></li>
            <li><a href="cencel.php">CBooking</a></li>
             
            </ul>
        </nav>
        <!-- header end -->
        <!-- content -->
        <article id="content">
          <div class="box1">
            <div class="wrapper">
              <div class="kwicks-wrapper marg_bot1">
                <ul class="kwicks horizontal">
                  <li><img src="images/img1.jpg" alt=""></li>
                  <li><img src="images/img2.jpg" alt=""></li>
                  <li><img src="images/img3.jpg" alt=""></li>
                  <li><img src="images/img4.jpg" alt=""></li>
                </ul>
              </div>
            </div>
            <div id="ahmed">  
            <div class="pad">
              <div class="line1">
                <div class="wrapper line2">
                  <div class="col1">
                    <h2><img src="images/title_marker1.jpg" alt="">Best Rates</h2>
                    <p style="color: black" class="pad_bot12">Casterly Rock offers the best hotel deals along with a best price guarantee so that you're sure to get the discounts on hotel rooms that you are looking for.</p>
                    </div>
                  <div class="col1 pad_left1">
                    <h2><img src="images/title_marker2.jpg" alt="">Hotel Guide</h2>
                    <p style="color: black" class="pad_bot12">The hotel has 150 rooms and suites, elegantly decorated in empire and louis xv style. On the top floors, Casterly Rock unveils for guest lounge suites with modern design and sophisticated luxuries.</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>  
          <div class="pad">
            <div class="wrapper line3">
              <div class="col2">
                <h2>Welcome to Our Hotel!</h2>
                  <p class="pad_bot1"><strong class="color2">Hotel Casterly Rock is the perfect place to discover a different way to enjoy the city. </strong><br></p>
                  <p class="color2">Hotel Casterly Rock's elegance as well as its caring and dedicated staff, guarantee a remarkable experience for everyone who visits the hotel.<br> Hotel Casterly Rock is one of the most luxurious hotels around the world. The hotel features magnificent architecture and decor and is recognized worldwide for its unparalleled combination of hospitality and personalized service. </p>
                </div>
              <div class="col1 pad_left1">
                <h2>About Us</h2>
                <div class="wrapper">
                <p class="pad_bot2">Bilal Salman   K15-2114</p>
                <p class="pad_bot2">Bilal Shafique K15-2152</p>
                <p class="pad_bot2">Muhammad Ahmed K15-2848</p>
                <p class="pad_bot2">Hammad Aftab   K15-2873</p>
                </div>
                 </div>
            </div>
          </div>
        </article>
        <!--content end-->
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="Rb.php">Room Packages</a></li>
            <li><a href="Gastronomy.php">Gastronomy</a></li>
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
<script type="text/javascript">
$(document).ready(function () {
    $('.kwicks').kwicks({
        max: 500,
        spacing: 0,
        event: 'mouseover'
    });
})
</script>
</body>
</html>