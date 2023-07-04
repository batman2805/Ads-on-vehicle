
   <?php
include("connect.php")
?> 
 <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="logo2.png" alt="Logo"></a>
                            </div>
                            
                            <ul class="mt-20">
                                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                            <?php
                           $qry="select * from menu inner join pages on menu.pages_id=pages.pages_id where menu_active_inactive=1";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                                ?>
                                <li><a href="<?php echo $row['menu_link']?>?id=<?php echo $row['menu_id'];?>"><i class="fa fa-angle-right"></i><?php echo $row['pages_name']?></a></li>
                                <!-- <li><a href="about_us.php"><i class="fa fa-angle-right"></i>About us</a></li>
                                <li><a href="gallery.php"><i class="fa fa-angle-right"></i>Gallery</a></li>
                                <li><a href="contact.php"><i class="fa fa-angle-right"></i>Contact</a></li> -->
                                <?php
                                            }
                                            ?>
                            </ul>


                            
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-1 col-md-6 col-sm-6">
                        <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>DEPSTER CHARUSAT University,Changa, Nadiad</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>8511414454</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>vads826@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p>&copy; Copyrights 2020 VAds All rights reserved. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">
                            <p>Designed by <span>The 5 Amigoes</span> </p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="js\vendor\modernizr-3.6.0.min.js"></script>
    <script src="js\vendor\jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js\bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js\slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js\jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js\waypoints.min.js"></script>
    <script src="js\jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js\jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js\jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js\jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js\validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js\ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js\main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js\map-script.js"></script>

</body>

</html>
