<?php
session_start();
include ('dblink.php');
include( "common.php" );




if (isset($_POST['register_btn'])){
  $product_info = "SELECT    *
FROM      user_info
ORDER BY  id DESC
LIMIT     1;";
$result = mysqli_query($con,$product_info);
$r=mysqli_fetch_array($result);
$id =$r['id']+1;

  
  $username = $_POST['username'];
  $phone=$_POST['phone_no'];
  $address=$_POST['address'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['re-password'];
  $job=$_POST['rdbtn'];
  
// '{$username}','{$phone}','{$address}','{$email}','{$password}','{$job}'
  if ($password == $password2){
    //create user
   // hash password before storing for security purposes :$password =md5($password);
    $sql2 = "INSERT INTO user_info VALUES($id, '$username','$phone','$address','$email','$password','$job');";
    mysqli_query($con, $sql2)  or die( mysqli_error($con));
    echo "<script>alert('Account has been created.Please Login.')</script>";
    //header("location: login_register.php"); 
  }
  else{
  echo "<script>alert('Password not match')</script>";
}
  }
?>
 
  <!DOCTYPE html>
  <html>
  <head>
    <title>Mart Villa Login Signup</title>
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
              
              <div class="col-sm-5 col-sm-offset-1 mb-sm-40">
                <h4 class="font-alt  mb-20 titan-title-size-5">Login As Seller</h4>
                <hr class="divider-w mb-10">
                <form class="form" action="login.php" method="post">
                  <div class="form-group">
                    <input class="form-control" id="email" type="text" required="required" name="email" value="" /> 
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="password" required="required" type="password" name="password" placeholder="Password"/>
                  </div>
                  <div class="form-group">
                     <input type="radio" value="Seller" name="rdbtn" required="required"/> 
                    <label class="font-alt" for="Seller">Seller</label><br>
                    <input type="radio" class="hidden" checked="checked" value="Buyer" name="rdbtn" />
                     
                  </div>
                  <div class="form-group">
                    <button class="btn btn-round btn-b"  type="submit" name="login_btn">Login</button>
                  </div>
                </form>
              </div>
               <h4 class="font-alt mb-20 titan-title-size-5">Register As Seller</h4>
              <div class="col-sm-5">
                
                <hr class="divider-w mb-10">
                <form class="form" method="post" action="#" name="myform">
                  <div class="form-group">
                    <input class="form-control" id="username" type="text" required="required" name="username" value="Name" />
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone_no" required="required"  maxlength="12" pattern="\d{1,12}" type="text" name="phone_no" placeholder="phone" /> 
                  </div>
                   <div class="form-group">
                    <input class="form-control" id="address" required="required" type="text" name="address" placeholder="Address"/>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email"  required="required" type="email" name="email" value="" /> 
                  </div>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  <div class="form-group">
                    <input class="form-control" id="password" required="required" type="password" name="password" placeholder="Password" />
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="repassword" required="required" type="password" name="re-password" placeholder="Re-enter Password" />
                  </div>
                <div class="form-group">

                    
                    <input type="radio" value="Seller" name="rdbtn" required="required"/> 
                    <label class="font-alt" for="Seller">Seller</label><br>
                    <input type="radio"  class="hidden"  value="Buyer" name="rdbtn" />
                  </div>
                   
                    

                  <div class="form-group">
                    <button class="btn btn-block btn-round btn-b" type="submit" name="register_btn" > Register</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                      <script type="text/javascript">
                        
                        $('input[name="rdbtn"]').on('change',function()
                        {
                          $('select[name="selectCategoried"]').attr('disabled',this.value!="Seller")
                        });

                      </script>       
                     
      <?php include_once('footer.php'); ?>
  </body>
</html>