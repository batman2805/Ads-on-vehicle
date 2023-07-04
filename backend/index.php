<?php
include('head.php');
include('header.php');
include('sidebar.php');
include('connect.php');
?>




        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
      
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <?php
                                    $q1="select * from settings_vehicle_type";
                                    $result1=mysqli_query($con,$q1);
                                   $count1=mysqli_num_rows($result1);
                                    ?>
                                    <div class="stat-text">Vehicle Types </div>
                                    <div class="stat-digit"> <i class=""><?php echo $count1;?></i></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                <?php
                                    $q2="select * from vehicle_owners";
                                    $result2=mysqli_query($con,$q2);
                                   $count2=mysqli_num_rows($result2);
                                    ?>
                                    <div class="stat-text">Vehicle Owner</div>
                                    <div class="stat-digit"> <i class=""></i><?php echo $count2;?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                            <?php
                                    $q3="select * from vehicle_owners_vehicle_adplace";
                                    $result3=mysqli_query($con,$q3);
                                   $count3=mysqli_num_rows($result3);
                                    ?>
                                

                                <div class="stat-content">
                                    <div class="stat-text">Vehicle Adplaces</div>
                                    <div class="stat-digit"> <i class=""></i> <?php echo $count3;?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                            <?php
                                    $q4="select * from vehicle_owner_vehicles";
                                    $result4=mysqli_query($con,$q4);
                                   $count4=mysqli_num_rows($result4);
                                    ?>
                                <div class="stat-content">
                                    <div class="stat-text">Vehicle Details</div>
                                    <div class="stat-digit"> <i class=""></i><?php echo $count4;?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger w-65" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                    <?php
                                    $q5="select * from client_advertiser";
                                    $result5=mysqli_query($con,$q5);
                                   $count5=mysqli_num_rows($result5);
                                    ?>
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Client Advertiser </div>
                                    <div class="stat-digit"> <i class=""></i><?php echo $count5;?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success w-85" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                            <?php
                                    $q6="select * from bookings";
                                    $result6=mysqli_query($con,$q6);
                                   $count6=mysqli_num_rows($result6);
                                    ?>
                                <div class="stat-content">
                                    <div class="stat-text">Bookings</div>
                                    <div class="stat-digit"> <i class=""></i><?php echo $count6;?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-75" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                            <?php
                                    $q7="select * from menu";
                                    $result7=mysqli_query($con,$q7);
                                   $count7=mysqli_num_rows($result7);
                                    ?>
                                <div class="stat-content">
                                    <div class="stat-text">Menu</div>
                                    <div class="stat-digit"> <i class=""></i><?php echo $count7;?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger w-55" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                            <?php
                                    $q8="select * from gallery";
                                    $result8=mysqli_query($con,$q8);
                                   $count8=mysqli_num_rows($result8);
                                    ?>
                                <div class="stat-content">
                                    <div class="stat-text">Gallery</div>
                                    <div class="stat-digit"> <i class=""></i><?php echo $count8;?></div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning w-95" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <!-- /# column -->
                </div>

</div>
        <!--**********************************
            Footer start
        ***********************************-->
       <?php
       include('footer.php');
       ?>

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
   