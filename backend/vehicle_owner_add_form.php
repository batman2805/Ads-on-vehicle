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
                            <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                   
                                                    <div class="col-lg-6">
                                                <div class="form-group">
                            <input type="text" class="form-control" name="vehicle_owners_name" id="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="vehicle_owners_email" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="vehicle_owners_password" id="password" placeholder="Password">
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="re_password" id="re_password" placeholder="Repeat your password">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="vehicle_owners_contact" id="name" placeholder="Your Contact number">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Sign up">
                        </div>
                                                    </div>
</div>
                                                    
</div>
                                             
                                                
                                               
                                                
                                               
                                            </div>
                                            
                                              
                                                    <p>
                                                    <?php
                                            if(isset($_POST['submit']))
                                              {

                                              $date=date('Y-m-d');
                                               $qry="insert into vehicle_owners values('"."','".$_POST['vehicle_owners_name']."','".$_POST['vehicle_owners_email']."','".$_POST['vehicle_owners_password']."','".$_POST['vehicle_owners_contact']."','$date','0')";
                                               mysqli_query($con,$qry) or die(mysqli_error()) ;
                                               
                                               
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