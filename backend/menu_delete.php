<?php
    include('connect.php');
    $id=$_GET['id'];
    $qry="delete from menu where menu_id='$id'";
    mysqli_query($con,$qry) or die(mysqli_error());
    header('location:menu_datatable.php');
?>