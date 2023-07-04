<?php
include("connect.php");
$id=$_GET['id'];
 session_start();
 $qry="update bookings set payment_status=1 where bookings_id ='$id'";
 mysqli_query($con,$qry) or die(mysqli_error());
header("location:sucess_pay.php");
 
?>