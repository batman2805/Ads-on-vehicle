<?php 
	ob_start();
    include('connect.php');
	include('head.php');
	include('sidebar.php');
	include('header.php'); 
?>

<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-1"></p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="settings_role_datatable.php" class="btn btn-dark btn-rounded">Back</a></li>
                            
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Setting Role</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
								<?php
							$id=$_GET['id'];
						 $qry="select * from settings_role where settings_role_id='$id'";
							$result=mysqli_query($con,$qry) or die(mysqli_error());
							$row=mysqli_fetch_array($result);
						?>
                                    <form class="form-valide" action="#" method="post">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Role Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-username" name="settings_role_name" placeholder="Enter settings role name" value="<?php echo $row['settings_role_name']; ?>" Required>
                                                    </div>
                                                    
</div>
                                                    


<div class="form-group row">
                                                   
                                                    <div class="col-lg-6 text-right">
                                                        
                                                    <button type="submit" class="btn btn-primary" name="submit" >Update</button>
                                                    </div>
</div>
                                             
                                                
                                               
                                                
                                               
                                            </div>
                                            
                                              
                                                    <p>
                                                    <?php
                                            if(isset($_POST['submit']))
                                              {
$qry="update settings_role set settings_role_name='".$_POST['settings_role_name']."' where settings_role_id='$id'";
                                mysqli_query($con,$qry) or die(mysqli_error());
                                header('location:settings_role_datatable.php');
                                              }
                                               ?></p>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


<!-- footer part -->
<?php include('footer.php'); 
ob_flush();
?>