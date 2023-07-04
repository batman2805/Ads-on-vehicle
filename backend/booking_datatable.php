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
                            <span class="ml-1">Booking Datatable</span>
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
                                <h4 class="card-title">Booking Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Owner Name</th>
                                            <th scope="col">Advertiser Name</th>
                                            <th scope="col">Adplace </th>
                                                 <th scope="col">Date</th>
                                                <th scope="col">Booking Status</th>
                                                <th scope="col">Payment Status</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count=1;
                                           $qry="select * from bookings inner join vehicle_owners_vehicle_adplace on bookings.vehicle_owners_vehicle_adplace_id=vehicle_owners_vehicle_adplace.vehicle_owners_vehicle_adplace_id inner join client_advertiser on bookings.client_advertiser_id=client_advertiser.client_advertiser_id inner join vehicle_owner_vehicles on vehicle_owners_vehicle_adplace.vehicle_owners_vehicle_id=vehicle_owner_vehicles.vehicle_owners_vehicle_id inner join vehicle_owners on vehicle_owner_vehicles.vehicle_owners_id=vehicle_owners.vehicle_owners_id inner join settings_vehicle_type on vehicle_owner_vehicles.settings_vehicle_type_id=settings_vehicle_type.settings_vehicle_type_id inner join settings_ad_duration on vehicle_owners_vehicle_adplace.settings_ad_duration_id=settings_ad_duration.settings_ad_duration_id";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $count++; ?></td>
                                                <td><?php echo $row['vehicle_owners_name'];?></td>
                                                <td><?php echo $row['client_advertiser_name'];?></td>

                                                <td><img src="../vehicle_images/<?php echo $row['ad_places'];?>" height="50" width="50"></td>
                                                <td><?php echo $row['from_date'];?></td>
                                                <td> <?php
                            if($row['bookings_status']==0)
                            {
                                ?>
                                 <span><i class=""></i>Pending</span></br> 
                            
                            <?php
                            }
                            else{
                                ?>
                             <span><i class=""></i> Confirmed</span></br>
                             
                             <?php  
                            }
                            ?></td>
                            <td> <?php
                            if($row['payment_status']==0)
                            {
                                ?>
                                 <span><i class=""></i>Pending</span></br> 
                            
                            <?php
                            }
                            else{
                                ?>
                             <span><i class=""></i> Confirmed</span></br>
                             
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

        
    