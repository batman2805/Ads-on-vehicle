<?php
ob_start();
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
                            <p class="mb-1"></p>
                            
                        </div>
                        
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="menu_datatable.php"class="btn btn-dark btn-rounded">Back</a></li>
                            
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Pages</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                        <div class="row">
                                        <?php
							$id=$_GET['id'];
						
						
						?>
							
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                  
                                                    <label class="col-lg-4 col-form-label" for="val-username">Menu Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control" name="menu_id" Required></br>
                                                           <?php
                                                                 $qry="select * from menu";
                                                                 $result=mysqli_query($con,$qry) or die(mysqli_error());
                                                                while($row=mysqli_fetch_array($result))
                                                                {                                                           
                                                           ?>
                                                            <option value="<?php echo $row['menu_id']; ?>"><?php echo $row['menu_name']; ?></option></br>
                                                            <?php
                                                                }
                                                            ?>
                                                            </select>
                                                    </div>

                                                    
                    
                        
                                                 
                                                    
                                                
                                                   


</div>
                                                    
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
$qry="update menu set menu_parent_id ='".$_POST['menu_id']."' where menu_id='$id'";
                                mysqli_query($con,$qry) or die(mysqli_error());
                                header('location:menu_datatable.php');
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
