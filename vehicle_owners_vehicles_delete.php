<?php
    include('connect.php');
    $id=$_GET['id'];
    $qry="delete from vehicle_owner_vehicles where vehicle_owners_vehicle_id='$id'";
    mysqli_query($con,$qry) or die(mysqli_error());
    header('location:vehicle_edit.php');
?>