<?php
include ('dblink.php');
include( "common.php" );

?>
 <?php 
                  if (isset($_SESSION['user_id']) && isset($_SESSION['login'])) {
                    $uid= $_SESSION['user_id'];

                    }
                       else 
                     { 
                      echo "<script>alert('please log in first');
                      location.replace('https://martvillamm.auth.ap-southeast-1.amazoncognito.com/login?client_id=1vv7dr2ehp2f1mc3qqkhjhkns9&response_type=code&scope=aws.cognito.signin.user.admin+email+openid+phone+profile&redirect_uri=https://martvilla.eba-z5yfpueu.ap-southeast-1.elasticbeanstalk.com/index1.php');</script>";
    
                        exit(); }
                        
                           
                            
                        ?> 
<!DOCTYPE html>
<html>
<head>
  <title>Mart Villa CheckOut</title>
</head>

  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <form action="testapi.php" method="post">
      <div class="main">
        <section class="module">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt">Your Cart</h1>
              </div>
            </div>
            <hr class="divider-w pt-20">
            <div class="row">
              <div class="col-sm-12">
               
                <table class="table table-striped table-border checkout-table">
                  <tbody>
                    <tr>
                      <th class="hidden">ID</th>
                      <th class="hidden-xs">Item</th>
                      <th>Name</th>
                      <th class="hidden-xs">Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th>Remove</th>
                    </tr>
                   <!--   -->

                     <?php
                     if(isset($_GET['product_id'])){
                      
                      $pid = $_GET['product_id'];

                  $query="SELECT * FROM product_info where product_id = $pid;";
                  $result = mysqli_query($con,$query);
                  $num_rows = mysqli_num_rows($result);
                  $itid=1;
                  
                  if ($num_rows>0) {
                    while($row = mysqli_fetch_array($result))
                    {
                      $row['p_image'] = trim($row['p_image'],'\,');
                      $temp = explode(',',$row['p_image'] );
                   
                    $images=[];
                foreach($temp as $image){ 
                $images[]="images/".trim( str_replace( array('[',']') ,"" ,$image ) ); } 
                ?>
                   
                      <tr id='div<?php echo $itid; ?>'>
                        <td class="hidden">
                        <input class="form-control" name="pid" id='pid<?php echo $itid; ?>' type='hidden' value="<?php echo $_GET['product_id']; ?>" /> </td>
                      <td class="hidden-xs"><a href="<?php echo $images[0]; ?>"><img src="<?php echo $images[0];  ?>"height='100px' width='200px'/></a></td>
                      <td>
                        <h5 class="product-title font-alt"><?php echo $row['p_name']; ?></h5>
                      </td>
                      <td class="hidden-xs">
                        <h5 class="product-title font-alt"  id='price<?php echo $itid; ?>'><?php echo $row['p_sellprice']; ?> </h5>
                      </td>
                      <td>
                        <input class="form-control" id='quantity<?php echo $itid; ?>' type="number" name="quantity" value="1" max="<?php echo $row['p_quantity'];?>" min="1" onchange='calculate(<?php echo $itid?>)'/>
                      </td>
                      <td>
                        <h5 class="product-title font-alt" name="total" id='total<?php echo $itid; ?>'><?php echo $row['p_sellprice']; ?> </h5>
                      </td>
                      <td class="pr-remove"><a title="Remove" onclick='removediv(<?php echo $itid?>)'><i class="fa fa-times"></i></a></td>
                    </tr>
                  <?php $itid++;} } }else echo "No product in your cart";
                  ?>

                  </tbody>
  <script type="text/javascript">

  function calculate(id) {
    // body...
    //alert(id);
    
    var i = document.getElementById('<?php echo "quantity'+id+'";?>').value;
    //alert(i);
    var price = document.getElementById('<?php echo "price'+id+'";?>').innerHTML;
    //alert(i*price);
     document.getElementById('<?php echo "total'+id+'";?>').innerHTML= i*price;

     calc();
    }
    


</script>

                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2 col-sm-offset-7">
                <div class="form-group">
                  <input class="form-control" type="text"  id="" name="" placeholder="Coupon code"/>
                </div>
              </div>
              <div class="col-sm-3 ">
                <div class="form-group">
                  <button class="btn btn-round btn-g" type="button">Apply</button>
                </div>
              </div>
              <div class="col-sm-3 col-sm-offset-3">
               
              </div>
            </div>
            <hr class="divider-w">
            <div class="row mt-70">
              <div class="col-sm-5 col-sm-offset-7">
                <div class="shop-Cart-totalbox">
                  
                    
                  <button class="btn btn-lg btn-block btn-round btn-d" name="submit" type="submit">Proceed to Checkout</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
<?php include_once('footer.php'); ?>
    </main>
<script type="text/javascript">
  function removediv(divid){
    document.getElementById('div'.concat(divid)).remove();
    pidCart.splice(divid-1, divid-1);
    quantityCart.splice(divid-1, divid-1);
    calc();

  }
  calc();
  function calc(){
            var sum = 0;
            var a;
            for(a=1;a<=<?php echo $itid?>;a++){
            if(document.getElementById("total"+a)!=null){ 
              sum =sum+parseInt(document.getElementById("total"+a).innerHTML, 10);  
              }
            }
            var totalCost = sum+ ' MMK'; 
            var total = sum+2000 + ' MMK'; 
            document.getElementById("totalCost").innerText=totalCost;
            document.getElementById("total").innerText=total;

          }
    
</script>
  </body>
</html>
