<?php
include("connect.php");
$id=$_GET['id'];
 session_start();
 $qry="update client_advertiser set client_advertiser_status=1 where client_advertiser_id ='$id'";
 mysqli_query($con,$qry) or die(mysqli_error());
header("location:client_advertiser_datatable.php");
 
?>