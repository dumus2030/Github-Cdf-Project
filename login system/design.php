
<?php

 session_start();
 include('connect.php');


 if(!isset($_SESSION['email'])){
  
  header('location:login.php');
  }
  else{
  $email = $_SESSION['email'];
  }
        
             
  $sql = "SELECT * FROM `login_user`";
  $result = mysqli_query($con, $sql);
        
  if(!$result){
  echo "invalid query";
  die();
  }



elseif($result){
while($row = mysqli_fetch_assoc($result)){

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Facualty design</title>
<link rel="stylesheet" href="design.css">
</head>
<body>


 <section class="header">

<nav>



<div class="nav-links">
<ul>
<li><a href="design.php"><img src="user_icons/house icon-black.png">Home</a></li>
<li><a href="form-downloads.php">Form Downloads</a></li>
<li><a href="cdf-infor.php"><img src="user_icons/news icon black.png" class="infor-icon">Cdf Infor</a></li>
<li><a href="profile.php"><img src="user_icons/user black.png" class="user-icon">User Profile</a></li>
<li><a href="editprofile.php"><img src="user_icons/settings icon-black.png" class="settings-icon">Settings</a></li>  
<li><a href="logout.php">Logout</a></li>       
 </ul>
                    
</div>
                    
</nav>

                    
           



<div class="row">
<div class="col">
<div class="card">

<div class="card-body">
           
<div><img src="../Edit-Reserv3/user-uploads/<?php echo $row['pic_upload'];?>" class="image" width="100px" height="130px"></div>          
<div><p class="name"><br /></p></div>
<div><p class="name1">Names:<br /><?php echo $row['username']; ?><br /></p></div>
<div><p class="town">Town:<br /> <?php echo $row['town']; ?><br /></p></div>
<div><p class="area">Area:<br /> <?php echo $row['area']; ?><br /></p></div>
<div><p class="home">constituency:<br /> <?php echo $row['home']; ?><br /></p></div>
<div><p class="gender">Gender:<br /> <?php echo $row['gender']; ?><br /></p></div>
<div><p class="age">Age:<br /> <?php echo $row['age']; ?></p><br /></div>
<div><p class="email">Email:<br /> <?php echo $row['email']; ?><br /></p></div>
<div><p class="contact">Contact:<br /> <?php echo $row['contact']; ?><br /></p></div>
                                                   
</div>


<div class="card-body-2">


<div class="about-1"><p class="about"><strong>About & Specialization:</strong><br /> <?php echo $row['about']; ?><br /></p></div>
<div class="network-23"><p class="networking"><strong>Networking Intrests:</strong><br /> <?php echo $row['networking']; ?><br /></p></div>
             
</div>





</div>
</div>



<?php 

 }               


}


?>
         



<div>

</div>


</div>

</section>


</body>
</html>

