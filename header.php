<?php
include("connect.php")
?>
<body>
   
   <!--====== PRELOADER PART START ======-->

   <div class="preloader">
       <div class="loader rubix-cube">
           <div class="layer layer-1"></div>
           <div class="layer layer-2"></div>
           <div class="layer layer-3 color-1"></div>
           <div class="layer layer-4"></div>
           <div class="layer layer-5"></div>
           <div class="layer layer-6"></div>
           <div class="layer layer-7"></div>
           <div class="layer layer-8"></div>
       </div>
   </div>

   <!--====== PRELOADER PART START ======-->
   
   <!--====== HEADER PART START ======-->
   
   <header id="header-part">
       <div class="header-top d-none d-lg-block">
           <div class="container">
               <div class="row">
                   <div class="col-md-6">
                       <div class="header-contact">
                           <ul>
                               <li><i class="fa fa-envelope"></i><span>vads826@gmail.com</span></li>
                               <li><i class="fa fa-phone"></i><span>8511414454</span></li>
                           </ul>
                       </div> <!-- header contact -->
                   </div>
                   <div class="col-md-6">
                       <div class="header-right d-flex justify-content-end">
                          
                 
                           
                       </div> <!-- header right -->
                   </div>
               </div> <!-- row -->
           </div> <!-- container -->
       </div> <!-- header top -->
       
       <div class="navigation">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <nav class="navbar navbar-expand-lg">
                           <a class="navbar-brand" href="index.php">
                               <img src="logo.png" length="100" width="100" alt="Logo">
                           </a>
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                           

                           <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                               <ul class="navbar-nav ml-auto">
                               <?php
                           $qry="select * from menu where menu_active_inactive=1";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            { if($row['menu_parent_id']==0)
                                                {
                                            ?>
                                   <li class="nav-item">
                                       <a href="<?php echo $row['menu_link']?>?id=<?php echo $row['menu_id'];?>"><b><?php echo $row['menu_name']?></b></a>
                                       <?php
                                            }
                                      
                                       ?>
                                       <ul class="sub-menu">
                                       
                                       <?php
                                       $result1=mysqli_query($con,"select * from menu where menu_parent_id = '". $row['menu_id'] ."'") or die(mysqli_error());
                                        while($row1=mysqli_fetch_array($result1))
                                             { ?>
                                        
                                       <li><a href="<?php echo $row1['menu_link']?>?id=<?php echo $row['menu_id'];?>"><?php echo $row1['menu_name']?> </a></li>
                                           
                                       
                                       
                                    <?php   
                                    }
                                
                                    ?>
                                    </ul>
                                    <?php
                                }
                                            ?>
                                            </li>
                            
                                   <!-- </li>
                                   <li class="nav-item">
                                   <a href="about_us.php">About Us</a>
                                       
                                   </li>
                                   <li class="nav-item">
                                   <a href="gallery.php">Gallery</a>
                                       
                                   </li>
                                   <li class="nav-item">
                                       <a href="">Advertiser</a>
                                       <ul class="sub-menu">
                                           <li><a href="client_advertiser_login.php"> Login</a></li>
                                           <li><a href="client_advertiser_reg.php">Register</a></li>
                                       </ul>
                                   </li>
                                   <li class="nav-item">
                                       <a href="">Vehicle Owner</a>
                                       <ul class="sub-menu">
                                       <li><a href="vehicle_owner_login.php"> Login</a></li>
                                           <li><a href="vehicle_owner_reg.php">Register</a></li>
                                       </ul>
                                   </li>
                                 
                                   
                                   <li class="nav-item">
                                       <a href="contact.php">Contact Us</a>
                                      
                                   </li> -->
                               </ul>
                           </div>
                          
                       </nav> <!-- nav -->
                   </div>
               </div> <!-- row -->
           </div> <!-- container -->
       </div>
   </header>
    <!--====== SEARCH BOX PART START ======-->
    
    <div class="search-box">
        <div class="search-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- search form -->
    </div>
    
    <!--====== SEARCH BOX PART ENDS ======-->