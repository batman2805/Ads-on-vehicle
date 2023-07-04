<?php
include("connect.php");
$id=$_GET['id'];
 session_start();
 $qry="update vehicle_owners set vehicle_owners_status=1 where vehicle_owners_id='$id'";
 mysqli_query($con,$qry) or die(mysqli_error());
header("location:vehicle_owner_datatable.php");
 
?>