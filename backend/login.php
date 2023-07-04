<!DOCTYPE html>
<html lang="en" class="h-100">
<?php
include('connect.php');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vads</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="logo.png">
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
                                    <h4 class="text-center mb-4">Login your account</h4>
                                    <form  method="post">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email_login" placeholder ="hello@example.com" Required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control"  name="password" placeholder ="Password" Required>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="forgot_password.php">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                    <?php
                                    
                                     if(isset($_POST['submit']))
                                     {
                                        $email= $_POST['email_login'];
                                        $pass=$_POST['password'];
                                        $qry="select * from settings_users where settings_users_email='$email' and settings_users_password='$pass'";
                                        $result=mysqli_query($con,$qry) or die(mysqli_error());
                                        $count=mysqli_num_rows($result);
                                        $row=mysqli_fetch_array($result);
                                        if($count == 1)
                                        {
                                            session_start();
                                            $_SESSION['id']=$row['settings_users_id'];
                                            $_SESSION['name']=$row['settings_users_name'];
                                            header('location:index.php');
                                        }
                                        else{
                                            echo "Invalid Email id or Password";
                                        }
                                     }
                                    ?>
                                   
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