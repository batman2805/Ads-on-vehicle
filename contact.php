<?php
include('head.php');
include('header.php');
include('connect.php');
?>
 <!--====== CONTACT PART START ======-->
    
 <section id="contact-page" class="pt-90 pb-120 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-from mt-30">
                    <div class="section-title">
                        <h5>Contact Us</h5>
                        <h2>Keep in touch</h2>
                    </div> <!-- section title -->
                    <div class="main-form pt-45">
                        <form   method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="name" type="text" placeholder="Your name" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="email" type="email" placeholder="Email" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="subject" type="text" placeholder="Subject" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form --> 
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input name="phone" type="text" placeholder="Phone" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea name="message" placeholder="Message" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message">
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <input type="submit" name="submit">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div> 
                            </div> <!-- row -->
                       
                     </form>

                     <?php
                      if(isset($_POST['submit']))
                      {
                     $uname=$_POST['name'];
                     $email2=$_POST['email'];
                     $subject2=$_POST['subject'];
                     $phone=$_POST['phone'];
                     $msg1=$_POST['message'];
                     $send_email="vads826@gmail.com";
                                          $name = "Contact Us";
                                          $email ="vads826@gmail.com";
                                          $msg="Name:".$uname."\n"."Email:".$email2."\n"."Phone Number:".$phone."\n"."Subject:".$subject2."\n"."Message:".$msg1;
                                  
                                          /* send password process*/
                                  require("phpmailer/src/phpmailer.php");
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
                                  $mail->Password =  "bhavya1234";
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
                                          alert('Thanks For Contact Us. Our Team Will Shortly Contact You.');
                                             </script>
                                          ";
                                  }
                                }
                                     ?>    
                    </div> <!-- main form -->
                </div> <!--  contact from -->
            </div>
            <div class="col-lg-5">
                <?php
                $id=$_GET['id'];
                $qry="select * from menu inner join pages on menu.pages_id=pages.pages_id where menu_id=$id ";
                $result=mysqli_query($con,$qry) or die(mysqli_error());
                $row=mysqli_fetch_array($result);
                echo $row['pages_description'];
                ?>

                <div class="map mt-30">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3712.955880983488!2d72.95913691494012!3d21.470247685760928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be03bb902f755bb%3A0x5dad0f302d828d9a!2sA.%20Y.%20Dadabhai%20Technical%20Institute!5e0!3m2!1sen!2sin!4v1646732441862!5m2!1sen!2sin" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    
                   
                </div> <!-- map -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== CONTACT PART ENDS ======-->
<?php

include('footer.php');
?>