<?php
include("head.php");
include("header.php");
include("connect.php")
?>
   
    
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/pagebanner1.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Register</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Advertiser Register</li>
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
                    <form method="POST"  id="signup-form" class="signup-form" enctype="multipart/form-data">
                        <h2 class="form-title pb-20">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="client_advertiser_name" id="name" placeholder="Your Name"Required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="client_advertiser_email" id="email" placeholder="Your Email"Required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="client_advertiser_password" id="password" placeholder="Password"Required>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"Required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="client_advertiser_contact" id="name" placeholder="Your Contact number"Required>
                        </div>
                        <div class="form-group">
                        
                            <input type="file" class="form-input" name="advertiser_aadhaar" id="name" value="" Required>
                         <span style="color:red">  select Aadhaar card only*</span>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="Sign up" >
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="client_advertiser_login.php" class="loginhere-link">Login here</a>
                    </p>
                    <p>
                                                    <?php
                                            if(isset($_POST['submit']))
                                              {
                                                $target="aadhaar_card/";
                                                $target1=$target.basename($_FILES['advertiser_aadhaar']['name']);
                                                move_uploaded_file($_FILES['advertiser_aadhaar']['tmp_name'],$target1);
                                                $img=basename($_FILES['advertiser_aadhaar']['name']);

                                                $email= $_POST['client_advertiser_email'];
                                                
                                                $qry="select * from client_advertiser where client_advertiser_email='$email'";
                                                $result=mysqli_query($con,$qry) or die(mysqli_error());
                                                $count=mysqli_num_rows($result);
                                                $row=mysqli_fetch_array($result);
                                                if($count > 0)
                                                {
                                                    echo "Your Email Id Already Exist";
                                                }
                                                    else{
                                              $date=date('Y-m-d');
                                               $qry="insert into client_advertiser values('"."','".$_POST['client_advertiser_name']."','".$_POST['client_advertiser_email']."','".$_POST['client_advertiser_password']."','".$_POST['client_advertiser_contact']."','$date','0','".$img."')";
                                               mysqli_query($con,$qry) or die(mysqli_error()) ;
                                            echo"   Sucessfully Registered";
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
   
  