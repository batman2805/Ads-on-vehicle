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
                            <span class="ml-1">Advertiser Datatable</span>
                        </div>
                    </div>
                    <!-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="settings_users_form.php" class="btn btn-dark btn-rounded">Add</a></li>
                            
                        </ol>
                    </div>
                </div> -->
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Advertiser Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr class="text-center">
                                            <th scope="col">ID</th>
                                            <th scope="col">Vehicle NAME</th>
                                            <th scope="col">Vehicle No.</th>
                                            <th scope="col"> PLACES</th>
                                            <th scope="col">AMOUNT</th>
                                                 <th scope="col"> SIZE</th>
                                                <th scope="col"> DATE</th>
                                                <th scope="col"> DURATION </th>
                                                <th scope="col"> STATUS</th>
                                               
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $qry="select * from  vehicle_owners_vehicle_adplace inner join vehicle_owner_vehicles on vehicle_owners_vehicle_adplace.vehicle_owners_vehicle_id=vehicle_owner_vehicles.vehicle_owners_vehicle_id inner join settings_ad_duration on vehicle_owners_vehicle_adplace.settings_ad_duration_id=settings_ad_duration.settings_ad_duration_id";
                                           $count=1;
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                            ?>
                                            <tr align="center"> 
                                                <td><?php echo $count++?></td>
                                                <td><?php echo $row['vehicle_name'];?></td>
                                                <td><?php echo $row['vehicle_no'];?></td>
                                                <td><img src="../vehicle_images/<?php echo $row['ad_places'];?>" height="50" width="50"></td>
                                                
                                                <td><?php echo $row['ad_amount'];?></td>
                                                <td><?php echo $row['ad_size'];?></td>
                                                <td><?php echo $row['ad_date'];?></td>
                                                
                                                <td><?php echo $row['ad_duration'];?></td>
                                                <td><?php
                            if($row['ad_status']==0)
                            {
                                ?>
                                
                            <span><i class=""></i><b><a class="btn btn-primary" href="u.php?id=<?php echo $row['vehicle_owners_vehicle_adplace_id'];?>"> Pending</a> </b></span></br>
                            <?php
                            }
                            else{
                                ?>
                             
                             <span><i class=""></i><b><a class="btn btn-primary" href="u1.php?id=<?php echo $row['vehicle_owners_vehicle_adplace_id'];?>"> Confirm</a> </b></span></br> 
                             <?php  
                            }
                            ?></td>
                                                
                                                
                                               
											    
											   
                                            </tr>
                                          <?php
                                            }
                                            ?>
                                            
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php
       include('footer.php');
       ?>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    