<?php include('connect.php') ?> <!-- to link with DB-->

<!--!isset not showing the page until user sign in -->
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
  <title>Events</title>
 <link rel="stylesheet" type="text/css" href="style_2.css">

<style>
body{
background-image:  url("EventsBack.png");
background-size: 47%; 
background-repeat:repeat-x;
background-position:absolute;
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
      
  <br>
  <br>
  <br> 
  <br>
  <br>

<div class="title">
<p id="siteContent11"> Al-Ahsaa Events</p>
</div>
<br>

<?php
//call variable from connect page 
$records = mysqli_query($db,"SELECT * FROM system_tickets_table WHERE System_ID = 1"); // get data from database
while($data = mysqli_fetch_array($records)) //get data from table(row)
//print data, echo= from line 99 get data by calling the column
{echo '<img src="e1.jpeg" style="width:45%; height: 25em; margin-left: 4em;margin-top: 5em;margin-bottom: 5em;">
    <div class="heading">'.$data['Ticket_Name'].'
    </div>
    
     <div class="txtoffer">
         
       <img src="date.png" style="width:36px; height:40px; margin-top:-0.1em;float: left;"> '.$data['Ticket_Date'].'
<br><br>         
          <img src="Location2.png" style="width:40px; height:40px; margin-top:-0.1em;float: left;">'.$data['location'].'
          <br><br>
         
         <img src="price.png" style="width:40px; height:40px; margin-top:-0.1em;float: left;"> '.$data['Price'].'
     </div>

    <a href="payment.php?id='.$data['System_ID'].'">

        <button id="siteContent12" name="Book_now" style="background-color:#5A0F0A; color:white; border-style: none; width: 150px; height:70px;font-size: 22px; margin-top: -8em; margin-left: 50em;float:left; border-radius: 5px;">Book Now!</button>
    </a>';
}
?>
 <br>
 <?php
$records = mysqli_query($db,"SELECT * FROM system_tickets_table WHERE System_ID = 2"); // get data from database
while($data = mysqli_fetch_array($records))
{echo '<img src="e6.jpg" style="width:45%; height: 25em; margin-left: 4em;margin-top: 5em;margin-bottom: 5em;">
    
    <div class="heading">'.$data['Ticket_Name'].'
    </div>
    
     <div class="txtoffer">
                  <img src="date.png" style="width:36px; height:40px; margin-top:-0.1em;float: left;"> '.$data['Ticket_Date'].'
<br><br>
             
          <img src="Location2.png" style="width:40px; height:40px; margin-top:-0.1em;float: left;">'.$data['location'].'
          <br><br>
         
         <img src="price.png" style="width:40px; height:40px; margin-top:-0.1em;float: left;"> '.$data['Price'].'
     </div>

    <a href="payment.php?id='.$data['System_ID'].'">

        <button id="siteContent13" name="Book_now" style="background-color:#5A0F0A; color:white; border-style: none; width: 150px; height:70px;font-size: 22px; margin-top: -8em; margin-left: 50em;float:left; border-radius: 5px;">Book Now!</button>
    </a>';


}
?>
<br>
<?php
$records = mysqli_query($db,"SELECT * FROM system_tickets_table WHERE System_ID = 3"); // get data from database
while($data = mysqli_fetch_array($records))
{echo '<img src="g82.jpeg" style="width:45%; height: 25em; margin-left: 4em;margin-top: 5em;margin-bottom: 5em;">
    
    <div class="heading">'.$data['Ticket_Name'].'
    </div>
    
     <div class="txtoffer">
                  <img src="date.png" style="width:36px; height:40px; margin-top:-0.1em;float: left;"> '.$data['Ticket_Date'].'
<br><br>
             
          <img src="Location2.png" style="width:40px; height:40px; margin-top:-0.1em;float: left;">'.$data['location'].'
          <br><br>
         
         <img src="price.png" style="width:40px; height:40px; margin-top:-0.1em;float: left;"> '.$data['Price'].'
     </div>

    <a href="payment.php?id='.$data['System_ID'].'">

        <button id="siteContent14" name="Book_now" style="background-color:#5A0F0A; color:white; border-style: none; width: 150px; height:70px;font-size: 22px; margin-top: -8em; margin-left: 50em;float:left; border-radius: 5px;">Book Now!</button>
    </a>';


}
?>
<br>
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

    txt11:"Al-Ahsa Events",
    txt12: "Book Now !",
    txt13: "Book Now !",
    txt14: "Book Now !",
              
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

     txt11: "فـعــاليــات الأحـســـاء",
     txt12: "! احجـز الآن ",
     txt13: "! احجـز الآن ",
     txt14: "! احجـز الآن ",
              
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
        
      } 
    }; 
</script> 
</body>
</html>