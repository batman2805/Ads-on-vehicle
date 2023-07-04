<?php
include("connect.php");
$id=$_GET['id'];
 session_start();
 $qry="select * from bookings where vehicle_owners_vehicle_adplace_id=$id";
 $result=mysqli_query($con,$qry) or die(mysqli_error());
 $count=mysqli_num_rows($result);
 $row=mysqli_fetch_array($result);
 if($count == 1)
 {
  header("location:my_bookings.php?booked=booked");
   
 }
   else
   {
 $id1=$_SESSION['advertiser_id'];
 $date=date('Y-m-d');
              $qry="insert into bookings values('','".$id1."','".$id."','".$date."','0','0')";
            mysqli_query($con,$qry) ;
            
            
            
            header("location:my_bookings.php?success=success");
		
           
 }
?>