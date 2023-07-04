<?php
    include('connect.php');
    $id=$_GET['id'];
    $qry="delete from settings_users where settings_users_id='$id'";
    mysqli_query($con,$qry) or die(mysqli_error());
    header('location:settings_users_datatable.php');
?>