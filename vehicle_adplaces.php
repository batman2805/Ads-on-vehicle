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
                        <h2>Vehicle Adplaces</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="owner_index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vehicle Adplaces</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== PROVACY PART START ======-->
  

    <section class="signup pt-90 pb-100 gray-bg">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="signup-content">
                    <form method="POST"  class="signup-form" enctype="multipart/form-data">
                        <h2 class="form-title pb-20">Vehicle Adplaces</h2>
                        <div class="">
                                    <select class="form-control" name="vehicle_owners_vehicle_id">
                                                           <?php
                                                           $id=$_SESSION['owner_id'];
                                                                $qry="select * from vehicle_owner_vehicles where vehicle_owners_id=$id";
                                                                $result=mysqli_query($con,$qry) or die(mysqli_error());
                                                                while($row=mysqli_fetch_array($result))
                                                                {                                                           
                                                           ?>
                                                            <option value="<?php echo $row['vehicle_owners_vehicle_id']; ?>"Required><?php echo$row['vehicle_no']." - ".$row['vehicle_name']; ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                        </div>  
                                                            </br>
                                                            </br>
                                                            </br>
                            <div class="form-group">
                            <input type="file" class="form-input" name="ad_places" id="name" value="Ad Places"Required>
                            <span style="color:red">   select AD Places only*</span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="ad_amount" id="re_password" placeholder="Advertisement Amount" Required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="ad_size" id="re_password" placeholder="Advertisement Size" Required>
                            
                        <span style="color:red">  Size should be in Length*Breadth in Inches Only*</span>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-input" name="ad_date" id="name" placeholder="Advertisement date"Required>
                            <span style="color:red"> Advertisement Date *</span>
                        </div>
                        <div class="">
                        <select class="form-control" name="ad_duration"Required>
                                                          
                        <?php
                                                                $qry2="select * from settings_ad_duration";
                                                                $result2=mysqli_query($con,$qry2) or die(mysqli_error());
                                                                while($row2=mysqli_fetch_array($result2))
                                                                {                                                           
                                                           ?>
                                                          
                                                            <option  value="<?php echo $row2['settings_ad_duration_id']; ?>"><?php echo$row2['ad_duration']; ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                           
                                                        </select>
                        </div>
                                                            </br>
                                                            </br>
                                                            </br>
                        
                      
                       
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="submit">
                        </div>
                    </form>
                   
                    <p>
                                                    <?php

                                            if(isset($_POST['submit']))
                                        
                                              {
                                                $target="vehicle_images/";
                                                $target1=$target.basename($_FILES['ad_places']['name']);
                                                move_uploaded_file($_FILES['ad_places']['tmp_name'],$target1);
                                                $img=basename($_FILES['ad_places']['name']);
                                             
                                              
                                                $qry="insert into vehicle_owners_vehicle_adplace values('','".$_POST['vehicle_owners_vehicle_id']."','".$img."','".$_POST['ad_amount']."','".$_POST['ad_size']."','".$_POST['ad_date']."','0','".$_POST['ad_duration']."')";
                                               mysqli_query($con,$qry) or die(mysqli_error()) ;
                                               echo "entered sucessfully";
                                               
                                              }
                                               ?></p>
                </div>
            </div>
        </div>
    </section>


    <!--====== FAQ PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
   <?php
   
   include("owner_footer.php");
   ?>
    
    <!--====== FOOTER PART ENDS ======-->
   
  