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
                        <h2>Change Password</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Change Password</li>
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
                        <h2 class="form-title pb-20" align="center">Change Password</h2>
                       
                        <div class="form-group">
                            <input type="password" class="form-input" name="current_password" id="email" placeholder="Old Password"Required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="new_password" id="email" placeholder="New Password"Required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="password" placeholder="Confirm Password"Required>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                       
                       
                      
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="Submit">
                        </div>
                    </form>
                   
                    <p>
                                                    <?php
                                    
                                    if(isset($_POST['submit']))
                                    {
                                     
                                       $pass=$_POST['current_password'];
                                       $pas2=$_POST['new_password'];
                                     $id=$_SESSION['advertiser_id'];
                                       $qry="select * from client_advertiser where client_advertiser_id='$id' and client_advertiser_password='$pass'";
                                     $result=mysqli_query($con,$qry) or die(mysqli_error());
                                      $count=mysqli_num_rows($result);
                                       if($count == 1)
                                       {
                                         $q="update client_advertiser set client_advertiser_password=$pas2  where client_advertiser_id='$id'";
                                          mysqli_query($con,$q);
                                          echo "successfully changed password";
                                       }
                                       else{
                                           echo "Invalid Password";
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
   
   include("advertiser_footer.php");
   ?>
    
    <!--====== FOOTER PART ENDS ======-->
   
  