<?php 
include('dblink.php');
                            // $date = date('Y-m-d H:i:s');
                            // $oh_info = "SELECT    *
                            // FROM      orderhistory_info
                            // ORDER BY  order_id DESC
                            // LIMIT     1;";
                            //  $result = mysqli_query($con,$oh_info) or die( mysqli_error($con));
                            //  $r=mysqli_fetch_array($result);
                            //  $oid =$r['order_id']+1;
                   if(isset($_POST['submit']))
                   {
                             $inserthistory="INSERT INTO orderhistory_info VALUES (1, 1, 1, 'ssss', 1111,1111);";
                              $res1 = mysqli_query($con,$inserthistory) or die( mysqli_error($con));
                             
                        }

                    
                   ?>
                    <form action="" method="post">
                  <button class="btn btn-lg btn-block btn-round btn-d" name="submit" type="submit">Proceed to Checkout</button>
                  </form>