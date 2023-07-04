<?php
    include('connect.php');
    $id=$_GET['id'];
    $qry="delete from settings_ad_duration where settings_ad_duration_id='$id'";
    mysqli_query($con,$qry) or die(mysqli_error());
    header('location:settings_ad_duration_datatable.php');
?>