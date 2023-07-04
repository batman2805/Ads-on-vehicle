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
                        <h2>Login</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vehicle Owner Login</li>
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
                    <form method="POST" action="#" id="signup-form" class="signup-form">
                        <h2 class="form-title pb-20" align="center">LOGIN</h2>
                       
                        <div class="form-group">
                            <input type="email" class="form-input" name="vehicle_owners_email" id="email" placeholder="Your Email"Required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="vehicle_owners_password" id="password" placeholder="Password"Required>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <!-- <div class="form-group" align="right">
                                                <a href="owner_forgot_password.php"> Forgot Password?</a>
                                            </div>
                        -->
                      
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="Login">
                        </div>
                    </form>
                   
                    <p>
                    <?php
                                    
                                    if(isset($_POST['submit']))
                                    {
                                       $email= $_POST['vehicle_owners_email'];
                                       $pass=$_POST['vehicle_owners_password'];
                                       $qry="select * from vehicle_owners where vehicle_owners_email='$email' and vehicle_owners_password='$pass'";
                                       $result=mysqli_query($con,$qry) or die(mysqli_error());
                                       $count=mysqli_num_rows($result);
                                       $row=mysqli_fetch_array($result);
                                       if($count == 1)
                                       {
                                        if($row['vehicle_owners_status']=='0')
                                        {
                                            echo "Your id is blocked Contact Admin";
                                        }  
                                          else{ 
                                           $_SESSION['owner_id']=$row['vehicle_owners_id'];
                                           $_SESSION['owner_name']=$row['vehicle_owners_name'];
                                           header('location:owner_index.php');
                                       }
                                    }
                                       else{
                                           echo "Invalid Email id or Password";
                                       }
                                    }
                                   ?>
                                   </p>
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
   
  