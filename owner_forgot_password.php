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
                        <h2>Forgot Password</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
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
                        <h2 class="form-title pb-20" align="center">Forgot Password</h2>
                       
                        <div class="form-group">
                            <input type="email" class="form-input" name="vehicle_owners_email" id="email" placeholder="Enter Your Email"Required>
                        </div>
                       
                       
                       
                      
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="main-btn register-submit" value="Submit">
                        </div>
                    </form>
                   
                    <p>
                    <?php
                                    
                                    if(isset($_POST['submit']))
                                    {
                                       $email= $_POST['vehicle_owners_email'];
                                       
                                       $qry="select * from vehicle_owners where vehicle_owners_email='$email'";
                                       $result=mysqli_query($con,$qry) or die(mysqli_error());
                                       $count=mysqli_num_rows($result);
                                       $row=mysqli_fetch_array($result);
                                       if($count == 1)
                                       {
                                           
                                          $send_email=$row['vehicle_owners_email'];
                                          $name = "Forgot Password";
                                          $email ="vads826@gmail.com";
                                          $msg="Thanks for contacting Us \n Your Password is :". $row['vehicle_owners_password'];
                                  
                                          /* send password process*/
                                  require("phpmailer/class.phpmailer.php");
                                  $mail = new PHPMailer();
                                  $mail->IsSMTP();
                                  $mail->Host = "smtp.gmail.com";
                                  $mail->From = $email;
                                  $mail->FromName  = $name;
                                  $mail->AddAddress($send_email);
                                  $mail->AddAddress($send_email);
                       
                                   $mail->SMTPSecure = 'ssl';
                                  $mail->SMTPAuth = "true";
                                  $mail->Username = "vads826@gmail.com";
                                  $mail->Password = "bhavya1234";
                                  $mail->Port  =  "465";
                                  $mail->Subject = $name;
                                  $mail->Body = $msg;
                                  $mail->WordWrap = 50;
                       
                                  if(!$mail->Send())
                                  {
                                      echo 'Message was not sent.';
                                      echo 'Mailer error: ' . $mail->ErrorInfo;
                                  }
                                  else
                                  {
                                      echo "
                                          <script type=\"text/javascript\">
                                          alert('Thanks For Contact Us. Our Team Will Shortly Contact You Shortly.');
                                             </script>
                                          ";
                                  }
                                          
                                       }
                                       else{
                                           echo "Invalid Email id ";
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
   
  