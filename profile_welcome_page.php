<?php
session_start();
include('networking_connection.php');

if(!isset($_SESSION['email'])){
  
header('location:login_networking_hub.php');
}
else{
$email = $_SESSION['email'];
      
}

?>




<?php

$query = "SELECT * FROM `login_user` WHERE  email = '$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$pic_upload = $row['pic_upload'];
$users_id = $row['users_id'];
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$username = $row['username'];
$email = $row['email'];
$password = $row['password'];
$cpass = $row['cpass'];
$town = $row['town'];
$area = $row['area'];
$home = $row['home'];
$age = $row['age'];
$contact = $row['contact'];
$about = $row['about'];
$networking = $row['networking'];
$postz = $row['postz'];
$gender = $row['gender'];








if(isset($_POST['submit'])){

$text = $_POST['text'];
$time_added = ['time_added'];

$image = $_FILES['image'];
$image = $_FILES['image']['name'];
$tmpLocation =$_FILES['image']['tmp_name'];
$fileSize = $_FILES['image']['size'];
   

$fileExt = explode('.' , $image);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg', 'jpeg','png', 'gif');

if(in_array($fileActualExt, $allowed)){

if($fileSize < 1000000){
$image = $_FILES['image']['name'] = uniqid('', true). "." . $fileActualExt;  
$target = "imagezz/".basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$target);                                                   
}


if($fileSize > 1000000){
echo"<div class='message-errors-image-alert'>";
echo"<p>Your Image File Is Large</p>";
echo"</div>";
return;
}
                            
}




if(empty($_POST['text']) or empty($_FILES['image'])){
echo"<div class='message-errors-image-alerts'>";
echo"<p>First Kindly Update Your Profile to Have access</p>";
echo"</div>"; 
}


elseif(!$text >= 1 or ($image) < 0){

echo"<div class='message-errors-image-alert'>";
echo"<p>First Kindly Update Your Profile to Have access/p>";
echo"</div>"; 

}

