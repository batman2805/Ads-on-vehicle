<?php
include('connect.php');
include('head.php');
include('header.php');
include('sidebar.php');
?>
         <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-1">Validation</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"class="btn btn-dark btn-rounded">Back</a></li>
                            
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form Validation</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" method="post">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Current Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-username" name="current_password" placeholder="Enter current password..." Required>
                                                    </div>
</div>
<div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">New Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-username" name="new_password" placeholder="Enter new password..." Required>
                                                    </div>
</div>
<div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Confirm Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-username" name="confirm_password" placeholder="Confirm password..." Required>
                                                    </div>
</div>
                                                    


<div class="form-group row">
                                                   
                                                    <div class="col-lg-6 text-right">
                                                        
                                                    <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                                                    </div>
</div>
                                             
                                                
                                               
                                                
                                               
                                            </div>
                                            
                                              
                                                    <p>
                                                    <?php
                                    
                                    if(isset($_POST['submit']))
                                    {
                                     
                                       $pass=$_POST['current_password'];
                                       $pas2=$_POST['new_password'];
                                       $id=$_SESSION['id'];
                                       $qry="select * from settings_users where settings_users_id='$id' and settings_users_password='$pass'";
                                       $result=mysqli_query($con,$qry) or die(mysqli_error());
                                       $count=mysqli_num_rows($result);
                                       $row=mysqli_fetch_array($result);
                                       if($count == 1)
                                       {
                                          $q="update settings_users set settings_users_password=$pas2 ";
                                          mysqli_query($con,$q);
                                          echo "successfully changed password";
                                       }
                                       else{
                                           echo "Invalid Email id or Password";
                                       }
                                    }
                                   ?></p>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

<?php
include('footer.php');

?>