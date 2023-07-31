<?php
session_start();
include('connect.php');

if(!isset($_SESSION['email'])){
  header('location:index.php?register first');
}

else{
$email = $_SESSION['email'];
}


?>

<?php
if(isset($_POST['submit_login'])){

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM login_user WHERE email = '$email' && password = '$password'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result)>0;

if($num){
$email = $_SESSION['email'];
header('location:profile.php?you are sucessfully logged in user');
}


if(empty($email) && !empty($password)){
echo"<p class='error-email'>Insert Email</p>";
}


elseif(empty($password) && !empty($email)){
echo"<p class='error-password'>Insert Password</p>";
}


else{
echo"<p class='error-incorrect'>Incorrect Password Or Email</p>";
}



}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet"href="login.css">
</head>
<body>


<div class="header">



<div class="form-diva">
<form action="login.php" method="POST">

<div class="de">
<label for="email">
  <input type="email" name="email" placeholder="your email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">           
</label>
</div>

<div class="de">
<label for="email">
  <input type="text" name="password" placeholder="your password" value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>">      
</label>
</div>

<center>
<button type="submit" name="submit_login">Login</button>
</center>


</form>
</div>

            





</div>


</body>
</html>