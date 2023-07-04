<?php
session_start();
unset($_SESSION['owner_id']);
header("location:index.php");

?>