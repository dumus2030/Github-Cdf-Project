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
<title>All CDF Hub Users page</title>
<link rel="stylesheet" href="design.css">
</head>
<body>


<section class="header">

<nav>

<div class="nav-links">
<ul>
<li><a href="profile.php"><img src="user_icons/house icon-black.png">Home</a></li>
<li><a href="form-downloads.php">Form Downloads</a></li>
<li><a href="cdf-infor.php"><img src="user_icons/news icon black.png" class="infor-icon">Cdf Infor</a></li>
<li><a href="profile.php"><img src="user_icons/user black.png" class="user-icon">User Profile</a></li>
<li><a href="editprofile.php"><img src="user_icons/settings icon-black.png" class="settings-icon">Settings</a></li>  
<li><a href="logout.php">Logout</a></li>       
 </ul>             
</div>
                    
</nav>

                    
         

<?php
if(isset($_GET['submit-search'])){

$search = htmlentities($_GET['search']);

$get_user = "SELECT * FROM login_user WHERE firstname like '%search%' OR lastname like '%search%' OR username like '%search%'";   

}

else{
$get_user = "SELECT * FROM login_user";
$result_run_user = mysqli_query($con,$get_user);
while($row_user = mysqli_fetch_array($result_run_user)){
   $users_id = $row_user['users_id'];     
   $firstname = $row_user['firstname'];  
   $lastname = $row_user['lastname'];   
   $username = $row_user['username'];    
   $pic_upload = $row_user['pic_upload'];   
   
echo"

<div class='row'>
<div class='col'>
<div class='card'>


<div class='card-body'>
           
<div>
<a href='profile_users.php?users_id=$users_id'>
<img src='../200/user-uploads/".$row_user['pic_upload']."' class='image' width='100px'height='130px'>
</a>
</div>        



<div><p class='name'><br /></p></div>


<div>
<a style='text-decoration:none; cursor:pointer;color:#3897f0; 'href='profile_users.php?users_id=$users_id'>
<p class='name1'>Names:<br />".$row_user['firstname']." ".$row_user['username']." ".$row_user['firstname']."<br /></p>
</a>
</div>


<div><p class='town'>Town:<br />".$row_user['town']."<br /></p></div>
<div><p class='area'>Area:<br />".$row_user['area']."</p></div>
<div><p class='home'>constituency:<br />".$row_user['home']."<br /></p></div>
<div><p class='gender'>Gender:<br />".$row_user['gender']."<br /></p></div>
<div><p class='age'>Age:<br />".$row_user['age']."</p><br /></div>
<div><p class='email'>Email:<br />".$row_user['email']."<br /></p></div>
<div><p class='contact'>Contact:<br />".$row_user['contact']."<br /></p></div>
                                                   
</div>


<div class='card-body-2'>


<div class='about-1'><p class='about'><strong>About & Specialization:</strong><br />".$row_user['about']."<br /></p></div>
<div class='network-23'><p class='networking'><strong>Networking Intrests:</strong><br />".$row_user['networking']."<br /></p></div>
             
</div>





</div>
</div>

<div>

</div>
</div>

";

}

}


?>






</section>

</body>
</html>

