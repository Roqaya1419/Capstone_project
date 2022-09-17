<!-- to start the session-->
<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: Signin.php");
  }
?>

<!DOCTYPE html>
<html>
<head> 

<link rel="stylesheet" type="text/css" href="style_1.css">
<style>
  body{
background-image: url("ba.jpeg");
background-size: 100%;
background-repeat: no-repeat;
}
#myVideo{
float: left;
width: 51.6%;
margin-left: 37em;
margin-top: -24.4em;
}
</style>
</head>

<header>
<div class="menu">
<a href="home.php"><img src="homeicon.png" style="width: 30px; height: 30px; margin: -0.3em;"></a>
<a href="gettoknow.php" id="siteContent"> Get to know Al-ahsaa</a>
<a href="See&Do.php" id="siteContent2"> See & Do</a>
</div>
<div class="dropdown">
    <button class="dropbtn" id="siteContent3">Events & Deals </button>
    <div class="dropdown-content">
      <a href="events.php" id="siteContent4">Events</a>
      <a href="offers.php" id="siteContent5">Deals</a>
</div>
</div>
<div class="menu">
<a href="Tickets-Management.php" id="siteContent6">Tickets Management</a>
<a href="deals.php" id="siteContent7">Deals Form</a>
</div>

<a href="signup.php"><img src="loginicon.png" style="width: 38px; height: 36px; float: right; margin-top:2.5em; margin-right: 5em;"></a>
</header>
<!-- cookie to save username and display in the website-->
<?php  if (isset($_SESSION['username'])) : ?>
      <div class="username">
 <?php echo $_SESSION['username']; ?>
</div>

      <a href="home.php?logout='1'"><img src="logouticon.png" style="width: 48px; height: 48px; float:right; margin-right: 1.5em; margin-top:-3em;"></a>
    <?php endif ?> 

<img src="en.png" style="width: 50px; height: 40px; margin-top:-3em;float:left;margin-left:1em;" onclick="changeLanguage('eng')">
<img src="ar.png" style="width: 50px; height: 40px; margin-top:-3em; margin-left: 4em;float:left; " onclick="changeLanguage('ar')">

<nav><img src="logo.png" style="width: 310px; height: 260px; margin-left:-3.8em;margin-top:0.5em;"></nav>

<div class="sbox">
<a href="https://twitter.com/Hasa_Heritage"><img src="twitter.png" style="width: 50px; height: 50px;"></a>
<a href="https://instagram.com/hasa_heritage?igshid=1plox9ny722yk"><img src="insta.png" style="width: 50px; height: 50px;"></a>
</div>

<body>
<!-- session start-->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h5>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h5>
      </div>
    <?php endif ?>  
 
<center>
<h1 id="siteContent11">WELCOME TO Al-AHSAA</h1>
</center>
  
<div class="fbox">
<center id="siteContent12">A natural wonder in Al-Ahsaa Oasis waiting to be explored!</center>
<img src="image.jpeg" style=" width: 280px; height:280px; margin-top: 1em; margin-left:0.5em;">
<p id="siteContent13" style="font-family: Courier New; color: white;font-size: 20px; margin-top: -10em; margin-left: 15em;text-align:center;">A visit to Al-Ahsaa Oasis provides <br>access to a beautiful world of greenery,sand-toned hamlets,
<br>colorful markets,and evocative historical places.</p>
</div>
<br><br><br>
  
<center>
<div class="slideshow-container">  
<div class="mySlides fade">
<img src="h1.jpeg" style="width:60%;height: 400px;">
</div>
   
<div class="mySlides fade">
<img src="h2.jpeg" style="width:60%;height: 400px;">
</div>
   
<div class="mySlides fade">
<img src="h3.jpeg" style="width:60%;height: 400px;">
</div>
   
<div class="mySlides fade">
<img src="h4.JPEG" style="width:60%;height: 400px;">
</div>
   
 <div class="mySlides fade">
<img src="h5.JPEG" style="width:60%;height: 400px;">
</div>
   
 <div class="mySlides fade">
