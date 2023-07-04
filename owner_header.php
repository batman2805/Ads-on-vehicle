<?php
 if($_SESSION['owner_id']=='')
 {
     header('location:index.php');
 }
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
                          
                           <!-- <div class="login-register">
                               <ul>
                                   <li><font color="white">Advertiser:   </font><a href="client_advertiser_login.php"> Login</a></li>
                                   <li><a href="client_advertiser_reg.php">Register</a></li>
</ul>
<ul>
                                   <li><font color="white">Vehicle Owner:   </font><a href="vehicle_owner_login.php">Login</a></li>
                                   <li><a href="vehicle_owner_reg.php">Register</a></li>
                               </ul>
                           </div> -->
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
                           <a class="navbar-brand" href="owner_index.php">
                               <img src="logo.png" length="100" width="100"alt="Logo">
                           </a>
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>

                           <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                               <ul class="navbar-nav ml-auto">
                                   <li class="nav-item">
                                       <a class="active" href="owner_index.php">Home</a>
                                       </li>
                                 
                                 
                                   <li class="nav-item">
                                   <a href="vehicle_owners_vehicles.php">Vehicle Details</a>
                                   <ul class="sub-menu">
                                 
</ul>
                                   <li class="nav-item">
                                   <a href="vehicle_adplaces.php">Vehicle AdPlaces</a>
                                   
                                      
                                   </li>
                                   <li class="nav-item">
                                   <a href="owner_booking.php">Booking Requests</a>
                                   
                                      
                                   </li>
                                   <li class="nav-item">
                                       <a href="">Edit Details</a>
                                       <ul class="sub-menu">
                                       <li><a href="vehicle_edit.php">Edit Vehicle Details</a></li>
                                           <li><a href="vehicle_adplaces_edit.php">Edit Vehicle AdPlaces</a></li>
                                           </ul>
                                   </li>
                                   <li class="nav-item">
                                       <a href="">My Info</a>
                                       <ul class="sub-menu">
                                           <li><a href="owner_edit_profile.php">Edit Profile</a></li>
                                           
                                           <li><a href="owner_change_password.php">Change Password</a></li>
                                           <li><a href="owner_logout.php">Logout</a></li>
                                       </ul>
                                   </li>
                               </ul>
                           </div>
                           <!-- right icon -->
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