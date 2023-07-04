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
						 $qry="select * from menu where menu_id='$id'";
							$result=mysqli_query($con,$qry) or die(mysqli_error());
							$row=mysqli_fetch_array($result);
						?>
							
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Menu Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="menu_name" id="" Value="<?php echo $row['menu_name'];?> ">
                                                    </div>
                                                    <label class="col-lg-4 col-form-label" for="val-username">Pages Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control" name="pages_id" Required></br>
                                                           <?php
                                                                $qry1="select * from pages";
                                                                $result1=mysqli_query($con,$qry1) or die(mysqli_error());
                                                                while($row1=mysqli_fetch_array($result1))
                                                                {                                                           
                                                           ?>
                                                            <option <?php if($row['pages_id']==$row1['pages_id']) {?> selected="selected"  <?php }?> value="<?php echo $row1['pages_id']; ?>"Required><?php echo $row1['pages_name']; ?></option>
                                                            
                                                            <?php
                                                                }
                                                            ?>
                                                            </select>
                                                    </div>
                                                    <label class="col-lg-4 col-form-label" for="val-username">Menu Link
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="menu_link" id="" value="<?php echo $row['menu_link'];?> "Required>
                                                    </div>
                                                    <label class="col-lg-4 col-form-label" for="val-username">Status
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <?php
                        if($row['menu_active_inactive']==0)
                        {
                        ?>
                        <div class="col-lg-6">
                            <input type="radio" name="status" id="active" value="1" >
                            <label for="active"> Active </label><br>
                            <input type="radio" name="status" id="inactive" value="0" checked >
                            <label for="inactive"> InActive </label>
                        </div>
                        <?php
                        }
                        else {
                             ?>
                             <div class="col-lg-6">
                            <input type="radio" name="status" id="active" value="1" checked>
                            <label for="active"> Active </label><br>
                            <input type="radio" name="status" id="inactive" value="0" >
                            <label for="inactive"> InActive </label>
                        </div>
<?php
                        }
                        ?>
                        <label class="col-lg-4 col-form-label" for="val-username">Menu parent
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="menu_parent_id" id="" value="<?php echo $row['menu_parent_id'];?>" Required>
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
$qry="update menu set pages_id= '".$_POST['pages_id']."', menu_name='".$_POST['menu_name']."', menu_active_inactive ='".$_POST['status']."', menu_parent_id ='".$_POST['menu_parent_id']."',menu_link ='".$_POST['menu_link']."' where menu_id='$id'";
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
