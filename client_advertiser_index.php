<?php
include('head.php');
include('client_advertiser_header.php');
include('connect.php');
?>

    
   
   
   
   
    <!--====== SLIDER PART START ======-->
    
    <section id="slider-part" class="slider-active ">
        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/advertising.jfif)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 style="margin:90px;" data-animation="fadeInLeft" data-delay="1s"></h1>
                            <p data-animation="fadeInUp" data-delay="1.3s"></p>
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
           
        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/advertising2.jpg)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 style="margin:90px;" data-animation="fadeInLeft" data-delay="1s">&nbsp;</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">&nbsp;</p>
                            <ul>
                               
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <div class="single-slider bg_cover pt-150" style="background-image: url(images/slider/advertising3.png)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            
                            <p  data-animation="fadeInUp" data-delay="1.3s"  ></p>
                            <h1 style="padding-left:350px;" data-animation="fadeInLeft" data-delay="1s">Grow your Business by placing Ads on Vehicles</h1>
                            <ul>
                                <li></li>
                                <li></li>
                            </ul>
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
    
    <section id="about-part"  class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        
                        <h2 class="signup-content">Edit Profile </h2>
                    </div> <!-- section title -->
                    <div class="signup-content">
                    <form method="POST" action="#" id="signup-form" class="signup-form">
                        <?php
                        $id=$_SESSION['advertiser_id'];
                         $qry="select * from client_advertiser where $id=client_advertiser_id";
                         $result=mysqli_query($con,$qry) or die(mysqli_error());
                         $row=mysqli_fetch_array($result)
                        ?>
                        <h2 class="form-title pb-20"></h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="client_advertiser_name" id="name"value="<?php echo $row['client_advertiser_name']?>" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="client_advertiser_email" id="email"value="<?php echo $row['client_advertiser_email']?>" placeholder="Your Email">
                        </div>
                       
                        <div class="form-group">
                            <input type="text" class="form-input" name="client_advertiser_contact" id="name"value="<?php echo $row['client_advertiser_contact']?>" placeholder="Your Contact number">
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
                                              $qry1="update client_advertiser set client_advertiser_name='".$_POST['client_advertiser_name']."',client_advertiser_email='".$_POST['client_advertiser_email']."',client_advertiser_contact='".$_POST['client_advertiser_contact']."' where client_advertiser_id='$id'";
                                mysqli_query($con,$qry1) or die(mysqli_error());
                                echo "Updated Sucessfully";
                                               
                                               
                                              }
                                               ?></p>
                </div>

                </div> <!-- about cont -->
                <div style="background-image: url(images/advertise2.jpg);margin-bottom:90px;"  class="col-lg-5">
                    <div  class="">
                                            </div>
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
    
    <section id="video-feature" class="bg_cover pt-60 pb-110" style="background-image: url(images/advertising4.jpg)">
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
                                        <img src="images\all-icon\ctg-3.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Mobile Advertisement</h4>
                                        <p>Your product is advertised wherever the vehicle travels.</p>
                                    </div>
                                </div> <!-- single feature -->
                            </li>
                            <li>
                                <div class="single-feature">
                                    <div class="icon">
                                        <img src="images\all-icon\ctg-2.png" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Flexible Bookings</h4>
                                        <p>You may change the Ad duration for a particular vehicle after booking.</p>
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
                                        <p>We provide you direct communication with vehicle owners. No "Third Parties" involved.</p>
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
    
    <section id="publication-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title pb-60">
                        
                        <h2>My Bookings</h2>
                    </div> <!-- section title -->
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5">
                    
                    <div class="products-btn text-right pb-60">
                        <a href="my_bookings.php" class="main-btn">All Bookings</a>
                    </div> <!-- products btn -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
            <?php
           
           $id=$_SESSION['advertiser_id'];
                                            $qry2="select * from bookings inner join vehicle_owners_vehicle_adplace on bookings.vehicle_owners_vehicle_adplace_id=vehicle_owners_vehicle_adplace.vehicle_owners_vehicle_adplace_id inner join vehicle_owner_vehicles on vehicle_owners_vehicle_adplace.vehicle_owners_vehicle_id=vehicle_owner_vehicles.vehicle_owners_vehicle_id inner join vehicle_owners on vehicle_owner_vehicles.vehicle_owners_id=vehicle_owners.vehicle_owners_id inner join settings_vehicle_type on vehicle_owner_vehicles.settings_vehicle_type_id=settings_vehicle_type.settings_vehicle_type_id inner join settings_ad_duration on vehicle_owners_vehicle_adplace.settings_ad_duration_id=settings_ad_duration.settings_ad_duration_id where client_advertiser_id=$id";
                                             $result2=mysqli_query($con,$qry2) or die(mysqli_error());
                                             while($row=mysqli_fetch_array($result2))
                                             {
                                             ?>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-publication mt-30 text-center">
                        <div class="image">
                            <img src="vehicle_images/<?php echo $row['ad_places'];?>" alt="Publication">
                            <div class="add-cart">
                                <!-- <ul>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="content pt-10">
                            <h5 class="book-title"><a href="#"><?php echo $row['vehicle_owners_name']?> </a></h5>
                            <p class="writer-name"><span></span><?php echo $row['vehicle_no']."-".$row['vehicle_name']?></p>
                            <div class="price-btn d-flex align-items-center justify-content-between">
                                <div class="price pt-20">
                                    
                                    
                                </div>
                                <div class="button pt-10">
                                    <a href="my_bookings.php" class="main-btn"><i class="fa fa-cart-plus"></i>View Bookings</a>
                                </div>
                            </div>
                        </div>
                        <?php
                                             }
                                             ?>
                    </div> <!-- single publication -->
                </div>
               
                
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    
   
   <?php
   include('footer.php');
   ?>