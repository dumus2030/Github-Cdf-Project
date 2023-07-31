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

<section class="header">                   

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



<div class='row'>

  <div class='col-sm-3'>
  </div>

  <div class='col-sm-6'>
       <div class='row' id='find_people'>

          <div class='col-sm-4'>
          <a href='user_profile.php?u_id=$users_id'>
          <img src='user-uploads/64011ce1801535.82882601.jpg' width='150px' height='150px' title='Luchi' style='float:left;' ,margin:1px;'/>
          </a>
          </div><br /><br />

          <div class='col-sm-6'>
          <a style='text-decoration:none; cursor:pointer;color:#3897f0; 'href='user_profile.php?u_id=$users_id'>
          <strong><h2>Nicolas Gondwe</h2></strong>
          </a>
          </div>
         
          <div class='col-sm-3'></div>

       </div>
  </div>


  <div class='col-sm-4'>
  </div>


</div><br />





</section>                      
</body>
</html>