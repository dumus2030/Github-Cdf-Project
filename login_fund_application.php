<?php
session_start();
include('user_loan_connection.php');


if(isset($_SESSION['email'])){
header('location:login_fund_application.php');
}
    
else{
  
if(isset($_SESSION['email'])){
 $email = $_SESSION['email'];
  }
}

?>

<?php
if(isset($_POST['submit_login'])){


$email = $_POST['email'];
$password = $_POST['password'];

$errors = array();

$sql = "SELECT * FROM `user_loan_registration` WHERE email = '$email' && password = '$password'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result)>0;

if($num){
$_SESSION['email'] = $email;
header('location:aplicant_form_edit-profile1.php'); 
}



if(empty($email) && !empty($password)){
  $errors['email'] = "Insert Email";
}


elseif(empty($password) && !empty($email)){
$errors['password'] = "Insert Password";
}


else{
if(isset($_POST['submit_login'])){
$errors['submit_login'] = "Invalid Credentials Or Empty fields";
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
<title>Document</title>
<link rel="stylesheet"href="login_fund_applicationz.css">
</head>
<body>


<div class="header">

<h1 class="nethub">Get Financing For Your<br />Projects</h1>
<h1 class="networking2">CDF<br /><span class="net">Loan Available For You!!</span></h1>

<img src="web-artadss/phone icone login.png" class="login-phone">
<img src="web-artadss/phone icone login side.png" class="login-phone2">


<div class="form-diva">
<form action="login_fund_application.php" method="POST">
<center>
  <h2>LOGIN</h2>
 </center> 


<div class="de">
<label for="email">
  <input type="email" name="email" placeholder="your email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">           
</label>
<p class='error-email'><?php if(isset($errors['email'])) echo $errors['email'];?></p>
</div>

<div class="de">
<label for="email">
  <input type="text" name="password" placeholder="your password" class="password-class" value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>">      
</label>
<p class='error-password'><?php if(isset($errors['password'])) echo $errors['password'];?></p>
</div>

<center>
<button type="submit" name="submit_login">Login</button>
<p class='error-incorrect'><?php if(isset($errors['submit_login'])) echo $errors['submit_login'];?></p>
</center>

<center>
<div class="account">
<p>Dont Have An Account?</p>
<a href="loader.php"><h5>SIGN UP</h5></a>
</div>
</center>


</form>
</div>

            





</div>


</body>
</html>