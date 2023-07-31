<?php
session_start();
include('connect.php');
if(isset($_SESSION['email'])){
header('location:login_admin.php');
 
}


else{

if(isset($_SESSION['email'])){
$email = $_SESSION['email'];                                    
}

}                  
               

?>



<?php
include('connect.php');

if(isset($_POST['login_admin'])){

$email = $_POST['email'];
$password = $_POST['password'];
$errors = array();

$query_email = "SELECT * FROM `register_admins`WHERE email = '$email' && password = '$password'";
$query_result = mysqli_query($con,$query_email);
$query_result_num = mysqli_num_rows($query_result)>0;

if($query_result_num){
$_SESSION['email'] = $email;
header('location:dashboard.php');   
}

if(empty($email)){
$errors['email'] = "Email Is Required Please";
}

if(empty($password)){
$errors['password'] = "password Is Required Please";
}


else{

if(isset($_POST['login_admin'])){
$errors['login_admin'] = "invalid Email OR Password";
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
<title>Login_admin</title>
<link rel="stylesheet"href="login_admin.css">
</head>
<body>

<section class="header-login">


<!-----------background-monitor-pc starts-->
<div class="background-monitor-pc">
<img src="icons/computer-monitor-icon-flat-pc-3.png"> 
</div>
<!-----------background-monitor-pc starts-->
                    

<div class="form-diva">



<form action="login_admin.php" method="POST">
               
<div>
<label>Email
<img src="icons/enelope-black.png" class="usericon"><input type="text" name="email" autocomplete="off" placeholder="your email Address" <?php if(isset($_POST['email'])) echo $_POST['email'];?>             
</label> 
<center>
<p class="email-error"><?php if(isset($errors['email'])) echo $errors['email'];?></p>                
</center>               
</div>
                    
                    
<div>
<label>Password
<img src="icons/login icon-green.png" class="passwordicon"><input type="text" name="password" autocomplete="off" placeholder="your password" <?php if(isset($_POST['password'])) echo $_POST['password'];?>             
</label> 
<center>
<p class="password-error"><?php if(isset($errors['password'])) echo $errors['password'];?></p>                    
</center>             
</div>
                                     
             
<div class="login-blue">
<center>
<button type="text" name="login_admin"><img src="icons/login icon-blue-purple2.png"></button>             
</center> 
</div>
                    
                    
</form>
                    
</div>
                    





</section>                    
                    
</body>
</html>