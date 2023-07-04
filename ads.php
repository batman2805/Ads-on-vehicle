<?php
include("head.php");
include("client_advertiser_header.php");
include("connect.php")
?>
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/pagebanner1.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Advertisement</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="owner_index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Advertisement</li>
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
          
                                           $qry="select * from vehicle_owners inner join vehicle_owner_vehicles on vehicle_owners.vehicle_owners_id=vehicle_owner_vehicles.vehicle_owners_id inner join vehicle_owners_vehicle_adplace on vehicle_owner_vehicles.vehicle_owners_vehicle_id =vehicle_owners_vehicle_adplace.vehicle_owners_vehicle_id inner join settings_vehicle_type on vehicle_owner_vehicles.settings_vehicle_type_id=settings_vehicle_type.settings_vehicle_type_id where ad_status=1";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            $count=mysqli_num_rows($result);
                                            if($count > 0)
                                            {

                                            while($row=mysqli_fetch_array($result))
                                            {
                                            ?>
                   
               <div class="col-lg-12">
                   <div class="single-event-list mt-30">
                       <div class="event-thum">
                           <img src="vehicle_images/<?php echo $row['vehicle_rcbook'];?>"height="200"width="150" >
                       </div>
                       <div class="event-cont">
                           
                            <a href=""><h4><?php echo $row['vehicle_owners_name']?></h4></a></br>
                            <span><i class=""></i> <?php echo "Email Id:". $row['vehicle_owners_email']?></span></br>
                            <span><i class=""></i> <?php echo"Contact Number: ". $row['vehicle_owners_contact']?></span></br>
                            <span><i class=""></i> <?php echo"Vehicle Name: ". $row['vehicle_name']?></span></br>
                            <span><i class=""></i> <?php echo"Vehicle Number: ". $row['vehicle_no']?></span></br>
                            <span><i class="fa fa-map-marker"></i> <?php echo $row['route_details']?></span></br>
                            
                            <span><a class="btn btn-secondary" href="view_details.php?id=<?php echo $row['vehicle_owners_id']?>">View Details</a></span>
                           
                       </div>
                   </div>
               </div>
                                            
             <?php
             }
            }
            
            else
            {
echo "<font style= font-size:150 >No Advertisement is added</font>";
            }
            
             ?> 
             

               
             
           
           </div> <!-- row -->
            
        </div> <!-- container -->
    </section>
    
    <!--====== EVENTS PART ENDS ======-->
   
   <?php
   include('advertiser_footer.php');
   ?>