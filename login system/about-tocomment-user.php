<?php
include('connect.php');
session_start();

if(!isset($_SESSION['email'])){
 header('location:login.php');
}
else{
$email = $_SESSION['email'];    
}

?>




<?php

if(isset($_POST['submit_comment'])){
      
  
if(empty($_POST['comments']) or empty($_POST['names'])){
  echo"<div class='message-errors-image-alerts'>";
  echo"<p>kindly insert names and comment</p>";
  echo"</div>"; 
}

else{

$names = $_POST['names'];
$comments = $_POST['comments'];

$sql_comment = "INSERT INTO `tbl_comment`(`cuser_id`, `user_comment_id`, `names`, `comments`)VALUES('$users_id','".$row['post_id']."', '$names','$comments')";
$result_comment = mysqli_query($con, $sql_comment);

if($result_comment){
header('location:users-comment.php?comments inserted successfully');
}

else{
header('location:users-comment.php?comments were not inserted');
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

$sql_replies = "INSERT INTO `repliez`(`replies_user_id`, `names_user`, `replied_comments`)VALUES('$users_id', '$names_user', '$replied_comments')";
$result_replies= mysqli_query($con, $sql_replies);

if($result_replies){
  header('location:users-comment.php?replies inserted successfully');
  }
        
  else{
  header('location:users-comment.php?replies were not inserted');
  }
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



<div class='poster-user-name-pic'>

<?php
    
if(isset($_GET['users_id'])){

$users_id = $_GET['users_id'];
}

if($users_id <0 || $users_id == ""){
header('location:profile_users.php?no user availbale');
}

else{ 

if(isset($_GET['users_id'])){
global $con;

$user_id = $_GET['users_id'];


$select_2 = "SELECT * FROM login_user WHERE users_id = '$user_id'";
$run_2 = mysqli_query($con,$select_2);                   
$row = mysqli_fetch_array($run_2);
$pic_upload = $row['pic_upload'];
$users_id= $row['users_id'];
$firstname = $row['firstname'];
$lastname = $row['lastname'];

echo"
<div class='center-user-details'>
<img src='user-uploads/".$row['pic_upload']."' width='190px' height='190px'>
<h1>".$row['firstname']." ".$row['lastname']."s Post</h1>
<hr>
</div>
         
";


  }

}

?>


</div>  
    
<!----------------------------------------------------------end of user divs------------>





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

<div class="form-reply">
  <div id="showreplies-inputs"><!---------------------------------------showreplies-inputs-container-->

      <form action="users-comment.php" method="post">
        <div class="input-field">
        <input type="text" name="names_user" id="<?php echo $row['users_id'];?>" placeholder="Add Your Names">
        </div>

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
 
  $sql_reply = "SELECT * FROM repliez WHERE replies_user_id = '$users_id' ORDER BY reply_id DESC";
 
  $result_reply = mysqli_query($con,$sql_reply);
  $num_reply = mysqli_num_rows($result_reply)> 0;

  while ($row = mysqli_fetch_array($result_reply)){
   
?>

    
<div class="number-of-replies1">

  <div class="commenting-replies" id="reply-visible">
     
      <div>
      <img src='user-uploads/<?php echo $row['pic_upload'];?>' width='70px' height='70px'style='border-radius: 50%;'>
      </div>

    <div>
    <h2><?php echo $row['names_user'];?></h2>
     <p><?php echo$row['replied_comments'];?></p>
    </div>

    
  </div>
</div>

<?php

  }
?>

<!--------------------------------------------end of number of replies1 div------------>


</div>



  
</section>











<section class="comment-another-users3">
<div class="form-diving">
      
<div class="form">
<form action="about-tocomment-user.php" method="post" id="form-boxing">


<div class="input-field">
<input type="text" name="names" id="names" placeholder="Add Your Names">
</div>

<div class="input-field">
<textarea type="text" name="comments" id="comments" placeholder="Add Your Comment"></textarea>
</div>
<center>
        
<a href="#"><button type="submit_comment" name="submit_comment" id="'.$row['comment_id'].'">Comment</button></a>
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
  
  $cuser_id = $row['cuser_id'];
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
