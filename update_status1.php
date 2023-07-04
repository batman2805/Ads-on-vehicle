<?php
include("connect.php");
$id=$_GET['id'];
 session_start();
 $qry="update bookings set bookings_status=0 where bookings_id='$id'";
 mysqli_query($con,$qry) or die(mysqli_error());
header("location:owner_booking.php");
 
?>