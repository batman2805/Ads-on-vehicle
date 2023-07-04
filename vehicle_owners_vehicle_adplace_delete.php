<?php
    include('connect.php');
    $id=$_GET['id'];
    $qry="delete from  vehicle_owners_vehicle_adplace where vehicle_owners_vehicle_adplace_id='$id'";
    mysqli_query($con,$qry) or die(mysqli_error());
    header('location:vehicle_adplaces_edit.php');
?>