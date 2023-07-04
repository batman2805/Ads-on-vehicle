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
                            <li class="breadcrumb-item"><a href="settings_users_datatable.php"class="btn btn-dark btn-rounded">Back</a></li>
                            
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
                                    <form class="form-valide" action="#" method="post">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-username">Settings Role
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                       <select class="form-control" name="settings_role_id">
                                                           <?php
                                                                $qry="select * from settings_role";
                                                                $result=mysqli_query($con,$qry) or die(mysqli_error());
                                                                while($row=mysqli_fetch_array($result))
                                                                {                                                           
                                                           ?>
                                                            <option value="<?php echo $row['settings_role_id']; ?>"><?php echo $row['settings_role_name']; ?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <label class="col-lg-4 col-form-label" for="val-username">Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-name" name="settings_users_name" placeholder="Enter name..." Required>
                                                    </div>
                                                    <label class="col-lg-4 col-form-label" for="val-username">E-mail
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-email" name="settings_users_email" placeholder="Enter email..." Required>
                                                    </div>
                                                    <label class="col-lg-4 col-form-label" for="val-username">Username
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-username" name="settings_users_username" placeholder="Enter username..." Required>
                                                    </div>
                                                    <label class="col-lg-4 col-form-label" for="val-password">Password
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-username" name="settings_users_password" placeholder="Enter password..." Required>
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

                                                $date=date('Y-m-d');
                                               $qry="insert into settings_users values('','".$_POST['settings_role_id']."','".$_POST['settings_users_name']."','".$_POST['settings_users_email']."','".$_POST['settings_users_username']."','".$_POST['settings_users_password']."','0','$date')";
                                               mysqli_query($con,$qry) or die(mysqli_error()) ;
                                               
                                               echo "record inserted successfully";
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