else{


$sql_post = "INSERT INTO `pos`(`user_id`,`text`,`image`)VALUES('$users_id', '$text','$image')";
$result_post = mysqli_query($con, $sql_post);
      
if($result_post){
echo"<div class='message-errors-post'>";
echo"<p>Posts Inserted Successfully</p>";
echo"</div>";  
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
<title>postbox</title>
<link rel="Stylesheet" href="profile_welcome.css">
</head>
<body>


<div class="main">


<?php

$sql_count = "SELECT * FROM `login_user` WHERE status=0";
$result_status = mysqli_query($con, $sql_count);
$status_count = mysqli_num_rows($result_status);


?>



<div class="registered-users">
  <h4>Registered Users</h4>
  <span class="total-users"><?php echo $status_count; ?></span>
  </div>








  


  





<?php


$sql = "SELECT * FROM `login_user` WHERE  email = '$email'";
                    
$result = mysqli_query($con, $sql);
$usercount = mysqli_num_rows($result) > 0;
                    
if(!$usercount){
echo "<p class='error-mgs'>please loggin first</p>";
header('location:login_networking_hub.php');
}
                    
if($usercount){
while($row = mysqli_fetch_assoc($result)){
                       
                    
                      
 ?>



 <div class="profile-image-defualt">
<img src="default-icons/user-default 2.png" width="280px" height="330px">
</div>
                                         
                                      
<div class="profile-image">
<img src="user-uploads/<?php echo $row['pic_upload'];?>" width="280px" height="330px">
</div>
                                        
                                      
                                       

<h1 class="welcome">WELCOME<br /><?php echo $_SESSION['email'];?></h1>
                                      
 <!----------------------------------------------NAVIAGTION AND BACKGROUNDS--------------------------------------------->

<div class="banner-holder-yellow"></div>
<div class="nav-background-1"></div>
<div class="white-post-background"></div>
<div class="top-gray"></div>






<!----------------------------------------------CDF LOGO START--------------------------------------------->
<div class="cdf-log-nav">
<img src="logos/CDF_Logo.svg.png" class="nav-logiz">
</div>
                    
                 


<nav class="navigation">

  <div class="nav-links">
  <ul>
                    
  <li><a href="networking_logout.php"><img src="user_icons/log-ouy.png" class="logout-icon">Logout</a></li>
                             
  </ul>
  </div>
                    
</nav>



                    




<div class="postbox">


<form action="#?firstname=<?php echo $firstname; ?> <?php echo $lastname; ?> <?php echo $lastname; ?>" method="POST" enctype="multipart/form-data">

<div class="form">
<div class="texarea"><textarea type="text" maxlength="201" name="text" cols="40" rows="5" placeholder="say whats on your mind"></textarea>
</div>


<div class="file">
<label for="file">
<input type="file" name="image" class="files">
</label>
</div>

<img src="user_icons/unnamed.png" class="camera" width="50px" height="50px">

<div>
  <div>
  <img src="user-uploads/<?php echo $row['pic_upload'];?>" width="50px" height="50px" class="post-small-top-img">
  </div>


<div class="usernamess">
  <p><?php echo $row['firstname']; ?>  <?php echo $row['lastname']; ?></p>
   <small>Created_On: <?php echo $row['date']; ?></small>
</div>

</div>      
                              
<div>
<img src="default-icons/user-default 2.png" width="50px" height="50px" class="post-small-defualt-img">
</div>



<div class="submit">
<button type="submit" class="btnn" name="submit">Submit</button>                
</div>

<div class="charecters">
  <span class="signal_number">0</span>
  <span class="limit_numbers">/200</span>
</div>


</form>


</div>

</div>




<div class="profile_update_instructions">
  <p>To Have Full Access Of Your Page <br />Please Update Your Profile <br />On the Left side</p>
</div>





  
  <div class="user-infor">
  
  <div class="profile-infornation">
  <p class="naming"><span class="nameis">Names:</span><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/username.png" class="user-icon">User-Names:</span> <?php echo $row['username']; ?></p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/area mapping.png" class="area-icon">Town:</span> <?php echo $row['town']; ?></p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/locatio red transparent.png" class="loacation-icon">Area:</span> <?php echo $row['area']; ?></p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/constituency.png" class="loacation-icon">constituency:</span> <?php echo $row['home']; ?></p><br />    
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/age transparent.png" class="loacation-icon">Age:</span> <?php echo $row['age']; ?></p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/enelope green.png" class="email-icon">Email:</span> <?php echo $row['email']; ?></p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/call green transparent.png" class="contact-icon">Contact:</span> <?php echo $row['contact']; ?></p><br />
    <p><img src="user_icons/greens-icons/about icon.png" class="loacation-icon"><strong>About & Specialization:</strong><br /> <?php echo $row['about']; ?></p><br />
    <p class="netting"><img src="user_icons/greens-icons/network transparent.png" class="loacation-icon"><strong>Networking Intrests:</span></strong><br /> <?php echo $row['networking']; ?></p><br />
           
           
  <center>
  <a href="networking_hub_edit_profile.php" class="btn-edit-profil-1">Update Profile</a>
  </center>


   </div>
  </div>




<!-------------------------------------------------right side ----------------------------------->


<div class="side-right">

  <div class="search">

  </div> 

  
  <div class="infor">
  <img src="user_icons/news icon black.png" class="innfo-icon"><h1>Infor</h1>
  </div>    
  
  <div class="about">
  <h1>About:</h1>
  <P><?php echo $row['about']; ?></P>
  </div>    
  
  <div class="networking">
  <h1>Networking:</h1>
  <P><?php echo $row['networking']; ?></P>
  </div>  
  
  <div class="copyright">
  <center>
  <p>Copyright 2023 
  <br />All Rights Researved
  </p>
  </center>
  </div>
  
  
</div>

<?php

    }
  }
 
?>
  




  
 
  
  




  
<!-------------------------------------------------right side ----------------------------------->


<?php
 include('networking_connection.php');
  
  $sql_posts = "SELECT * FROM pos WHERE user_id = $users_id ORDER BY post_id DESC";
  $result_posts = mysqli_query($con,$sql_posts);
  while ($row = mysqli_fetch_array($result_posts)){

      
     
  $text = $row['text'];
  $image = $row['image'];
  $time_added = $row['time_added'];
     
  
echo"<div class='poster-div'>";


echo"<div class='text-div'>";
echo"<h3>$firstname"." $lastname</h3>";
echo"<small class='date-small'>Date:$time_added</small>";
echo"<img src='user-uploads/$pic_upload' style='border-radius: 50%;' class='user-post-img' width='50px' height='50px'>";
echo"<p>".$row['text']."</p>";

echo"</div>";
                                          
                      
echo"<div class='image-div'>";
echo"<img src='imagezz/".$row['image']."' style='margin-left: 48%; transform: translate(-50%,-50%);'>";
echo"</div>";
                      
                      
echo"<div class='comment-delete'>";
                    
echo"<div class='div-1c'>";
echo"<form action='".deletePost($con)."' method='POST'>";
echo"<input type='hidden' name='post_id' value='".$row['post_id']."'>";
echo"<button type='submit'name='postDelete'><img src='user_icons/greens-icons/trash.png' class='trash'></button>";
echo"</form>";
echo"</div>";
                                      
echo"<div class='div-2c'>";
echo"<img src='user_icons/greens-icons/comment (2).png' class='comenting'>";      
echo"</div>";
                                      
echo"<div class='div-3c'>";
echo"<h4><a href='comments2.php?u_id=$users_id,post_id=".$row['post_id']."'>Comments</a></h4>";        
echo"</div>";
                      
                      
echo"</div>";
echo"</div>";
                                    
      
  
  }

  ?>


<?php
function deletePost($con){
  if(isset($_POST['postDelete'])){

    $post_id = $_POST['post_id'];
    $sql_delete = "DELETE FROM pos WHERE post_id = '$post_id'";
    $result_post_delete = mysqli_query($con, $sql_delete);

    if($result_post_delete){
      echo"<div class='message-errors-image-alert-delete'>
      <p>You Want Your Post Deleted?-click delete and refresh page</p>
      </div>";
    }
    
  }
  }
?>



  
  

  
  









</div>



<script>

   let postbox = document.querySelector(".postbox"),
   textarea = postbox.querySelector("textarea"),
   signalNumber = postbox.querySelector(".signal_number");

   textarea.addEventListener("keyup", ()=>{
      let valLength = textarea.value.length;

      signalNumber.innerText = valLength;

      (valLength > 0) ? postbox.classList.add("active") : postbox.classList.remove("active");
      (valLength > 200) ? postbox.classList.add("error") : postbox.classList.remove("error");
      console.log(valLength)

   });

</script>



  <?php
  include('connect.php');
  
  $sql_user_online = "SELECT * FROM `login_user`";
  $result = mysqli_query($con, $sql_user_online);
          
   while($row = mysqli_fetch_assoc($result)){
  
   
  ?>
  
  <div class='side-users-div'>
  <div class='users-online'>
  <img src='user-uploads/<?php echo $row['pic_upload'];?>' width='50px' height='60px' style='border-radius: 30%;'>
  </div>
    
  <div class='user-onlin-names'>
    <h4><?php echo$row['firstname'];?> <?php echo$row['lastname'];?></h4>
  </div>
  </div>
  
  
  <?php
   }
  
  ?>


                    
</body>
</html>