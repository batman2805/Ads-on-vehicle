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
                                        
							
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Menu
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="menu_name" id="" placeholder="Menu Name" Required></br>
                                                    </div>
                                                    <label class="col-lg-4 col-form-label" for="val-username">Pages Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select class="form-control" name="pages_id" Required></br>
                                                           <?php
                                                                $qry="select * from pages";
                                                                $result=mysqli_query($con,$qry) or die(mysqli_error());
                                                                while($row=mysqli_fetch_array($result))
                                                                {                                                           
                                                           ?>
                                                            <option value="<?php echo $row['pages_id']; ?>"><?php echo $row['pages_name']; ?></option></br>
                                                            <?php
                                                                }
                                                            ?>
                                                            </select>
                                                    </div>
                                                    <label class="col-lg-4 col-form-label" for="val-username">Menu Link
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    
                                                    <div class="col-lg-6">
                                                    <input type="text" class="form-control" name="menu_link" id="" placeholder="Menu Link" Required>
                                                    </div>
                                                    <label class="col-lg-4 col-form-label" for="val-username">Status
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    
                                                    <div class="col-lg-6">
                                                    <input type="radio" name="status" id="active" value="1" checked > 
                            <label for="active"> Active </label><br>
                            <input type="radio" name="status" id="inactive" value="0" >
                            <label for="inactive"> InActive </label>
                                                    </div>
                                                   


</div>
                                                    
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
                                               $qry1="insert into menu values(' ','".$_POST['pages_id']."','".$_POST['menu_name']."','".$_POST['status']."','0','".$_POST['menu_link']."')";
                                               mysqli_query($con,$qry1)  ;
                                               echo '<span style="color:#009933;text-align:center;">Successfully Inserted</span>';
                                               
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
