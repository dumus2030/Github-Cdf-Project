
<?php
session_start();
require('connect.php');


if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpass = $_POST['cpass'];
  
    



    $errors = array();


    $query = "SELECT username FROM login_user WHERE username = '$username'";
    $result = mysqli_query($con, $query);
    $usernum = mysqli_num_rows($result);


    $query = "SELECT email FROM login_user WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    $emnum = mysqli_num_rows($result);




   if(empty($firstname)){
    $errors['firstname'] = "Firstname is required";

  }
  
  if(empty($lastname)){
    $errors['lastname'] = "lastname is required";
  }

  if(empty($username)){
    $errors['username'] = "username is required";
  }
  if($usernum == 1){
    $errors['username'] = "username already exists";
  }

  if(empty($email)){
    $errors['email'] = "email is required";
  }

  elseif(mysqli_num_rows($result) >0){
    $errors['email'] = "email already exists";
  }


  if(empty($password)){
    $errors['password'] = "password is required";
  }

  if(empty($cpass)){
    $errors['cpass'] = "cpassword is required";
  }
  

  if($password !== $cpass){
    $errors['passmiss'] = "password Not matched";
  }

  

if(count($errors) == 0){

    
if($password == $cpass){
 
   
$sql = "INSERT INTO `login_user`(`users_id`, `firstname`, `lastname`, `username`, `email`, `password`, `cpass`) VALUES (null, '$firstname', '$lastname', '$username', '$email', '$password', '$cpass')";
             
$result = mysqli_query($con, $sql);


        
if($result){
$_SESSION['email'] = $email;
header('location:login.php?Registration Successful123');
       
}
  
else{
header('location:index.php?something went wrong');
        
die();
}


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
    <title>Registration page</title>
    <link rel="stylesheet" href="indexstyle2.css">
 </head>
  <body>

     <section class="header-index">
        
        <div class="cycle-1">
          <img src="../200/web-artadss/cycle.png artadss/cycle.png">
        </div>

 
        
        <div class="hectagone-1">
          <img src="../200/web-artadss/hectagone.png" alt="hectagone-art">
        </div>
        
   
        <div class="star-1">
          <img src="../200/web-artadss/star.png" alt="start-art">
        </div>


        
<div class="phone-1">
<img src="../200/web-artadss/pgone green.png"  class="phone" alt="phone-art">
</div>
          
<div class="login-heading-box">
               
<h1>Register</h1>
<p>Register and enjoy newtworking with others</p>
<p>Creat a new <span class="account">Account</span></p>
<p>When You Register You can Login in</p>

<a href="login.php" class="signing"><p><span><br />SIGN IN</span></p></a>
<img src="../200/user-pic-uplods/user black default.png" alt="user-default-icon">
</div>

             
          
<div class="successful-message">
<p class="error-messages"><?php if(isset($errors['passmiss'])) echo $errors['passmiss']; ?></p>
</div>

<div class="successful-message2">
    
</div>

             


              
              


<div class="mother">
<form action="index.php" method="POST">

<div class="cover2">
<label for="firstname">
<input type="text" name="firstname" class="control" autocomplete="off" placeholder="Your First Name" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>">
</label>

<p class="error-messages"><?php if(isset($errors['firstname'])) echo $errors['firstname']; ?></p>
</div>


<div class="cover2">
<label for="lastname">
<input type="text" name="lastname" class="control" autocomplete="off" placeholder="Your Last Name" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>">
</label>

<p class="error-messages"><?php if(isset($errors['lastname'])) echo $errors['lastname']; ?></p>
</div>


<div class="cover2">
<label for="username">
<input type="username" name="username" class="control" autocomplete="off" placeholder="Your User-id eg NICK100" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
</label>

<p class="error-messages"><?php if(isset($errors['username'])) echo $errors['username']; ?></p>
</div>


<div class="cover2">
<label for="email">
<input type="email" name="email" class="control" autocomplete="off" placeholder="Your Email Address" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
</label>

  
<p class="error-messages"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
</div>

<div class="cover2">
<label for="password">
<input type="text" name="password" class="control" autocomplete="off" placeholder="Your Password" value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>">
</label>

  
<p class="error-messages"><?php if(isset($errors['password'])) echo $errors['password']; ?></p>
</div>

<div class="cover2">
<label for="password">
<input type="text" name="cpass" class="control" autocomplete="off" placeholder="Confirm  your Password" value="<?php if(isset($_POST['cpass'])) echo $_POST['cpass']; ?>">
</label>

  
<p class="error-messages"><?php if(isset($errors['cpass'])) echo $errors['cpass']; ?></p>
</div>


<div class="cover3">
<label>
<p><input type="checkbox" name="checkbox" value="checkbox"><span>I Agree To Terms Of Service</span>, am ready to Sign Up</p>
</label>
</div>

<center>
<div class="button-submit">
<label for="submit">
<button type="submit" name="submit">submit</button>
</label>
</div>
</center>



</form>
</div>


<!-----------login div-->



<div class="login-div">

<form action="index.php" method="POST">

<div class="loging-divs">
<label>Email Address 
<input type="email" name="email" placeholder="your email address"  value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
</label>
<center>
<p class='error-email'><?php if(isset($errors['email'])) echo $errors['email'];?></p> 
</center>
</div>


<div class="loging-divs">
<label>Password
<input type="text" name="password" placeholder="your password" value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>">
</label>
<center>
<p class='error-password'><?php if(isset($errors['password'])) echo $errors['password'];?></p>
</center>
</div>


<p class="already">If You already Registered Or Signed Up<br />Please Login Here </p>


<div class="loging-divs">
  <button type="submit" class="log-submit" name="login">Login</button>
</div>
<center>
  <p class='error-submit'><?php if(isset($errors['login'])) echo $errors['login'];?></p>
</center>

</form>

</div>








</section>
 
  </body>
</html>