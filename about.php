<?php

include_once "config2.php";
$query = "select * from user";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
session_start();

?>

<html>        
<head>                
<title>Coastal Resort</title>                
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">      
<link href="style.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>        
<script src="js/bootstrap.min.js"></script>  
<link href="css/style" rel="stylesheet">   
</head>  
<body style="background:#f7f7f7">
<div>
<div  style="background-image: url('img/box6.jpg');" class="banner2">
  <div class="text tile" style="letter-spacing: .5rem;">About Coastal Resort</div>
  <div class="text p tile" style="margin-top:5%;font-size:20px;text-transform:capitalize;"><p>Discover our oasis on India's beach</p></div>
</div>

<div class="p1">
  <center><div><img src="img/beach.png" style="margin-top:5%" height="70" width="70"></div>
  <h1 align="center" style="letter-spacing: .5rem;font-family:Times New Roman,Times,serif;text-transform:uppercase">A Hidden Gem on India’s Shores</h1><br>
  <p class="container pe">Our vision is to combine tradition, discovery, individuality and a twist of the unexpected, to <br>create the perfect stay for each guest. 
    Our destinations are designed by world-renowned architects. <br>Our restaurants offer authentic flavours imaginatively reinvented. From the Auriga spas to each<br>
     location’s dedicated and personal guest services, the Coastal spirit is holistic,<br> generous and bespoke.
  <br><br>
</p><br>
</div></center>
<br>

<h2 class="container" style="color:#220404f6;letter-spacing: .5rem;font-family:Times New Roman,Times,serif;text-transform:uppercase;margin-left:6.5%">SUMMER FAMILY TRAVEL</h2>
<div style="height:1px;background:#52706c;width:15%;margin-bottom:2%;margin-left:7.5%;margin-top:1.5%"></div><br><br>
<div class="wrapper container" style="margin-right:9%">
  <div class="item1"><p style="color:#00211d;letter-spacing: .1rem;font-family:Times New Roman,Times,serif;font-size:180%">Weaving tales of adventure and togetherness with <br> Coastal.</p></div>
  <div class="item2"><img src="img/about1.jpg" width="110%"></div>
  <div class="item3"><img src="img/about2.png" height="145%"></div>
  <div class="item4 tile"><p style="color:#00211d;font-family:Times New Roman,Times,serif;font-size:110%">In the embrace of summer’s warmth, our resort are a <br>canvas for shared joy and the creation of lasting memories with <br>your family. Indulge in your little ones’ curious spirits with Coastal <br>Moments while crafting enduring family moments, together.</p></div>
</div>
<br><br><br><br><br>

<div style="height:30%;background: #dfdfdfe0;display:flex;letter-spacing: .1rem;font-family:Times New Roman,Times,serif;position:relative;margin-top:3%">
  <div style="margin-left:15%;font-size:33px;margin-top:2%;color:#00211d;"><p >BOOK YOUR <br> STAY</p></div>
  <div style="margin-left:6%;font-size:20px;margin-top:2%;color:#220404f6;"><p>Let us create your perfect stay.<br>
Contact Capella Bangkok reservations <br> team to book your stay with us.</p>
<?php
    if (!isset($_SESSION['username'])) { ?>  
  <p style="font-size:14px;margin-top:10%"><a href="login.php" style="text-decoration:underline;color:#9a7b4f">BOOK NOW</a></p>
  <?php } else { ?>
    <p style="font-size:14px;margin-top:10%"><a href="booking.php?id=<?php echo $row['id']; ?>" style="text-decoration:underline;color:#9a7b4f">BOOK NOW</a></p>
    <?php } ?>
</div>
<div class="tile" style="margin-left: 75%;position: absolute;bottom:-23%;"><img src="img/key2.png" height="15%" width="50%"></div>
</div>
<br><br><br><br><br>

<center><h2 style="color:#220404f6;letter-spacing: .5rem;font-family:Times New Roman,Times,serif;text-transform:uppercase">USEFUL DETAILS</h2>
</div></center>
<h4 style="color:#220404f6;text-align:center;font-size:110%">Everything you need to know before you travel to The Coastal Resort.</h4><br><br>
<div class="row tile" style="padding:0;margin:0;background-color:#fff">
<div class="container abo" style="margin-top:3%">
  <div class="col-md-4"  style="text-align:left"><h5>CHECK-IN AND CHECK-OUT</h5>
  <p>Check-in is 2.00pm local time and check-out is 12.00pm. Although we will always attempt to provide rooms upon arrival, 
    access before 2.00pm can only be guaranteed by reserving your room for an additional night prior to date of arrival.
     Late check-out after 12.00pm local time is subject to availability. An additional late departure fee may apply. Cancellations
      and no shows are subject to full stay charge. Cancellation terms are subject to change according to travel period.</p>
  </div>
  <div class="col-md-4"  style="text-align:left"><h5>INTERNET</h5>
  <p>Unlimited complimentary* 512kbps WiFi/email browsing access up to two (2) devices within the comfort of your room and around most 
    of the outdoor pool facilities. High-speed download/upload ideal for games, movies, video and sports streaming, etc., for up to four
     (4) devices within the resort is available at a daily or weekly minimal fee.</p>
  </div>
  <div class="col-md-4"  style="text-align:left"><h5>DRESS CODE AND BEHAVIOUR ETIQUETTE</h5>
  <p>India is undoubtedly a tolerant and cosmopolitan city, however, all visiting guests should be aware of the importance of the
     Emirates cultural sensitivity, while on excursions or touring shopping malls, proper dress code and behaviour be in respect of local culture.</p>
  </div>
  
