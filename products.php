<?php
session_start();
include ('dblink.php');
include( "common.php" );


if(isset($_GET['category_id'])){
$cid = $_GET['category_id'];
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Mart Villa Products</title>
  <style type="text/css">
   
  </style>
</head>
<body>

    <main>
      <div class='page-loader'>
        <div class='loader'>Loading...</div>
      </div>

<!-- navvvvvvvv -->

     <br>
        
        <section class='module-small'>
          
      
        
          <div class='container'>
            <div class='row multi-columns-row'>
            <?php 
            $query = "select * from product_info where category_id='$cid' and delete_flag=0";
            $ret = mysqli_query ($con,$query);          
            $noRows=mysqli_num_rows($ret);
            for($j=0; $j<$noRows; $j++){
            $row=mysqli_fetch_array($ret);
            $row['p_image'] = trim($row['p_image'],'\,');
            $temp = explode(',',$row['p_image'] );
            $images=[];
                foreach($temp as $image){ 

                $images[]="images/".trim( str_replace( array('[',']') ,"" ,$image ) ); }
            ?>
              <div class='col-sm-6 col-md-3 col-lg-3'>
                <div class='shop-item'>
                  
             
                  <div class='shop-item-image'><img src='<?php echo $images[0]; ?>'/>
                    <div class='shop-item-detail'><a id= "addcartsmall" class='btn btn-round btn-b ' href="checkout.php?product_id=<?php echo $row['product_id']; ?>"><span class='icon-basket'>Add To Cart</span></a></div>
                  </div>
                  <h4 class='shop-item-title font-alt'><a href='productdetail.php?product_id=<?php echo $row['product_id'];?>'><?php echo $row['p_name']; ?></a></h4> <?php echo $row['p_sellprice']. "MMK"; ?>
                </div>
              </div>
      <?php     } ?>
</div>
          </div>
        </section>
        <section class="module-small">
         <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
              </div>
            </div>
          </div>
            </section>
      <?php include_once('footer.php'); ?>
      </main>
    
    
    
  </body>
</html>