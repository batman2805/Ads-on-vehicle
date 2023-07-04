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
                        <h2>Vehicle Details</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="owner_index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vehicle Details</li>
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
                        <h2 class="form-title pb-20">Vehicle Details</h2>
                        <?php
                       $id=$_GET['id'];
                         $qry="select * from vehicle_owner_vehicles where vehicle_owners_vehicle_id =$id ";
                         $result=mysqli_query($con,$qry) or die(mysqli_error());
                         $row=mysqli_fetch_array($result)
                        ?>
                        <div class="">
                        <select class="form-control" name="settings_vehicle_type_id"Required>
                        <?php
                                                                $qry1="select * from settings_vehicle_type";
                                                                $result1=mysqli_query($con,$qry1) or die(mysqli_error());
                                                                while($row1=mysqli_fetch_array($result1))
                                                                {                                                           
                                                           ?>
                                                            <option <?php if($row['settings_vehicle_type_id']==$row1['settings_vehicle_type_id']) {?> selected="selected"  <?php }?> value="<?php echo $row1['settings_vehicle_type_id']; ?>"Required><?php echo $row1['settings_vehicle_type_name']; ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                        </div>
                                                            </br>
                                                            </br>
                                                            </br>
                        <div class="form-group">
                            <input type="text" class="form-input" name="vehicle_name" value="<?php echo $row['vehicle_name'];?>"  placeholder="Vehicle Name"Required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="vehicle_no" id="re_password"  value="<?php echo $row['vehicle_no'];?>"placeholder="Vehicle Number" Required>
                            
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-input" name="vehicle_rcbook" id="name" placeholder="Your Contact number"Required>
                            <img src="vehicle_images/<?php echo $row['vehicle_rcbook'];?>" hieght="100" width="100" />
                            <span style="color:red">   select RC book only*</span>
                        </div>
                        <div class="form-group">
                            <textarea class="form-input" name="route_details" id="name" placeholder="Route Details"Required ><?php echo $row['route_details'];?></textarea>
                        </div>
                        
                      
                       
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="Update">
                        </div>
                    </form>
                   
                    <p>
                                                    <?php

                                            if(isset($_POST['submit']))
                                        
                                              {
                                                $target="vehicle_images/";
                                                $target1=$target.basename($_FILES['vehicle_rcbook']['name']);
                                                move_uploaded_file($_FILES['vehicle_rcbook']['tmp_name'],$target1);
                                                $img=basename($_FILES['vehicle_rcbook']['name']);
                                                
                                              if($img!='')
                                              {
                                                $qry="update vehicle_owner_vehicles set settings_vehicle_type_id='".$_POST['settings_vehicle_type_id']."',vehicle_name='".$_POST['vehicle_name']."',vehicle_no='".$_POST['vehicle_no']."',vehicle_rcbook='".$img."',route_details='".$_POST['route_details']."' where vehicle_owners_vehicle_id='$id'";
                                mysqli_query($con,$qry) or die(mysqli_error());
                               
                                              }
                                              else{
                                                $qry="update vehicle_owner_vehicles set settings_vehicle_type_id='".$_POST['settings_vehicle_type_id']."',vehicle_name='".$_POST['vehicle_name']."',vehicle_no='".$_POST['vehicle_no']."',route_details='".$_POST['route_details']."' where vehicle_owners_vehicle_id='$id'";
                                mysqli_query($con,$qry) or die(mysqli_error());   
                                              }
                                              echo "Updated Sucessfully";
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
   
  