<?php

include('connect.php'); // Using database connection file here

$Booking_ID = $_GET['Booking_ID']; // get id through query string

$del = mysqli_query($db,"delete from payment_table where Booking_ID = '$Booking_ID'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:Tickets-Management.php"); // redirects to all records page
    exit;	
}
?>