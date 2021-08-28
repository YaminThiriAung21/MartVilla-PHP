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

$a=json_decode($response,true);
$access_token = $a["access_token"];
//echo $access_token;

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
    'Token: Bearer '.$access_token  
  ),
));

$response1 = curl_exec($curl);

curl_close($curl);
$b=json_decode($response1,true);
$user_token = $b["token"]["token"];
//echo $user_token;

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
    'Token: Bearer ' .$access_token,
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Bearer '. $user_token
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

echo "<script>alert('Check out complete');
                       location.replace('index1.php');</script>";


?>
