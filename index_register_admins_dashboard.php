<?php
session_start();
include('connect.php');


if(isset($_POST['Register'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$nrc = $_POST['nrc'];
$ministry = $_POST['ministry'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$errors = array();

if(empty($firstname)){
$errors['firstname'] = "firstname is reqiured Please";             
}


if(empty($lastname)){
 $errors['lastname'] = "lastname is reqiured Please";             
}


if(empty($nrc)){
$errors['nrc'] = "NRC is reqiured Please";             
}


if(empty($firstname)){
$errors['ministry'] = "ministry Name is reqiured Please";             
}


if(empty($password)){
$errors['password'] = "password is reqiured Please";             
}
                    
   

if(empty($cpassword)){
$errors['cpassword'] = "confirm password is reqiured Please";             
}
                       
                    
                    


if(count($errors) == 0){

if($password == $cpassword){
 
$sql_insert = "INSERT INTO`register_admins`(`firstname`,`lastname`,`nrc`,`ministry`,`email`,`password`,`cpassword`)VALUES('$firstname','$lastname','$nrc','$ministry','$email','$password','$cpassword')";

$sql_result = mysqli_query($con,$sql_insert);

if($sql_result){
$_SESSION['email'] = $email;
header('location:login_admin.php');                                                           
                                        
}

else{
header('location:index_register_admins_dashboard.php?please register first'); 
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
<title>Register-dashboard-Admins</title>
<link rel="stylesheet" href="index_register_admins_dashboard.css">
</head>
<body>

<section class="header">



<!-----------background-monitor-pc starts-->
<div class="background-monitor-pc">
<img src="icons/computer-monitor-icon-flat-pc-.png">
</div>
<!-----------background-monitor-pc starts-->









<div class="form-diva">

<form action="index_register_admins_dashboard.php" method="POST">
<div>
<label>Firstname
<input type="text" name="firstname" placeholder="Your First Name" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'];?>">             
</label>
<center>
<p class="firstname-error"><?php if(isset($errors['firstname'])) echo $errors['firstname'];?></p>    
</center> 
            
</div>

<div>
<label>Lastname
<input type="text" name="lastname" placeholder="Your Lastname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'];?>">             
</label> 
<center>
<p class="lastname-error"><?php if(isset($errors['lastname'])) echo $errors['lastname'];?></p>                  
</center>    
               
</div>

<div>
<label>NRC
<input type="text" name="nrc" placeholder="your NRC" value="<?php if(isset($_POST['nrc'])) echo $_POST['nrc'];?>">             
</label> 
<center>
<p class="nrc-error"><?php if(isset($errors['nrc'])) echo $errors['nrc'];?></p>                    
</center>   
                
</div>

<div>
<label>Ministry
<input type="text" name="ministry" placeholder="your ministry" <?php if(isset($_POST['ministry'])) echo $_POST['ministry'];?>>             
</label>
<center>
<p class="ministry-error"><?php if(isset($errors['ministry'])) echo $errors['ministry'];?></p>                   
</center>                 
</div>

<div>
<label>Email
<input type="text" name="email" placeholder="your email Address" <?php if(isset($_POST['email'])) echo $_POST['email'];?>>             
</label> 
<center>
<p class="email-error"><?php if(isset($errors['email'])) echo $errors['email'];?></p>                
</center>               
</div>


<div>
<label>Password
<input type="text" name="password" placeholder="your password" <?php if(isset($_POST['password'])) echo $_POST['password'];?>>             
</label> 
<center>
<p class="password-error"><?php if(isset($errors['password'])) echo $errors['password'];?></p>                    
</center>             
</div>

<div>
<label>Confirm Password
<input type="text" name="cpassword" placeholder="confirm password" <?php if(isset($_POST['cpassword'])) echo $_POST['cpassword'];?>>             
</label>  
<center>
<p class="cpassword-error"><?php if(isset($errors['cpassword'])) echo $errors['cpassword'];?></p>                  
</center>      
</div>

<div>
<button type="text" name="Register">Register</button>                              
</div>

 


</form>

</div>


<div class="signup-logo">
<h2>CDF-ADMINS<br /></h2>  
<p>Signup</p>                
</div>



<div class="coat">
<img src="logos/zambia coat of arms.png">
<h3>zambia</h3>
</div>


<div class="cdf2">
<img src="logos/CDF_Logo.svg-white.png">
</div>
                    



</section>
                    
</body>
</html>