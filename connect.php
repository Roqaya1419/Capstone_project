<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'al-ahsaa_heritage_system');

//sign up page
if (isset($_POST['signup_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "E-mail is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match"); //check two passwords are same
}
//check if username or email are exist or not from DB
  $user_check_query = " SELECT * FROM user_table WHERE username='$username' OR email= '$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "E-mail already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = ($password_1);
  	$query = "INSERT INTO user_table (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	header('location: home.php');
  }
}


//Sign in page
if (isset($_POST['signin_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  setcookie("username",$username);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (count($errors) == 0) {
    $password = ($password);
    $query = "SELECT * FROM user_table WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
      header('location: home.php');
    }else {
      array_push($errors, "Incorrect username or password");
    
     }
  }
}



//deals page 
if (isset($_POST['submit_deal'])) {
  $Provider_Name = mysqli_real_escape_string($db, $_POST['Provider_Name']);
  $Provider_Email = mysqli_real_escape_string($db, $_POST['Provider_Email']);
  $Commercial_Registration_Number = mysqli_real_escape_string($db, $_POST['Commercial_Registration_Number']);
   $Expiration_CRN = mysqli_real_escape_string($db, $_POST['Expiration_CRN']);
  $Type_of_Ticket = mysqli_real_escape_string($db, $_POST['Type_of_Ticket']);
  $Deal_Description = mysqli_real_escape_string($db, $_POST['Deal_Description']);
  $Ticket_Date = mysqli_real_escape_string($db, $_POST['Ticket_Date']);
  $Total_Ticket = mysqli_real_escape_string($db, $_POST['Total_Ticket']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $Ticket_Name = mysqli_real_escape_string($db, $_POST['Ticket_Name']);
  $image = mysqli_real_escape_string($db, $_POST['image']);
  $Price = mysqli_real_escape_string($db, $_POST['Price']);

  if (empty($Provider_Name)) { array_push($errors, "Provider Name is required"); }
  if (empty($Provider_Email)) { array_push($errors, "E-mail is required"); }
  if (empty($Commercial_Registration_Number)) { array_push($errors, "Commercial Registration Number is required"); }
    if (empty($Expiration_CRN)) { array_push($errors, "Expiration_CRN is required"); }
  if (empty($Type_of_Ticket)) { array_push($errors, "Type of Ticket is required"); }
  if (empty($Deal_Description)) { array_push($errors, "Deal Description is required"); }
  if (empty($Ticket_Date)) { array_push($errors, "Ticket_Date is required"); }
  if (empty($Total_Ticket)) { array_push($errors, "Total Ticket is required"); }
  if (empty($location)) { array_push($errors, "Location is required"); }
  if (empty($Ticket_Name)) { array_push($errors, "Ticket Name is required"); }
  if (empty($image)) { array_push($errors, "image is required"); }
  if (empty($Price)) { array_push($errors, "Price is required"); }
  

 if (count($errors) == 0) {
    $username=$_COOKIE['username'];
    $query = "INSERT INTO deal_table (Provider_Name, Provider_Email, Commercial_Registration_Number, Expiration_CRN, Type_of_Ticket, Deal_Description,Ticket_Date, Total_Ticket, location, Ticket_Name, username, image,Price) VALUES('$Provider_Name', '$Provider_Email', '$Commercial_Registration_Number','$Expiration_CRN,', '$Type_of_Ticket', '$Deal_Description','$Ticket_Date','$Total_Ticket','$location','$Ticket_Name', '$username','$image','$Price')";

    mysqli_query($db, $query);
        $_SESSION['username'] = $username;
    header('location: home.php');
}
}


//payment page
if (isset($_POST['send_ok'])) {
  $Number_of_Tickets_Purchased = mysqli_real_escape_string($db, $_POST['Number_of_Tickets_Purchased']);
  $Credit_Card_Number = mysqli_real_escape_string($db, $_POST['Credit_Card_Number']);
  $First_Name = mysqli_real_escape_string($db, $_POST['First_Name']);
  $Last_Name = mysqli_real_escape_string($db, $_POST['Last_Name']);
  $Expiration_month = mysqli_real_escape_string($db, $_POST['Expiration_month']);
  $Expiration_year = mysqli_real_escape_string($db, $_POST['Expiration_year']);
  $CVV = mysqli_real_escape_string($db, $_POST['CVV']);
 
  if (empty($Number_of_Tickets_Purchased)) { array_push($errors, "Number of Tickets Purchased is required"); }
  if (empty($Credit_Card_Number)) { array_push($errors, "Credit Card Number is required"); }
  if (empty($First_Name)) { array_push($errors, "First Name is required"); }
  if (empty($Last_Name)) { array_push($errors, "Last Name is required"); }
  if (empty($Expiration_month)) { array_push($errors, "Expiration Month is required"); }
  if (empty($Expiration_year)) { array_push($errors, "Expiration Year is required"); }
  if (empty($CVV)) { array_push($errors, "CVV is required"); }



 if (count($errors) == 0) {
      $username=$_COOKIE['username'];
    $query = "INSERT INTO payment_table (Number_of_Tickets_Purchased, Credit_Card_Number, First_Name, Last_Name, Expiration_month, Expiration_year, CVV, username) VALUES('$Number_of_Tickets_Purchased', '$Credit_Card_Number', '$First_Name', '$Last_Name', '$Expiration_month','$Expiration_year','$CVV','$username')";

    mysqli_query($db, $query);
        $_SESSION['username'] = $username;
    header('location: Ticket.php');
}
}


?>