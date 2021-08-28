<?php 
include ('dblink.php');
include( "common.php" );


$product_info = "SELECT    *
FROM      shop_info
ORDER BY  shop_id DESC
LIMIT     1;";
$result = mysqli_query($con,$product_info);
$r=mysqli_fetch_array($result);
$sid =$r['shop_id']+1;

    if(isset($_POST['submit'])){
      if(isset($_SESSION['user_id'])){
  $uid= $_SESSION['user_id'];

   $sql = "INSERT INTO shop_info VALUES($sid, $uid,'".$_POST['Category']."','".$_POST['ownername']."','".$_POST['shopname']."','".$_POST['shopphnum']."','".$_POST['shopemail']."','".$_POST['shopaddress']."','".$_POST['shopdes']."');";                 
    $res1 = mysqli_query($con,$sql)  or die( mysqli_error($con));
    echo "<script>alert('Shop added successful');
                      location.replace('shopprofile.php?shop_id="; echo $sid; echo "');</script>";
  }
   else
                      echo "<script>alert('please log in first');
                      location.replace('login_register.php');</script>";
    
                        exit(); 
                    
  }
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    
    <title>Mart Villa | Creat Shops</title>
   
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
       
     

       <section class="module">
          <div class="container">
            <div class="row">
              <h4 class="font-alt mb-20 titan-title-size-3">Upload Your Shop</h4><br/>
              <div class="col-sm-6">
                
                <form action="" method="POST">
                  
                   <? 
  $product_info = "SELECT    *
FROM      user_info
ORDER BY  id DESC
LIMIT     1;";
$result = mysqli_query($con,$product_info);
$r=mysqli_fetch_array($result); ?> 

                   <div class="form-group">
                    <label class="sr-only" for="ownername">Shop's Owner Name</label>
                    <input class="form-control" type="text" id="ownername" name="ownername"  required="required" value="<?php echo $r['name']; ?>" data-validation-required-message="Please enter your shop's owner name."/>
                    <p class="help-block text-danger"></p>
                  </div>

                  <div class="form-group">
                    <label class="sr-only" for="shopname">Shop's Name</label>
                    <input class="form-control" type="text" id="shopname" name="shopname" placeholder="Shop's Name*" required="required" data-validation-required-message="Please enter shop's name."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="shopphnum">Shop's Phone Number</label>
                    <input class="form-control" type="text"  maxlength="12" pattern="\d{1,12}" id="shopphnum" name="shopphnum" placeholder="Shop's Phone Numberx*" required="required" data-validation-required-message="Please enter shop's phone number."/>
                    <p class="help-block text-danger"></p>
                  </div>

                  <div class="form-group">
                    <label class="sr-only" for="shopemail">Shop's Email</label>
                    <input class="form-control" type="email" id="shopemail" name="shopemail" placeholder="Your Shop's Email*" required="required" data-validation-required-message="Please enter shop's email address."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="4" id="shopaddress" name="shopaddress" placeholder="Shop's Address*" required="required" data-validation-required-message="Please enter shop's address."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  
                  
                <!-- <div class="ajax-response font-alt" id="contactFormResponse"></div> -->
              </div>

              <div class="col-sm-6">
                <div class="form-group">
                    <textarea class="form-control" rows="7" id="shopdes" name="shopdes" placeholder="Shop's Description*" required="required" data-validation-required-message="Please enter shop's description."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                <h4 class="font-alt">Choose Your Category</h4>
                    <div class="form-group">
                      <input type="radio" id="Fashion" name="Category" value="1" required="required">
                      <label class="font-alt" for="Fashion">Fashion</label><br>
                      <input type="radio" id="Restaurant" name="Category" value="2">
                      <label class="font-alt" for="Restaurant">Restaurant</label><br>
                      <input type="radio" id="Electronic" name="Category" value="3">
                      <label class="font-alt" for="Electronic">Electronic</label>
                  </div>
                    
                
                <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" name="submit" type="submit">Submit</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </section>

  
<?php include_once('footer.php'); ?>
       
  </body>
</html>