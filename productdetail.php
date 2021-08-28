f<?php 

if(isset($_GET['product_id'])){
$pid = $_GET['product_id'];
}



include 'dblink.php';
include( "common.php" );
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <style type="text/css">
      #addcart.disabled {
  pointer-events: none;
  cursor: default;
}
    </style>
    
    <title>Mart Villa Product Detail</title>
    
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <?php 
            $query = "select * from product_info as p, shop_info as s where p.shop_id=s.shop_id and p.product_id='$pid'";
            $ret = mysqli_query ($con,$query); 

            $row=mysqli_fetch_array($ret);
            $cid= $row['category_id']; 
            $row['p_image'] = trim($row['p_image'],'\,');
            $temp = explode(',',$row['p_image'] );
            $temp = array_filter($temp);
                foreach($temp as $image){ 
                $images[]="images/".trim( str_replace( array('[',']') ,"" ,$image ) ); }
            ?>

      <div class="main">
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 mb-sm-40"><a class="gallery" href="<?php echo $images[0]; ?>"> <img src="<?php echo $images[0]; ?>" height='800px' width='600px'/></a>
                <ul class="product-gallery">
              <?php foreach($images as $image){ ?>
                  <li><a class="gallery" href="<?php echo $image; ?>"><img src="<?php echo $image; ?>"/></li>
                <?php } ?>
                </ul>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-sm-12">
                    <h1 class="product-title font-alt"><?php echo $row['p_name'];?></h1>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12"><span><a class="open-tab section-scroll" href="shopprofile.php?shop_id=<?php echo $row['shop_id']; ?>"><?php echo $row['shop_name']; ?></a><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="price font-alt"><span class="amount"><?php echo $row['p_sellprice'] . "MMK";?></span></div>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-12">
                    <div class="description">
                      <p><?php echo $row['p_description'];?></p>
                    </div>
                  </div>
                </div>
                <div class="row mb-20">
                  <div class="col-sm-4 mb-sm-20">
                    <input class="form-control input-lg" type="number" name="" value="1" max="<?php echo $row['p_quantity'];?>" min="1" required="required"/>
                  </div>
                  <div class="col-sm-8"><a href="checkout.php?product_id=<?php echo $pid; ?>"  class="btn btn-lg btn-block btn-round btn-b disabled" type="submit" id="addcart">Add To Cart</a></div>
                </div>
                <?php 
                
                  if (isset($_SESSION['login'])) {
                      echo "<script>document.getElementById('addcart').className = 'btn btn-lg btn-block btn-round btn-b';
                      </script>";
                 }
                  ?>
              </div>
            </div>
            <div class="row mt-70">
              <div class="col-sm-12">
                <ul class="nav nav-tabs font-alt" role="tablist">
                  <li class="active"><a href="#description" data-toggle="tab"><span class="icon-tools-2"></span>Description</a></li>
                  <li><a href="#data-sheet" data-toggle="tab"><span class="icon-tools-2"></span>Data sheet</a></li>
                  <li><a href="#reviews" data-toggle="tab"><span class="icon-tools-2"></span>Reviews</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="description">
                   <?php echo $row['p_description'];?>
                  </div>
                  <div class="tab-pane" id="data-sheet">
                    <?php echo $row['p_sizedetail'];?>
                  </div>
            
                  <div class="tab-pane" id="reviews">
                    <div class="comments reviews">

            <?php 
            $query2 = "SELECT pc.p_comment,u.name as UserName,pc.comment_time FROM product_comment_info as pc, user_info as u WHERE pc.product_id='$pid' and pc.user_id=u.id";
            $ret2 = mysqli_query ($con,$query2);          
            $noRows=mysqli_num_rows($ret2);
            for($j=0; $j<$noRows; $j++){
            $row2=mysqli_fetch_array($ret2);
            ?>
                    
                      <div class="comment clearfix">
                        <div class="comment-avatar"><img src=""/></div>
                        <div class="comment-content clearfix">
                          <div class="comment-author font-alt"><a href="#"><?php echo $row2['UserName']; ?></a></div>
                          <div class="comment-body">
                            <p><?php echo $row2['p_comment']; ?></p>
                          </div>
                          <div class="comment-meta font-alt"><?php echo $row2['comment_time']; ?>
                          </div>
                        </div>
                       
                      </div>
                       <?php    } ?>
                    </div>
           
                    <div class="comment-form mt-30">
                      <h4 class="comment-form-title font-alt">Add review</h4>
                      <form method="post">
                        <div class="row">

                        <?php 

                        if(isset($_POST['submitReview'])){
                          if (isset($_SESSION['user_id']) && isset($_SESSION['login'])) {
                            $uid = $_SESSION['user_id'];
                            $date = date('Y-m-d H:i:s');
                            $insert_review= "INSERT INTO product_comment_info (product_id,p_comment,user_id,comment_time) VALUES ( $pid, '".$_POST['review']."',$uid, '$date');";
                            $result = mysqli_query($con,$insert_review);
                            echo '<script>alert("Your comment is submitted.")</script>';
                            echo "<meta http-equiv='refresh' content='0'>"; 
                       }
                        else
                      echo "<script>alert('please log in first');
                      location.replace('login_register.php');</script>";
    
                        exit(); 
                    
                        }
                        ?>
                          <form method="post" action="">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <textarea class="form-control" id="" required="required" name="review" rows="4" placeholder="Review"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <button class="btn btn-round btn-d" type="submit" name="submitReview">Submit Review</button>
                          </div>
                          </form>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <hr class="divider-w">
        <section class="module-small">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Related Products</h2>
              </div>
            </div>
            <div class="row multi-columns-row">
              <?php 
            $query3 = "select * from product_info where category_id ='$cid' and delete_flag=0";
            $ret3 = mysqli_query ($con,$query3);          
            $noRows3=mysqli_num_rows($ret3);
            for($j=0; $j<$noRows3; $j++){
            $row3=mysqli_fetch_array($ret3);
            $row3['p_image'] = trim($row3['p_image'],'\,');
            $temp3 = explode(',',$row3['p_image'] );
            $images=[];
                foreach($temp3 as $image){ 

                $images[]="images/".trim( str_replace( array('[',']') ,"" ,$image ) ); }
            ?>
              <div class='col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  <div class='shop-item-image'><img src='<?php echo $images[0]; ?>'/>
                    <div class='shop-item-detail'><a href="checkout.php?product_id=<?php echo $row['product_id']; ?>" class='btn btn-round btn-b'><span class='icon-basket' id="addcartsmall">Add To Cart</span></a></div>
                  </div>
                  <h4 class='shop-item-title font-alt'><a href='productdetail.php?product_id=<?php echo $row3['product_id'];?>'><?php echo $row3['p_name']; ?></a></h4> <?php echo $row3['p_sellprice']. "MMK"; ?>
                </div>
              </div>
      <?php     } ?>
</div>
              
            </div>
          </div>
        </section>
        
        </div>
<?php include_once('footer.php'); ?>
    </main>
   <script type="text/javascript">
     function add_pid(pid)
     {
      var pids .= pid.",";
      $_SESSION['pids'] = pids;
     }
   </script>
  </body>
</html>