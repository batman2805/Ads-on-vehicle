<?php
include('head.php');
include('header.php');
include('connect.php');
?>

<!--====== PAGE BANNER PART START ======-->
    
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/pagebanner1.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Image Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== FAQ PART START ======-->
    <section class="pt-90 pb-120 gray-bg">
        <div class="container">
        
            <div class="row gallery">
            <?php
                                            $count=1;
                                           $qry="select * from gallery";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                            ?>   
                <div class="col-md-4 col-xs-6 thumb">
                    <a href="Gallery/<?php echo $row['gallery_img'];?>">
                        <figure><img class="img-fluid img-thumbnail" src="Gallery/<?php echo $row['gallery_img'];?>" alt="Gallery Image" height="200" width="250"></figure>
                    </a>
                </div>
                <?php
                                            }
                                            ?>

            </div>
        </div>
    </section>

    <?php
include('footer.php');
?>