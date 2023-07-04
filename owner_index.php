<?php
include('head.php');
include('owner_header.php');
include('connect.php');

?>

    
   
   
   
   
    <!--====== SLIDER PART START ======-->
    
    <section id="slider-part" class="slider-active ">
        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/car2.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="fadeInLeft" data-delay="3s">Choose the right ad place for your vehicle</h1>
                            
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="3.5s" class="main-btn" href="vehicle_adplaces.php">Add Ad Places</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
           
        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/car3.jfif)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="fadeInLeft" data-delay="1s" style="padding-left:50px;">Required Vehicle Details</h1>
                            <ul data-animation="fadeInLeft" data-delay="1s" class="slider-cont" style="color:white;padding-left:50px;">
                                <li>Vehicle Type</li><br/>
                                <li>Vehicle Name</li><br/>
                                <li>Vehicle Number</li><br/>
                                <li>Vehicle RC Book</li><br/>
                                <li>Route Details</li><br/>
                            </ul>
                            <p data-animation="fadeInUp" data-delay="1.3s"></p>
                           
                           
                        
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== CATEGORY PART START ======-->
    
    
    <!--====== CATEGORY PART ENDS ======-->
   
    <!--====== ABOUT PART START ======-->
    
    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        
                       
                    </div> <!-- section title -->
                
                <div class="signup-content">
                    <form method="POST" action="#" id="signup-form" class="signup-form">
                        <?php
                        $id=$_SESSION['owner_id'];
                         $qry="select * from vehicle_owners where vehicle_owners_id=$id";
                         $result=mysqli_query($con,$qry) or die(mysqli_error());
                         $row=mysqli_fetch_array($result)
                        ?>
                        <h2 class="form-title pb-20">Edit Profile</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="vehicle_owners_name" id="name"value="<?php echo $row['vehicle_owners_name']?>" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="vehicle_owners_email" id="email"value="<?php echo $row['vehicle_owners_email']?>" placeholder="Your Email">
                        </div>
                      
                        <div class="form-group">
                            <input type="text" class="form-input" name="vehicle_owners_contact" id="name"value="<?php echo $row['vehicle_owners_contact']?>" placeholder="Your Contact number">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="UPDATE">
                        </div>
                    </form>
                   
                    <p>
                                                    <?php
                                            if(isset($_POST['submit']))
                                              {

                                              $date=date('Y-m-d');
                                              $qry1="update vehicle_owners set vehicle_owners_name='".$_POST['vehicle_owners_name']."',vehicle_owners_email='".$_POST['vehicle_owners_email']."',vehicle_owners_contact='".$_POST['vehicle_owners_contact']."' where vehicle_owners_id='$id'";
                                mysqli_query($con,$qry1) or die(mysqli_error());
                                echo "Updated Sucessfully";
                                               
                                               
                                              }
                                               ?>
                        </p>
                        
                </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Booking Request</h3>
                        </div> 
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
                           <img src="vehicle_images/<?php echo $row['ad_places'];?>"height="100"width="150" >
                       </div>
                       <div class="event-cont">
                           <form>
                            <a href="events-single.html"><h4><?php echo $row['vehicle_owners_name']?></h4></a>
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
                      </div> <!-- about event --> 
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
           
        </div>
    </section>
    
    <!--====== ABOUT PART ENDS ======-->
   
    <!--====== APPLY PART START ======-->
    
   
    
    <!--====== APPLY PART ENDS ======-->
   
    <!--====== COURSE PART START ======-->
    
  
    
    <!--====== COURSE PART ENDS ======-->
   
    <!--====== VIDEO FEATURE PART START ======-->
    
    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(images/car4.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                       
                    </div> <!-- row -->
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>Our Facilities</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="single-feature">
                                    <div class="icon">
                                        <img src="images\all-icon\ctg-2.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Extra Income Generation</h4>
                                        <p>By placing Ads on your Vehicle you can generate extra income.</p>
                                    </div>
                                </div> <!-- single feature -->
                            </li>
                            <li>
                                <div class="single-feature">
                                    <div class="icon">
                                        <img src="images\all-icon\ctg-1.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Direct Communication</h4>
                                        <p>We provide direct communication with Advertisers.</p>
                                    </div>
                                </div> <!-- single feature -->
                            </li>
                            <li>
                                <div class="single-feature">
                                    <div class="icon">
                                        <img src="images\all-icon\ctg-3.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>No Hidden Charges</h4>
                                        <p>There is no hidden charge.</p>
                                    </div>
                                </div> <!-- single feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
    </section>
    
    <!--====== VIDEO FEATURE PART ENDS ======-->
   
    <!--====== TEACHERS PART START ======-->
    
    
    <!--====== TEACHERS PART ENDS ======-->
   
    <!--====== PUBLICATION PART START ======-->
    
    
    
    <!--====== PUBLICATION PART ENDS ======-->
   
    <!--====== TEASTIMONIAL PART START ======-->
    
    
    
    <!--====== TEASTIMONIAL PART ENDS ======-->
   
    <!--====== NEWS PART START ======-->
    
    
    
    <!--====== NEWS PART ENDS ======-->
   
    <!--====== PATNAR LOGO PART START ======-->
    
    
    
    <!--====== PATNAR LOGO PART ENDS ======-->
   
   <?php
   include('owner_footer.php');
   ?>