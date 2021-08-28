<?php

  if(!isset($_SESSION)) 
  { 

    session_start(); 
    
  }
  
  function displayNavSeller(){
  ?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    
    <!--  
    Favicons
    =============================================
    -->
   
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
  </head>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index_seller.php">Mart Villa</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">

              <li class="dropdown"><a href="index_seller.php">Home</a>
                </li>

              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Category</a>
                <ul class="dropdown-menu">

                  <li class="dropdown"><a href="products.php?category_id=1" >Fashion</a>
                  </li>

                <li class="dropdown"><a href="products.php?category_id=2" >Restaurant</a>
                  </li>
                <li class="dropdown"><a href="products.php?category_id=3" >Electronic</a>
                   </li>

                    </ul>
              </li>
                <li class="dropdown"><a href="SMS/discussion1.php">Discussion</a>   </li>
                <li class="dropdown"><a class= "section-scroll" href="#contact_us"  >Contact</a>   </li>

                  
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Cart</a>
                <ul class="dropdown-menu">
                 
                  <li><a href="checkout.php">Shopping Cart</a></li>
                 
                </ul>
              </li>

              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Shop Action</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="createshop.php">Create Shop</a></li>
                  <li><a href="addproduct.php">Add Product</a></li>
                  
                </ul>
              </li>

              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Your Shop</a>
             
                
                    <?php
                    include('dblink.php');
                    $uid= $_SESSION['user_id'];
                  
                      $query = "select * from shop_info as s , user_info as u where s.user_id = u.id and u.id = $uid";
                      $ret = mysqli_query ($con,$query);          
                      $noRows=mysqli_num_rows($ret);
                     echo "<ul class='dropdown-menu' role='menu'>";
                      for($j=0; $j<$noRows; $j++){ 
                      $row = mysqli_fetch_array($ret);?>
                      
                    <li><a href="shopprofile.php?shop_id=<?php echo $row['shop_id'];?>"><?php echo $row['shop_name'];?></a></li>
                  <?php } ?>
                  </ul>

                    
                  <li class="dropdown">

                  <?php 
                                     $seen_query = "SELECT count(*) as seen FROM d WHERE seen = 0 ";
                                     $seen = mysqli_query ($con,$seen_query) or die ( mysqli_error($con));
                                     $noRows=mysqli_num_rows($seen);
                                     $noti_seen = mysqli_fetch_array($seen);
                                ?>
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" onclick="Reduce()">Notification<span id="auto_noti">
          <span id="noti" style="padding: 4px 9px;border-radius: 50%;background: red;color: white;"><?php echo $noti_seen['seen'];?></span></span>
        </a>
<ul class="dropdown-menu">
                              <?php 
                                     $name_query = "SELECT comment_sender_name as name,seen FROM d WHERE seen = 0";
                                     $name = mysqli_query ($con,$name_query) or die( mysqli_error($con));

                                     $noRows=mysqli_num_rows($name);
                                      $name_seen = mysqli_fetch_array($name);
                                      
                                     for($j=0; $j<$noRows; $j++){
                                      if ($name_seen['seen']==0){
                                    
                                ?>
                  <li class="dropdown"><a href="SMS/discussion1.php"> <p><?php echo $name_seen['name']?> has posted a question.</p></a>
                  </li> <?php    } } ?>

                </ul>

      </li>
                   
              <li class="dropdown"><a href="logout.php">Logout</a></li>
             
            </ul>
          </div>
        </div>
      </nav>
      
      <script>
// Get the modal

function Reduce()
{
var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "reducenoti.php", true);
    xhttp.send();
 }

</script>

    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
      </html>
    <?php } ?>
