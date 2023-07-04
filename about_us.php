<?php
include('head.php');
include('header.php');
include('connect.php');
$id=$_GET['id'];
$qry="select * from pages ";
$result=mysqli_query($con,$qry) or die(mysqli_error());
$row=mysqli_fetch_array($result);
echo $row['pages_description'];

?>



<?php
include('footer.php');
?>