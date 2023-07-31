<?php
include('connect.php');


if(isset($_POST['upload'])){


$text = $_POST['text'];


$image = $_FILES['image']['name'];
$TmpLocation = $_FILES['image']['tmp_name'];
$fileSize = $_FILES['image']['size'];


$sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
$result_posts = mysqli_query($con, $sql);

if($result_posts){

echo "post inserted successfully";
}
                                        
else{
echo "post not inserted ";                
}



$fileExt = explode('.' , $image);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg', 'jpeg','png', 'gif');

if(in_array($fileActualExt, $allowed)){

if($fileSize < 1000000){


$target = "images/".basename($_FILES['image']['name']);
move_uploaded_file($_FILES['image']['tmp_name'],$target);   
                                                 
}
                             
}
                                   
else{
echo"your file is too big";
}

}





?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>profile page new</title>
<link rel="stylesheet" href="000.css">
</head>
<body>

<div class="main_container">


<div class="nav-background-1"></div>

<div class="white-post-background"></div>

<nav class="navigation">

<div class="nav-links">
<ul>
<li><a href="nav-search.php"><img src="user_icons/search 5.png">Search</a></li>
<li><a href="design.php"><img src="user_icons/house icon-black.png">Home</a></li>
<li><a href="form-downloads.php"><img src="user_icons/news icon black.png" class="user-icon">Form Downloads</a></li>
<li><a href="profile.php"><img src="user_icons/user black.png" class="user-icon">User Profile</a></li>
<li><a href="contact.php"><img src="user_icons/call.png" class="user-icon">Contact</a></li>
<li><a href="logout.php"><img src="user_icons/log-ouy.png" class="user-icon">Logout</a></li>
<li><a href="edit13.php"><img src="user_icons/settings icon-black.png" class="settings-icon">Settings</a></li>           
</ul>
</div>

</nav>

<!----------------------------------------------CDF LOGO START--------------------------------------------->
<div class="cdf-log-nav">
<img src="logo/CDF_Logo.svg.png" class="nav-logiz">
</div>





<div class="top-gray"></div>


<div class="banner-holder-yellow"></div>






<!------------------------------------------------------------------------post MAIN container------------------------------------------------>


<div class="posts-main_container">



<!------------------------------------------------------------------------START OF FORM  DIV-->          
<div class="forming-box">
      <form action="000.php" method="post" enctype="multipart/form-data">
         <div class="input-div1">
         <textarea name="text" maxlength="101" cols="40" rows="4" placeholder="whats on your mind" class="textarea-post"></textarea> 
         </div>

         
      
         <div class="input-div1">
         <input type="file" name="image" class="input-file-upload-post"> 
         </div>
      
         <center>
         <div class="input-div1">
         <input type="submit" class="submit-button-post" name="upload" value="Post">
         </div>
         </center>


         <div class="charecters">
            <span class="signal_number">0</span>
            <span class="limit_numbers">/100</span>
          </div>
      </form>

      <img src="user_icons/add camera.png" width='50px' height='50px' style='border-radius:50%' class="camera2">

      <P class="addpic">Add Pic</P>

</div>

<!------------------------------------------------------------------------END OF FORMING-BOX  DIV-->

<!-----------------------------END OF post MAIN container div ------------------->   
   </div>
<!----------------------------END OF post MAIN container div ------------------->




<?php
include('connect.php');

$sql_posts = "SELECT *FROM images ORDER BY id DESC";
$result_posts = mysqli_query($con,$sql_posts);
while ($row = mysqli_fetch_array($result_posts)){

   
$text = $row['text'];
   
echo"<div class='camera-add-user-deatils-top-post'>";

   
echo"<div class='userpic-names'>";
echo"<img src='user-uploads/64011d3f5b2cb5.67173773.jpg' width='30px' height='30px' style='border-radius:50%' class='top-picture'>";
echo"<h4>Nicolas Gondwe</h4>";    
echo"<h6>20th April 2023</h6>";       
echo"</div>";
   
echo"<div class='text-w'>";
echo"<p class='post-texts'>".$row['text']."</p>"; 
echo"<img src='images/".$row['image']."'width='100%' max-height='80vh' class='imgpost'>";
echo"</div>";
   
   
echo"</div>";

  
  
    
}

?>





</div>



<script>

   let formingBox = document.querySelector(".forming-box"),
   textarea = formingBox.querySelector("textarea"),
   signalNumber = formingBox.querySelector(".signal_number");

   textarea.addEventListener("keyup", ()=>{
      let valLength = textarea.value.length;

      signalNumber.innerText = valLength;

      (valLength > 0) ? formingBox.classList.add("active") : formingBox.classList.remove("active");
      (valLength > 100) ? formingBox.classList.add("error") : formingBox.classList.remove("error");
      console.log(valLength)

   });

</script>

                    
</body>
</html>