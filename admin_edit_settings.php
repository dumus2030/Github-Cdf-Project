<?php
session_start();
include('connect.php');

if(!isset($_SESSION['email'])){
header('location:dashboard.php');
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
<title>Admin Edit Settings Page</title>
<Link rel="stylesheet"href="admin_edit_settings.css">
</head>
<body>

<section class="header_admin_settings">







<nav class="nav">

<div class="right-icons">
<a href="dashboard.php"><img src="user_icons/house icon-white.png" width="50px" height="50px"></a>
<p>Back To The Main Page</p>
</div>


<div class="left-icons">
<img src="user-uploads/64672ca082a811.62924573.jpg" width="50px" height="50px">
<p>Nicolas Gondwe</p>
</div>

</nav>


<?php



if(isset($_POST['submit_approved_companies'])){

if(isset($_POST['company_names'])){
$company_names = $_POST['company_names'];
}

if(isset($_POST['town_of_residence'])){
$town_of_residence = $_POST['town_of_residence'];
}


if(isset($_POST['number_of_employees'])){
$number_of_employees = $_POST['number_of_employees'];
}


if(isset($_POST['requested_fund_amount'])){
$requested_fund_amount = $_POST['requested_fund_amount'];
}


if(isset($_POST['payment_period'])){
$payment_period = $_POST['payment_period'];
}


if(isset($_POST['monthly_repayment_period'])){
$monthly_repayment_period = $_POST['monthly_repayment_period'];
}


if(isset($_POST['constituency'])){
$constituency = $_POST['constituency'];
}


$errors = array();


$query_approves = "INSERT INTO `approved_Cdf_Fund_companies`(`company_names`,`town_of_residence`,`number_of_employees`,`requested_fund_amount`,`payment_period`,`monthly_repayment_period`,`constituency`)VALUES('$company_names','$town_of_residence','$number_of_employees','$requested_fund_amount','$payment_period','$monthly_repayment_period','$constituency')";

$query_approves_result = mysqli_query($con,$query_approves);

if($query_approves_result){
 $_SESSION['email'] = $email;
header('location:admin_edit_settings.php?inserted approval information succesful');     
 
echo"<div class='successs-messsage'>
<p>You Have succesfully submitted All The Approved Companies's Details!!!</p>
</div>";           
}





else{
    
echo"<div class='unsuccesss-messsage'>
  <p>You Have not succesfully submitted Approved Company Details!!!</p>
</div>";         
}




}
?>






<div class="applied-form-div">
  
 <center>
<h1 class="approved_companies_h1">Approved Companies</h1> 
 </center>                   


<form action="admin_edit_settings.php" method="POST">

<div class="marginer">
<label>Company Names
<input type="text" name="company_names" maxlength="30" placeholder="Enter company names" value="<?php if(isset($_POST['company_names'])) echo  $_POST['company_names']; ?>">
</label>                 
</div>

<div class="marginer">
<label>Town Of Residence
<input type="text" name="town_of_residence" maxlength="20" placeholder="Enter Town Of Residence" value="<?php if(isset($_POST['town_of_residence'])) echo $_POST['town_of_residence'];?>">
</label>                 
</div>

<div class="marginer">
<label>Number Of Employees
<input type="text" name="number_of_employees" maxlength="20" placeholder="Add Your Number Of Employees" value="<?php if(isset($_POST['number_of_employees'])) echo $_POST['number_of_employees'];?>">
</label>                 
</div>

<div class="marginer">
<label>Requested Fund Amount
<input type="text" name="requested_fund_amount" maxlength="20" placeholder="Add Requested Fund Amount" value="<?php if(isset($_POST['requested_fund_amount'])) echo $_POST['requested_fund_amount'];?>">
</label>                 
</div>
                    

<div class="marginer">
<label>Payment Period
<input type="text" name="payment_period" maxlength="20" placeholder="Add Payment Period" value="<?php if(isset($_POST['payment_period'])) echo $_POST['payment_period'];?>">
</label>                 
</div>

<div class="marginer">
<label>Monthly Repayment Period
<input type="text" name="monthly_repayment_period" maxlength="20" placeholder="Add Monthly Repayment Period" value="<?php if(isset($_POST['monthly_repayment_period'])) echo $_POST['monthly_repayment_period'];?>">
</label>                 
</div>
     

<div class="marginer">
<label>Constituency
<input type="text" name="constituency" maxlength="25" placeholder="Add Constituency" value="<?php if(isset($_POST['constituency'])) echo $_POST['constituency'];?>">
</label>                 
</div>
                    
                         
<div class="marginer">
<label>
<center>
<button type="submit" name="submit_approved_companies" class="submit_approved_companies">Submit</button>
</center>
</label>                 
</div>


</form>

</div>

<!------------------------------------end of approval form------------>



<?php

if(isset($_POST['submit_funded_companies'])){

if(isset($_POST['company_names'])){
$company_names = $_POST['company_names'];
}

if(isset($_POST['town_of_residence'])){
$town_of_residence = $_POST['town_of_residence'];
}


if(isset($_POST['number_of_employees'])){
$number_of_employees = $_POST['number_of_employees'];
}


if(isset($_POST['requested_fund_amount'])){
$requested_fund_amount = $_POST['requested_fund_amount'];
}


if(isset($_POST['payment_period'])){
$payment_period = $_POST['payment_period'];
}


if(isset($_POST['funded'])){
$funded = $_POST['funded'];
}


if(isset($_POST['constituency'])){
$constituency = $_POST['constituency'];
}


$errors = array();


$query_funded = "INSERT INTO `funded`(`company_names`,`town_of_residence`,`number_of_employees`,`requested_fund_amount`,`payment_period`,`funded`,`constituency`)VALUES('$company_names','$town_of_residence','$number_of_employees','$requested_fund_amount','$payment_period','$funded','$constituency')";

$query_funded_result = mysqli_query($con,$query_funded);

if($query_funded_result){
 $_SESSION['email'] = $email;
header('location:admin_edit_settings.php?inserted approval information succesful');     
 
echo"<div class='successs-messsage'>
<p>You Have succesfully submitted All The Approved Companies's Details!!!</p>
</div>";           
}





else{
    
echo"<div class='unsuccesss-messsage'>
  <p>You Have not succesfully submitted Approved Company Details!!!</p>
</div>";         
}




}
?>






<div class="funded-form-div">
  
 <center>
<h1 class="funded_companies_h1">Funded Companies</h1> 
 </center>                   


<form action="admin_edit_settings.php" method="POST">

<div class="marginer">
<label>Company Names
<input type="text" name="company_names" maxlength="30" placeholder="Enter company names" value="<?php if(isset($_POST['company_names'])) echo  $_POST['company_names']; ?>">
</label>                 
</div>

<div class="marginer">
<label>Town Of Residence
<input type="text" name="town_of_residence" maxlength="20" placeholder="Enter Town Of Residence" value="<?php if(isset($_POST['town_of_residence'])) echo $_POST['town_of_residence'];?>">
</label>                 
</div>

<div class="marginer">
<label>Number Of Employees
<input type="text" name="number_of_employees" maxlength="20" placeholder="Add Your Number Of Employees" value="<?php if(isset($_POST['number_of_employees'])) echo $_POST['number_of_employees'];?>">
</label>                 
</div>

<div class="marginer">
<label>Requested Fund Amount
<input type="text" name="requested_fund_amount" maxlength="20" placeholder="Add Requested Fund Amount" value="<?php if(isset($_POST['requested_fund_amount'])) echo $_POST['requested_fund_amount'];?>">
</label>                 
</div>
                    

<div class="marginer">
<label>Payment Period
<input type="text" name="payment_period" maxlength="20" placeholder="Add Payment Period" value="<?php if(isset($_POST['payment_period'])) echo $_POST['payment_period'];?>">
</label>                 
</div>

<div class="marginer">
<label>Funded
<input type="text" name="funded" maxlength="20" placeholder="Funded Amount" value="<?php if(isset($_POST['funded'])) echo $_POST['funded'];?>">
</label>                 
</div>
     

<div class="marginer">
<label>Constituency
<input type="text" name="constituency" maxlength="25" placeholder="Add Constituency" value="<?php if(isset($_POST['constituency'])) echo $_POST['constituency'];?>">
</label>                 
</div>
                    
                         
<div class="marginer">
<label>
<center>
<button type="submit" name="submit_funded_companies" class="submit_funded_companies">Submit</button>
</center>
</label>                 
</div>


</form>

</div>

<!------------------------------------end of approval form------------>















<?php

if(isset($_POST['submit_disapproved_companies'])){

if(isset($_POST['company_names'])){
$company_names = $_POST['company_names'];
}

if(isset($_POST['town_of_residence'])){
$town_of_residence = $_POST['town_of_residence'];
}


if(isset($_POST['requested_fund_amount'])){
$requested_fund_amount = $_POST['requested_fund_amount'];
}


if(isset($_POST['text'])){
$text = $_POST['text'];
}


if(isset($_POST['constituency'])){
$constituency = $_POST['constituency'];
}


$errors = array();


$query_dis_approved = "INSERT INTO `dis_approval`(`company_names`,`town_of_residence`,`requested_fund_amount`,`text`,`constituency`)VALUES('$company_names','$town_of_residence','$number_of_employees','$requested_fund_amount','$text','$constituency')";

$query_dis_approved_result = mysqli_query($con,$query_dis_approved);

if($query_dis_approved_result){
 $_SESSION['email'] = $email;
header('location:admin_edit_settings.php?inserted approval information succesful');     
 
echo"<div class='successs-messsage'>
<p>You Have succesfully submitted All The Approved Companies's Details!!!</p>
</div>";           
}





else{
    
echo"<div class='unsuccesss-messsage'>
  <p>You Have not succesfully submitted Approved Company Details!!!</p>
</div>";         
}




}
?>






<div class="dis-approved-form-div">
  
 <center>
<h1 class="disapproved_companies_h1">Dis Approved Companies</h1> 
 </center>                   


<form action="admin_edit_settings.php" method="POST">

<div class="marginer">
<label>Company Names
<input type="text" name="company_names" maxlength="30" placeholder="Enter company names" value="<?php if(isset($_POST['company_names'])) echo  $_POST['company_names']; ?>">
</label>                 
</div>

                    

<div class="marginer">
<label>Town Of Residence
<input type="text" name="town_of_residence" maxlength="20" placeholder="Enter Town Of Residence" value="<?php if(isset($_POST['town_of_residence'])) echo $_POST['town_of_residence'];?>">
</label>                 
</div>


<div class="marginer">
<label>Requested Fund Amount
<input type="text" name="requested_fund_amount" maxlength="20" placeholder="Add Requested Fund Amount" value="<?php if(isset($_POST['requested_fund_amount'])) echo $_POST['requested_fund_amount'];?>">
</label>                 
</div>
                      

<div class="marginer">
<label>Constituency
<input type="text" name="constituency" maxlength="25" placeholder="Add Constituency" value="<?php if(isset($_POST['constituency'])) echo $_POST['constituency'];?>">
</label>                 
</div>

<div class="marginer">
<label>Reasons Of Dis-Approval
<textarea type="text" name="text" maxlength="600" rows="5" cols="5" placeholder="Comments of Disapprovals"></textarea>
</label>                 
</div>
    
                    
                         
<div class="marginer">
<label>
<center>
<button type="submit" name="submit_disapproved_companies" class="submit_disapproved_companies">Submit</button>
</center>
</label>                 
</div>


</form>

</div>

<!------------------------------------end of approval form------------>














<div class="background-fixed">

</div>

</section>              
</body>
</html>