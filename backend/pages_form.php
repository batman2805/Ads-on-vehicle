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
                            <p class="mb-1"></p>
                            
                        </div>
                        
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="pages_datatable.php"class="btn btn-dark btn-rounded">Back</a></li>
                            
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
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Description
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-8">
                                                    <textarea class="form-control" id="editor" rows="10" cols="80" name="pages_description" placeholder="Enter Description"></textarea>
                                                    </div>
                                                    <script>
    CKEDITOR.replace('editor');
</script>
                                                    <label class="col-lg-4 col-form-label" for="val-username">Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="text" name="pages_name" placeholder="Page Name" class="form-control" Required>
                                                    </div>
                                                    <label class="col-lg-4 col-form-label" for="val-username">Status
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <input type="radio" name="status" id="active" value="1" checked>
                            <label for="active"> Active </label><br>
                            <input type="radio" name="status" id="inactive" value="0">
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
                                               $qry="insert into pages values(' ','".$_POST['pages_description']."','".$_POST['pages_name']."','".$_POST['status']."','$date')";
                                              mysqli_query($con,$qry)  ;
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




