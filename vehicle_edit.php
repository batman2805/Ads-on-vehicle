<?php
include("head.php");
include("owner_header.php");
include("connect.php")
?>
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/pagebanner1.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Edit Vehicle Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="owner_index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Vehicle Details</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== EVENTS PART START ======-->
    
    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
           <?php
           $id=$_SESSION['owner_id'];
                                           $qry="select * from vehicle_owner_vehicles inner join settings_vehicle_type on vehicle_owner_vehicles.settings_vehicle_type_id=settings_vehicle_type.settings_vehicle_type_id where vehicle_owners_id=$id";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                            ?>
                   
               <div class="col-lg-6">
                   <div class="single-event-list mt-30">
                       <div class="event-thum">
                           <img src="vehicle_images/<?php echo $row['vehicle_rcbook'];?>"height="100"width="100" >
                       </div>
                       <div class="event-cont">
                           
                            <a href="events-single.html"><h4><?php echo $row['vehicle_name']?></h4></a>
                            <span><i class=""></i> <?php echo $row['settings_vehicle_type_name']?></span>
                            <span><i class=""></i> <?php echo $row['vehicle_no']?></span>
                            <span><i class="fa fa-map-marker"></i> <?php echo $row['route_details']?></span></br>
                            <span><a href="vehicle_owners_vehicles_edit.php?id=<?php echo $row['vehicle_owners_vehicle_id']?>">Edit</a></span>
                            <span><a href="vehicle_owners_vehicles_delete.php?id=<?php echo $row['vehicle_owners_vehicle_id']?>">Delete</a></span> 
                       </div>
                   </div>
               </div>
                                            
             <?php
             }
             ?>  
               
             
           
           </div> <!-- row -->
           
        </div> <!-- container -->
    </section>
    
    <!--====== EVENTS PART ENDS ======-->
   
   <?php
   include('owner_footer.php');
   ?>