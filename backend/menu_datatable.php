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
                            <li class="breadcrumb-item"><a href="menu_form.php" class="btn btn-dark btn-rounded">Add</a></li>
                            
                        </ol>
                    </div>
                </div> 
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Menu Datatable</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                            <th scope="col">ID</th>
                                            
                                            <th scope="col">Page Name </th>
                                            <th scope="col">Menu Name</th>
                                                 <th scope="col">Menu Active / Inactive</th>
                                                 
                                                 <th scope="col">Main Menu</th>
                                                 <th scope="col">Menu Link</th>
                                                 <th scope="col">Add</th>
                                                 <th scope="col">Edit</th>
                                                 <th scope="col">Delete</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $count=1;
                                            
                                           $qry="select * from menu inner join pages on menu.pages_id=pages.pages_id";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            $count1=mysqli_num_rows($result);
                                            while($row=mysqli_fetch_array($result))
                                            
                                            {
                                               
                                            ?>
                                            <tr> 
                                                <td><?php echo $count++; ?></td>
                                               
                                                <td><?php echo $row['pages_name'];?></td>
                                                <td><?php echo $row['menu_name'];?></td>
                                                <td><?php
                                                if($row['menu_active_inactive']==0)
                                                {
                                                    echo "Inactive";
                                                } 
                                                else
                                                {
                                                    echo "Active";
                                                }?></td>
                                                <td><?php if($row['menu_parent_id']==0)
                                                {
                                                    echo " - ";
                                                }
                                                else
                                                {
                                                    $qry1="select * from menu where menu_id = " . $row['menu_parent_id'];
                                                    $result1=mysqli_query($con,$qry1) or die(mysqli_error());
                                                    $row1=mysqli_fetch_array($result1);
                                                    echo $row1['menu_name'];

                                                    
                                                }?></td>
                                                <td><?php echo $row['menu_link'];?></td>
                                                <td><a href="add_parent_id.php?id=<?php echo $row['menu_id']; ?>"class="btn btn-dark btn-rounded">Sub Menu</a></td>
                                                <td><a href="menu_edit.php?id=<?php echo $row['menu_id']; ?>"class="btn btn-dark btn-rounded">Edit</a></td>
                                                <td><a href="menu_delete.php?id=<?php echo $row['menu_id']; ?>"class="btn btn-dark btn-rounded" onclick="return confirm('Are you Sure you want to delete this record!')">Delete</a></td>.
                                                
                                               
                                                
                                                
                                               
											    
                                                
                                                
											   
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

        
    