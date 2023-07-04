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

    <!--====== PROVACY PART START ======-->
  

    <section class="signup pt-90 pb-100 gray-bg">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="signup-content">
                    <form method="POST"  class="signup-form" enctype="multipart/form-data">
                        <h2 class="form-title pb-20">Edit Vehicle Adplaces</h2>
                        <?php
                       $id=$_GET['id'];
                         $qry="select * from vehicle_owners_vehicle_adplace where vehicle_owners_vehicle_adplace_id=$id ";
                         $result=mysqli_query($con,$qry) or die(mysqli_error());
                         $row=mysqli_fetch_array($result)
                        ?>
                        <div class="">
                                    <select class="form-control" name="vehicle_owners_vehicle_id"Required>
                                                           <?php
                                                                $qry1="select * from vehicle_owner_vehicles";
                                                                $result1=mysqli_query($con,$qry1) or die(mysqli_error());
                                                                while($row1=mysqli_fetch_array($result1))
                                                                {                                                           
                                                           ?>
                                                          
                                                            <option <?php if($row['vehicle_owners_vehicle_id'] == $row1['vehicle_owners_vehicle_id']) { ?> selected="selected" <?php } ?> value="<?php echo $row1['vehicle_owners_vehicle_id']; ?>"Required><?php echo$row1['vehicle_no']." - ".$row1['vehicle_name']; ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                        </div>
                                                            </br>
                                                            </br>
                                                            </br>
                            <div class="form-group">
                            <input type="file" class="form-input" name="ad_places" id="name" value="Ad Places">
                            <img src="vehicle_images/<?php echo $row['ad_places'];?>" hieght="100" width="100" />
                            <span style="color:red">   select AD Places only*</span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="ad_amount" id="re_password" value="<?php echo $row['ad_amount'];?>" placeholder="Advertisement Amount"Required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="ad_size" id="re_password"value="<?php echo $row['ad_size'];?>" placeholder="Advertisement Size" Required>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-input" name="ad_date"value="<?php echo $row['ad_date'];?>" id="name" placeholder=""Required>
                        </div>
                        <div class="">
                        <select class="form-control" name="vehicle_owners_vehicle_id"Required>
                                                           <?php
                                                                $qry2="select * from settings_ad_duration";
                                                                $result2=mysqli_query($con,$qry2) or die(mysqli_error());
                                                                while($row2=mysqli_fetch_array($result2))
                                                                {                                                           
                                                           ?>
                                                          
                                                            <option <?php if($row['settings_ad_duration_id'] == $row2['settings_ad_duration_id']) { ?> selected="selected" <?php } ?> value="<?php echo $row2['settings_ad_duration_id']; ?>"><?php echo$row2['ad_duration']; ?></option>
                                                            <?php
                                                                }
                                                            ?>
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
                                                if($img!='')
                                                {
                                                    
                                                    $qry3="update vehicle_owners_vehicle_adplace set ad_places='".$img."', ad_amount='".$_POST['ad_amount']."', ad_size='".$_POST['ad_size']."', settings_ad_duration_id='".$_POST['vehicle_owners_vehicle_id']."' where vehicle_owners_vehicle_adplace_id='$id'";
                                                     mysqli_query($con,$qry3) or die(mysqli_error());
                                                
                                               
                                               
                                                }
                                                else
                                                {
                                                    $qry3="update vehicle_owners_vehicle_adplace set ad_amount='".$_POST['ad_amount']."', ad_size='".$_POST['ad_size']."', settings_ad_duration_id='".$_POST['vehicle_owners_vehicle_id']."' where vehicle_owners_vehicle_adplace_id='$id'";
                                                    mysqli_query($con,$qry3) or die(mysqli_error());
                                                }
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
   
  