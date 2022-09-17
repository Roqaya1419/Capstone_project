<?php include('connect.php') ?>

<?php

if (!isset($_SESSION['username'])) {
    header('location: signin.php');
}
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: signin.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Deals</title>
 <link rel="stylesheet" type="text/css" href="style_1.css">
<style>
  body{
background-image: url("dealsback.png");
background-size: 100%;
background-repeat: no-repeat;
}
.form2{
  width: 600px;
  height:900px;
  padding: 25px;
  margin-top: 10em;
  background: #263120;
  border-radius: 15px;
}
.input2 {
  display: block;
  border: 2px solid #ccc;
  width: 130%;
  padding: 10px;
  margin-left:-6em;
  margin-top:0em;
  border-radius: 5px;
  font-size: 15px;
  border-style:none;
}
.label2 {
  color: white;
  font-size: 20px;
  padding: 12px;
  float: left;
  margin-left: 1.5em;
}
div.elem-group {
margin: 20px 0;
}
div.elem-group.inlined {
width: 49%;
display: inline-block;
float: left;
margin-left: 2%;
margin-top:-1em;
margin-right:-10%;
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
<a href="Tickets-management.php" id="siteContent6">Tickets Management</a>
<a href="Deals.php" id="siteContent7">Deals Form</a>
</div>

<a href="signup.php"><img src="loginicon.png" style="width: 38px; height: 36px; float: right; margin-top:2.5em; margin-right: 5em;"></a>
</header>

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
    <form  class="form2" method="post" action="deals.php">
   <h2 id="siteContent11">Deals Form</h2>
    <?php include('errors.php'); ?>

    <div class="label2">
      <div class="input2">
      <label id="siteContent12">Provider Name</label>
<input type="text" name="Provider_Name" placeholder="Provider Name" id="siteContent100" style="width: 35%; margin-right:6em;">

      <label id="siteContent13">Provider E-mail</label>
<input type="email" name="Provider_Email" placeholder="Provider Email" id="siteContent200" style="width: 35%; margin-right:6em;" >

      <label id="siteContent14">Commercial Registration Number</label>
 <input type="text" name="Commercial_Registration_Number" placeholder="Commercial Registration Number" id="siteContent300" style="width: 35%; margin-right:6em;"  maxlength="10">

  <label id="siteContent15"> Expiration CRN </label>
<input type="date" name="Expiration_CRN" placeholder="Expiration_CRN" id="siteContent400" style="width: 35%; margin-right:6em;">


      <label id="siteContent16">Type of Ticket </label>
      <select name="Type_of_Ticket" style="  border: 2px solid #ccc; width: 38.5%; padding: 10px; margin-left:5em;border-radius: 5px; font-size: 15px; border-style:none;">
        <option id="siteContent17"> Select your type </option>
        <option id="siteContent18">Restaurant</option>
        <option id="siteContent19">Coffee</option>
        <option id="siteContent20">Cinema</option>
        <option id="siteContent21">Zoo</option>
      </select>
  <br>
      <label id="siteContent22">Deals Description</label>
      <textarea rows="4" cols="31.5" name="Deal_Description" placeholder="Describe your deal here" id="siteContent500" style="border-radius: 10px; padding-top:8px;padding-left:8px; font-family:Arial; font-size: 15px; margin-right:-3.4em;margin-top: 0.7em;"></textarea><br>

      <label id="siteContent23">Deals Date</label>
      <input type="date" name="Ticket_Date" style="width: 35%; margin-right:6em;" >

<label id="siteContent24"for="num_ticket">Number of Tickets Provided</label>
<input type="number" name="Total_Ticket" placeholder="1" min="5" style="width: 35%; margin-right:6em;" required>

      <label id="siteContent25">Location</label>
      <input type="text" name="location" placeholder="Location" id="siteContent600" style="width: 35%; margin-right:6em;" >

      <label id="siteContent26">Ticket’s Name</label>
      <input type="text" name="Ticket_Name" placeholder="Ticket's name" id="siteContent700" style="width: 35%; margin-right:6em;">
      <label id="siteContent27">Price</label>
      <input type="number" name="Price" min="1" placeholder="Price" id="siteContent800" style="width: 35%; margin-right:6em;">
<label id="siteContent28"> Upload deal image</label>
<input type="file" name="image" style="width: 35%;margin-right:6em;">
</div>
</div>

<button  id="siteContent29" type="submit" name="submit_deal" style="background:#916E48; padding: 10px 15px; color: white; border-radius: 30px; margin-right: 10px; border: none; font-size: 22px;">Submit</button>
    
  </form>
  </center>

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
    txt7: "Deals", 
    txt8: "Contact Us:",
    txt9: "Phone: 966-561874655",
    txt10: "E-mail: Hasa-Heritage@gmail.com",

    txt11: "Deals form",
    txt12: "Provider Name",
    txt13: "Provider E-mail",
    txt14: "Commercial Registration Number ",
    txt15: " Expiration CRN",

    txt16: "Type of Ticket ",
    txt17: "Select your type",
    txt18: "Restaurant",
    txt19: "Coffee",
    txt20: "Cinema",
    txt21: "Zoo",
    txt22: "Deals Description",
    txt23: "Deals Date",

    txt24: "Number of Tickets Provided",
    txt25: "Location",
    txt26: "Ticket’s Name",
    txt27: "Price",
    txt28: "Upload deal image",
    txt29: "Submit",
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

     txt11: "نموذج الصفقــات",
     txt12: "اسم المُــزود",
     txt13: "البــريد الإلكتروني للمُــزود",
     txt14: "رقم الســجل التجــاري",
     txt15: "تاريخ انتهاء صلاحية السجل التجاري",

     txt16: "نوع التذكرة",
     txt17: "حدد النوع الخاص بك",
     txt18: "مطعم",
     txt19: "قهوة",
     txt20: "سينما",
     txt21: "حديقة حيوان",
     txt22: "وصف الصفقة",
     txt23: "تاريخ الصفقة",

     txt24: "عدد التذاكر المقدمة",
     txt25: "الموقع",
     txt26: "اسم التذكرة",
     txt27: "السعر",
     txt28: "تحميل صورة الصفقة",
         txt29: "إرســــال",

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
    siteContent16.textContent = language.ar.txt16;
    siteContent17.textContent = language.ar.txt17;
    siteContent18.textContent = language.ar.txt18;
    siteContent19.textContent = language.ar.txt19;
    siteContent20.textContent = language.ar.txt20;
    siteContent21.textContent = language.ar.txt21;
    siteContent22.textContent = language.ar.txt22;
siteContent23.textContent = language.ar.txt23;
siteContent24.textContent = language.ar.txt24;
siteContent25.textContent = language.ar.txt25;
siteContent26.textContent = language.ar.txt26;
siteContent27.textContent = language.ar.txt27;
siteContent28.textContent = language.ar.txt28;
siteContent29.textContent = language.ar.txt29;


document.getElementsByName("Provider_Name") [0].placeholder ="اسم المزود";
   siteContent100.textContent= language.ar.txt100;

document.getElementsByName("Provider_Email") [0].placeholder ="البريد الإلكتروني للمزود"; 
  siteContent200.textContent= language.ar.txt200;

document.getElementsByName("Commercial_Registration_Number") [0].placeholder ="رقم السجل التجاري"; 
  siteContent300.textContent= language.ar.txt300;

document.getElementsByName("Expiration_CRN") [0].placeholder ="تاريخ انتهاء صلاحية السجل التجاري"; 
  siteContent400.textContent= language.ar.txt400;


document.getElementsByName("Deal_Description") [0].placeholder ="وصف الصفقة"; 
  siteContent500.textContent= language.ar.txt500;

document.getElementsByName("location") [0].placeholder ="الموقع"; 
  siteContent600.textContent= language.ar.txt600;

document.getElementsByName("Ticket_Name") [0].placeholder ="اسم التذكرة"; 
  siteContent700.textContent= language.ar.txt700;

  document.getElementsByName("Price") [0].placeholder ="السعر"; 
  siteContent800.textContent= language.ar.txt800;

      } 
    } 
</script> 
</html>
 
    