<?php
include ('dblink.php');
include ('common.php');


    
     if(isset($_SESSION['user_id']) && isset($_SESSION['login']))
     {
        $uid=$_SESSION['user_id'];
        $sql="SELECT name FROM user_info WHERE id='".$uid."'";
        $res= mysqli_query($con, $sql);
        $row=mysqli_fetch_array($res);
        $qid=$_GET['question_id'];
  
         
     }
?>
<?php
         $query1 = "
        SELECT * FROM d as d , user_info as u
        WHERE parent_question_id = '0' and d.comment_sender_id=u.id and d.question_id=$qid
        ORDER BY question_id DESC";
        $res2= mysqli_query($con, $query1) or die( mysqli_error($con));
        
    $row2=mysqli_fetch_array($res2);
    if($row2["type"]==1)
    {
      $category="Fashion";
    }
    elseif ($row2["type"]==2)
    {
      $category="Electronic";
    }
    else
    {
      $category="Restaurant";
    }
         
            
 ?>
 <?php
if(isset($_POST['submit'])){
if (isset($_SESSION['user_id']) && isset($_SESSION['login'])) {
$uid = $_SESSION['user_id'];
 $name = $_POST["name"];
 $content = $_POST["content"];
 
 $type =$row2["type"];

 $query = "
 INSERT INTO d 
 (parent_question_id, comment, comment_sender_id,  type, comment_sender_name) 
 VALUES ($qid,'$content','$uid','$type','$name');";
  $res0 = mysqli_query($con,$query) or die( mysqli_error($con));
 
echo "<script>alert('Answer Submitted'); 
location.replace('discussion1.php');</script>"; 

echo "<meta http-equiv='refresh' content='0'>";
}
 else
                      echo "<script>alert('please log in first');
                      location.replace('login_register.php');</script>";
    
                        exit(); 
                    
                        }
?>
  <section class="module">
          <div class="container">
            <div class="row">
            <h1 class="module-title font-alt mb-0">Please Answer the Question</h1>
<hr class="divider-w mt-10 mb-20">
  <div class="panel panel-default">
  <div class="panel-heading">By <b><?php echo $row2["comment_sender_name"];?></b> on <i><?php echo $row2["date"];?></i> <p align="right">This Question related with <?php echo $category;?></p></div>

  <div class="panel-body"><?php echo $row2["comment"];?></div>
  <div class="panel-footer" align="right"> 
  	<form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="name" id="name" class="form-control" value="<?php
     echo $row['name'];?> " >
    </div>
    
    <div class="form-group">
     <textarea name="content" id="content" required="required" class="form-control" placeholder="Enter Your Answer" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="question_id" id="question_id" value="0" />
  </div>
   <div class="form-group">
  <input class="btn btn-block btn-round btn-d" type="submit" name="submit" id="submit"  value="Submit"/>
   <hr class="divider-w mt-10 mb-20">
   </div>
</form>
 </div>
