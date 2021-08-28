<?php
session_start();
include("dblink.php");

if (isset($_POST['login_btn']))
{
	$email =  $_POST['email'];
    $password= $_POST['password'];
    
    $type= $_POST['rdbtn'];

    $sql ="SELECT * FROM user_info where email='$email' && seller_buyer='$type'";

    $res= mysqli_query($con, $sql);
     while($row=mysqli_fetch_assoc($res)){
        $fetchid=$row['id'];
        $fetchpwd=$row['password'];
        $rdvalue=$row['seller_buyer'];
       
    }
    $num=mysqli_num_rows($res);
    
    if($num>0){

    if (strcmp($password,$fetchpwd ) == 0) {
    
    if (strcmp($rdvalue, "Seller") == 0) {
    $_SESSION['login'] = "seller";
    $_SESSION['user_id'] = $fetchid;
    session_write_close();
    header("location: index_seller.php");
    exit();
    }
    if (strcmp($rdvalue, 'Buyer') == 0) {
        $_SESSION['login'] = "buyer";
        $_SESSION['user_id'] = $fetchid;
        session_write_close();
        header("location: index1.php");
        exit();
    }
    
    }
    else{
  echo "<script>alert('Wrong Password');
    location='login_register.php';
    </script>";
}
}
 else{
  echo "<script>
alert('No account Matched');
location='login_register.php';
</script>";
}
 }

?>