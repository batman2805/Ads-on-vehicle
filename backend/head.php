<?php
    session_start();
    ob_start();
    if($_SESSION['id']=='')
    {
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>VAds - Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="logo.png">
    <link rel="stylesheet" href="vendor\owl-carousel\css\owl.carousel.min.css">
    <link rel="stylesheet" href="vendor\owl-carousel\css\owl.theme.default.min.css">
    <link href="vendor\jqvmap\css\jqvmap.min.css" rel="stylesheet">
    <link href="css\style.css" rel="stylesheet">
    <link href="vendor\datatables\css\jquery.dataTables.min.css" rel="stylesheet">
    <script src="ckeditor/ckeditor.js"></script>


</head>