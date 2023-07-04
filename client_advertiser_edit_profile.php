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
                        <h2>Edit Profile</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== PROVACY PART START ======-->

    <section class="signup pt-105 pb-120 gray-bg">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="signup-content">
                    <form method="POST" action="#" id="signup-form" class="signup-form" enctype="multipart/form-data">
                        <?php
                        $id=$_SESSION['advertiser_id'];
                         $qry="select * from client_advertiser where $id=client_advertiser_id";
                         $result=mysqli_query($con,$qry) or die(mysqli_error());
                         $row=mysqli_fetch_array($result)
                        ?>
                        <h2 class="form-title pb-20">Edit Profile</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="client_advertiser_name" id="name"value="<?php echo $row['client_advertiser_name']?>" placeholder="Your Name"Required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="client_advertiser_email" id="email"value="<?php echo $row['client_advertiser_email']?>" placeholder="Your Email"Required>
                        </div>
                    
                        <div class="form-group">
                            <input type="text" class="form-input" name="client_advertiser_contact" id="name"value="<?php echo $row['client_advertiser_contact']?>" placeholder="Your Contact number"Required>
                        </div>
                        <div class="form-group">
                        
                        <input type="file" class="form-input" name="advertiser_aadhaar" id="name" value="" Required>
                        <img src="aadhaar_card/<?php echo $row['advertiser_aadhaar'];?>" height="50" width="50" alt="Not uploaded">
                         <span style="color:red">  select Aadhaar card only*</span>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="UPDATE">
                        </div>
                    </form>
                   
                    <p>
                                                    <?php
                                            if(isset($_POST['submit']))
                                              { $target="aadhaar_card/";
                                                $target1=$target.basename($_FILES['advertiser_aadhaar']['name']);
                                                move_uploaded_file($_FILES['advertiser_aadhaar']['tmp_name'],$target1);
                                                $img=basename($_FILES['advertiser_aadhaar']['name']);

                                              $date=date('Y-m-d');
                                              if($img!='')
                                              {
                                              $qry1="update client_advertiser set client_advertiser_name='".$_POST['client_advertiser_name']."',client_advertiser_email='".$_POST['client_advertiser_email']."',client_advertiser_contact='".$_POST['client_advertiser_contact']."', advertiser_aadhaar='".$img."' where client_advertiser_id='$id'";
                                mysqli_query($con,$qry1) or die(mysqli_error());
                                echo "Updated Sucessfully";
                                              }
                                              else
                                              {
                                                $qry1="update client_advertiser set client_advertiser_name='".$_POST['client_advertiser_name']."',client_advertiser_email='".$_POST['client_advertiser_email']."',client_advertiser_contact='".$_POST['client_advertiser_contact']."' where client_advertiser_id='$id'";
                                                mysqli_query($con,$qry1) or die(mysqli_error());
                                                echo "Updated Sucessfully";
                                              }
                                               
                                              }
                                               ?></p>
                </div>
            </div>
        </div>
    </section>


    <!--====== FAQ PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
   <?php
   
   include("footer.php");
   ?>
    
    <!--====== FOOTER PART ENDS ======-->
   
  