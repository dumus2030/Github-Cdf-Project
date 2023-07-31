<?php
session_start();
include('connect.php');
if(!isset($_SESSION['email']) || $_SESSION['email'] == ""){
  
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
<title>Search Page</title>
<link rel="stylesheet" href="search.css">
</head>
<body>


<section class="header">

<form action="nav-search.php" method="GET">
<div class="search-form">
<label>SEARCH
<input type="text" name="search" id="search" placeholder="search"> 
</label>
</div>

<button type="submit" name="submit-search">Search</button>

</form>

<h1 class="search">Search Page</h1>

<p class="netu">Networking Hub</p>
  
<img src="logo/CDF_Logo.svg.png" class="logo">

</section>






<scection class="section-2">

<nav class="navigaion">  

<div class="nav-links">
<ul>
<li><a href="users.php"><img src="user_icons/house icon-black.png">All Users</a></li>
<li><a href="form-downloads.php">Form Downloads</a></li>
<li><a href="profile.php"><img src="user_icons/user black.png" class="user-icon">User Profile</a></li>
<li><a href="contact.php"><img src="user_icons/news icon black.png" class="infor-icon">Contact</a></li>
<li><a href="editprofile.php"><img src="user_icons/settings icon-black.png" class="settings-icon">Settings</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>

  <h1>FIND FRIENDS</h1>
 
</nav>
 


<div class="users-search-container">
<?php   
if(isset($_GET['submit-search'])){
$search = htmlentities($_GET['search']);                    


$sql = "SELECT * FROM login_user WHERE username LIKE '%$search%' OR town LIKE '%$search%' OR area LIKE '%$search%' OR home LIKE '%$search%' OR age LIKE '%$search%' OR email LIKE '%$search%'  OR about LIKE '%$search%'";



$result = mysqli_query($con, $sql); 
$queryResult = mysqli_num_rows($result);
                
echo "There are ".$queryResult." Results!! ".$_SESSION['email']."";

if($queryResult > 0){

while($row = mysqli_fetch_assoc($result)){  
  $users_id = $row['users_id'];     
  $firstname = $row['firstname'];  
  $lastname = $row['lastname'];   
  $username = $row['username'];    
  $pic_upload = $row['pic_upload'];   

?>
<div class='search-result-box'>
<div class="col">
<div class="card">
                              
                              
                        
                              
                              
<div class="card-body">
                                         
<div><a href="profile_users.php?u_id=$users_id"><img src="../200/user-uploads/<?php echo $row['pic_upload'];?>" class="image" width="100px" height="130px"></a></div>          
<div><p class="name"><br /></p></div>
<div><a href="profile_users.php?u_id=$users_id"><p class="name1">Names:<br /><?php echo $row['firstname']; ?><?php echo $row['username']; ?> <?php echo $row['lastname']; ?><br /></p></a></div>
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

 </div>
                               
              

 <?php
}
                  
                 
}  
       
  else{
  echo "<br />And no results matching your search found";
 }

} 
        
              
?>
</div>



</scection>
</body>
</html>

