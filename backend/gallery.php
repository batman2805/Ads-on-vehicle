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
                            <p class="mb-1">Gallery</p>
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
                                <h4 class="card-title">Gallery</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Upload Image
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="file" class="form-control" id="val-username" name="gallery_img[]" multiple="multiple" placeholder="Enter vehicle type name">
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
                                                
                                                $filename=$_FILES['gallery_img']['name'];
                                                $tmp_name=$_FILES['gallery_img']['tmp_name'];

                                                $filetype=$_FILES['gallery_img']['type'];
                                                for($i=0;$i<count($tmp_name);$i++)
                                                {
                                                    //$img = addslashes(file_get_contents($tmp_name[$i]));
                                                    $newname = uniqid() . "_" . $_FILES["gallery_img"]["name"][$i]; 
                                                $date = date("dmY");
                                                $target = '../Gallery/'.$newname;
                                                move_uploaded_file( $_FILES['gallery_img']['tmp_name'][$i], $target);
                                              
                                               $qry="insert into gallery values('','".$newname."')";
                                               mysqli_query($con,$qry) or die(mysqli_error()) ;
                                                }
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

<?php
include('footer.php');

?>