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
                            <li class="breadcrumb-item"><a href="vehicle_owner_add_form.php" class="btn btn-dark btn-rounded">Add</a></li>
                            
                        </ol>
                    </div> -->
                </div> 
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vehicle Owner Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr align="center">
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
                                           $qry="select * from vehicle_owners";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                            ?>
                                            <tr>
                                            
                                                <td><?php echo $count++;?></td>
                                                <td><?php echo $row['vehicle_owners_name'];?></td>
                                                <td><?php echo $row['vehicle_owners_email'];?></td>
                                                <td><img src="../aadhaar_card/<?php echo $row['owners_aadhaar'];?>" height="50" width="50" alt="Not uploaded"></td>
                                                <td><?php echo $row['vehicle_owners_password'];?></td>
                                                <td><?php echo $row['vehicle_owners_contact'];?></td>
                                                <td><?php echo $row['vehicle_owners_date'];?></td>
                                                <td><?php
                            if($row['vehicle_owners_status']==0)
                            {
                                ?>
                                
                            <span><i class=""></i><b><a class="btn btn-primary" href="up.php?id=<?php echo $row['vehicle_owners_id'];?>"> Pending</a> </b></span></br>
                            <?php
                            }
                            else{
                                ?>
                             
                             <span><i class=""></i><b><a class="btn btn-primary" href="up1.php?id=<?php echo $row['vehicle_owners_id'];?>"> Confirm</a> </b></span></br> 
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

        
    