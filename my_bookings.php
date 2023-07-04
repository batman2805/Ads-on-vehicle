<?php
include("head.php");
include("client_advertiser_header.php");
include("connect.php");

?>
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/pagebanner1.png)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>My Bookings</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="owner_index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">My Bookings</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== EVENTS PART START ======-->
    
    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
        <div class="row">
        <div class="col-lg-12">
                   <?php
$success = isset($_GET['success']) ? $_GET['success'] : '';
if($success<>'')
{
  echo '
      <div class="alert alert-success alert-dismissable" id="flash-msg">
  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
  <h4><i class="icon fa fa-check"></i> Booking Request Sent Sucessfully!!</h4>
  </div>';
  
}
$booked = isset($_GET['booked']) ? $_GET['booked'] : '';
if($booked<>'')
{
  echo '
      <div class="alert alert-danger alert-dismissable" id="flash-msg">
  <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
  <h4><i class="icon fa fa-remove"></i> This Vehicle Is Already Booked</h4>
  </div>';
  
}
                   ?>
    </div>               
    </div> 
           <div class="row">
           <?php
           
          $id=$_SESSION['advertiser_id'];
                                          $qry="select * from bookings inner join vehicle_owners_vehicle_adplace on bookings.vehicle_owners_vehicle_adplace_id=vehicle_owners_vehicle_adplace.vehicle_owners_vehicle_adplace_id inner join vehicle_owner_vehicles on vehicle_owners_vehicle_adplace.vehicle_owners_vehicle_id=vehicle_owner_vehicles.vehicle_owners_vehicle_id inner join vehicle_owners on vehicle_owner_vehicles.vehicle_owners_id=vehicle_owners.vehicle_owners_id inner join settings_vehicle_type on vehicle_owner_vehicles.settings_vehicle_type_id=settings_vehicle_type.settings_vehicle_type_id inner join settings_ad_duration on vehicle_owners_vehicle_adplace.settings_ad_duration_id=settings_ad_duration.settings_ad_duration_id where client_advertiser_id=$id";
                                            $result=mysqli_query($con,$qry) or die(mysqli_error());
                                            while($row=mysqli_fetch_array($result))
                                            {
                                            ?>
                   
               <div class="col-lg-12">
                   <div class="single-event-list mt-30">
                       <div class="event-thum">
                           <img src="vehicle_images/<?php echo $row['ad_places'];?>"height="200"width="250" >
                       </div>
                       <div class="event-cont">
                           <form>
                            <a href="events-single.html"><h4><?php echo $row['vehicle_owners_name']?></h4></a>
                            <span><i class=""></i><b></b><?php echo $row['vehicle_no']."-".$row['vehicle_name']?></span></br>
                            <span><i class=""></i><b>Ad Amount: </b><?php echo $row['ad_amount']?></span></br>
                            <span><i class=""></i><b>Ad size: </b> <?php echo $row['ad_size']?></span></br>
                            <span><i class=""></i><b>Ad date: </b> <?php echo $row['ad_date']?></span></br>
                            <span><i class=""></i><b>Ad duration: </b> <?php echo $row['ad_duration']?></span></br>
                            
                            <?php
                            if($row['bookings_status']==0 && $row['payment_status']==0)
                            {
                                ?>
                                 <span class=""><i class=""></i><b>Status: </b><span style="color:red"><b>Pending</b></span></span>
                                 <span class=""><i class=""></i><b>Payment Status: </b><span style="color:red"><b>Pending</b></span></span></br> 
                           
                            <?php
                            }
                            else if($row['bookings_status']==1 && $row['payment_status']==0)
                                {
                                ?>
                             <span><i class=""></i><b>Status: </b> <span style="color:green"><b>Confirmed</b></span></span>
                             <span class=""><i class=""></i><b>Payment Status: </b><span style="color:red"><b>Pending</b></span></span></br>
                             
<button id="rzp-button1" class="btn btn-info">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_PlD4zMqPilnbpK", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $row['ad_amount']*100?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    
    "handler": function (response){
       // alert(response.razorpay_payment_id);
        //alert(response.razorpay_order_id);
        //alert(response.razorpay_signature)
        if (typeof response.razorpay_payment_id == 'undefined' ||  response.razorpay_payment_id < 1) {
  redirect_url = 'fail.php';
} else {
  redirect_url = 'payment_confirm.php?id=<?php echo $row['bookings_id'];?>';
}
location.href = redirect_url;
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
                             
                             <?php  
                            }
                        
                        else if($row['bookings_status']==1 && $row['payment_status']==1)
                        {
                            ?>
                             <span><i class=""></i><b>Status: </b> <span style="color:green"><b>Confirmed</b></span></span>
                             <span><i class=""></i><b>Payment Status: </b> <span style="color:green"><b>Confirmed</b></span></span>
                            <?php
                        }
                    
                            ?>
                            
                            
                            
                                            </form>
                       </div>
                   </div>
               </div>
                                            
             <?php
             }
             ?>  
               
             
           
           </div> <!-- row -->
           
        </div> <!-- container -->
    </section>
    
    <!--====== EVENTS PART ENDS ======-->
   
   <?php
   include('owner_footer.php');
   ?>