</div>

<div class="container abo" style="margin-top:2%;margin-bottom:3%">
  <div class="col-md-4"  style="text-align:left"><h5>ELECTRICITY</h5>
  <p>The power supply in India operates at 220 volts; adaptors are available upon request. Unfortunately we are unable to provide converters.</p>
  </div>
  <div class="col-md-4"  style="text-align:left;"><h5>LANGUAGE</h5>
  <p>Although the official language is Hindi, English is widely spoken.</p>
  </div>
  <div class="col-md-4"  style="text-align:left"><h5>CURRENCY</h5>
  <p>The official currency of the India Emirates is the Rupees, which is divided into 100 paise, and is pegged to the USD - 1 USD = 83.37 Rupees</p>
  </div>
</div>
</div>
<br><br><br><br><br>

<div class="wrapper2 container" style="margin-left:15%">
  <div class="itema"><p style="color:#00211d;letter-spacing: .3rem;font-family:Times New Roman,Times,serif;font-size:180%">AIRPORT TRANSFERS.</p></div>
  <div class="itemb"><img src="img/about4.png" width="120%"></div>
  <div class="itemc"><img src="img/about3.png" width="85%"></div>
  <div class="itemd tile"><p style="color:#00211d;font-family:Times New Roman,Times,serif;font-size:110%">The resort is pleased to make personal transfer arrangements for guests arriving into both India International Airport (a 45 minute drive), as well as Abu Dhabi International Airport (a 70 minute drive). Luxury car transfers typically accommodate up to three adults, or two adults and two children under the age of 12. For groups of five or more, larger vehicles can be arranged.</p></div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<center><h2 style="color:#220404f6;letter-spacing: .5rem;font-family:Times New Roman,Times,serif;text-transform:uppercase">Frequently Asked Questions</h2>
<div style="height:1px;background:#52706c;width:12%;margin-bottom:1%;margin-top:1.5%"></div></center>
<div>
<center><div style="margin-top:3%;margin-bottom:4%">
<details>
  <summary>What forms of payment are accepted?</summary>
  <div class="faq__content" style="margin-left:1%;text-align: left;margin-left:21%">
    <p>The Coastal is a cash-free resort. We accept all major credit cards, contactless mobile payments, or room charge.</p>
  </div>
</details>
<details>
  <summary>Is luggage storage available?</summary>
  <div class="faq__content" style="margin-left:1%;text-align: left;margin-left:21%">
    <p>Yes, The Coastal offers luggage storage for early arrivals and late departures at no extra cost. Inquire ahead<br> of time or speak to our front desk for details.</p>
  </div>
</details>
<details>
  <summary>What is your Cancellation Policy?</summary>
  <div class="faq__content" style="margin-left:1%;text-align: left;margin-left:21%">
    <p>We ask that you let us know a minimum of 48 hours in advance of your scheduled check-in. Failure to cancel<br> within this time may result in loss of your deposit or additional charges.<br> Please note: More advanced notice may be required for holidays and dates in high demand.</p>
  </div>
</details>
<details>
  <summary>Do you provide parking?</summary>
  <div class="faq__content" style="margin-left:1%;text-align: left;margin-left:21%">
    <p>Yes, we offer valet parking for a fee, along with complimentary self-parking at the resort.</p>
  </div>
</details>
<details>
  <summary>What’s included in the resort fee?</summary>
  <div class="faq__content" style="margin-left:1%;text-align: left;margin-left:21%">
    <p>Your daily resort fee allows you access to The Coastal exclusive guest amenities including:</p>
    <ul style="top: 11px;margin-left:2%">
      <li>WiFi in guest rooms and public areas</li>
      <li>Two water bottles</li>
      <li>Daily rental of two beach chairs and one umbrella per room</li>
      <li>Non-motorized watersport rentals</li>
      <li>Bicycle rentals</li>
    </ul>
  </div>
</details>
</div></center>
</div>

<center><div class="stay" style="height: 35%;">
  <h2>STAY CONNECTED</h2>
  <p style="font-size:18px">SIGN UP TO OUR NEWSLETTER</p>
  <a href="login.php"><button class="button"  style="width: 13%;height:18%;margin-top:2%;color:#fff;border: 1px groove #fff;">SIGN UP</button></a>
</div></center>
<br><br><br><br>


<header>
  <?php @include 'header.php'; ?>  
</header> 
<div><?php @include 'footer.php'; ?></div>


<script>
 var className = "inverted";
var scrollTrigger = 60;
var initialSrc = "img/logo3.png";
var scrollSrc = "img/logo4.png";
window.onscroll = function() {
  // We add pageYOffset for compatibility with IE.
  if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) {
    document.getElementsByTagName("header")[0].classList.add(className);
    document.getElementById("main-avatar-img").src = scrollSrc; 
  } else {
    document.getElementsByTagName("header")[0].classList.remove(className);
    document.getElementById("main-avatar-img").src = initialSrc;
  }
};


let elementsArray = document.querySelectorAll(".tile");
console.log(elementsArray);
window.addEventListener('scroll', fadeIn ); 
function fadeIn() {
    for (var i = 0; i < elementsArray.length; i++) {
        var elem = elementsArray[i]
        var distInView = elem.getBoundingClientRect().top - window.innerHeight + 20;
        if (distInView < 0) {
            elem.classList.add("inView");
        } else {
            elem.classList.remove("inView");
        }
    }
}
fadeIn();
</script>
</body>
</html>