<?php 
session_start();
include('connect.php');
if(!isset($_SESSION['email'])){
  header('location:login_admins.php');
}
  
else{
if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  } 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>
<link rel="stylesheet"href="dashboard2_backup.css">
</head>
<body>


<section class="header-dashboard">

<!-----side nav div-->
<div class="side-nav">

<div class="dashbording">
<a href="dashboard.php"><h2>Main Dashboard</h2></a>
</div> 


<div class="logo">
<img src="logos/zambia coat of arms.png" width="100px" height="100px">
</div> 

<div class="main-di-side-nav">
<div class="inner-side-nav">

<a href="all_cdf_applicants.php"><div class="two"><h1 class="one"><img src="icons/applied icon.png" width="30px" height="30px">Applied</h1></div></a>
<a href="approved.php"><div class="three"><h1><img src="icons/approved.png" width="30px" height="30px">Approved</h1></div></a>
<a href="dis_approved.php"><div class="four"><h1><img src="icons/disapproved 1.png" width="30px" height="30px">Dis-Approved</h1></div></a>
<a href="funded.php"><div class="five"><h1><img src="icons/funded icon.png" width="30px" height="30px">Funded</h1></div></a>
<a href="total_funds_released.php"><div class="six"><h1><img src="icons/total-funds-released.png" width="30px" height="30px">Total Funds Released</h1></div></a>
<div class="seven"><h1><img src="icons/status.jpg" width="30px" height="30px">Status</h1></div>

<a href="admin_edit_settings.php"><div><h1><img src="user_icons/settings icon-black.png" width="30px" height="30px">Admin Edit Settings</div>


<div class="red-lo">
  <a href="logout_dashboard.php"><img src="user_icons/log-out-red.png" class="log-out-red" width="20px" height="20px"><p>Logout</p></a>
</div>

</div>
</div>


</div>
<!-----end-sid-nav----div-->


<div class="navigation-top">
 <div class="flexing">

   <div class="menu">
   <img src="icons/menu icon black 2.png" width="50px" height="50px">
   </div> 

   <div class="search">
   <form action="dashboard.php" method="POST" enctype="multipart/form-data">
      <div class="searching">
       <label>Search</label>
        <input type="search" name="search" placeholder="search">         
      </div>              
   </form>
   </div>
 
<div class="user-detail">
<img src="users_pics/user profil 1.jpg" class="profile-pic" width="50px" height="50px" style="border-radius: 50%;">
<h1>nicolas gondwe</h1>
<p>Admin</p>
</div>  


  </div>
</div>



<!--------------------------mid nav div start-->
<div class="mid-nav">
  <div class="div1">

<div>
<a href="all_cdf_applicants.php" class="active">CDF-Applied Applicants</a>
</div>
    
<div>
<a href="all_users_networking_hub.php" class="inactive">CDF-Networking Hub</a>
</div> 
    
    
  </div>      
</div>
<!--------------------------mid nav div end-->




<div class="showing">
<?php
include('connecting2.php');
$query_cdf_users = "SELECT * FROM user_loan_registration WHERE status=0";
$query_cdf_users_result = mysqli_query($con,$query_cdf_users);
$query_cdf_users_result_num = mysqli_num_rows($query_cdf_users_result);


?>


<?php
include('connect.php');
$query_cdf_approved = "SELECT * FROM approved_Cdf_Fund_companies WHERE status=0";
$query_cdf_approved_result = mysqli_query($con,$query_cdf_approved );
$query_cdf_approved_result_num = mysqli_num_rows($query_cdf_approved_result);


?>






<div class="inner-showing">
<div class="one1">
<h4>Applied Citizens</h4>
<p>200<?php echo $query_cdf_users_result_num;?> </p>
</div> 
<!-------------------one1-->
        <div class="two1">
         <h4>Approved</h4>
         <p>200<?php echo $query_cdf_approved_result_num;?> </p>
        </div> 
<!-------------------two1-->
        <div class="three1">
        <h4>Dis Approved</h4>
        <p>70,000 Citizens</p>
        </div>
<!-------------------three1-->
        <div class="four1">
        <h4>Funded</h4>
        <p>130,000 Citizens</p>
        </div>
<!-------------------four1-->
        <div  class="five1">
         <h4>Total Funds Released</h4>
         <p>K300,000,000 KWA</p>
        </div>
<!-------------------five1-->
        <div  class="six1">
        <h4>Status</h4>
        </div>    
<!-------------------six1-->     
    </div>                
</div>




<!------project type------start-->
<div class="projects-type">
<div class="inner-projects-type">
   <h3>Projects Type</h3>                 
</div>
</div>
<!------project type------end-->



<!---------------information-container-->
<div class="informatiion-container">

<div class="inner-information-container">
<div class="info-1"><p>Project Titles</p></div>
<div class="info-2"><p class="infor-t2">% Percentage</p></div>
<div class="info-3"><p>Status</p></div>
</div>

</div>

<!---------------end information-container2-->
<div class="informatiion-container2">

<div class="inner-information-container2">
<div class="info-1"><p>Agriculture</p></div>
<div class="info-2"><p class="infor-22">50 %</p></div>
<div class="info-3"><p class="infor-33">Very High</p></div>
</div>
                    
</div>                 
<!---------------end information-container2-->

<div class="informatiion-container3">

