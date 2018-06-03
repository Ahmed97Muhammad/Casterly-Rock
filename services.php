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
<title>Casterly Rock-Services</title>
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
<body id="page2">
<div class="bg1">
  <div class="bg2">
    <div class="main">
      <!-- header -->
      <header>
          <li><a href="index.php"><img src="images/logo.png" height="120px" width="300px" alt=""></li>
      </header>
      <div class="box">
        <nav>
          <ul id="menu">
            <li ><a href="index.php">Home</a></li>
            <li><a href="Rb.php">Room Packages</a></li>
            <li><a href="Gastronomy.php">Gastronomy</a></li>
            <li><a href="events.php">Events</a></li>
            <li class="active"><a href="services.php">Services</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="reg.php">Reservation</a></li>
            <li><a href="cencel.php">CBooking</a></li>
             
              
            </ul>
        </nav>
        <div class="box1">
            <div class="wrapper">



  <div id="frm">
  <form action="sform.php" method="post" name="savail">
    
    <h2 class="bilal" style="color:#b09012; margin-top: 20px;margin-bottom: 10px "> Avail Services</h2>

Select The Services That You Want To Avail:
<br> 
  <input type="checkbox" name="c1" value="Valet Service"> Valet Service<br>
  <input type="checkbox" name="c2" value="Room Cleaning"> Room Cleaning<br>
  <input type="checkbox" name="c3" value="Food Service"> Food Service<br>
  <input type="submit" value="Book" name="ssubmit" class="subbutton" style="padding: 9px">
  <input type="reset" value="Cancel" class="subbutton" style="padding: 9px">
</form>
</div>
              <div class="col2 pad">
                <h2><img src="images/title_marker3.jpg" alt="">Featured Services</h2>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
                  <p class="pad_bot12"><strong class="color3">Valet</strong><br>
                     Our experienced professional staff takes the responsibility of your vehicles and relieves our customers from the stress of car parking. Our professional and well experienced staff are capable of handling vehicles of any make or model.</p>
                  </div>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page2_img12.jpg" height="151px" width="187px" alt=""></figure>
                  <p class="pad_bot12"><strong class="color3">Room Cleaning</strong><br>
                    At Hotel Casterly Rock, we combine innovation with leading research and development, while offering clients the latest in performance cleaning technology. Room cleaning takes places after thrice a day in the Hotel and is availabke anytime the customer wants it other than the normal cleaning hours.</p>
                  </div>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/page2_img2.jpg"  alt=""></figure>
                  <p class="pad_bot12"><strong class="color3">Food Service</strong><br>
                    The grand professional chefs here at Casterly Rock draw on their vast experience to offer the most refined cuisines. The decadent breakfast, an international lunch buffet, and an afternoon tea in the restaurants at Casterely Rock are all the delicacies to enjoy. </p>
                  </div>
              </div>
            </div>
          </div>
          <div class="pad">
            <div class="wrapper line3">
              <div class="col2">
                <h2>Main Services</h2>
                <p class="pad_bot1"> At Hotel Casterly Rock we have guaranteed check-in from 3.00pm,  but if the room is ready upon your arrival, you are welcome to check-in before. If, on the other hand, the room is not ready when you arrive, you can store your luggage with us at no charge until the room is available. Check-out from the room must occur by 12.00pm, at the latest, but if you need a late check-out, then contact our reception upon arrival, or during your stay, and we will do our best to accommodate your request. Similar to check-in, you have the option to store your luggage when checking out. If you're busy and can pay with a credit card, or your accommodation is already pre-paid, you can make use of our popular Express Check-out and avoid the waiting time. Our Express Check-out stands can be found in the lobby right next to the main entrance. </p>
                <div class="wrapper pad_bot2">
                <div class="col1 pad_left1">
                </div>
                </div>
                  </div>
              <div class="col1 pad_left1">
                <h2>Special Services</h2>
                <div class="wrapper">
                  <figure class="left marg_right1"></figure>
                  <p class="pad_bot11"><strong class="color2">Butler Service</strong></p>
                  <p class="pad_bot1">Exclusive service for deluxe suites and higher categories. A team of butlers offers assistance to guests, helping to make their stay a unique and meorable experience.</p>
                </div>
                <div class="wrapper">
                  <figure class="left marg_right1"></figure>
                  <p class="pad_bot11"><strong class="color2">Casterly Rock Lounge</strong></p>
                  <p class="pad_bot2">Discerning travelers staying in the suites are invited to the lounge, designed as a haven of luxury and tranquility.</p>
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
            <li class="active"><a href="services.php">Services</a></li>
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