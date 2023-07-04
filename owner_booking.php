<?php
include("head.php");
include("owner_header.php");
include("connect.php");

?>
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/pagebanner1.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>My Bookings</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="owner_index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Bookings</li>
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
                                           $qry="select * from bookings inner join vehicle_owners_vehicle_adplace on bookings.vehicle_owners_vehicle_adplace_id=vehicle_owners_vehicle_adplace.vehicle_owners_vehicle_adplace_id inner join vehicle_owner_vehicles on vehicle_owners_vehicle_adplace.vehicle_owners_vehicle_id=vehicle_owner_vehicles.vehicle_owners_vehicle_id inner join vehicle_owners on vehicle_owner_vehicles.vehicle_owners_id=vehicle_owners.vehicle_owners_id inner join settings_vehicle_type on vehicle_owner_vehicles.settings_vehicle_type_id=settings_vehicle_type.settings_vehicle_type_id inner join settings_ad_duration on vehicle_owners_vehicle_adplace.settings_ad_duration_id=settings_ad_duration.settings_ad_duration_id where vehicle_owners.vehicle_owners_id=$id";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                            ?>
                   
               <div class="col-lg-12">
                   <div class="single-event-list mt-30">
                       <div class="event-thum">
                           <img src="vehicle_images/<?php echo $row['ad_places'];?>"height="200"width="250" >
                       </div>
                       <div class="event-cont">
                           <form>
                            <a href=""><h4><?php echo $row['vehicle_owners_name']?></h4></a>
                            <span><i class=""></i><b></b><?php echo $row['vehicle_no']."-".$row['vehicle_name']?></span></br>
                            <span><i class=""></i><b>Ad Amount: </b><?php echo $row['ad_amount']?></span></br>
                            <span><i class=""></i><b>Ad size: </b> <?php echo $row['ad_size']?></span></br>
                            <span><i class=""></i><b>Ad date: </b> <?php echo $row['ad_date']?></span></br>
                            <span><i class=""></i><b>Ad duration: </b> <?php echo $row['ad_duration']?></span></br>
                            <?php
                            if($row['bookings_status']==0)
                            {
                                ?>
                                 <span><i class=""></i><b>Status: </b>Pending</span></br> 
                            <span><i class=""></i><b><a class="btn btn-primary" href="update_status.php?id=<?php echo $row['bookings_id'];?>"> Confirm Status</a> </b></span></br>
                            <?php
                            }
                            else{
                                ?>
                             <span><i class=""></i><b>Status: </b> Confirmed</span></br>
                             <span><i class=""></i><b><a class="btn btn-primary" href="update_status1.php?id=<?php echo $row['bookings_id'];?>"> Undo</a> </b></span></br> 
                             <?php  
                            }
                            ?>
                            
                            
                                            </form>
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