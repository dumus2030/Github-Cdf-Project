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
<title>Cdf-Funded Applicants Page</title>
<link rel="stylesheet"href="funded1.css">
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

<a href="all_cdf_applicants.php"><div class="two"><h1 class="one"><img src="icons/applied icon.png" width="30px" height="30px">Applied</h1></div></a>
<a href="approved.php"><div class="three"><h1><img src="icons/approved.png" width="30px" height="30px">Approved</h1></div></a>
<a href="dis_approved.php"><div class="four"><h1><img src="icons/disapproved 1.png" width="30px" height="30px">Dis-Approved</h1></div></a>
<a href="funded.php"><div class="five"><h1><img src="icons/funded icon.png" width="30px" height="30px">Funded</h1></div></a>
<a href="total_funds_released.php"><div class="six"><h1><img src="icons/total-funds-released.png" width="30px" height="30px">Total Funds Released</h1></div></a>
<div class="seven"><h1><img src="icons/status.jpg" width="30px" height="30px">Status</h1></div>

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
<label>
<input type="search" name="search" placeholder="search"> 
</label>        
</div>  
      
<button type="submit" name="submit-searching" class="search-bttn">Searching</button>  

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
$query_cdf_approved_result = mysqli_query($con,$query_cdf_approved);
$query_cdf_approved_result_num = mysqli_num_rows($query_cdf_approved_result);
?>



<?php
include('connect.php');
$query_cdf_funded = "SELECT * FROM funded WHERE status=0";
$query_cdf_funded_result = mysqli_query($con,$query_cdf_funded);
$query_cdf_funded_result_num = mysqli_num_rows($query_cdf_funded_result);
?>



<?php
include('connect.php');
$query_cdf_dis_approved = "SELECT * FROM dis_approval WHERE status=0";
$query_cdf_dis_approved_result = mysqli_query($con,$query_cdf_dis_approved);
$query_cdf_dis_approved_result_num = mysqli_num_rows($query_cdf_dis_approved_result);
?>






<div class="inner-showing">
<div class="one1">
<h4>Applied Citizens</h4>
<p><?php echo $query_cdf_users_result_num;?> </p>
</div> 
<!-------------------one1-->
        <div class="two1">
         <h4>Approved</h4>
         <p><?php echo $query_cdf_approved_result_num;?></p>
        </div> 
<!-------------------two1-->
        <div class="three1">
        <h4>Dis Approved</h4>
        <p><?php echo $query_cdf_dis_approved_result_num;?></p>
        </div>
<!-------------------three1-->
        <div class="four1">
        <h4>Funded</h4>
        <p><?php echo $query_cdf_funded_result_num;?></p>
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
   <h3>FUNDED COMPANIES</h3>                 
</div>
</div>
<!------project type------end-->



<!---------------information-container-->
<div class="informatiion-container">

<div class="inner-information-container">
<div><p class="info-1">Campany Name</p></div>
<div><p class="info-2">Town Of Residence</p></div>
<div><p class="info-3">Consituency</p></div>
<div><p class="info-4">Number Of Employees</p></div>
<div><p class="info-5">Rquested Fund Amount</p></div>
<div><p class="info-6">Payment Period</p></div>
<div><p class="info-7">FUNDED</p></div>

</div>

</div>






<!---------------end information-container2-->


<!---------------end information-container2-->

<?php
include('connect.php');
$query_approved = "SELECT * FROM `approved_Cdf_Fund_companies`";
$query_approved_result = mysqli_query($con, $query_approved);


if($query_approved_result){
while($row = mysqli_fetch_assoc($query_approved_result)){

$company_names = $row['company_names'];
$town_of_residence = $row['town_of_residence'];
$constituency = $row['constituency'];
$number_of_employees = $row['number_of_employees'];
$requested_fund_amount = $row['requested_fund_amount'];
$payment_period = $row['payment_period'];
$monthly_repayment_period = $row['monthly_repayment_period'];


?>




<div class="informatiion-container2">

<div class="inner-information-container2">
  <div><p class="info-11"><?php echo $row['company_names'];?></p></div>
  <div><p class="info-12"><?php echo $row['town_of_residence'];?></p></div>
  <div><p class="info-13"><?php echo $row['constituency'];?></p></div>
  <div><p class="info-14"><?php echo $row['number_of_employees'];?></p></div>
  <div><p class="info-15"><?php echo $row['requested_fund_amount'];?></p></div>
  <div><p class="info-16"><?php echo $row['payment_period'];?></p></div>
  <div><p class="info-17"><img src="icons/funded icon.png" width="20px" height="20px"><?php echo $row['monthly_repayment_period'];?></p></div>
</div>
                    
</div>     


<?php
  
 }
}

?>


      



<!---------------end information-container2-->

</section>







                    
</body>
</html>