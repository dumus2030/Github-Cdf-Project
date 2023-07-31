<?php
include('connect.php');
session_start();

if(!isset($_SESSION['email']) || $_SESSION['email'] == ""){
 header('location:login.php');
}
else{
$email = $_SESSION['email'];    
}

?>



<?php

$sql = "SELECT * FROM `login_user` WHERE email = '$email'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$users_id = $row['users_id'];
$_SESSION['email'] = $row['email'];
$_SESSION['firstname'] = true;
$_SESSION['lastname'] = true;
$pic_upload = $row['pic_upload'];


if(isset($_POST['submit_comment'])){


if(empty($_POST['comments']) or empty($_POST['names'])){
  echo"<div class='message-errors-image-alerts'>";
  echo"<p>kindly insert names and comment</p>";
  echo"</div>"; 
}



else{





$names = $_POST['names'];
$comments = $_POST['comments'];
 
$select_1 = "SELECT * FROM login_user WHERE users_id = '$users_id'";
$run_1 = mysqli_query($con,$select_1);
$usercount1 = mysqli_num_rows($run_1) > 0;
while($row = mysqli_fetch_array($run_1)){

  $users_id = $row['users_id'];
  $pic_upload = $row['pic_upload'];
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
  

  $sql_pos_comment = "SELECT * FROM pos WHERE user_id = '$users_id'";
  $result_pos_comment = mysqli_query($con, $sql_pos_comment);
  $row = mysqli_fetch_assoc($result_pos_comment);
  $post_id = $row['post_id'];
  
  
  
  $sql_comment = "INSERT INTO `tbl_comment`(`cuser_id`, `user_comment_id`, `names`, `comments`)VALUES('$users_id','".$row['post_id']."', '$names','$comments')";
  $result_comment = mysqli_query($con, $sql_comment);
  
  $sql_pos_comments = "SELECT * FROM tbl_comment WHERE cuser_id = '$users_id'";
  $result_pos_comments = mysqli_query($con, $sql_pos_comments);
  $row = mysqli_fetch_assoc($result_pos_comments);
  $users_id = $row['cuser_id'];
  
  
  if($result_comment){
  header('location:comments_uid.php?comments inserted successfully');
  }
  
  else{
  header('location:comments_uid.php?comments were not inserted');
  }

}
  
  



}

}






























if(empty($_POST['names_user']) or empty($_POST['replied_comments'])){
  echo"<div class='message-errors-image-alerts'>";
  echo"<p>kindly insert names and reply</p>";
  echo"</div>"; 
}


else{

$names_user = $_POST['names_user'];
$replied_comments = $_POST['replied_comments'];
$reply_commented_id = $_POST['reply_commented_id'];

$sql_replies = "INSERT INTO `repliez`(`replies_user_id`, `names_user`,`reply_commented_id`, `replied_comments`)VALUES('$users_id', '$names_user', '".$row['post_id']."','$replied_comments')";
$result_replies= mysqli_query($con, $sql_replies);

if($result_replies){
  header('location:comments_uid.php?replies inserted successfully');
  }
        
  else{
  header('location:comments_uid.php?replies were not inserted');
  }
}

        

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>comment Page final</title>
<link rel="stylesheet" href="comments1.css">
</head>
<body>

<section class="header">
  
<!----------------------------------------------------------Start of user divs------------>

    <div class="poster-user-name-pic">

    <?php 
    $sql_1 = "SELECT * FROM `login_user` WHERE email = '$email'";
    $result_1 = mysqli_query($con, $sql_1);
    while($row = mysqli_fetch_assoc($result_1)){


   ?>
    <div class="center-user-details">
      <img src="user-uploads/<?php echo $row['pic_upload'];?>" width="190px" height="190px">
      <h1><?php echo $row['firstname'];?> <?php echo $row['lastname'];?>'s Post</h1>
      <hr>
      </div>

    </div>  
    
    <?php
       }
    ?>
<!----------------------------------------------------------end of user divs------------>


<div class="form-diving">
      
     <div class="form">
       <form action="comments_uid.php" method="post" id="form-boxing">
         <div class="input-field">
         <input type="text" name="names" cu_id="'.$row['cusers_id'].'" placeholder="Add Your Names">
         </div>

         <div class="input-field">
          <textarea type="text" name="comments" id="comments" placeholder="Add Your Comment"></textarea>
         </div>
          <center>
        
          <a href="comments_uid.php"><button type="submit_comment" name="submit_comment" id="'.$row['comment_id'].'">Comment</button></a>
          </center>
          <hr class="hr1">
       </form>
     </div>       
     
<!------------------------------------------------------------------------------------Form div---->


<?php

$sql_count = "SELECT * FROM `tbl_comment` WHERE cuser_id = '$users_id' AND status='0'";
$result_status = mysqli_query($con, $sql_count);
$status_count = mysqli_num_rows($result_status);

