<?php
include("connect.php");
$id=$_GET['id'];
 session_start();
 $qry="update vehicle_owners_vehicle_adplace set ad_status=1 where vehicle_owners_vehicle_adplace_id='$id'";
 mysqli_query($con,$qry) or die(mysqli_error());
header("location:vehicle_owners_vehicle_adplace_datatable.php");
 
?>