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
                        <div class="">
                                    <select class="form-control" name="setting_vehicle_type_id">
                                                           <?php
                                                                $qry="select * from settings_vehicle_type";
                                                                $result=mysqli_query($con,$qry) or die(mysqli_error());
                                                                while($row=mysqli_fetch_array($result))
                                                                {                                                           
                                                           ?>
                                                            <option value="<?php echo $row['settings_vehicle_type_id']; ?>"Required><?php echo $row['settings_vehicle_type_name']; ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                        </div>
                                                            </br>
                                                            </br>
                                                            </br>
                        <div class="form-group">
                            <input type="text" class="form-input" name="vehicle_name"  placeholder="Vehicle Name"Required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="vehicle_no" id="re_password" placeholder="Vehicle Number"Required >
                        </div>
                        <div class="form-group">
                        
                            <input type="file" class="form-input" name="vehicle_rcbook" id="name" value="" placeholder="Your Contact number"Required>
                         <span style="color:red">   select RC book only*</span>
                        </div>
                        <div class="form-group">
                            <textarea class="form-input" name="route_details" id="name" placeholder="Route Details" value=""Required></textarea>
                        </div>
                        
                      
                       
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="submit">
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
                                                $id=$_SESSION['owner_id'];
                                              
                                                $qry="insert into vehicle_owner_vehicles values('','".$id."','".$_POST['setting_vehicle_type_id']."','".$_POST['vehicle_name']."','".$_POST['vehicle_no']."','".$img."','".$_POST['route_details']."')";
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
   
  