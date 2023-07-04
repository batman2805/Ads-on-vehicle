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
                            <span class="ml-1"></span>
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
                                            <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Aadhaar card</th>
                                                 <th scope="col">Password</th>
                                                <th scope="col">Contact Number</th>
                                                <th scope="col">Registration Date</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count=1;
                                           $qry="select * from  client_advertiser";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                            ?>
                                            <tr> 
                                                <td><?php echo $count++;?></td>
                                                <td><?php echo $row['client_advertiser_name'];?></td>
                                                <td><?php echo $row['client_advertiser_email'];?></td>
                                                <td><img src="../aadhaar_card/<?php echo $row['advertiser_aadhaar'];?>" height="50" width="50" alt="Not uploaded"></img></td>
                                                <td><?php echo $row['client_advertiser_password'];?></td>
                                                <td><?php echo $row['client_advertiser_contact'];?></td>
                                                <td><?php echo $row['client_advertiser_date'];?></td>
                                                <td><?php
                            if($row['client_advertiser_status']=='0')
                            {
                                ?>
                                
                            <span><i class=""></i><b><a class="btn btn-primary" href="upd.php?id=<?php echo $row['client_advertiser_id'];?>"> Pending</a> </b></span></br>
                            <?php
                            }
                            else{
                                ?>
                             
                             <span><i class=""></i><b><a class="btn btn-primary" href="upd1.php?id=<?php echo $row['client_advertiser_id'];?>" onclick="return confirm('Are you Sure you want to delete this record!')"> Confirm</a> </b></span></br> 
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

        
    