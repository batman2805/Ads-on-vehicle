<?php
    include('connect.php');
    $id=$_GET['id'];
    $qry="delete from vehicle_owners where vehicle_owners_id='$id'";
    mysqli_query($con,$qry) or die(mysqli_error());
    header('location:vehicle_owner_datatable.php');
?>