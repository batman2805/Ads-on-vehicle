<?php
    include('connect.php');
    $id=$_GET['id'];
    $qry="delete from pages where pages_id='$id'";
    mysqli_query($con,$qry) or die(mysqli_error());
    header('location:pages_datatable.php');
?>