<?php
session_start();
include('connect.php');

if(!isset($_SESSION['email']) || $_SESSION['email'] == ""){
  
header('location:login.php');
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
$id = $row['id'];
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






if(isset($_POST['submit-post'])){

$posts = $_POST['posts'];


if(isset($_FILES['file']) && !empty($_FILES['file'])){
  $upload_image = $_FILES['upload_image']['name'];
  $TmpLocation = $_FILES['upload_image']['tmp_name'];
  $fileSize = $_FILES['upload_image']['size'];
  $fileError = $_FILES['upload_image']['error'];
  $fileType = $_FILES['upload_image']['type'];
  
  
$fileExt = explode('.' , $upload_image);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg', 'jpeg','png', 'gif');


if(in_array($fileActualExt, $allowed)){

  if($fileError === 0){
   

   if($fileSize < 1000000){
        
$fileNameNew = uniqid('', true). "." . $fileActualExt;
$fileDestination = "posts_image_uploads/".$fileNameNew;
move_uploaded_file($_FILES['upload_image']['tmp_name'],$fileDestination); 

     $sql = "INSERT INTO `post`(`id`,`user_id`, `posts`, `firstname`, `lastname`,`upload_image`, `pic_upload`) VALUES (null,'$id', '$posts', '$firstname','$lastname',' $fileDestination', '$pic_upload')";
   $result = mysqli_query($con, $sql);


   if($result){
   $email = $_SESSION['email'];
   header('location:profile.php?infor2 posts was successful!!!');
  }

  else{
  header('location:profile.php?infor posts was not successful!!!');
  }



    
   }
    else{
     header('location: edit13.php?you file is too big');
    }

    }

  else{
    echo "there was something wrong";
   }



  }



  else{
    echo "you cant upload files of this nature";
   }
}



 }

    ?>






<!---------------------------------------------if is set for  notification----------->




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <link rel="stylesheet" href="profile4.css">
</head>
<body>

<?php

$sql_notification = "SELECT * FROM comment WHERE status=0";
$result_notification = mysqli_query($con, $sql_notification);
$notification_count = mysqli_num_rows($result_notification);



?>


<div class="not-count">
  <p><?php echo $notification_count; ?></p>
</div>




<div class="notification-top-img-box">




  <ul>
  <li><a href="#"><img src="notifications/messeg recived transparent-green.png" ></a></li>

  <li><a href="#"><p class="noti">Notifications</p></a></li>


  <li><a href="#"><img src="notifications/ask arrow transparent.png" class="arrow">

<?php

$sql_notification1 = "SELECT * FROM comment WHERE status=0";
$result_notification1 = mysqli_query($con, $sql_notification1);
$notification_count1 = mysqli_num_rows($result_notification1)>0;

if($notification_count1){
while($row = mysqli_fetch_assoc($result_notification1)){

  echo '<div class="arrow_submenu">
  <ul>
    <li><a href="#"></a>'.$row['comments'].'</li>
  </ul>
  </div>
  
  </a></li>

</ul>
 </div>';


}



}

?>








  
  
  <?php


  $sql = "SELECT * FROM `login_user` WHERE  email = '$email'";
  
  $result = mysqli_query($con, $sql);
  $usercount = mysqli_num_rows($result) > 0;
  
  if(!$usercount){
  echo "<p class='error-mgs'>please loggin first</p>";
  header('location:login.php');
  }
  
  if($usercount){
    while($row = mysqli_fetch_assoc($result)){
     
  
    
  ?>

  
<div class="top-gry">

</div>



<div class="banner-holdder-yellow">

</div>
  
<!---------------------------------notification checking query---------section------->



  <div class="main-container">

  
  <div class="profile-image-defualt">
  <img src="default-icons/user-default 2.png" width="280px" height="330px">
  </div>
   

    <div class="profile-image">
      <img src="user-uploads/<?php echo $row['pic_upload'];?>" width="280px" height="330px">
    </div>
  
  
    

       
  <h1 class="welcome">WELCOME<br /><?php echo $_SESSION['email'];?></h1>
      
  

      <div class="nav-background"> </div>
      <div class="nav-background-1">
        
      </div>

     
  


      <nav class="navigation">

        

          
      
           <div class="nav-links">
            <ul>
            <li><a href="nav-search.php"><img src="user_icons/search 5.png">Search</a></li>
             <li><a href="design.php"><img src="user_icons/house icon-black.png">Home</a></li>
             <li><a href="form-downloads.php"><img src="user_icons/news icon black.png" class="user-icon">Form Downloads</a></li>
             <li><a href="profile.php"><img src="user_icons/user black.png" class="user-icon">User Profile</a></li>
             <li><a href="contact.php"><img src="user_icons/call.png" class="user-icon">Contact</a></li>
             <li><a href="logout.php"><img src="user_icons/log-ouy.png" class="user-icon">Logout</a></li>
             <li><a href="edit13.php"><img src="user_icons/settings icon-black.png" class="settings-icon">Settings</a></li>
             </ul>
           </div>


           <div class="cdf-log-nav">
          <img src="logo/CDF_Logo.svg.png" class="nav-logiz">
       
           </div>


          
  
       
      </nav>

 
      
  </div>

<!------------------------------------------------midddles section--------------------------------------->

<hr>
<section class="middle-section">

  <div class="background-middle">


    <div class="profile-name-infor">
        <div class="profile-infor1">
          <p>Names: <?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></p><br />
           <p>Names: <?php echo $row['username']; ?></p><br />
          <p>Town: <?php echo $row['town']; ?></p><br />
          <p>Area: <?php echo $row['area']; ?></p><br />
          <p>constituency: <?php echo $row['home']; ?></p><br />
 
          <p>Age: <?php echo $row['age']; ?></p><br />
          <p>Email: <?php echo $row['email']; ?></p><br />
          <p>Contact: <?php echo $row['contact']; ?></p><br />
          <p><strong>About & Specialization:</strong><br /> <?php echo $row['about']; ?></p><br />
          <p class="netting"><strong>Networking Intrests:</strong><br /> <?php echo $row['networking']; ?></p><br />

               <center>
               <a href="edit13.php" class="btn-edit-profil-1">Update Profile</a>
               </center>
            
          
        </div>
    </div>

<!------------------------------------------------------------------------------------------------------ending of purple backgroun container 1-->


<div class="linner"></div>



<div class="profile-name-about">
  <div class="profile-infor-about1">
 
      <h4>ABOUT:</h4>
        <br />
       <p><?php echo $row['about']; ?></p>

  
        
         <h4 class="luka">Looking To Connect With:</h4>
         <br />
         <p class="connect"><?php echo $row['networking']; ?></p>
   
    
    
  </div>
</div>


<!------------------------------------------------------------------------------------------------------ending of purple backgroun container 2-->



  </div>

  
  
</section>

<div class="profil-pic-green">
      <img src="creative-profile-art/green profil.png" class="profil-green">
      </div>
  
      <div class="green">
      <img src="creative-profile-art/green below2.png" class="green-below-1">
  
      </div>
     

      <!-------------------------------------------------------------------------------posts section--------------------------------------->

  <div class="Posts-main-container">
    <div class="posts-box">

      <div class="form-boxing">
       <form action="profile.php?user_id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data" id="post_form"> 

      <div>
        <textarea type="text" name="posts" id="posts" placeholder="Write Your Posts Here!!!!" class="textarea-post"></textarea>
      </div>

      <div>
        <lable>
         <input type="file" name="upload_image" id="upload_image" class="input-file-upload-post">
        </lable>
      </div>


      <div>
        <button class="submit-button-post" name="submit-post" id="submit-post">Post</button>
      </div>

       </form>

     
      </div>


      <!-------------------------------------------firm ending design------------------------------------------>


   <!-------------------------------------------------------------user add icon------------------------------>


      <div class="top-img-small-pic-container">
       <img src="user-uploads/<?php echo $row['pic_upload'];?>" width="50px" height="50px" class="post-small-top-img">
       <img src="default-icons/user-default 2.png" width="50px" height="50px" class="post-small-defualt-img">
       <img src="user_icons/add camera.png" width="60px" height="50px" class="post-small-add-camera-img2">
       <h1 class="add-pic-post">Add pic</h1>
      </div>

   <!-------------------------------------------------------------user add icon end------------------------------>
      
      
      <div class="username-posts">
        <h1 class="post-name-user"><?php echo $row['firstname']; ?>  <?php echo $row['lastname']; ?></h1>
        <small>Page created_Date: <?php echo $row['date']; ?> </small>
      </div>


    </div>
  
  </div>


  <?php


} 
}


?>




<?php

$sql_post = "SELECT * FROM post WHERE user_id = '$id' ORDER BY id DESC";

$result_post = mysqli_query($con, $sql_post);
$postcount = mysqli_num_rows($result_post) > 0;

if($postcount){

while($row = mysqli_fetch_assoc($result_post)){
$id = $row['id'];
$user_id = $row['user_id'];
$posts = $row['posts'];
$pic_upload = $row['pic_upload'];
$upload_image = $row['upload_image'];
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$date_added = $row['date_added'];

?>


<div class="text-post-contain">

  <div class="text-postsss">

    <div class="user-small-img">

       <div>
      <img src="user-uploads/<?php echo $row['pic_upload'];?>" width="50px" height="50px" style="border-radius:50%" class="user-small-img1">
      <img src="default-icons/user-default 2.png" width="50px" height="50px" style="border-radius:50%"  class="post-small-defualt">
      </div>

      <div>
        <a href="delete_post.php"><button  class="delete1">Delete</button></a>
        <a href="edit_post.php"><button class="edit1">Edit</button></a>
      </div>




    </div>

  <!--------------------------------------names div ------------------------------------->
    <div class="names-div">

     <div>
      <p class="fname"><?php echo $row['firstname'];?></p>
     </div>

     <div>
      <p class="lname"><?php echo $row['lastname'];?></p>
     </div>

    </div>

    <p class="dated-added"><?php echo $row['date_added'];?></p>
   <!--------------------------------------names div ------------------------------------->
   
  
   <div>
    <p><?php echo $row['posts'];?></p>

    <?php
    if(!empty($image_upload)){
     echo"<img src='posts_image_uploads".$image_upload."' style='margin-left: 24%' width='50%' height='100%'  class='imaging'>";
    }
    
    ?>
    
   </div>
  
   
   
  </div>

  <div class="comments">
    <div>
      <a href="notifications.php"><img src="notifications/messeg recived transparent-green.png" class="recived-notification"></a>
    </div>


    <div class="not-count1">
      <p><?php echo $notification_count; ?></p>
    </div>
    
 
    <a href="Comments.php">Comments</a>
    </div>

</div>



<?php


 }

}

?>











</body>
</html>