?>

<div class="number-of-comments">Comments <?php echo $status_count;?> </div>






<?php
  include('connect.php');
  $sql_posts = "SELECT * FROM tbl_comment WHERE cuser_id = '$users_id' ORDER BY comment_id DESC";
 
  $result_posts = mysqli_query($con,$sql_posts);
  $num = mysqli_num_rows($result_posts) > 0;


  while ($row = mysqli_fetch_array($result_posts)){
  
  $users_id = $row['cuser_id'];
  $user_comment_id = $row['user_comment_id'];
  $names= $row['names'];



?>


<!------------------------------------------------------------------------------------Start of commenting div---->
<div class="commenting">

<div>
<img src="user-uploads/64011d8ce06dd2.37208251.jpg" width="70px" height="70px" style="border-radius: 50%;">
</div>

<div>
<h2><?php echo$row['names'];?></h2>
<p> <?php echo $row['comments'];?> </p>
</div>

</div>

<!-----------------------------------------------------------------------------------end -comment and reply div---->

<?php
  }
?>



<!---------------------------------------------repliies buttons section--------------------------------------------------->


<div class="flexing-replies">

<div>
<div class="rep"><button class="reply-button" onclick="setVisibility('showreplies-inputs','inline');">Reply</button></div>
</div>
            
            
<div>
<div class="rep"><button class="reply-button1" onclick="setVisibility('reply-visible','inline');">ViewReplies</button></div>
</div>
            
            
<div>
<div class="rep"><button class="reply-button3" onclick="setVisibility('showreplies-inputs','none');">Close Reply</button></div>
</div>
            
            
<div>
<div class="rep"><button class="reply-button4" onclick="setVisibility('reply-visible','none');">Close ViewReplies</button></div>
</div>
            
</div>

 <!------------------------------------------------------reply form -------------------------------------------------------->
 <?php 
    $sql_1 = "SELECT * FROM `login_user` WHERE email = '$email'";
    $result_1 = mysqli_query($con, $sql_1);
    while($row = mysqli_fetch_assoc($result_1)){

      $users_id = $row['users_id'];
      $firstname= $row['firstname'];
      $lastname= $row['lastname'];
    

   ?>

<div class="form-reply">
  <div id="showreplies-inputs"><!---------------------------------------showreplies-inputs-container-->

      <form action="comments_uid.php" method="post">
        <div class="input-field">
        <input type="text" name="names_user"  placeholder="@<?php echo $row['firstname'];?> <?php echo $row['lastname'];?>">
        </div>


        <?php
       }
    ?>





        <div class="input-field">
         <textarea class="reply-textarea" type="text" name="replied_comments" id="replied_comments" placeholder="Add Your Comment"></textarea>
        </div>
         <center>


           <button class="reply-btn-submit" type="submit" name="submit_comment" id="'.$row['comment_id'].'">Reply</button>
         </center>
         <hr class="hr1">
      </form>

   </div><!---------------------------------------End showreplies-inputs-container-->
</div>       

<?php

$sql_replies_status = "SELECT * FROM repliez WHERE replies_user_id = '$users_id' AND status='0'";
$sql_replies_status_result = mysqli_query($con,$sql_replies_status);
$num_replies_status_result = mysqli_num_rows($sql_replies_status_result);
?>

<div class="number-of-replies">Replies <?php echo $num_replies_status_result;?></div>


<?php
  include('connect.php');
 
  $sql_3 = "SELECT * FROM `login_user` WHERE email = '$email'";
  $result_3 = mysqli_query($con, $sql_3);
  while($row = mysqli_fetch_assoc($result_3)){
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $pic_upload = $row['pic_upload'];

?>

    
<div class="number-of-replies1">

  <div class="commenting-replies" id="reply-visible">
     
      <div>
      <img src='user-uploads/<?php echo $row['pic_upload'];?>' width='70px' height='70px'style='border-radius: 50%;'>
      </div>

    <div>
    <h2><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></h2>

<?php
}
?>





<?php
$sql_reply = "SELECT * FROM repliez WHERE replies_user_id = '$users_id' ORDER BY reply_id DESC";
 
 $result_reply = mysqli_query($con,$sql_reply);
 $num_reply = mysqli_num_rows($result_reply)> 0;
 while($row = mysqli_fetch_array($result_reply)){
  $replied_comments = $row['replied_comments'];

  echo"<p>".['replied_comments']."</p>";

 }

?>

    </div>

    
  </div>
</div>



<!--------------------------------------------end of number of replies1 div------------>


</div>











  
</section>

<div class="user-background-pic">
  <img src="user-uploads/64011ce1801535.82882601.jpg" width="100%" height="160%">
</div>



<div class="background-black">
</div>





<script>
function setVisibility(id,visibility){
document.getElementById(id).style.display=visibility;
}
     
</script>
           
</body>
</html>
