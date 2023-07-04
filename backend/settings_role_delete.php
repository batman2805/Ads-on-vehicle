<?php
    include('connect.php');
    $id=$_GET['id'];
    $qry="delete from settings_role where settings_role_id='$id'";
    mysqli_query($con,$qry) or die(mysqli_error());
    header('location:settings_role_datatable.php');
?>