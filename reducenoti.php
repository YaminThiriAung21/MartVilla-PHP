<?php  
  include 'dblink.php';
$update_query = "UPDATE d SET seen = 1 WHERE seen=0";
                                     $update = mysqli_query ($con,$update_query);
                                     $noRows=mysqli_num_rows($ret);
                                     $update_seen = mysqli_fetch_array($update);
                                     location.replace('discussion1.php');


 ?>