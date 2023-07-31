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
  <link rel="Stylesheet" href="profile_users.css">
</head>
<body>



<div class="row">

<?php
    
if(isset($_GET['u_id'])){

$u_id = $_GET['u_id'];
}

if($u_id < 0 || $u_id == ""){
header('location:login.php');
}

else{ 
?>

<div class="">
<?php

global $con;

if(isset($_GET['u_id'])){

$u_id = $_GET['u_id'];

$select = "SELECT * FROM login_user WHERE users_id = '$users_id'";
$run = mysqli_query($con,$select);
$row = mysqli_fetch_array($run);

$name= $row['username'];


}
?>





<?php
global $con;

if(isset($_GET['u_id'])){

$u_id = $_GET['u_id'];

$select = "SELECT * FROM login_user WHERE users_id = '$users_id'";
$run = mysqli_query($con,$select);
$row = mysqli_fetch_array($run);

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





";


$email = $_SESSION['email'];
$get_user = "SELECT * FROM login_user email = '$email'";
$run_user = mysqli_query($con, $get_user);
$row = mysqli_fetch_array($run_user);

$userown_id = $row['users_id'];

if($userown_id == $users_id){
  echo"<a href='edtit13.php?u_id=$userown_id'/>EDIT</a>";
}

}

?>
 
  </div>
</div>



<!------------------------------------------------------------for the else tags  on top ---------------------->

<?php
}

?>



































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