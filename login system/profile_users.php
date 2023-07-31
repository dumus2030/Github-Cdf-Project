<?php
session_start();
include('connect.php');

if(!isset($_SESSION['email'])){
  
header('location:login.php');
}
else{
$email = $_SESSION['email'];
      
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>users profile page</title>
  <link rel="Stylesheet" href="profile_user.css">
</head>
<body>


  <div class="main">


                  
    <!----------------------------------------------NAVIAGTION AND BACKGROUNDS--------------------------------------------->
   
   <div class="banner-holder-yellow"></div>
   <div class="nav-background-1"></div>
   <div class="white-post-background"></div>
   <div class="top-gray"></div>
   
   
   
   
   
   
   <!----------------------------------------------CDF LOGO START--------------------------------------------->
   <div class="cdf-log-nav">
   <img src="logo/CDF_Logo.svg-white.png" class="nav-logiz">
   </div>
                       
                    
   
   
   <nav class="navigation">
   
   <div class="nav-links">
   <ul>
   <li><a href="search.php"><img src="user_icons/search 5.png">Find Friends</a></li>
   <li><a href="users.php"><img src="user_icons/house icon-white.png">All Users</a></li>
   <li><a href="form-downloads.php"><img src="user_icons/news icon white.png" class="user-icon">Form Downloads</a></li>
   <li><a href="profile.php"><img src="user_icons/user black-white.png" class="user-icon1">Back To Your Profile</a></li>
   <li><a href="contact.php"><img src="user_icons/call-white.png" class="user-icon">Contact</a></li>
   <li><a href="logout.php"><img src="user_icons/log-out-red.png" class="user-icon">Logout</a></li>
   <li><a href="edit13.php"><img src="user_icons/settings icon-white.png" class="settings-icon">Settings</a></li>           
   </ul>
   </div>
                       
   </nav>


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
    
if(isset($_GET['users_id'])){

$users_id = $_GET['users_id'];
}




if($users_id <0 || $users_id == ""){
header('location:profile_users.php?no user availbale');
}

else{ 

if(isset($_GET['users_id'])){
global $con;

$users_id = $_GET['users_id'];

$select_1 = "SELECT * FROM login_user WHERE users_id = '$users_id'";
$run_1 = mysqli_query($con,$select_1);



$row = mysqli_fetch_array($run_1);
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


echo"
<div class='profile-image-defualt'>
  <img src='default-icons/user-default 2.png' width='280px' height='330px'>
</div>
                                           
                                        
<div class='profile-image'>
<img src='user-uploads/".$row['pic_upload']."' width='280px' height='330px'>
</div>
                                          
                                        
                                         
  
<h1 class='welcome'>This Is<br />".$row['firstname']."  ".$row['lastname']."'s Profile Page</h1>
  
  
              
  
<div class='postbox'>
  
<form action='#?firstname=<?php echo $firstname; ?> <?php echo $lastname; ?>' method='POST' enctype='multipart/form-data'>
  
<div class='form'>
<div class='texarea'><textarea type='text' maxlength='201' name='text' cols='40' rows='5' placeholder='say whats on your mind'></textarea>
</div>
  
<div class='file'>
<label for='file'>
<input type='file' name='image' class='files'>
</label>
</div>
  
<img src='user_icons/unnamed.png' class='camera' width='50px' height='50px'>
  
<div>


<div>
<img src='user-uploads/".$row['pic_upload']."' width='50px' height='50px' class='post-small-top-img'>
</div>
  
  
<div class='usernamess'>
<p>".$row['firstname']." ".$row['lastname']."</p>
<small>Created_On: ".$row['date']."</small>
</div>
  
</div>      
                                
<div>
<img src='default-icons/user-default 2.png' width='50px' height='50px' class='post-small-defualt-img'>
</div>
  
<div class='submit'>
<button type='submit' name='submit'>Submit</button>                
</div>
  
<div class='charecters'>
<span class='signal_number'>0</span>
<span class='limit_numbers'>/200</span>
</div>
  
</form>
  
  
</div>
  
</div>
  
  
    
<div class='user-infor'>
    
<div class='profile-infornation'>
<p class='naming'><span class='nameis'>Names:</span>".$row['firstname']."  ".$row['lastname']."</p><br />
<p class='naming'><span class='nameis'><img src='user_icons/greens-icons/username.png' class='user-icon'>User-Names:</span> ".$row['username']."</p><br />
<p class='naming'><span class='nameis'><img src='user_icons/greens-icons/area mapping.png' class='area-icon'>Town:</span>".$row['town']."</p><br />
<p class='naming'><span class='nameis'><img src='user_icons/greens-icons/locatio red transparent.png' class='loacation-icon'>Area:</span>".$row['area']."</p><br />
<p class='naming'><span class='nameis'><img src='user_icons/greens-icons/constituency.png' class='loacation-icon'>constituency:</span>".$row['home']."</p><br />    
<p class='naming'><span class='nameis'><img src='user_icons/greens-icons/age transparent.png' class='loacation-icon'>Age:</span> ".$row['age']."</p><br />
<p class='naming'><span class='nameis'><img src='user_icons/greens-icons/enelope green.png' class='email-icon'>Email:</span>".$row['email']."</p><br />
<p class='naming'><span class='nameis'><img src='user_icons/greens-icons/call green transparent.png' class='contact-icon'Contact:</span> ".$row['contact']."</p><br />
<p><img src='user_icons/greens-icons/about icon.png' class='loacation-icon'><strong>About & Specialization:</strong><br />".$row['about']."</p><br />
<p class='netting'><img src='user_icons/greens-icons/network transparent.png' class='loacation-icon'><strong>Networking Intrests:</span></strong><br /> ".$row['networking']."</p><br />
             
<center>
<a href='#' class='btn-edit-profil-1'>Update Profile</a>
</center>
  
  
  </div>
</div>
  
  
<!-------------------------------------------------right side ----------------------------------->
  
  
<div class='side-right'>
  
<div class='search'>
  <h1>Visiting Another Users Page</h1>
</div> 
  
    
<div class='infor'>
<img src='user_icons/news icon black.png' class='innfo-icon'><h1>Infor</h1>
</div>    
    
<div class='about'>
<h1>About:</h1>
<P>".$row['about']."</P>
</div>    
    
<div class='networking'>
<h1>Networking:</h1>
<P>".$row['networking']."</P>
</div>  
    
<div class='copyright'>
<center>
<p>Copyright 2023 
<br />All Rights Researved
</p>
</center>
</div>
    
</div>

";

  }

}

?>
 
  






<?php
  include('connect.php');
 
  
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
echo"<a href='#'><img src='user_icons/greens-icons/trash.png' class='trash'></a>";
echo"</div>";
                                      
echo"<div class='div-2c'>";
echo"<img src='user_icons/greens-icons/comment (2).png' class='comenting'>";      
  echo"</div>";
                                      
  echo"<div class='div-3c'>";
  echo"<h4><a href='users-comment.php?users_id=$users_id--".$row['post_id']."'>Comments</a></h4>";        
  echo"</div>";
                      
                      
  echo"</div>";
  echo"</div>";
                                    

  
  }
  
  ?>



<!------------------------------------------------------------End of main top div ---------------------->
</div>
<!------------------------------------------------------------End of main top div ---------------------->






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
  
 