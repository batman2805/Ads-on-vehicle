<?php
    include('connect.php');
    $id=$_GET['id'];
    $qry="delete from gallery where gallery_id='$id'";
    mysqli_query($con,$qry) or die(mysqli_error());
    header('location:gallery_datable.php');
?>