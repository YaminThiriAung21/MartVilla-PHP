<?php

  include 'common.buyer.php';
  include 'common.seller.php';
  include 'dblink.php';

  if(!isset($_SESSION)) 
  { 
    session_start(); 
  }

  if(isset($_SESSION['login'])){
    $loginStatus = $_SESSION['login'];
  }
  else{
    $loginStatus = "normal";
  }
 

  if($loginStatus=="buyer"){
  //if($loginStatus==1){
    displayNavBuyer();
  }
  elseif($loginStatus=="seller"){
  //elseif ($loginStatus == 2) {
    displayNavSeller();
  }
  else{
  
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
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">Mart Villa</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">

              <li class="dropdown"><a href="index.php">Home</a>
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
                
                <li class="dropdown"><a class= "section-scroll" href="#contact_us"  >Contact</a>   </li>
<!-- 
               -->
              <li class="dropdown"><a href="login_register.php">Login/SignUp</a></li>
             
            </ul>
          </div>
        </div>
      </nav>
      
      
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
