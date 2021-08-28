<?php 
include('common.php');
if (isset($_SESSION['user_id']) && isset($_SESSION['login'])) {
                            $uid= $_SESSION['user_id'];
                            $query = "SELECT * from user_info where id = $uid;";
                             $result = mysqli_query($con,$query);
                            $row=mysqli_fetch_array($result);
                            $pid = $_GET['pid'];
                            $query2 = "SELECT p_sellprice from product_info where product_id = $pid;";
                             $result2 = mysqli_query($con,$query2);
                            $row2=mysqli_fetch_array($result2);

                           
                       }
                       else 
                     { 
                      echo "<script>alert('please log in first');
                      location.replace('login_register.php');</script>";
    
                        exit(); }

                      
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    
    <title>Mart Villa Payment Confirm</title>
</head>
 <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
	<div class="main">
        
        <section class="module">
          <div class="container">
            <div class="row">
<div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt">Checkout</h1>
              </div>              
              <div class="col-sm-5">
                <div class="shop-Cart-totalbox">

                  <h4 class="font-alt">Cart Totals</h4>
                  <br>
                    <table class="table table-striped table-border checkout-table">
                    <tbody>
                      <tr>
                        <th>Cart Subtotal :</th>
                         <td> <?php echo $row2['p_sellprice']*$_GET['quantity']. ' MMK';?></td>
                      </tr>
                      <tr>
                        <th>Shipping Total :</th>
                        <td>2000 MMK</td>
                      </tr>
                      <tr class="shop-Cart-totalprice">
                        <th>Total :</th>
                        <td><?php echo $row2['p_sellprice']*$_GET['quantity'] + 2000 . ' MMK';?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
</div>
    <div class="col-sm-6">
	<form method="post" action="https://opensandbox.ayainnovation.com/token" id="payment-form">
  <div class="form-group">
    <label for="card-element">
      <h4 class="font-alt">Payment Infomation</h4>
    </label>
  </div>

                        <input class="form-control" name="total" type='hidden' value=" <?php echo $row2['p_sellprice']*$_GET['quantity']+2000;?>" /> 
  <div class="form-group">
    <label class="sr-only" for="name">Name</label>
    <input type="text" class="form-control mb-3 StripeElement StripeElement--empty" value="<?php echo $row['name']; ?>" name="first_name">
  </div>
  <div class="form-group">
    <label class="sr-only" for="name">Phone</label>
    <input type="text" maxlength="12" pattern="\d{1,12}" class="form-control mb-3 StripeElement StripeElement--empty" value="<?php echo $row['phone_no']; ?>" name="last_name">
  </div>
  <div class="form-group">
                    <textarea class="form-control" rows="4" placeholder="Shipping Address" value="<?php echo $row['email']; ?>" data-validation-required-message="Please enter address."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>

  <div class="form-group">
    <label class="sr-only" for="name">Email</label>
    <input type="email" class="form-control mb-3 StripeElement StripeElement--empty" value="<?php echo $row['email']; ?>" name="email">

    <div id="card-element" class="form-control">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>
<div class="form-group">
   <button class="btn btn-lg btn-block btn-round btn-d" name="Checkout" type="submit">Checkout</button>
</div>
<?php 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://opensandbox.ayainnovation.com/token',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic UTZ4Q056ZjZmdW9qejFsRGxWNlB1aTRJSjNZYTpZcU9vbGlnS09ERmdib3VSVE5meHNFM3lPRVFh',
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://opensandbox.ayainnovation.com/merchant/1.0.0/thirdparty/merchant/login',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'phone=09785555948&password=333666',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/x-www-form-urlencoded',
    'Token: Bearer 94518e31-4a8c-39ce-a977-441d3f25f0d7'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://opensandbox.ayainnovation.com/merchant/1.0.0/thirdparty/merchant/requestPushPayment',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => 'customerPhone=09785555948&amount=2500&currency=MMK&externalTransactionId=2020060314170002&externalAdditionalData=PPK%20Production%20test.',
  CURLOPT_HTTPHEADER => array(
    'Token: Bearer 94518e31-4a8c-39ce-a977-441d3f25f0d7',
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Bearer f40103d9-ef44-4f73-a676-8236d609285a'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
</form>
</div>
 
             
</div>
        
</section> 
     <?php include_once('footer.php');    ?>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./js/charge.js"></script>
</body>
</html>
