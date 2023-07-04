<?php
session_start();
unset($_SESSION['advertiser_id']);
header("location:index.php");

?>