<div class="inner-information-container3">
<div class="info-1"><p>Fish Farming/Aqua culture</p></div>
<div class="info-2"><p class="infor-three22">20 %</p></div>
<div class="info-3"><p class="infor-three33">mid</p></div>
</div>
                            
</div>                          
<!---------------end information-container3-->
                    
                    
<!---------------end information-container4-->
<div class="informatiion-container4">

<div class="inner-information-container4">
<div class="info-1"><p>Construction</p></div>
<div class="info-2"><p class="infor-four22">15 %</p></div>
<div class="info-3"><p class="infor-four33">Average</p></div>
</div>
                                    
</div>                                                   
<!---------------end information-container4-->
<div class="informatiion-container5">

<div class="inner-information-container5">
<div class="info-1"><p>Carpentry</p></div>
<div class="info-2"><p class="infor-five22">1 %</p></div>
<div class="info-3"><p class="infor-five33">Very low</p></div>
</div>
                                            
</div>                                            
<!---------------end information-container5-->
                                    
        

<!---------------end information-container6-->
<div class="informatiion-container6">

<div class="inner-information-container6">
<div class="info-1"><p>Metal Fabrication</p></div>
<div class="info-2"><p class="infor-six22">1 %</p></div>
<div class="info-3"><p class="infor-six33">Very low</p></div>
</div>
                                                    
</div>                                                  
<!---------------end information-container6-->
                                            
                
<!---------------end information-container7-->
<div class="informatiion-container7">

<div class="inner-information-container7">
<div class="info-1"><p>Transportation</p></div>
<div class="info-2"><p class="infor-seven22">5 %</p></div>
<div class="info-3"><p class="infor-seven33">low</p></div>
</div>
                                                            
</div>                                                        
<!---------------end information-container7-->
             
<div class="informatiion-container8">

<div class="inner-information-container8">
<div class="info-1"><p>Food Delivary Services</p></div>
<div class="info-2"><p class="infor-eight22">6 %</p></div>
<div class="info-3"><p class="infor-eight33">low</p></div>
</div>
                                                                    
</div>                                                                   
<!---------------end information-container8-->
<div class="informatiion-container9">

<div class="inner-information-container9">
<div class="info-1"><p>Housing</p></div>
<div class="info-2"><p class="infor-nine22">2 %</p></div>
<div class="info-3"><p class="infor-nine33">low</p></div>
</div>
                                                                            
</div>                                                                           
<!---------------end information-container9-->

<div class="informatiion-container10">

<div class="inner-information-container10">
<div class="info-1"><p>Housing290</p></div>
<div class="info-2"><p class="infor-ten22">2 %</p></div>
<div class="info-3"><p class="infor-ten33">low</p></div>
</div>
                                                                                    
</div>
                                                                                    
<!---------------end information-container10-->



<div class="background-fixed"></div>


<div class="fixed-white-side-right"></div>

<!---------------end of backgrounds-->


<div class="top-headind-middle">
  <div class="top-headind-middle-flex">
    <div><p>CDF APPLICATIONS USERS</p></div>
    <div><p><span class="hup">CDF NETWORKING HUB USERS</span></p></div>
  </div>
</div>


<!------cdf users--->

<?php
include('connecting2.php');


$query_cdf_users = "SELECT * FROM user_loan_registration";
$query_cdf_users_result = mysqli_query($con,$query_cdf_users);

if($query_cdf_users_result){
while($row = mysqli_fetch_array($query_cdf_users_result)){
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$name_of_business_organization_company_group_cooperative_club = $row['name_of_business_organization_company_group_cooperative_club'];
$created_on = $row['created_on'];

?>


<div class="cdf-applicants-main-container">
  <div class="inner-cdf-applicants">
       
<div class="limited-flex">
       
<div class="image">
  <img src="users_pics/user profil 1.jpg" width="50px" height="50" style="border-radius: 50%;">     
</div>
       
<div class="names">
<a href="profile_applicant.php"><h1><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></h1></a>
<p><?php echo $row['name_of_business_organization_company_group_cooperative_club'];?></p>
<p class="created-on"><?php echo $row['created_on'];?></p>
</div>
       
</div>
       
  </div>
</div>

<?php

  }
}

?>
</section>






<div class="section-two">
  
<!---------------------------------------------------cdf networking hub-->
<?php 

include('connecting.php');

if(isset($_GET['users_id'])){
$users_id = $_GET['users_id'];
}




$query_cdf = "SELECT * FROM login_user";
$query_cdf_result = mysqli_query($con,$query_cdf);


if($query_cdf_result){
while($row = mysqli_fetch_array($query_cdf_result)){
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$pic_upload = $row['pic_upload'];
$town = $row['town'];
$home = $row['home'];
$users_id = $row['users_id'];

?>

<div class="cdf-networking-main-container">
  <div class="inner-cdf-networking">
       
<div class="networking-limited-flex">
       
<div class="image-networking">
  <img src="user-uploads/<?php echo $row['pic_upload'];?>" width="50px" height="50" style="border-radius: 50%;">     
</div>
       
<div class="names-networking">
<a href="profile_main_networking_hub.php?users_id=$users_id"><h1><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></h1></a>
<p><?php echo $row['town'];?></p>
<p><?php echo $row['home'];?></p>
</div>
       
</div>
       
  </div>
</div>




<?php

  }
}


?>



</div>




                    
</body>
</html>