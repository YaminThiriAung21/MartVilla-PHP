<?php

session_start();
include( "dblink.php" );
include( "common.php" );

?>
<!DOCTYPE html>
<html>
<head>
  <title>Mart Villa | Home</title>
</head>
<body>

  
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      
      <section class="home-section home-fade home-full-height" id="home">
        <div class="hero-slider">
          <ul class="slides">
            <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;images/index.jpg&quot;);">
              <div class="titan-caption">
                <div class="caption-content">
                  <div class="font-alt mb-30 titan-title-size-4"> <style="">This is MARTVILLA</style></div>
                  <div class="col-sm-6 col-sm-offset-3 module-subtitle font-serif">We support the the digital content marketing web-application using crowd-sourcing platform.We are expected to serve mainly three sectors which are micro-SMEs owners, customers and users who will participate in discussion. </div>
                  <a class="col-sm-2 col-sm-offset-5 section-scroll btn btn-border-w btn-round" href="createshop.php">Create Shop</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <div class="main">
        <section class="module" id="team">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Taste Our Product</h2>
                <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
              </div>
            </div>
            <div class="row">
              <div class="mb-sm-20 wow fadeInUp col-md-4 col-sm-6 col-xs-12" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><a href="products.php?category_id=1"><img src="images/Fashion.jpg"  alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Hi all</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Fashion</div>
                    
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-md-4 col-sm-6 col-xs-12" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><a href="products.php?category_id=2"><img src="images/Restaurant.jpg" href="products.php?category_id=2" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Good day</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Restaurant</div>
                    
                  </div>
                </div>
              </div>
              <div class="mb-sm-20 wow fadeInUp col-md-4 col-sm-6 col-xs-12" onclick="wow fadeInUp">
                <div class="team-item">
                  <div class="team-image"><a href="products.php?category_id=3"><img src="images/Electronic.jpg" href="products.php?category_id=3" alt="Member Photo"/>
                    <div class="team-detail">
                      <h5 class="font-alt">Yes, it's me</h5>
                      <p class="font-serif">Lorem ipsum dolor sit amet, consectetur adipiscing elit lacus, a&amp;nbsp;iaculis diam.</p>
                      
                    </div>
                  </div>
                  <div class="team-descr font-alt">
                    <div class="team-name">Electronic</div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <hr class="divider-w">
        <section class="module" id="news">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">What is Mart Villa</h2>
              </div>
            </div>
            <div class="row multi-columns-row post-columns wo-border">
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">New lookbook</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Receipt of the new collection</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">Sale of summer season</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post mb-40">
                  <div class="post-header font-alt">
                    <h2 class="post-title"><a href="#">New lookbook</a></h2>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
                      <hr class="divider-w">
              <section class="module-small">
          <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Our Sponsorship</h2>
              </div>
            </div>
          <div class="container">
            <div class="row client">
              <div class="owl-carousel text-center" data-items="6" data-pagination="false" data-navigation="false">
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-1.png" alt="Client Logo"/></div>
                  </div>
                </div>
                
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-3.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-4.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-5.png" alt="Client Logo"/></div>
                  </div>
                </div>
                <div class="owl-item">
                  <div class="col-sm-12">
                    <div class="client-logo"><img src="assets/images/client-logo-6.png" alt="Client Logo"/></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
     <?php include_once('footer.php'); ?>

    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    
  </body>
</html>