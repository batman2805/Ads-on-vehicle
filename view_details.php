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
                        <h2>Edit Vehicle Adplaces</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="owner_index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Vehicle Adplaces</li>
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
          $id=$_GET['id'];
                                           $qry="select * from  vehicle_owners_vehicle_adplace inner join vehicle_owner_vehicles on vehicle_owners_vehicle_adplace.vehicle_owners_vehicle_id=vehicle_owner_vehicles.vehicle_owners_vehicle_id inner join settings_ad_duration on vehicle_owners_vehicle_adplace.settings_ad_duration_id=settings_ad_duration.settings_ad_duration_id where vehicle_owners_id=$id";
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
                            <a href="events-single.html"><h4><?php echo $row['vehicle_no']."-".$row['vehicle_name']?></h4></a>
                            <span><i class=""></i><b> Ad Amount:</b><?php echo $row['ad_amount']?></span></br>
                            <span><i class=""></i><b>Ad size:</b> <?php echo $row['ad_size']?></span></br>
                            <span><i class=""></i><b>Ad date:</b> <?php echo $row['ad_date']?></span></br>
                            <span><i class=""></i><b>Ad duration:</b> <?php echo $row['ad_duration']?></span></br>
                            
                            
                            <span><a class="btn btn-danger" href="bookings.php?id=<?php echo $row['vehicle_owners_vehicle_adplace_id']?>">Book</a></span>
                            
                                            </form>
                       </div>
                   </div>
               </div>
                                            
             <?php
             }
             ?>  
               
             
           
           </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="#">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>  <!-- courses pagination -->
                </div>
            </div>  <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== EVENTS PART ENDS ======-->
   
   <?php
   include('advertiser_footer.php');
   ?>