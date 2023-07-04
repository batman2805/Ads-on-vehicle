<?php
    include('connect.php');
    $id=$_GET['id'];
    $qry="delete from settings_vehicle_type where settings_vehicle_type_id='$id'";
    mysqli_query($con,$qry) or die(mysqli_error());
    header('location:settings_vehicle_type_datatable.php');
?>