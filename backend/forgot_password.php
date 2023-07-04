<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Forget Password </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images\favicon.png">
    <link href="css\style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    <form method="post">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="settings_users_email" value="hello@example.com" Required>
                                        </div>
                                       
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            
                                            <div class="form-group">
                                                <a href="login.php">Back to Login Page</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn btn-primary btn-block" name="submit">
                                        </div>
                                    </form>
                                    <?php
                                    
                                    if(isset($_POST['submit']))
                                    {
                                       $email= $_POST['settings_users_email'];
                                       
                                       $qry="select * from settings_users where settings_users_email='$email'";
                                       $result=mysqli_query($con,$qry) or die(mysqli_error());
                                       $count=mysqli_num_rows($result);
                                       $row=mysqli_fetch_array($result);
                                       if($count == 1)
                                       {
                                           
                                           
                                          $send_email=$row['settings_users_email'];
                                          $name = "Forgot Password";
                                          $email ="vads826@gmail.com";
                                          $msg="Your Password is :". $row['settings_users_password'];
                                  
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
                                       else{
                                           echo "Invalid Email id ";
                                       }
                                    }
                                   ?>
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor\global\global.min.js"></script>
    <script src="js\quixnav-init.js"></script>
    <script src="js\custom.min.js"></script>

</body>

</html>