<img src="h6.JPEG" style="width:60%;height: 400px;">
</div>
   
</div>
<br>
<div style="text-align:center">
  <!-- collect (group) dots in one place-->
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
  
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</center>
  
<div class="vbox">
<p id="siteContent14">Organize Your Trip Now !!</p>
<br>
<a href="See&Do.php"><button id="siteContent15" style="background-color:#263120; color:#EBE5CF; border-style: none; width: 120px; height:50px; font-size: 20px; font-family:Century Gothic; margin-left: 8em;">See More</button></a>
</div>
<video autoplay muted loop id="myVideo"><source src="vid22.mp4" type="video/mp4"></video>
  
</body> 


<footer>
<nav><img src="logo.png" style="width: 310px; height: 260px; margin-left:-3.8em;margin-top:0.5em;"></nav>
<div class="footerbox">
<p id="siteContent8" style="margin-left:10em;margin-top:2em;">Contact Us:</p>
<br>
<p  id="siteContent9" style="margin-left:8em;">Phone: 966-561874655</p>
<p id="siteContent10" style="margin-left:6em; margin-top:1em;">E-mail: Hasa-Heritage@gmail.com </p>
</div>

</footer>

 <script>
    function changeLanguage(lang) { 
      location.hash = lang; 
      location.reload(); 
    } 
    var language = { 
      eng: { 
    txt: "Get to know Al-ahsa", 
    txt2: "See & Do", 
    txt3: "Events & Deals", 
    txt4: "Events",
    txt5: "Deals",
    txt6: "Tickets Management",
    txt7: "Deals Form",
    txt8: "Contact Us:",
    txt9: "Phone: 966-561874655",
    txt10: "E-mail: Hasa-Heritage@gmail.com",

    txt11:" WELCOME TO Al-AHSAA",
    txt12: "A natural wonder in Al Ahsa Oasis waiting to be explored!", 
    txt13: "A visit to Al Ahsa Oasis provides access to a beautiful world of greenery,sand-toned hamlets, colorful markets,and evocative historical places.", 
    txt14: "Organize Your Trip Now !!", 
    txt15: "See More", 
}, 
      ar: { 
     txt: "تعرف على الأحساء", 
     txt2: "انظر وافعل", 
     txt3: "الفعاليات والعروض", 
     txt4:"الفعاليات ",
     txt5: "العروض",
     txt6: "إدارة التذاكر",
     txt7: "صفقات",
     txt8: ": اتصل بنا",
     txt9:"الهاتف : 966-561874655",
     txt10:"Hasa-Heritage@gmail.com : البريد الإكتروني",
     
     txt11: "مَرْحَـبــًا بِك فِي الأَحْسَـــاء",
     txt12: "!عجائب طبيعية في واحة الأحساء تنتظر من يكتشفها",
     txt13: "توفر زيارة واحة الأحساء الوصول إلى عالم جميل من المساحات الخضراء والكثبان الرملية والأسواق الملونة والأماكن التاريخية المثيرة للذكريات",
     txt14: "!! نظم رحلتك الآن ",
     txt15: "المزيد",
    },
    }; 
    if (window.location.hash) { 
      if (window.location.hash == "#ar") { 
    siteContent.textContent = language.ar.txt; 
    siteContent2.textContent = language.ar.txt2; 
    siteContent3.textContent = language.ar.txt3; 
    siteContent4.textContent = language.ar.txt4; 
    siteContent5.textContent = language.ar.txt5;
    siteContent6.textContent = language.ar.txt6;
    siteContent7.textContent = language.ar.txt7;
    siteContent8.textContent = language.ar.txt8;
    siteContent9.textContent = language.ar.txt9;
    siteContent10.textContent = language.ar.txt10;
    siteContent11.textContent = language.ar.txt11;
    siteContent12.textContent = language.ar.txt12;
    siteContent13.textContent = language.ar.txt13; 
    siteContent14.textContent = language.ar.txt14;
    siteContent15.textContent = language.ar.txt15;  

      } 
    }; 
</script> 
</html>
