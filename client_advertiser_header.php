<?php
 if($_SESSION['advertiser_id']=='')
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
                               <li><i class="fa fa-envelope"></i><a href="#">vads826@gmail.com</a></li>
                               <li><i class="fa fa-phone"></i><span>+91 85114 14454</span></li>
                           </ul>
                       </div> <!-- header contact -->
                   </div>
                  
               </div> <!-- row -->
           </div> <!-- container -->
       </div> <!-- header top -->
       
       <div class="navigation">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <nav class="navbar navbar-expand-lg">
                           <a class="navbar-brand" href="index-4.html">
                               <img src="logo.png" height="100" width="100" alt="Logo">
                           </a>
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>

                           <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                               <ul class="navbar-nav ml-auto">
                                   <li class="nav-item">
                                       <a class="active" href="client_advertiser_index.php">Home</a>
                                       
                                   </li>
                                   <li class="nav-item">
                                       <a href="ads.php">Advertisement</a>
                                    
                                   </li>
                                   <li class="nav-item">
                                       <a href="my_bookings.php">My Bookings</a>
                                      
                                   </li>
                                   
                                   
                                 
                            
                                   <li class="nav-item">
                                       <a href="">My Info</a>
                                       <ul class="sub-menu">
                                           <li><a href="client_advertiser_edit_profile.php">Edit Profile</a></li>
                                           <li><a href="advertiser_change_password.php">Change Password</a></li>
                                           <li><a href="client_advertiser_logout.php">LogOut</a></li>
                                       </ul>
                                   </li>
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