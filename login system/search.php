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
<title>Search Page</title>
<link rel="stylesheet" href="searching.css">
</head>
<body>


<section class="header">

<form action="search.php" method="POST">
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






<section class="section-2">

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
 



<?php   
if(isset($_POST['submit-search'])){

$search = mysqli_real_escape_string($con, $_POST['search']);
$sql = "SELECT * FROM login_user WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR username LIKE '%$search%' OR town LIKE '%$search%' OR area LIKE '%$search%' OR home LIKE '%$search%' OR age LIKE '%$search%' OR email LIKE '%$search%'  OR about LIKE '%$search%'";


 

$result = mysqli_query($con, $sql); 
$queryResult = mysqli_num_rows($result);
                
echo "There are ".$queryResult." Results!! ".$_SESSION['email']."";

if($queryResult > 0){

while($row = mysqli_fetch_assoc($result)){  
$users_id = $row['users_id'];

  
echo"<div class='main-conatainer-searching'>";

echo"<div class='flex'>";
                                           
echo"<div><a href='profile_users.php?users_id=".$row['users_id']."'><img src='user-uploads/".$row['pic_upload']."' width='100px' height='130px'></a></div>";      
echo"<div><a href='profile_users.php?users_id=$users_id'><p>Names:<br /><span class='namings'>".$row['firstname'].".".$row['username'].".".$row['lastname']."</span><br /></p></a></div>";
echo"<div><p>Town:<span class='text-color'><br />".$row['town']."</span><br /></p></div>";
echo"<div><p>Area:<span class='text-color'><br />".$row['area']."<br /></span><br /></p></div>";
echo"<div><p>constituency:<span class='text-color'><br />".$row['home']."</span><br /></p></div>";
echo"<div><p>Gender:<span class='text-color'><br />".$row['gender']."</span><br /></p></div>";
echo"<div><p>Age:<span class='text-color'><br />".$row['age']."'</span></p><br /></div>";
echo"<div><p>Email:<span class='text-color'><br />".$row['email']."</span><br /></p></div>";
echo"<div><p>Contact:<span class='text-color'><br />".$row['contact']."</span><br /></p></div>";
 
echo"</div>";


echo"<div class='about-div'>";
echo"<div class='about'>";
echo"<p>About:<br /><span class='namings'>".$row['about']."</span></p>";
echo"</div>";


echo"<div class='networking'>";
echo"<p>Networking:<br /><span class='namings'>".$row['networking']."</span></p>";              
echo"</div>";
echo"</div>";


echo"</div>";




   
  }

}
 
    
else{
echo '<br />And no results matching your search found';
}
                    


}
?>






           
             
            


</section>
</body>
</html>

