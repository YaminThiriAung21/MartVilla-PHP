<?php 

include 'dblink.php';
include( "common.php" );
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <title>Mart Villa Add Product</title>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <?php 
include 'dblink.php';
       $product_info = "SELECT    *
FROM      product_info
ORDER BY  product_id DESC
LIMIT     1;";
  $result = mysqli_query($con,$product_info);
  if(isset($_POST['submit'])){
  $countfiles = count($_FILES['images']['name']);
  
 for($i=0;$i<$countfiles;$i++){
   $filename = $_FILES['images']['name'][$i];
 
    move_uploaded_file($_FILES['images']['tmp_name'][$i],'images/'.$filename);

     $insertValuesSQL = strval($filename).",";
     $insertValuesSQL .= $insertValuesSQL;
}

  $r=mysqli_fetch_array($result);
  $pid =$r['product_id']+1;
 
 if(!empty($insertValuesSQL)){ 
            
    $product_add = "INSERT INTO product_info VALUES ($pid,'".$_POST['Shop']."','".$_POST['Category']."','".$_POST['name']."','".$_POST['description']."','".$_POST['price']."','".$_POST['quantity']."','".$insertValuesSQL."','".$_POST['size']."', 0);";

    $res1 = mysqli_query($con,$product_add);
          echo      "<script>alert('Product added successful');
                      location.replace('shopprofile.php?shop_id="; echo $_POST['Shop']; echo "');</script>";
  }
}
     
?>

      <div class="main">
        
        <section class="module">
          <div class="container">
            <div class="row">
              <h4 class="font-alt mb-20 titan-title-size-3">Add Product To Your Shop</h4><br/>
              <div class="col-sm-6">
                
                <form method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="sr-only" for="name">Product Name</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Product Name*" required="required" data-validation-required-message="Please enter your product name."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="price">Product Price</label>
                    <input class="form-control" type="text"  maxlength="10" pattern="\d{1,10}" id="price" name="price" placeholder="Product price in MMK*" required="required" data-validation-required-message="Please enter your price."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="quantity">Stock Quantity</label>
                    <input class="form-control" type="number" id="quantity" name="quantity" placeholder="Stock quantity*" required="required" data-validation-required-message="Please enter stock quantity."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="7" id="description" name="description" placeholder="Product description*" required="required" data-validation-required-message="Please enter product description."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <h5 class="font-alt">Upload your product photos</h5>
                   <div class="form-group">
                  
                    <label class="sr-only" rows="7" for="images">Product Images</label>
                    <input class="form-control" type="file" id="images" name="images[]" multiple placeholder="Product Images*" required="required" data-validation-required-message="Please upload your product images."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  
                
              </div>
              <div class="col-sm-6">
               
                  <div class="form-group">
                    <textarea class="form-control" rows="7" id="size" name="size" placeholder="Product size/ingredient or additional information" data-validation-required-message="Please enter product additional description."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-sm-3">
                  <br><h5 class="font-alt">Choose Your Shop</h5>
                  <div class="form-group">
                    <?php
                    $uid= $_SESSION['user_id'];
                      $query = "select * from shop_info as s , user_info as u where s.user_id = u.id and u.id = $uid";
                      $ret = mysqli_query ($con,$query);          
                      $noRows=mysqli_num_rows($ret);
                      for($j=0; $j<$noRows; $j++){ 
                      $row = mysqli_fetch_array($ret);?>

                      <input type="radio" id="<?php echo $row['shop_name'];?>" name="Shop" value="<?php echo $row['shop_id'];?>" required="required">
                      <label class="font-alt" for="<?php echo $row['shop_name'];?>"><?php echo $row['shop_name'];?></label><br>
                      
  
<?php }
  ?>
                      
                  </div>
                 
              </div>
              <div class="col-sm-3">
                  <br><h5 class="font-alt">Choose Product Category</h5>
                  <div class="form-group">
                      <input type="radio" id="Fashion" name="Category" value="1" required="required">
                      <label class="font-alt" for="Fashion">Fashion</label><br>
                      <input type="radio" id="Restaurant" name="Category" value="2">
                      <label class="font-alt" for="Restaurant">Restaurant</label><br>
                      <input type="radio" id="Electronic" name="Category" value="3">
                      <label class="font-alt" for="Electronic">Electronic</label>
                  </div>
                 
              </div>
              <br><div class="col-sm-6">
              <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" type="submit" name="submit">Submit</button>

                  </div>
                </div>
                </form>
            </div>
          </div>
        </section>
        <?php include_once('footer.php'); ?>
    </main>
    
  </body>
</html>