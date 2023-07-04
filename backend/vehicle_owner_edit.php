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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Validation</a></li>
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
                                                   
                                                    <div class="col-lg-6">
                                                    <?php
                         $id=$_GET['id'];
                         $qry="select * from vehicle_owners where $id=vehicle_owners_id";
                         $result=mysqli_query($con,$qry) or die(mysqli_error());
                         $row=mysqli_fetch_array($result)
                        ?>
                        <h2 class="form-title pb-20">Edit Profile</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" name="vehicle_owners_name" id="name"value="<?php echo $row['vehicle_owners_name']?>" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="vehicle_owners_email" id="email"value="<?php echo $row['vehicle_owners_email']?>" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="vehicle_owners_password" id="email"value="<?php echo $row['vehicle_owners_password']?>" placeholder="Your Password">
                        </div>
                      
                        <div class="form-group">
                            <input type="text" class="form-control" name="vehicle_owners_contact" id="name"value="<?php echo $row['vehicle_owners_contact']?>" placeholder="Your Contact number">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="UPDATE">
                        </div>
</div>
</form>
                                                    
</div>
                                             
                                                
                                               
                                                
                                               
                                            </div>
                                            
                                              
                                                    <p>
                                                    <?php
                                            if(isset($_POST['submit']))
                                              {

                                              $date=date('Y-m-d');
                                              $qry1="update vehicle_owners set vehicle_owners_name='".$_POST['vehicle_owners_name']."',vehicle_owners_email='".$_POST['vehicle_owners_email']."', vehicle_owners_password='".$_POST['vehicle_owners_password']."', vehicle_owners_contact='".$_POST['vehicle_owners_contact']."' where vehicle_owners_id='$id'";
                                mysqli_query($con,$qry1) or die(mysqli_error());
                                echo "Updated Sucessfully";
                                header('location:vehicle_owner_datatable.php');
                                               
                                               
                                              }
                                               ?></p>
                                                
                                            </div>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

<?php
include('footer.php');

?>