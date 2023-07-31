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
<title>Find people</title>
<link rel="Stylesheet"href="members.css">
</head>
<body>



<div class="row">
<div class="col-sm-12">
<center><h2>Find New people </h2></center><br /><br />
<div class="row">
<div class="col-sm-4"></div><!-----leave div empty-->

<div class="form-div">
<form class="search_form" action="" method="">
<input type="text" name="search_user" placeholder="search friend">
<button type="submit" class="btn-btn-infor" name="search_user-btn">Search</button>
</form>          
</div>
<!-----------------------------------end of form div------------------------------------------>
<div class="col-sm-4">

</div>
</div><br /><br /><br />
<?php search_user(); ?>
</div>
</div>






<?php

function search_user(){
global $con;

if(isset($_GET['search_user-btn'])){


    $search_query = htmlentities($_GET['search_user']);
    $get_user = "SELECT * FROM login_user WHERE firstname like '%search_query%' OR lastname like '%search_query%' OR username like '%search_query%'";                
}

else{

$get_user = "SELECT * FROM login_user";

}


$result_run_user = mysqli_query($con,$get_user);
while($row_user = mysqli_fetch_array($result_run_user)){
   $users_id = $row_user['users_id'];     
   $firstname = $row_user['firstname'];  
   $lastname = $row_user['lastname'];   
   $username = $row_user['username'];    
   $pic_upload = $row_user['pic_upload'];   

echo"

<div class='row'>

  <div class='col-sm-3'>
  </div>

  <div class='col-sm-6'>
       <div class='row' id='find_people'>

          <div class='col-sm-4'>
          <a href='user_profile.php?u_id=$users_id'>
          <img src='user-uploads/$pic_upload' width='150px' height='150px' title='$username' style='float:left;' ,margin:1px;'/>
          </a>
          </div><br /><br />

          <div class='col-sm-6'>
          <a style='text-decoration:none; cursor:pointer;color:#3897f0; 'href='user_profile.php?u_id=$users_id'>
          <strong><h2>$firstname $lastname</h2></strong>
          </a>
          </div>
         
          <div class='col-sm-3'></div>

       </div>
  </div>


  <div class='col-sm-4'>
  </div>


</div><br />

";

}




}
?>






                
</body>
</html>