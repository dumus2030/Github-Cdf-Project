<?php

 session_start();
 include('networking_connection.php');
if(!isset($_SESSION['email'])){
  header('location:login_networking_hub.php');
}
else{
  $email = $_SESSION['email'];
}

 



if(isset($_POST['submit'])){

$pic_upload = $_FILES['pic_upload'];
$username = $_POST['username'];
$town = $_POST['town'];
$area = $_POST['area'];
$home = $_POST['home'];
$age = $_POST['age'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$about = $_POST['about'];
$networking = $_POST['networking'];

   


$pic_upload = $_FILES['pic_upload']['name'];
$TmpLocation = $_FILES['pic_upload']['tmp_name'];
$fileSize = $_FILES['pic_upload']['size'];
$fileError = $_FILES['pic_upload']['error'];
$fileType = $_FILES['pic_upload']['type'];


$sql_checkisavailable = "SELECT * FROM `login_user` WHERE  email = '$email'";
$result_checkis = mysqli_query($con, $sql_checkisavailable);

if(mysqli_num_rows($result_checkis) == 1){

$fileExt = explode('.' , $pic_upload);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg', 'jpeg','png', 'gif');


if(in_array($fileActualExt, $allowed)){

if($fileError === 0){  
if($fileSize < 1000000){
          
$fileNameNew = uniqid('', true). "." . $fileActualExt;
$fileDestination = 'user-uploads/'.$fileNameNew;
move_uploaded_file($TmpLocation, $fileDestination);
}


else{
header('location:networking_hub_edit_profile.php?you file is too big');
}

}



else{
echo "there was something wrong";
}


}


}

else{
echo "you cant upload files of this nature";
}
     


$errors = array();


$query = "SELECT email FROM login_user WHERE email = '$email'";
$result = mysqli_query($con, $query);
$emnum = mysqli_num_rows($result);
 

     
if(empty($username)){
$errors['username'] = "username is required";
}
       
if(empty($town)){
$errors['town'] = "town is required";
}
     
if(empty($area)){
$errors['area'] = "area is required";
}
       
    
     
if(empty($age)){
$errors['age'] = "age is required";

}

    
if(empty($home)){
  $errors['home'] = "constituency is required";
  }


if(empty($email)){
  $errors['email'] = "email is required";
  }
       
      
if(empty($contact)){
$errors['contact'] = "contact is required";
}
       
    
     
if(empty($networking)){
$errors['networking'] = "networking is required";
}
   
      
if(empty($about)){
$errors['about'] = "about is required";
}


    
if(empty($pic_upload)){
  $errors['pic_upload'] = "Profile Image Is Required<br />Or You Can Update Your<br />Old Profile pic if not empty";
}








if(count($errors) == 0){

 $sql = "UPDATE login_user SET `pic_upload`='$fileNameNew',`username`='$username', `town`='$town', `area`='$area', `home`='$home',`age`='$age', `email`='$email', `contact`='$contact', `about`='$about', `networking`='$networking'  WHERE email = '$email'";
     
     
$result = mysqli_query($con, $sql);
     
     
 
if($result){
$_SESSION['email'] = $email;
header('location:profile_main_networking_hub.php?update super Successful');             
}
    

else{
header('location:networking_hub_registration.php?something went wrong');

             
die();
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
<title>edit page</title>
<link rel="stylesheet" href="networking_hub_edit_profile.css">
</head>
<body>


<?php

$sql = "SELECT * FROM login_user WHERE email = '$email'";
$result = mysqli_query($con, $sql);
$check_usernum = mysqli_num_rows($result) > 0;

if($check_usernum){
while($row = mysqli_fetch_assoc($result)){


?>



<div class="main-container">



  <div class="welcome-container">
  <h1 class="welcome">WELCOME<br /><?php echo $_SESSION['email']; ?></h1>
  </div>


  <p class="upload-profile-image"></p>
      

  <div class="profile-image-defualt">
  <img src="../login system/default-icons/user-default 2.png" width="280px" height="330px">
  </div>

    <div class="profile-image-defualt1">
    <img src="user-uploads/<?php echo $row['pic_upload'];?>" width="280px" height="330px">
    </div>



  


<h4>UPLOAD-IMAGE</h4>
      

<div class="nav-background"> </div>
<div class="nav-background-1"> </div>
  


<nav class="navigaion">

</nav>




<section class="header">


<div class="background-middle">  
<div class="profile-name-infor">  
<div class="profile-infor1">
<p><span>Names:</span><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></p><br />
<p><span>Usernames</span>: <?php echo $row['username']; ?></p><br />
<p><span>Town</span>: <?php echo $row['town']; ?></p><br />
<p><span>Area</span>: <?php echo $row['area']; ?></p><br />
<p><span>Consituency</span>: <?php echo $row['home']; ?></p><br />
<p><span>Age</span>: <?php echo $row['age']; ?></p><br />
<p><span>Email</span>: <?php echo $row['email']; ?></p><br />
<p><span>Contact</span>: <?php echo $row['contact']; ?></p><br />
<p><span>About</span>: <?php echo $row['about']; ?></p><br />
<p><span>Networking</span>: <?php echo $row['networking']; ?></p><br />


<a href="profile_main_networking_hub.php" class="btn-edit-profil-1">Update Profile</a>
</div>
 


</div>
</div>   




<div class="profil-pic-green">
        <img src="../login system/creative-profile-art/green profil.png" class="profil-green">
      </div>
  
      <div class="green">
      <img src="../login system/creative-profile-art/green below2.png" class="green-below-1">
  
      </div>
  </div>









<div class="box-contain">

<div class="boxing">

         
<form action="networking_hub_edit_profile.php" method="POST" enctype="multipart/form-data">

<center>
  <h1>EDIT PROFIL</h1>
</center>


<div class="form-group">
  <label for="pic_upload">
  <input type="file" name="pic_upload" id="pic_upload"<?php echo $row['pic_upload'];?>>

  

  </label>
  <p class="error-profile-messages"><?php if(isset($errors['pic_upload'])) echo $errors['pic_upload']; ?></p>
  </div>

<div class="lining">
<label>User Name
 <input type="text" name="username" value="<?php echo $row['username'];?>" placeholder="Your userName">   
</label>
<p class="error-messages"><?php if(isset($errors['username'])) echo $errors['username']; ?></p>
</div>

<div class="lining">
 <label>Town
<input type="text" name="town" value="<?php echo $row['town'];?>" placeholder="Your Town Name">   
</label>

<p class="error-messages"><?php if(isset($errors['town'])) echo $errors['town']; ?></p>
</div>

<div class="lining">
<label>Area
<input type="text" name="area" value="<?php echo $row['area'];?>" placeholder="Your area Name">   
</label>
<p class="error-messages"><?php if(isset($errors['area'])) echo $errors['area']; ?></p>
</div>

<div class="lining">
 <label>Constituency
<input type="text" name="home" value="<?php echo $row['home'];?>" placeholder="Your Consituency">   
</label>
<p class="error-messages"><?php if(isset($errors['home'])) echo $errors['home']; ?></p>
</div>


<div class="lining">
  <label>Age
 <input type="text" name="age" value="<?php echo $row['age'];?>" placeholder="Your Age">   
 </label>
 <p class="error-messages"><?php if(isset($errors['age'])) echo $errors['age']; ?></p>
 </div>


<div class="lining">
 <label>Email
<input type="text" name="email" value="<?php echo $row['email'];?>" placeholder="Your email">   
</label>
<p class="error-messages"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
</div>

<div class="lining">
<label>Contact
<input type="text" name="contact" value="<?php echo $row['contact'];?>" placeholder="Your contact number">   
</label>
<p class="error-messages"><?php if(isset($errors['contact'])) echo $errors['contact']; ?></p>
</div>


<div class="lining">
<label for="about">About & Specilization
<textarea type="message" name="about" maxlength="120" cols="3" rows="3"  placeholder="About you-only use 120 charecters"><?php echo $row['about'];?></textarea>   
</label>
<p class="error-messages"><?php if(isset($errors['about'])) echo $errors['about']; ?></p>
</div>

<div class="lining">
<label for="networking">Networking Intrests
<textarea type="message" name="networking"  maxlength="120" cols="3" rows="3"  placeholder="Networking Interests-only use 120 charecters"><?php echo $row['networking'];?></textarea>   
</label>
<p class="error-messages"><?php if(isset($errors['networking'])) echo $errors['networking']; ?></p>
</div>


<center>
<button type="submit" name="submit">Submit </button>
</center>

  

</form>

</div>

</div>





<div class="nav-covering-top">

</div>







<div class="background-inner-img2">
<img src="user-uploads/<?php echo $row['pic_upload'];?>" width="1000px" height="632px">
</div>
  



</section>





<?php


 }

}



?>
          
</body>
</html>