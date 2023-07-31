<?php 
session_start();
include('connect.php');
if(!isset($_SESSION['email'])){
  header('location:index_register_admins_dashboard.php');
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
<title>Dashboard</title>
<link rel="stylesheet"href="all_cdf_applicants.css">
</head>
<body>


<section class="header-dashboard">

<!-----side nav div-->
<div class="side-nav">

<div class="dashbording">
<a href="dashboard.php"><h2>Main Dashboard</h2></a>
<p>click main dashboard to return to the main page</p>
</div> 


<div class="logo">
<img src="logos/zambia coat of arms.png" width="100px" height="100px">
</div> 

<div class="main-di-side-nav">
<div class="inner-side-nav">

<div class="two"><h1 class="one"><img src="icons/infor 2.png" width="30px" height="30px">Applied</h1></div>
<div class="three"><h1><img src="icons/infor 2.png" width="30px" height="30px">Approved</h1></div>
<div class="four"><h1><img src="icons/infor 2.png" width="30px" height="30px">Dis-Approved</h1></div>
<div class="five"><h1><img src="icons/infor 2.png" width="30px" height="30px">Funded</h1></div>
<div class="six"><h1><img src="icons/infor 2.png" width="30px" height="30px">Total Funds Released</h1></div>
<div class="seven"><h1><img src="icons/infor 2.png" width="30px" height="30px">Status</h1></div>

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
$query_cdf_users_result_num = mysqli_num_rows($query_cdf_users_result)>0;


?>

<div class="inner-showing">
<div class="one1">
<h4>Applied Citizens</h4>
<p><?php echo $query_cdf_users_result_num;?> </p>
</div> 
<!-------------------one1-->
        <div class="two1">
         <h4>Approved</h4>
         <p>130,000 Citizens</p>
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



<div class="click">
<p>Click On Company Names To View Applicants Application Forms</p>
</div>





<div class="all-applicants-div">
<div class="inner-all-applicants-div">


<div>
<img src="user-pic-uplods/download (1).jpg" class="log-imagi">
</div>

<div class="flex-company">

<div>
<a href="applicant_form_profileview.php"><h4>Compay Name</h4></a>
<a href="applicant_form_profileview.php"><p>Aquarite</p></a>
<p>Lusaka,zambia</p>
</div>



<div>
<h4>Project Title</h4>
<p>Water Ditribution</p>
</div>


<div>
<h4>Request Funding Amount</h4>
<p>K1,000,000</p>
</div>



<div>
<h4>Secretary Names</h4>
<p>Joseph Kanjombe</p>
<p>0976-897865</p>
</div>
  
<div>
  <h4>Location/Town</h4>
  <p>Lusaka</p>
 </div>



<div>
<h4>Date Of Application</h4>
<p>10th April 2023</p>
</div>

</div>

</div>
</div>



</section>
</body>
</html>

