<?php

    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Accomodation</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css">
<script type="text/javascript" src="js/lib2.js">
</script>
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Adamina_400.font.js"></script>
<script type="text/javascript" src="js/kwicks-1.5.1.pack.js" ></script>
<script type="text/javascript" src="js/formvalidate.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/script.js" ></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
    
    
    <script>
  $(function () {
    $(".datepicker1").datepicker( { minDate: 0} ).change(function () {
        $(".datepicker2").datepicker('option', 'minDate', $(this).datepicker('getDate'));
    });
    $(".datepicker2").datepicker().change(function () {
        $(".datepicker1").datepicker('option', 'maxDate', $(this).datepicker('getDate'));
    });
});
  </script>

    <script type="text/javascript" src="js/angular.min.js">
    </script>
    <script type="text/javascript" src="js/validateform.js">
    </script>
    <script type="text/javascript" src="js/dropdownform.js">
    </script>
    <script type="text/javascript" src="js/lib1.js">
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
            <li class="active" ><a href="Rb.php">Room Packages</a></li>
            <li><a href="Gastronomy.php">Gastronomy</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="facilities.php">Facilities</a></li>
            <li><a href="reg.php">Reservation</a></li>
            <li><a href="cencel.php">CBooking</a></li>
             
            </ul>
        </nav>
        <article id="content">
          <div class='box1'>
              <div class="wrapper">
              <div class="kwicks-wrapper marg_bot1">
                <ul class="kwicks horizontal">
                  <li><img src="images/rb1.jpg" height="414px" width="622px" alt=""></li>
                  <li><img src="images/rb2.jpg" height="414px" width="622px" alt=""></li>
                  <li><img src="images/rb3.jpg" height="414px" width="622px" alt=""></li>
                  <li><img src="images/rb4.jpg" height="414px" width="622px" alt=""></li>
                </ul>
              </div>
              
              <div id="frm">
  <form action="Rbform.php" method="post" name="roombook">
    
    <h2 class="bilal" style="color:#b09012; margin-top: 10px;margin-bottom: 10px ">Book Your Room</h2>

Select Room Type:
  <select style="margin: 7px" ng-model="myVar" name="sel1" required>
    <option value=""> </option>
    <option value="Normal">Normal </option>
    <option value="Suite">Suite </option>
  </select>
       

<br>

  
  Select Number of Beds:
  <select style="margin: 7px" ng-model="myVar" name="sel3" required>
    <option value=""> </option>
    <option value="1">1 Bed </option>
    <option value="2">2 Beds </option>
    <option value="3">3 Beds </option>
  </select>
  <br>
       <input style="background-color : black; border-radius: 20px; color: white; margin: 20px; padding: 15px" class="datepicker1" placeholder="Pick Reservation Date" name="r1" required/>
   <br>
   
   <input style="background-color : black; border-radius: 20px; color: white; margin: 20px; padding: 15px" class="datepicker2" placeholder="Pick Checkout Date" name="cd" required/>
  <br>      
  <input type="submit" value="Book" name="rsubmit" class="subbutton" style="padding: 9px">
  <input type="reset" value="Cancel" class="subbutton" style="padding: 9px">

</form>
          </div>
                  
                  <div class="col2 pad">
                <h2><img src="images/title_marker6.jpg" alt="">Room Packages</h2>
                <div class="wrapper">
                    <figure class="left marg_right1"><img src="images/rb11.jpg" height="151px" width="187px" alt=""></figure>
                  <p class="pad_bot12"><strong class="color3">Junior Lounge</strong><br>
                     The Junior Lounge Suites, respectful of the original French classical architecture of the hotel, coexist with contemporary design furniture, exquisite fabrics and pure wool carpets that create a serene atmosphere within elegant spaces.</p>
                  </div>
                <div class="wrapper">
                    <figure class="left marg_right1"><img src="images/rb21.jpg" height="151px" width="187px" alt=""></figure>
                  <p class="pad_bot12"><strong class="color3">Deluxe Lounge</strong><br>
                    At Casterly Rock, these recently inaugurated suites feature a comfort bedroom and an independent living room. Bathrooms are luxuriously clad in Carrara and Marquina black marble, have separate bathtub, shower box and Hermès de Paris toiletries. </p>
                  </div>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/rb31.jpg" height="151px" width="187px" alt=""></figure>
                  <p class="pad_bot12"><strong class="color3">Casterly Lounge</strong><br>
                    The exclusive grand suite, the only one of its category, is placed in a bright chamfer of the hotel. The generous proportions of our Alvear suite, with an attractive view of Alvear Avenue, include a significant reception area, an oval French style living room and a comfortable bedroom, equipped with a king size bed and a big walk-in closet.</p>
                  </div>
                <div class="wrapper">
                  <figure class="left marg_right1"><img src="images/rb41.jpg" height="151px" width="187px" alt=""></figure>
                  <p class="pad_bot12"><strong class="color3">Royal Suite</strong><br>
                    This is a specially designed suite to accommodate the most discerning of guests. With the décor of an authentic Parisian apartment, it includes a reception area, large living room, dining room for 8 guests, comfortable study, large bedroom, and two bathrooms fully clad with Italian botticino marble, and equipped with hydro-massage, sauna and LCD TV. </p>
                  </div>
              </div>
</article>                  
                </div>  
              </div>

  
          <button onclick="topFunction()" id="myBtn" title="Go to top" style="background-color: #000;color:#b09012;padding: 15px;border-radius: 10px;">To Booking</button>
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
            <li class="active"><a href="Rb.php">Room Packages</a></li>
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




        
          
          
          
