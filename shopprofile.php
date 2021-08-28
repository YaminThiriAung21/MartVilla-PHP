<?php
include ('dblink.php');
include( "common.php" );
if(isset($_GET['shop_id'])){
$sid = $_GET['shop_id'];
}
                	 $query = "select * from shop_info where shop_id='$sid';";
            $ret = mysqli_query ($con,$query) or die( mysqli_error($con));
            $row=mysqli_fetch_array($ret);
            $ownername= $row['ownername']; 
            $shopname= $row['shop_name']; 
            $shopphone= $row['shopphnum']; 
            $shopemail= $row['shopemail']; 
            $shopdes= $row['shopdes']; 
            $shopaddress = $row['shopaddress'];
					?>
<!DOCTYPE html>
<html>
<head>
	<title>Mart Villa Shop Profile</title>
</head>
<body>
 <section class="home-section home-full-height" id="home">
        <div class="hero-slider">
          <ul class="slides">
            <li class="bg-dark-60" style="background-image:url(&quot;images/shop.jpg&quot;);">
              <div class="titan-caption">
                <div class="caption-content">
                	
                  <div class="font-alt mb-30 titan-title-size-1"> Hello & welcome</div>
                  <div class="font-alt mb-40 titan-title-size-4">We are <?php echo "$shopname"; ?></div><a class="section-scroll btn btn-border-w btn-round" href="#menu">Check Our Menu</a>
                </div>
              </div>
            </li>
            <li class="bg-dark-60" style="background-image:url(&quot;images/shop2.jpg&quot;);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-30 titan-title-size-2"><?php echo "$shopdes"; ?></div><a class="section-scroll btn btn-border-w btn-round" href="#contact">Discover our shop</a>
                </div>
              </div>
            </li>
            
          </ul>
        </div>
      </section>
      <hr class="divider-w">
        <section class="module" id="menu">
          <div class="container">
       <div class="row">
              <div class="col-sm-2 col-sm-offset-5">
                <div class="alt-module-subtitle"><span class="holder-w"></span>
                  <h5 class="font-serif">Take a look at</h5><span class="holder-w"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <h2 class="module-title font-alt">Our Specialities</h2>
              </div>
            </div>
    
<div class="row">
              <div class="col-sm-12">
                <ul class="filter font-alt" id="filters">
                  <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".illustration" data-wow-delay="0.2s">Illustration</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".marketing" data-wow-delay="0.4s">Marketing</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".photography" data-wow-delay="0.6s">Photography</a></li>
                  <li><a class="wow fadeInUp" href="#" data-filter=".webdesign" data-wow-delay="0.6s">Web Design</a></li>
                </ul>
              </div>
            </div>


            <div class='row multi-columns-row'>
<?php 

           
            $query1="select * from shop_info as s, product_info as p where s.shop_id=p.shop_id and s.shop_id='$sid' and p.delete_flag = 0;";
            $ret1 = mysqli_query ($con,$query1) or die( mysqli_error($con));
            $noRows=mysqli_num_rows($ret1);
             

            for($j=0; $j<$noRows; $j++){
            $row1=mysqli_fetch_array($ret1);
            $row1['p_image'] = trim($row1['p_image'],'\,');
            $temp = explode(',',$row1['p_image'] );
            $images=[];
                foreach($temp as $image){ 
                $images[]="images/".trim( str_replace( array('[',']') ,"" ,$image ) ); }
                ?>

         
          
                <div class='col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  
             
                  <div class='shop-item-image'><img src='<?php echo $images[0]; ?>'/>
                    <div class='shop-item-detail'><a id= "addcartsmall" class='btn btn-round btn-b ' href="checkout.php?product_id=<?php echo $row1['product_id']; ?>"><span class='icon-basket'>Add To Cart</span></a></div>
                  </div>
                  <h3 class="content-box-title font-serif"><a href='productdetail.php?product_id=<?php echo $row1['product_id'];?>'><?php echo $row1['p_name']; ?></a></h3> 
                  <?php echo $row1['p_sellprice']. "MMK"; ?> <br> <?php echo $row1['p_description']; ?>
                </div>
              </div>
<?php     } ?>
</div></div>
</section>
 <hr class="divider-w">
 <section class="module bg-dark-60" data-background="images/contactshop.jpg" id="contact">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Feel Free To Contact Our Shop</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row multi-columns-row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="count-item mb-sm-40">
                  <div class="count-icon"><span class="icon-profile-male"></span></div>
                  
                  <h5 class="count-title font-serif"><?php echo $ownername; ?></h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="count-item mb-sm-40">
                  <div class="count-icon"><span class="icon-basket"></span></div>
                  
                  <h5 class="count-title font-serif"><?php echo $shopname; ?></h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="count-item mb-sm-40">
                  <div class="count-icon"><span class="icon-phone"></span></div>
                  
                  <h5 class="count-title font-serif"><?php echo $shopphone; ?></h5>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="count-item mb-sm-40">
                  <div class="count-icon"><span class="icon-map-pin"></span></div>
                  
                  <h5 class="count-title font-serif"><?php echo $shopaddress; ?></h5>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php include_once('footer.php'); ?>
</body>
</html>