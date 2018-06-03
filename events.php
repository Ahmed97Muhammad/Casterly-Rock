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
<title>Casterly Rock-Events</title>
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
<script type="text/javascript" src="js/kwicks-1.5.1.pack.js" ></script>
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
  $(document).ready(function() {
    $(".datepicker").datepicker( { minDate: 0} );
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
            <li><a href="Gastronomy.php">Gastronomy</a></li>
            <li class="active"><a href="events.php">Events</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="facilities.php">Facilities</a></li>
              <li><a href="reg.php">Reservation</a></li>
              <li><a href="cencel.php">CBooking</a></li>
             
            </ul>
        </nav>
          <article id="content">
          <div class="box1">
            <div class="wrapper">
              <div class="kwicks-wrapper marg_bot1">
                <ul class="kwicks horizontal">
                  <li><img src="images/e_img1.jpg" height="414px" width="622px" alt=""></li>
                  <li><img src="images/e_img2.jpg" height="414px" width="622px" alt=""></li>
                  <li><img src="images/e_img4.jpg" height="414px" width="622px" alt=""></li>
                  <li><img src="images/e_img3.jpg" height="414px" width="622px" alt=""></li>
                </ul>
              </div>


 <div id="frm">
  <form action="eform.php" method="post" name="eventbook">
    
    <h2 class="bilal" style="color:#b09012; margin-top: 20px;margin-bottom: 10px ">Event Reservation</h2>

 Select Type of Event:
  <select style="margin: 7px" ng-model="myVar" name="s1" required>
    <option value=""> </option>
    <option value="Matrimony">Matrimony </option>
    <option value="Birthday Party">Birthday Party</option>
    <option value="Conference">Conference</option>
  </select>
<br>Select Capacity:
  <select style="margin: 7px" ng-model="myVar" name="s2" required>
    <option value=""> </option>
    <option value="300">300 </option>
    <option value="700">700 </option>
    <option value="1200">1200 </option>
  </select>
<br> 
<input style="background-color : black; border-radius: 20px; color: white; margin: 20px; padding: 15px" class="datepicker" placeholder="Pick Reservation Date" name="r3" required/>
  <br>
  <input type="submit" value="Book" name="esubmit" class="subbutton" style="padding: 9px">
  <input type="reset" value="Cancel" class="subbutton" style="padding: 9px">
</form>
</div>



            </div>
            <div class="pad" style="background: #b09012">
            <div class="wrapper line3">
              <div class="col2">
                <h2 style="color: #fff" >Unforgettable Moments</h2>
                  <p class="pad_bot1"><strong  style="color: #fff">Hotel Casterly Rock is the perfect place to discover a different way to enjoy the city. </strong><br></p>
                  <p  style="color: #fff">Hotel Casterly Rock is widely acclaimed for its ten banquet halls. These rooms host business meetings, seminars, social events, weddings, birthday parties and other celebrations. With capacity between 10 and 800 people, the rooms are often booked for the most important events in the city. The permanent assistance of our experts with their tailor made proposals, Hotel Casterly Rock has become the first choice for social and corporate events. The magnificent rooms are ideal for inviting your clients and colleagues, as they are adaptable to every requirement owing to the diversity of their dimensions and arrangements. </p>
                  <div class="wrapper pad_bot2">
                <div class="col1 pad_left1">
                </div>
                </div>
                </div>
              <div class="col1 pad_left1">
                <h2  style="color: #fff">Events</h2>
                <div class="color1 wrapper">
                <p class="pad_bot2" style="color: #fff"><strong>Birthday Parties</strong></p>
                <p class="pad_bot2" style="color: #fff"><strong>Matrimonial Events</strong></p>
                <p class="pad_bot2" style="color: #fff"><strong>Business Conferences</strong></p>
                </div>
                <button onclick="topFunction()" id="myBtn" title="Go to top" style="background-color: #000;color:#b09012;padding: 15px;border-radius: 10px;">To Booking</button>
                 </div>
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
            <li><a href="Gastronomy.php">Gastronomy</a></li>
            <li class="active"><a href="events.php">Events</a></li>
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