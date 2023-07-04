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
                     <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="pages_form.php" class="btn btn-dark btn-rounded">Add</a></li>
                            
                        </ol>
                    </div>
                </div> 
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pages Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                            <th scope="col">ID</th>
                                            
                                            <th scope="col">Page Name </th>
                                                 <th scope="col">Page Active / Inactive</th>
                                                 /<th scope="col">Date</th>
                                                 <th scope="col">Edit</th>
                                                 <th scope="col">Delete</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count=1;
                                           $qry="select * from pages";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                            ?>
                                            <tr> 
                                                <td><?php echo $count++; ?></td>
                                               
                                                <td><?php echo $row['pages_name'];?></td>
                                                <td><?php
                                                if($row['pages_active_inactive']==0)
                                                {
                                                    echo "Inactive";
                                                } 
                                                else
                                                {
                                                    echo "Active";
                                                }?></td>
                                                <td><?php echo $row['pages_created_date'];?></td>
                                                <td><a href="page_edit.php?id=<?php echo $row['pages_id']; ?>"class="btn btn-dark btn-rounded">Edit</a></td>
                                                <td><a href="page_delete.php?id=<?php echo $row['pages_id']; ?>"class="btn btn-dark btn-rounded" onclick="return confirm('Are you Sure you want to delete this record!')">Delete</a></td>.
                                                
                                               
                                                
                                                
                                               
											    
											   
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

        
    