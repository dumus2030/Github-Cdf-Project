<?php
session_start();
include('user_loan_connection.php');

if(!isset($_SESSION['email'])){
  
header('location:applicant_form_login.php');
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
<title>postbox</title>
<link rel="Stylesheet" href="profileview.css">
</head>
<body>


<div class="main">


<?php

$sql_count = "SELECT * FROM `user_loan_registration` WHERE status=0";
$result_status = mysqli_query($con, $sql_count);
$status_count = mysqli_num_rows($result_status);

?>



<div class="registered-users">
<h4>Registered Users</h4>
<span class="total-users"><?php echo $status_count; ?></span>
</div>



<?php


$sql = "SELECT * FROM `user_loan_registration` WHERE  email = '$email'";
                    
$result = mysqli_query($con, $sql);
$usercount = mysqli_num_rows($result) > 0;
                    
if(!$usercount){
echo "<p class='error-mgs'>please loggin first</p>";
header('location:applicant_form_login.php');
}
                    
if($usercount){
while($row = mysqli_fetch_assoc($result)){
                       
  
  $project_identification_number = $row['project_identification_number'];
  $yezoneward_code_number = $row['yezoneward_code_number'];
  $wezone_ward_code_number = $row['wezone_ward_code_number'];
  $cezoneward_code_number = $row['cezoneward_code_number'];
  $name_of_business_organization_company_group_cooperative_club = $row['name_of_business_organization_company_group_cooperative_club'];
  $legal_form_Of_applicant_limited_company_sme_group_cooperative_club = $row['legal_form_Of_applicant_limited_company_sme_group_cooperative'];
  $date_Of_company_group_cooperative_club_registration = $row['date_Of_company_group_cooperative_club_registration'];
  $tipn = $row['tipn'];



  
  $authorized_representertive_name_of_contact_person = $row['authorized_representertive_name_of_contact_person'];
  $authorized_representertive_position_in_business = $row['authorized_representertive_position_in_business'];
  $authorized_representertive_contact_number_cell = $row['authorized_representertive_contact_number_cell'];
  $authorized_representertive_contact_number_telephone = $row['authorized_representertive_contact_number_telephone'];

  $authorized_representertive_email = $row['authorized_representertive_email'];
  $project_location_name_of_district = $row['project_location_name_of_district'];
  $project_location_name_of_constituency = $row['project_location_name_of_constituency'];

  $project_location_name_of_ward = $row['project_location_name_of_ward'];
  $project_location_name_of_zone = $row['project_location_name_of_zone'];
  $project_location_name_physical_address = $row['project_location_name_physical_address'];
  $loan_application_amount_in_Figures = $row['loan_application_amount_in_Figures'];
  $loan_application_amount_in_words = $row['loan_application_amount_in_words'];
  
  $description_of_business = $row['description_of_business'];
  $indicate_weather_company_is_start_up = $row['indicate_weather_company_is_start_up'];
  $purpose_of_the_loan = $row['purpose_of_the_loan'];
  $repayment_period = $row['repayment_period'];
  $source_of_funds_of_repayment_loan = $row['source_of_funds_of_repayment_loan'];
  $collaterial_if_any = $row['collaterial_if_any'];

  $financials_description_cost_one = $row['financials_description_cost_one'];
  $financials_description_cost_two = $row['financials_description_cost_two'];
  $financials_description_cost_three = $row['financials_description_cost_three'];
  $financials_description_cost_four = $row['financials_description_cost_four'];
  $financials_description_cost_five = $row['financials_description_cost_five'];
  $financials_description_cost_six = $row['financials_description_cost_six'];
  $financials_description_cost_seven = $row['financials_description_cost_seven'];
  $financials_description_cost_eight = $row['financials_description_cost_eight'];
  $financials_description_cost_nine = $row['financials_description_cost_nine'];
  $financials_description_cost_ten = $row['financials_description_cost_ten'];
  $financials_description_cost_eleven = $row['financials_description_cost_eleven'];
  $financials_description_cost_twelve = $row['financials_description_cost_twelve'];
  $financials_description_cost_thirteen = $row['financials_description_cost_thirteen'];
  $financials_description_cost_fourteen = $row['financials_description_cost_fourteen'];
  $financials_description_cost_fifteen = $row['financials_description_cost_fifteen'];
  
  $financials_description_quality_one = $row['financials_description_quality_one'];
  $financials_description_quality_two = $row['financials_description_quality_two'];
  $financials_description_quality_three = $row['financials_description_quality_three'];
  $financials_description_quality_four = $row['financials_description_quality_four'];
  $financials_description_quality_five = $row['financials_description_quality_five'];
  $financials_description_quality_six = $row['financials_description_quality_six'];
  $financials_description_quality_seven = $row['financials_description_quality_seven'];
  $financials_description_quality_eight = $row['financials_description_quality_eight'];
  $financials_description_quality_nine = $row['financials_description_quality_nine'];
  $financials_description_quality_ten = $row['financials_description_quality_ten'];
  $financials_description_quality_eleven = $row['financials_description_quality_eleven'];
  $financials_description_quality_twelve = $row['financials_description_quality_twelve'];
  $financials_description_quality_thirteen = $row['financials_description_quality_thirteen'];
  $financials_description_quality_fourteen = $row['financials_description_quality_fourteen'];
  $financials_description_quality_fifteen = $row['financials_description_quality_fifteen'];

  $financials_description_unitcost_one = $row['financials_description_unitcost_one'];
  $financials_description_unitcost_two = $row['financials_description_unitcost_two'];
  $financials_description_unitcost_three = $row['financials_description_unitcost_three'];
  $financials_description_unitcost_four = $row['financials_description_unitcost_four'];
  $financials_description_unitcost_five = $row['financials_description_unitcost_five'];
  $financials_description_unitcost_six = $row['financials_description_unitcost_six'];
  $financials_description_unitcost_seven = $row['financials_description_unitcost_seven'];
  $financials_description_unitcost_eight = $row['financials_description_unitcost_eight'];
  $financials_description_unitcost_nine = $row['financials_description_unitcost_nine'];
  $financials_description_unitcost_ten = $row['financials_description_unitcost_ten'];
  $financials_description_unitcost_eleven = $row['financials_description_unitcost_eleven'];
  $financials_description_unitcost_twelve = $row['financials_description_unitcost_twelve'];
  $financials_description_unitcost_thirteen = $row['financials_description_unitcost_thirteen'];
  $financials_description_unitcost_fourteen = $row['financials_description_unitcost_fourteen'];
  $financials_description_unitcost_fifteen = $row['financials_description_unitcost_fifteen'];

  $financials_description_totalcost_one = $row['financials_description_totalcost_one'];
  $financials_description_totalcost_two = $row['financials_description_totalcost_two'];
  $financials_description_totalcost_three = $row['financials_description_totalcost_three'];
  $financials_description_totalcost_four = $row['financials_description_totalcost_four'];
  $financials_description_totalcost_five = $row['financials_description_totalcost_five'];
  $financials_description_totalcost_six = $row['financials_description_totalcost_six'];
  $financials_description_totalcost_seven = $row['financials_description_totalcost_seven'];
  $financials_description_totalcost_eight = $row['financials_description_totalcost_eight'];
  $financials_description_totalcost_nine = $row['financials_description_totalcost_nine'];
  $financials_description_totalcost_ten = $row['financials_description_totalcost_ten'];
  $financials_description_totalcost_eleven = $row['financials_description_totalcost_eleven'];
  $financials_description_totalcost_twelve = $row['financials_description_totalcost_twelve'];
  $financials_description_totalcost_thirteen = $row['financials_description_totalcost_thirteen'];
  $financials_description_totalcost_fourteen = $row['financials_description_totalcost_fourteen'];
  $financials_description_totalcost_fifteen = $row['financials_description_totalcost_fifteen'];
  $financials_description_totalcost_final = $row['financials_description_totalcost_final'];
  $projected_level_of_production_description_of_product_one = $row['projected_level_of_production_description_of_product_one'];
  $projected_level_of_production_description_of_product_two = $row['projected_level_of_production_description_of_product_two']; $projected_level_of_production_description_of_product_one_month1 = $row['projected_level_of_production_description_of_product_one_month1'];  $projected_level_of_production_description_of_product_one_month2 = $row['projected_level_of_production_description_of_product_one_month2'];
  $projected_level_of_production_description_of_product_one_month3 = $row['projected_level_of_production_description_of_product_one_month3'];$projected_level_of_production_description_of_product_one_month4 = $row['projected_level_of_production_description_of_product_one_month4'];$projected_level_of_production_description_of_product_one_month5 = $row['projected_level_of_production_description_of_product_one_month5'];$projected_level_of_production_description_of_product_one_month6 = $row['projected_level_of_production_description_of_product_one_month6'];
  $projected_level_of_production_description_of_product_one_month7 = $row['projected_level_of_production_description_of_product_one_month7'];
  $projected_level_of_production_description_of_product_one_month8 = $row['projected_level_of_production_description_of_product_one_month8'];$projected_level_of_production_description_of_product_one_month9 = $row['projected_level_of_production_description_of_product_one_month9'];$projected_level_of_production_description_of_product_one_month10 = $row['projected_level_of_production_description_of_product_one_month10'];$projected_level_of_production_description_of_product_one_month11 = $row['projected_level_of_production_description_of_product_one_month11'];$projected_level_of_production_description_of_product_one_month12 = $row['projected_level_of_production_description_of_product_one_month12'];
  $projected_level_of_production_description_of_product_one_year2 = $row['projected_level_of_production_description_of_product_one_year2'];
  $projected_level_of_production_description_of_product_one_year3 = $row['projected_level_of_production_description_of_product_one_year3'];
  $projected_level_of_production_description_of_product_one_year4 = $row['projected_level_of_production_description_of_product_one_year4'];
  $projected_level_of_production_description_of_product_two_month1 = $row['projected_level_of_production_description_of_product_two_month1'];
  $projected_level_of_production_description_of_product_two_month2 = $row['projected_level_of_production_description_of_product_two_month2'];
  $projected_level_of_production_description_of_product_two_month3 = $row['projected_level_of_production_description_of_product_two_month3'];$projected_level_of_production_description_of_product_two_month4 = $row['projected_level_of_production_description_of_product_two_month4'];$projected_level_of_production_description_of_product_two_month5 = $row['projected_level_of_production_description_of_product_two_month5'];$projected_level_of_production_description_of_product_two_month6 = $row['projected_level_of_production_description_of_product_two_month6'];$projected_level_of_production_description_of_product_two_month7 = $row['projected_level_of_production_description_of_product_two_month7'];$projected_level_of_production_description_of_product_two_month8 = $row['projected_level_of_production_description_of_product_two_month8'];$projected_level_of_production_description_of_product_two_month9 = $row['projected_level_of_production_description_of_product_two_month9'];$projected_level_of_production_description_of_product_two_month10 = $row['projected_level_of_production_description_of_product_two_month10'];$projected_level_of_production_description_of_product_two_month11 = $row['projected_level_of_production_description_of_product_two_month11'];$projected_level_of_production_description_of_product_two_month12 = $row['projected_level_of_production_description_of_product_two_month12'];
  $projected_level_of_production_description_of_product_two_year1 = $row['projected_level_of_production_description_of_product_two_year1'];
  $projected_level_of_production_description_of_product_two_year2 = $row['projected_level_of_production_description_of_product_two_year2'];
  $projected_level_of_production_description_of_product_two_year3 = $row['projected_level_of_production_description_of_product_two_year3'];
  $sales_projections_description_one = $row['sales_projections_description_one'];
  $sales_projections_description_two = $row['sales_projections_description_two'];
  $sales_projections_description_three = $row['sales_projections_description_three'];
  $sales_projections_description_four = $row['sales_projections_description_four'];
  $sales_projections_description_five = $row['sales_projections_description_five'];
  $sales_projections_description_six = $row['sales_projections_description_six'];
  $sales_projections_description_one_m1 = $row['sales_projections_description_one_m1'];
  $sales_projections_description_one_m2 = $row['sales_projections_description_one_m2'];
  $sales_projections_description_one_m3 = $row['sales_projections_description_one_m3'];
  $sales_projections_description_one_m4 = $row['sales_projections_description_one_m4'];
  $sales_projections_description_one_m5 = $row['sales_projections_description_one_m5'];
  $sales_projections_description_one_m6 = $row['sales_projections_description_one_m6'];
  $sales_projections_description_one_m7 = $row['sales_projections_description_one_m7'];
  $sales_projections_description_one_m8 = $row['sales_projections_description_one_m8'];
  $sales_projections_description_one_m9 = $row['sales_projections_description_one_m9'];
  $sales_projections_description_one_m10 = $row['sales_projections_description_one_m10'];
  $sales_projections_description_one_m11 = $row['sales_projections_description_one_m11'];
  $sales_projections_description_one_m12 = $row['sales_projections_description_one_m12'];
  $sales_projections_description_one_totaly1 = $row['sales_projections_description_one_totaly1'];
  
  $sales_projections_description_one_unitprice_y1 = $row['sales_projections_description_one_unitprice_y1'];
  $sales_projections_description_one_unitprice_y2 = $row['sales_projections_description_one_unitprice_y2'];
  $sales_projections_description_one_unitprice_y3 = $row['sales_projections_description_one_unitprice_y3'];
  $sales_projections_description_one_unitprice_y4 = $row['sales_projections_description_one_unitprice_y4'];
  $sales_projections_description_one_totalsale_y1 = $row['sales_projections_description_one_totalsale_y1'];
  $sales_projections_description_one_totalsale_y2 = $row['sales_projections_description_one_totalsale_y2'];
  $sales_projections_description_one_totalsale_y3 = $row['sales_projections_description_one_totalsale_y3'];
  $sales_projections_description_one_totalsale_y4 = $row['sales_projections_description_one_totalsale_y4'];

  $sales_projections_description2_one_m1 = $row['sales_projections_description2_one_m1'];
  $sales_projections_description2_one_m2 = $row['sales_projections_description2_one_m2'];
  $sales_projections_description2_one_m3 = $row['sales_projections_description2_one_m3'];
  $sales_projections_description2_one_m4 = $row['sales_projections_description2_one_m4'];
  $sales_projections_description2_one_m5 = $row['sales_projections_description2_one_m5'];
  $sales_projections_description2_one_m6 = $row['sales_projections_description2_one_m6'];
   
  $sales_projections_description2_one_m7 = $row['sales_projections_description2_one_m7'];
  $sales_projections_description2_one_m8 = $row['sales_projections_description2_one_m8'];
  $sales_projections_description2_one_m9 = $row['sales_projections_description2_one_m9'];
  $sales_projections_description2_one_m10 = $row['sales_projections_description2_one_m10'];
  $sales_projections_description2_one_m11 = $row['sales_projections_description2_one_m11'];
  $sales_projections_description2_one_m12 = $row['sales_projections_description2_one_m12'];
  $sales_projections_description2_one_totaly1 = $row['sales_projections_description2_one_totaly1'];
  $sales_projections_description2_one_unitprice_y1 = $row['sales_projections_description2_one_unitprice_y1'];
  $sales_projections_description2_one_unitprice_y2 = $row['sales_projections_description2_one_unitprice_y2'];
  $sales_projections_description2_one_unitprice_y3 = $row['sales_projections_description2_one_unitprice_y3'];
  $sales_projections_description2_one_unitprice_y4 = $row['sales_projections_description2_one_unitprice_y4'];
  $sales_projections_description2_one_totalsale_y1 = $row['sales_projections_description2_one_totalsale_y1'];
  $sales_projections_description2_one_totalsale_y2 = $row['sales_projections_description2_one_totalsale_y2'];
  $sales_projections_description2_one_totalsale_y3 = $row['sales_projections_description2_one_totalsale_y3'];
  $sales_projections_description2_one_totalsale_y4 = $row['sales_projections_description2_one_totalsale_y4'];

  $sales_projections_description3_one_m1 = $row['sales_projections_description3_one_m1'];
  $sales_projections_description3_one_m2 = $row['sales_projections_description3_one_m2'];
  $sales_projections_description3_one_m3 = $row['sales_projections_description3_one_m3'];
  $sales_projections_description3_one_m4 = $row['sales_projections_description3_one_m4'];
  $sales_projections_description3_one_m5 = $row['sales_projections_description3_one_m5'];
  $sales_projections_description3_one_m6 = $row['sales_projections_description3_one_m6'];
  $sales_projections_description3_one_m7 = $row['sales_projections_description3_one_m7'];
  $sales_projections_description3_one_m8 = $row['sales_projections_description3_one_m8'];
  $sales_projections_description3_one_m9 = $row['sales_projections_description3_one_m9'];
  $sales_projections_description3_one_m10 = $row['sales_projections_description3_one_m10'];
  $sales_projections_description3_one_m11 = $row['sales_projections_description3_one_m11'];
  $sales_projections_description3_one_m12 = $row['sales_projections_description3_one_m12'];
  $sales_projections_description3_one_totaly1 = $row['sales_projections_description3_one_totaly1'];
  $sales_projections_description3_one_unitprice_y1 = $row['sales_projections_description3_one_unitprice_y1'];
  $sales_projections_description3_one_unitprice_y2 = $row['sales_projections_description3_one_unitprice_y2'];
  $sales_projections_description3_one_unitprice_y3 = $row['sales_projections_description3_one_unitprice_y3'];
  $sales_projections_description3_one_unitprice_y4 = $row['sales_projections_description3_one_unitprice_y4'];
  $sales_projections_description3_one_totalsale_y1 = $row['sales_projections_description3_one_totalsale_y1'];
  $sales_projections_description3_one_totalsale_y2 = $row['sales_projections_description3_one_totalsale_y2'];
  $sales_projections_description3_one_totalsale_y3 = $row['sales_projections_description3_one_totalsale_y3'];
  $sales_projections_description3_one_totalsale_y4 = $row['sales_projections_description3_one_totalsale_y4'];

  $sales_projections_description4_one_m1 = $row['sales_projections_description4_one_m1'];
  $sales_projections_description4_one_m2 = $row['sales_projections_description4_one_m2'];
  $sales_projections_description4_one_m3 = $row['sales_projections_description4_one_m3'];
  $sales_projections_description4_one_m4 = $row['sales_projections_description4_one_m4'];
  $sales_projections_description4_one_m5 = $row['sales_projections_description4_one_m5'];
  $sales_projections_description4_one_m6 = $row['sales_projections_description4_one_m6'];
  $sales_projections_description4_one_m7 = $row['sales_projections_description4_one_m7'];
  $sales_projections_description4_one_m8 = $row['sales_projections_description4_one_m8'];
  $sales_projections_description4_one_m9 = $row['sales_projections_description4_one_m9'];
  $sales_projections_description4_one_m10 = $row['sales_projections_description4_one_m10'];
  $sales_projections_description4_one_m11 = $row['sales_projections_description4_one_m11'];
  $sales_projections_description4_one_m12 = $row['sales_projections_description4_one_m12'];
  $sales_projections_description4_one_totaly1 = $row['sales_projections_description4_one_totaly1'];
  $sales_projections_description4_one_unitprice_y1 = $row['sales_projections_description4_one_unitprice_y1'];
  $sales_projections_description4_one_unitprice_y2 = $row['sales_projections_description4_one_unitprice_y2'];
  $sales_projections_description4_one_unitprice_y3 = $row['sales_projections_description4_one_unitprice_y3'];
  $sales_projections_description4_one_unitprice_y4 = $row['sales_projections_description4_one_unitprice_y4'];
  $sales_projections_description4_one_totalsale_y1 = $row['sales_projections_description4_one_totalsale_y1'];
  $sales_projections_description4_one_totalsale_y2 = $row['sales_projections_description4_one_totalsale_y2'];
  $sales_projections_description4_one_totalsale_y3 = $row['sales_projections_description4_one_totalsale_y3'];
  $sales_projections_description4_one_totalsale_y1 = $row['sales_projections_description4_one_totalsale_y1'];
  $sales_projections_description5_one_m1 = $row['sales_projections_description5_one_m1'];
  $sales_projections_description5_one_m2 = $row['sales_projections_description5_one_m2'];
  $sales_projections_description5_one_m3 = $row['sales_projections_description5_one_m3'];
  $sales_projections_description5_one_m4 = $row['sales_projections_description5_one_m4'];
  $sales_projections_description5_one_m5 = $row['sales_projections_description5_one_m5'];
  $sales_projections_description5_one_m6 = $row['sales_projections_description5_one_m6'];
  $sales_projections_description5_one_m7 = $row['sales_projections_description5_one_m7'];
  $sales_projections_description5_one_m8 = $row['sales_projections_description5_one_m8'];
  $sales_projections_description5_one_m9 = $row['sales_projections_description5_one_m9'];
  $sales_projections_description5_one_m10 = $row['sales_projections_description5_one_m10'];
  $sales_projections_description5_one_m11 = $row['sales_projections_description5_one_m11'];
  $sales_projections_description5_one_m12 = $row['sales_projections_description5_one_m12'];
  $sales_projections_description5_one_totaly1 = $row['sales_projections_description5_one_totaly1'];
  $sales_projections_description5_one_totalsale_y1 = $row['sales_projections_description5_one_totalsale_y1'];
  $sales_projections_description5_one_totalsale_y2 = $row['sales_projections_description5_one_totalsale_y2'];
  $sales_projections_description5_one_totalsale_y3 = $row['sales_projections_description5_one_totalsale_y3'];
  $sales_projections_description5_one_totalsale_y4 = $row['sales_projections_description5_one_totalsale_y4'];
  $sales_projections_description5_one_tsaleunitprice_y1 = $row['sales_projections_description5_one_tsaleunitprice_y1'];
  
$projections_description_operatingcosts_one = $row['projections_description_operatingcosts_one'];
$projections_description_operatingcosts_two = $row['projections_description_operatingcosts_two'];
$projections_description_operatingcosts_three = $row['projections_description_operatingcosts_three'];
$projections_description_operatingcosts_four = $row['projections_description_operatingcosts_four'];
$projections_description_operatingcosts_five = $row['projections_description_operatingcosts_five'];

$projections_description_operatingcosts_one_m1 = $row['projections_description_operatingcosts_one_m1'];
$projections_description_operatingcosts_one_m2 = $row['projections_description_operatingcosts_one_m2'];
$projections_description_operatingcosts_one_m3 = $row['projections_description_operatingcosts_one_m3'];
$projections_description_operatingcosts_one_m4 = $row['projections_description_operatingcosts_one_m4'];
$projections_description_operatingcosts_one_m5 = $row['projections_description_operatingcosts_one_m5'];
$projections_description_operatingcosts_one_m6 = $row['projections_description_operatingcosts_one_m6'];
$projections_description_operatingcosts_one_m7 = $row['projections_description_operatingcosts_one_m7'];
$projections_description_operatingcosts_one_m8 = $row['projections_description_operatingcosts_one_m8'];
$projections_description_operatingcosts_one_m9 = $row['projections_description_operatingcosts_one_m9'];
$projections_description_operatingcosts_one_m10 = $row['projections_description_operatingcosts_one_m10'];
$projections_description_operatingcosts_one_m11 = $row['projections_description_operatingcosts_one_m11'];
$projections_description_operatingcosts_one_m12 = $row['projections_description_operatingcosts_one_m12'];
$projections_description_operatingcosts_one_y1 = $row['projections_description_operatingcosts_one_y1'];
$projections_description_operatingcosts_one_y2 = $row['projections_description_operatingcosts_one_y2'];
$projections_description_operatingcosts_one_y3 = $row['projections_description_operatingcosts_one_y3'];
$projections_description_operatingcosts_one_y4 = $row['projections_description_operatingcosts_one_y4'];

$projections_description_operatingcosts_two_m1 = $row['projections_description_operatingcosts_two_m1'];
$projections_description_operatingcosts_two_m2 = $row['projections_description_operatingcosts_two_m2'];
$projections_description_operatingcosts_two_m3 = $row['projections_description_operatingcosts_two_m3'];
$projections_description_operatingcosts_two_m4 = $row['projections_description_operatingcosts_two_m4'];
$projections_description_operatingcosts_two_m5 = $row['projections_description_operatingcosts_two_m5'];
$projections_description_operatingcosts_two_m6 = $row['projections_description_operatingcosts_two_m6'];
$projections_description_operatingcosts_two_m7 = $row['projections_description_operatingcosts_two_m7'];
$projections_description_operatingcosts_two_m8 = $row['projections_description_operatingcosts_two_m8'];
$projections_description_operatingcosts_two_m9 = $row['projections_description_operatingcosts_two_m9'];
$projections_description_operatingcosts_two_m10 = $row['projections_description_operatingcosts_two_m10'];
$projections_description_operatingcosts_two_m11 = $row['projections_description_operatingcosts_two_m11'];
$projections_description_operatingcosts_two_m12 = $row['projections_description_operatingcosts_two_m12'];
$projections_description_operatingcosts_two_y1 = $row['projections_description_operatingcosts_two_y1'];
$projections_description_operatingcosts_two_y2 = $row['projections_description_operatingcosts_two_y2'];
$projections_description_operatingcosts_two_y3 = $row['projections_description_operatingcosts_two_y3'];
$projections_description_operatingcosts_two_y4 = $row['projections_description_operatingcosts_two_y4'];

$projections_description_operatingcosts_three_m1 = $row['projections_description_operatingcosts_three_m1'];
$projections_description_operatingcosts_three_m2 = $row['projections_description_operatingcosts_three_m2'];
$projections_description_operatingcosts_three_m3 = $row['projections_description_operatingcosts_three_m3'];
$projections_description_operatingcosts_three_m4 = $row['projections_description_operatingcosts_three_m4'];
$projections_description_operatingcosts_three_m5 = $row['projections_description_operatingcosts_three_m5'];
$projections_description_operatingcosts_three_m6 = $row['projections_description_operatingcosts_three_m6'];
$projections_description_operatingcosts_three_m7 = $row['projections_description_operatingcosts_three_m7'];
$projections_description_operatingcosts_three_m8 = $row['projections_description_operatingcosts_three_m8'];
$projections_description_operatingcosts_three_m9 = $row['projections_description_operatingcosts_three_m9'];
$projections_description_operatingcosts_three_m10 = $row['projections_description_operatingcosts_three_m10'];
$projections_description_operatingcosts_three_m11 = $row['projections_description_operatingcosts_three_m11'];
$projections_description_operatingcosts_three_m12 = $row['projections_description_operatingcosts_three_m12'];
$projections_description_operatingcosts_three_y1 = $row['projections_description_operatingcosts_three_y1'];
$projections_description_operatingcosts_three_y2 = $row['projections_description_operatingcosts_three_y2'];
$projections_description_operatingcosts_three_y3 = $row['projections_description_operatingcosts_three_y3'];
$projections_description_operatingcosts_three_y4 = $row['projections_description_operatingcosts_three_y4'];

$projections_description_operatingcosts_four_m1 = $row['projections_description_operatingcosts_four_m1'];
$projections_description_operatingcosts_four_m2 = $row['projections_description_operatingcosts_four_m2'];
$projections_description_operatingcosts_four_m3 = $row['projections_description_operatingcosts_four_m3'];
$projections_description_operatingcosts_four_m4 = $row['projections_description_operatingcosts_four_m4'];
$projections_description_operatingcosts_four_m5 = $row['projections_description_operatingcosts_four_m5'];
$projections_description_operatingcosts_four_m6 = $row['projections_description_operatingcosts_four_m6'];
$projections_description_operatingcosts_four_m7 = $row['projections_description_operatingcosts_four_m7'];
$projections_description_operatingcosts_four_m8 = $row['projections_description_operatingcosts_four_m8'];
$projections_description_operatingcosts_four_m9 = $row['projections_description_operatingcosts_four_m9'];
$projections_description_operatingcosts_four_m10 = $row['projections_description_operatingcosts_four_m10'];
$projections_description_operatingcosts_four_m11 = $row['projections_description_operatingcosts_four_m11'];
$projections_description_operatingcosts_four_m12 = $row['projections_description_operatingcosts_four_m12'];
$projections_description_operatingcosts_four_y1 = $row['projections_description_operatingcosts_four_y1'];
$projections_description_operatingcosts_four_y2 = $row['projections_description_operatingcosts_four_y2'];
$projections_description_operatingcosts_four_y3 = $row['projections_description_operatingcosts_four_y3'];
$projections_description_operatingcosts_four_y4 = $row['projections_description_operatingcosts_four_y4'];

$projections_description_operatingcosts_five_m1 = $row['projections_description_operatingcosts_five_m1'];
$projections_description_operatingcosts_five_m2 = $row['projections_description_operatingcosts_five_m2'];
$projections_description_operatingcosts_five_m3 = $row['projections_description_operatingcosts_five_m3'];
$projections_description_operatingcosts_five_m4 = $row['projections_description_operatingcosts_five_m4'];
$projections_description_operatingcosts_five_m5 = $row['projections_description_operatingcosts_five_m5'];
$projections_description_operatingcosts_five_m6 = $row['projections_description_operatingcosts_five_m6'];
$projections_description_operatingcosts_five_m7 = $row['projections_description_operatingcosts_five_m7'];
$projections_description_operatingcosts_five_m8 = $row['projections_description_operatingcosts_five_m8'];
$projections_description_operatingcosts_five_m9 = $row['projections_description_operatingcosts_five_m9 '];
$projections_description_operatingcosts_five_m10 = $row['projections_description_operatingcosts_five_m10'];
$projections_description_operatingcosts_five_m11 = $row['projections_description_operatingcosts_five_m11'];
$projections_description_operatingcosts_five_m12 = $row['projections_description_operatingcosts_five_m12'];
$projections_description_operatingcosts_totalsale = $row['projections_description_operatingcosts_totalsale'];
   
$what_is_the_monthly_revenue = $row['what_is_the_monthly_revenue'];
$what_is_the_total_operation_cost = $row['what_is_the_total_operation_cost'];
$what_is_the_total_current_operation_cost = $row['what_is_the_total_current_operation_cost'];
$what_is_the_total_investment_cost = $row['what_is_the_total_investment_cost'];
$brakedown_of_investments1 = $row['brakedown_of_investments1'];
$funded = $row['funded'];
$was_not_funded = $row['was_not_funded'];
$finacialdata_If_Yes_Give_details = $row['finacialdata_If_Yes_Give_details'];
$status_ofLoan_outstandingre_paid = $row['status_ofLoan_outstandingre_paid'];

$proposed_management_team_one_fullnames = $row['proposed_management_team_one_fullnames'];
$proposed_management_team_two_fullnames = $row['proposed_management_team_two_fullnames'];
$proposed_management_team_three_fullnames = $row['proposed_management_team_three_fullnames'];
$management_team_one_management_positions = $row['management_team_one_management_positions'];
$management_team_two_management_positions = $row['management_team_two_management_positions'];
$management_team_three_management_positions = $row['management_team_three_management_positions'];
$management_team_one_management_qualifications = $row['management_team_one_management_qualifications'];
$management_team_two_management_qualifications = $row['management_team_two_management_qualifications'];
$management_team_three_management_qualifications = $row['management_team_three_management_qualifications'];

$checkbox12_months = $row['checkbox12_months'];
$checkbox18_months = $row['checkbox18_months'];
$checkbox24_months = $row['checkbox24_months'];
$checkbox36_months = $row['checkbox36_months'];
$checkbox48_months = $row['checkbox48_months'];

$checkbox1_3months = $row['checkbox1_3months'];
$checkbox3_6months = $row['checkbox3_6months'];
$checkbox6_9months = $row['checkbox6_9months'];
$checkbox_morethan9 = $row['checkbox_morethan9'];

$Business_benefit_customers = $row['Business_benefit_customers'];
$Business_benefit_suppliers = $row['Business_benefit_suppliers'];
$Before_cdf_funding_women = $row['Before_cdf_funding_women'];
$Before_cdf_funding_men = $row['Before_cdf_funding_men'];
$Before_cdf_funding_youth = $row['Before_cdf_funding_youth'];
$Before_cdf_funding_physically_challenged = $row['Before_cdf_funding_physically_challenged'];
$before_cdf_funding_all_total = $row['before_cdf_funding_all_total'];
$after_cdf_funding_women = $row['after_cdf_funding_women'];
$after_cdf_funding_men = $row['after_cdf_funding_men'];
$after_cdf_funding_youth = $row['after_cdf_funding_youth'];
$after_cdf_funding_physically_challenged = $row['after_cdf_funding_physically_challenged'];
$after_cdf_funding_all_total = $row['after_cdf_funding_all_total'];
 
$bank_name = $row['bank_name '];
$branch = $row['branch '];
$soft_code = $row['soft_code '];
$swift_code = $row['swift_code'];
$account_number = $row['account_number'];
$tipn_user = $row['tipn_user'];
$mobil_money_name_and_number = $row['mobil_money_name_and_number'];
$club_secretary_name = $row['club_secretary_name'];
$signature_image = $row['signature_image'];
$date_of_signing1 = $row['date_of_signing1'];
$head_of_business_signature_image = $row['head_of_business_signature_image'];
$date_of_signing2 = $row['date_of_signing2'];


                      
 ?>



<div class="logo-image-defualt">
<img src="logos/CDF_Logo.svg.png" width="280px" height="330px">
</div>
                                         
                                      
<div class="logo-image">
<img src="user-uploads/<?php echo $row['logo_image'];?>" width="280px" height="330px">
</div>
                                        
                                      
                                       

<h1 class="welcome">WELCOME<br /><?php echo $_SESSION['email'];?></h1>
                                      
 <!----------------------------------------------NAVIAGTION AND BACKGROUNDS--------------------------------------------->

<div class="banner-holder-yellow"></div>
<div class="nav-background-1"></div>
<div class="top-gray"></div>






<!----------------------------------------------CDF LOGO START--------------------------------------------->
<div class="cdf-log-nav">
<img src="logos/CDF_Logo.svg.png" class="nav-logiz">
</div>
                    
                 


<nav class="navigation">

<div class="nav-links">
<ul>
<li><a href="form-downloads.php"><img src="user_icons/news icon black.png" class="user-icon">Cdf infor Downloads</a></li>
<li><a href="profileview.php"><img src="user_icons/user black.png" class="user-icon">User Application View</a></li>
<li><a href="contact.php"><img src="user_icons/call.png" class="user-icon">Contact</a></li>
<li><a href="logout_fund_applications.php"><img src="user_icons/log-ouy.png" class="user-icon">Logout</a></li>                  
</ul>
</div>
                    
</nav>

                
</div>




<div class="white-paper">
  <div class="inner-paper">
       <div class="cdf-laf-01">
       <h3>CDF/LAF/01</h3>
       </div>




       <div class="coat-of-arms">
       <img src="logos/zambia coat of arms.png">
       </div>


       <div class="rural-development">
        <p>Ministry Of Local Government and Rural Development</p>
       </div>



       <div class="develepment-fund">
        <h1>CONSTITUENCY DEVELOPMENT FUND<br />LOAN APLLICATION FORM<br />FOR<br />WOMEN,YOUTH AND COMMUNITY<br />EMPOWERMENT</h1>
       </div>



       <div class="instructions">
        <h4>Instructions:<p>This Application For Should Be Completed by the Applicant and sent together with supporting documents to the <br />Chairperson,Ward Development Committee.</p></h4>
        <h5>Note:This Form is Not For Sale</h5>
        <h5>Disclaimer:Complition of the form does not guarantee the award of the loan</h6>
       </div>



       <div class="project-flex">
        
        <div class="pro1">
          <div class="pro1-inner">
            <P>Project identification Number:<span class="code-numbers"><?php echo $row['project_identification_number'];?> <br /></span></P>
            <P>(For Offical Use)<br /></P>
          </div>
        </div>


        <div class="pro2">
        <div class="pro2-inner">
          <p>YE/Zone/Ward Code Number:<span class="code-numbers"><?php echo $row['yezoneward_code_number'];?><br /></span></p>
          <p>WE/Zone/Ward Code Number:<span class="code-numbers"><?php echo $row['wezone_ward_code_number'];?><br /></span></p>
          <p>CE/Zone/Ward Code Number:<span class="code-numbers"></span><?php echo $row['cezoneward_code_number'];?><br /></span></p>
        </div>
        </div>


       </div>
</div>
  




<section class="three">
  <div class="white-paper2">

    <div class="inner-paper2">
       <div class="section-a">
       <h1>SECTION A.GENERAL DETAILS(TO BE COMPLETED BY THE APPLICANT)</h1>
       </div>




       <div class="name-of-business">
          <h1>1.Name OF Business/Organization/Company/Group/Cooperative/Club</h1>
          <p><span class="code-numbers"><?php echo $row['name_of_business_organization_company_group_cooperative_club'];?></span></p>
          <hr>
        </div>
       
        <div class="legal-form">
          <h1>2.Legal Form Of Applicant(Limited Company(SME)/Group/Cooperative/Club):</h1>
          <p><span class="code-numbers"><?php echo $row['legal_form_Of_applicant_limited_company_sme_group_cooperative'];?></span></p>
          <hr class="leagal-hr">
        </div>



       <div class="date-of-company-registration">
        <h1>3.Date Of Company/Group/Cooperative/Club Registration:</h1>
        <p><span class="code-numbers"><?php echo $row['date_Of_company_group_cooperative_club_registration'];?></span></p>
        <hr class="date-of-company-registration-hr">
       </div>




       <div class="tpin">
        <h1>4.TPIN:</h1>
        <p><span class="code-numbers"><?php echo $row['tipn'];?></span></p>
        <hr class="tpin-hr">

       </div>


    </div>

  </div>

</section>







<section class="section-four">
  <div class="white-paper3">

  <div class="inner-paper3">
    <div class="shareholder">
      <h2>5.shareholders of the company/Members of the Group/Cooperative/Club</h2>
    </div>


    <div class="passport-holder">

      <div class="passport-holder-div-1">
       <h1>S/NO.</h1>
      </div>


      <div class="passport-holder-div-2">
        <h1>Full Names</h1>
      </div>


      <div class="passport-holder-div-3">
        <h1>NRC/<br />Passport No.</h1>
      </div>


      <div class="passport-holder-div-4">
        <h1>%<br />Share Holding<br />(Applicable To a<br />Company)</h1>
      </div>


      <div class="passport-holder-div-5">
        <h1>Position In The Business</h1>

      </div>

      <div class="passport-holder-div-6">
        <h1>Physically<br />Challenged<br />(Disabled)</h1>
      </div>


      <div class="passport-holder-div-7">
        <h1>Yes</h1>
      </div>


      <div class="passport-holder-div-8">
        <h1>No</h1>
      </div>


    </div>


<!--------------------------------------------------filling div start-->    
<div class="fill-in-div">


<div class="fill-in-div-1">
  <p>1.</p>
</div>


  <div class="fill-in-div-2">
    <p><span class="code-numbers1"><?php echo $row['shareholder_name_one'];?></span></p>
  </div>


<div class="fill-in-div-3">
  <p><span class="code-numbers1"><?php echo $row['nrc_name_one'];?></span></p>
</div>


<div class="fill-in-div-4">
  <p><span class="code-numbers1"><?php echo $row['shareholding_percent_name_one'];?></span></p>
</div>


<div class="fill-in-div-5">
  <p><span class="code-numbers1"><?php echo $row['position_in_business_name_one'];?></span></p>
</div>


<div  class="fill-in-div-6">
  <label>
    <p><?php echo $row['yes1'];?>
  </label>
</div>


<div class="fill-in-div-7">
  <label>
    <p><?php echo $row['no1'];?>
  </label>
</div>


</div>



<!--------------------------------------------------filling 2 div start-->    
<div class="fill2-in-div">


  <div class="fill2-in-div-1">
    <p>2.</p>
  </div>
  
  
    <div class="fill2-in-div-2">
      <p><span class="code-numbers2"><?php echo $row['shareholder_name_two'];?></span></p>
    </div>
  
  
  <div class="fill2-in-div-3">
    <p><span class="code-numbers2"><?php echo $row['nrc_name_two'];?></span></p>
  </div>
  
  
  <div class="fill2-in-div-4">
    <p><span class="code-numbers2"><?php echo $row['shareholding_percent_name_two'];?></span></p>
  </div>
  
  
  <div class="fill2-in-div-5">
    <p><span class="code-numbers2"><?php echo $row['position_in_business_name_two'];?></span></p>
  </div>
  
  
  <div  class="fill2-in-div-6">
    <label>
      <p><?php echo $row['yes2'];?>
    </label>
  </div>
  
  
  <div class="fill2-in-div-7">
    <label>
      <p><?php echo $row['no2'];?>
    </label>
  </div>
  
  
  </div>
  
  
  
  <!--------------------------------------------------filling 3 div start-->    
<div class="fill3-in-div">


  <div class="fill3-in-div-1">
    <p>3.</p>
  </div>
  
  
    <div class="fill3-in-div-2">
      <p><span class="code-numbers1"><?php echo $row['shareholder_name_three'];?></span></p>
    </div>
  
  
  <div class="fill3-in-div-3">
    <p><span class="code-numbers1"><?php echo $row['nrc_name_three'];?></span></p>
  </div>
  
  
  <div class="fill3-in-div-4">
    <p><span class="code-numbers1"><?php echo $row['shareholding_percent_name_three'];?></span></p>
  </div>
  
  
  <div class="fill3-in-div-5">
    <p><span class="code-numbers1"><?php echo $row['position_in_business_name_three'];?></span></p>
  </div>
  
  
  <div  class="fill3-in-div-6">
    <label>
      <p><?php echo $row['yes3'];?>
    </label>
  </div>
  
  
  <div class="fill3-in-div-7">
    <label>
      <p><?php echo $row['no3'];?>
    </label>
  </div>
  
  
  </div>
  
<!--------------------------------------------------filling 4 div start-->    
<div class="fill4-in-div">


  <div class="fill4-in-div-1">
    <p>4.</p>
  </div>
  
  
    <div class="fill4-in-div-2">
      <p><span class="code-numbers2"><?php echo $row['shareholder_name_four'];?></span></p>
    </div>
  
  
  <div class="fill4-in-div-3">
    <p><span class="code-numbers2"><?php echo $row['nrc_name_four'];?></span></p>
  </div>
  
  
  <div class="fill4-in-div-4">
    <p><span class="code-numbers2"><?php echo $row['shareholding_percent_name_four'];?></span></p>
  </div>
  
  
  <div class="fill4-in-div-5">
    <p><span class="code-numbers2"><?php echo $row['position_in_business_name_four'];?></span></p>
  </div>
  
  
  <div  class="fill4-in-div-6">
    <label>
      <p><?php echo $row['yes4'];?>
    </label>
  </div>
  
  
  <div class="fill4-in-div-7">
    <label>
      <p><?php echo $row['no4'];?>
    </label>
  </div>
  
  
  </div>
  

  
  <!--------------------------------------------------filling 5 div start-->    
<div class="fill5-in-div">


  <div class="fill5-in-div-1">
    <p>5.</p>
  </div>
  
  
    <div class="fill5-in-div-2">
      <p><span class="code-numbers1"><?php echo $row['shareholder_name_five'];?></span></p>
    </div>
  
  
  <div class="fill5-in-div-3">
    <p><span class="code-numbers1"><?php echo $row['nrc_name_five'];?></span></p>
  </div>
  
  
  <div class="fill5-in-div-4">
    <p><span class="code-numbers1"><?php echo $row['shareholding_percent_name_five'];?></span></p>
  </div>
  
  
  <div class="fill5-in-div-5">
    <p><span class="code-numbers1"><?php echo $row['position_in_business_name_five'];?></span></p>
  </div>
  
  
  <div  class="fill5-in-div-6">
    <label>
      <p><?php echo $row['yes5'];?>
    </label>
  </div>
  
  
  <div class="fill5-in-div-7">
    <label>
      <p><?php echo $row['no5'];?>
    </label>
  </div>
  
  
  </div>
  
  
  
  <!--------------------------------------------------filling 6 div start-->    
<div class="fill6-in-div">


  <div class="fill6-in-div-1">
    <p>6.</p>
  </div>
  
  
    <div class="fill6-in-div-2">
      <p><span class="code-numbers2"></span><?php echo $row['shareholder_name_six'];?></span></p>
    </div>
  
  
  <div class="fill6-in-div-3">
    <p><span class="code-numbers2"><?php echo $row['nrc_name_six'];?></span></p>
  </div>
  
  
  <div class="fill6-in-div-4">
    <p><span class="code-numbers2"><?php echo $row['shareholding_percent_name_six'];?></span></p>
  </div>
  
  
  <div class="fill6-in-div-5">
    <p><span class="code-numbers2"><?php echo $row['position_in_business_name_six'];?></span></p>
  </div>
  
  
  <div  class="fill6-in-div-6">
    <label>
      <p><?php echo $row['yes6'];?>
    </label>
  </div>
  
  
  <div class="fill6-in-div-7">
    <label>
      <p><?php echo $row['no6'];?>
    </label>
  </div>
  
  
  </div>
  
  
  
  <!--------------------------------------------------filling 7 div start-->    
<div class="fill7-in-div">


  <div class="fill7-in-div-1">
    <p>7.</p>
  </div>
  
  
    <div class="fill7-in-div-2">
      <p><span class="code-numbers1"><?php echo $row['shareholder_name_seven'];?></span></p>
    </div>
  
  
  <div class="fill7-in-div-3">
    <p><span class="code-numbers1"><?php echo $row['nrc_name_seven'];?></span></p>
  </div>
  
  
  <div class="fill7-in-div-4">
    <p><span class="code-numbers1"><?php echo $row['shareholding_percent_name_seven'];?></span></p>
  </div>
  
  
  <div class="fill7-in-div-5">
    <p><span class="code-numbers1"><?php echo $row['position_in_business_name_seven'];?></span></p>
  </div>
  
  
  <div  class="fill7-in-div-6">
    <label>
      <p><?php echo $row['yes7'];?>
    </label>
  </div>
  
  
  <div class="fill7-in-div-7">
    <label>
      <p><?php echo $row['no7'];?>
    </label>
  </div>
  
  
  </div>
  


  
  
  
  <!--------------------------------------------------filling 8 div start-->    
<div class="fill8-in-div">


  <div class="fill8-in-div-1">
    <p>8.</p>
  </div>
  
  
    <div class="fill8-in-div-2">
      <p><span class="code-numbers2"><?php echo $row['shareholder_name_eight'];?></span></p>
    </div>
  
  
  <div class="fill8-in-div-3">
    <p><span class="code-numbers2"><?php echo $row['nrc_name_eight'];?></span></p>
  </div>
  
  
  <div class="fill8-in-div-4">
    <p><span class="code-numbers2"><span class="code-numbers2"><?php echo $row['shareholding_percent_name_eight'];?></span></p>
  </div>
  
  
  <div class="fill8-in-div-5">
    <p><span class="code-numbers2"><?php echo $row['position_in_business_name_eight'];?></span></p>
  </div>
  
  
  <div  class="fill8-in-div-6">
    <label>
      <p><?php echo $row['yes8'];?>
    </label>
  </div>
  
  
  <div class="fill8-in-div-7">
    <label>
      <p><?php echo $row['no8'];?>
    </label>
  </div>
  
  
  </div>
  

  
  

  
  
  
  
  <!--------------------------------------------------filling 9 div start-->    
<div class="fill9-in-div">


  <div class="fill9-in-div-1">
    <p>9.</p>
  </div>
  
  
    <div class="fill9-in-div-2">
      <p><span class="code-numbers1"><?php echo $row['shareholder_name_nine'];?></span></p>
    </div>
  
  
  <div class="fill9-in-div-3">
    <p><span class="code-numbers1"><?php echo $row['nrc_name_nine'];?></span></p>
  </div>
  
  
  <div class="fill9-in-div-4">
    <p><span class="code-numbers1"><?php echo $row['shareholding_percent_name_nine'];?></span></p>
  </div>
  
  
  <div class="fill9-in-div-5">
    <p><span class="code-numbers1"><?php echo $row['position_in_business_name_nine'];?></span></p>
  </div>
  
  
  <div  class="fill9-in-div-6">
    <label>
      <p><?php echo $row['yes9'];?>
    </label>
  </div>
  
  
  <div class="fill9-in-div-7">
    <label>
      <p><?php echo $row['no9'];?>
    </label>
  </div>
  
  
  </div>
  

  
  
  
  
  <!--------------------------------------------------filling 10 div start-->    
<div class="fill10-in-div">


  <div class="fill10-in-div-1">
    <p>10.</p>
  </div>
  
  
    <div class="fill10-in-div-2">
      <p><span class="code-numbers2"><?php echo $row['shareholder_name_ten'];?></span></p>
    </div>
  
  
  <div class="fill10-in-div-3">
    <p><span class="code-numbers2"><?php echo $row['nrc_name_ten'];?></span></p>
  </div>
  
  
  <div class="fill10-in-div-4">
    <p><span class="code-numbers2"><?php echo $row['shareholding_percent_name_ten'];?></span></p>
  </div>
  
  
  <div class="fill10-in-div-5">
    <p><span class="code-numbers2"><?php echo $row['position_in_business_name_ten'];?></span></p>
  </div>
  
  
  <div  class="fill10-in-div-6">
    <label>
      <p><?php echo $row['yes10'];?>
    </label>
  </div>
  
  
  <div class="fill10-in-div-7">
    <label>
      <p><?php echo $row['no10'];?>
    </label>
  </div>
  
  
  </div>
  

  
  
  
  <!--------------------------------------------------filling 11 div start-->    
<div class="fill11-in-div">


  <div class="fill11-in-div-1">
    <p>11.</p>
  </div>
  
  
    <div class="fill11-in-div-2">
      <p><span class="code-numbers1"><?php echo $row['shareholder_name_eleven'];?></span></p>
    </div>
  
  
  <div class="fill11-in-div-3">
    <p><span class="code-numbers1"><?php echo $row['nrc_name_eleven'];?></span></p>
  </div>
  
  
  <div class="fill11-in-div-4">
    <p><span class="code-numbers1"><?php echo $row['shareholding_percent_name_eleven'];?></span></p>
  </div>
  
  
  <div class="fill11-in-div-5">
    <p><span class="code-numbers1"><?php echo $row['position_in_business_name_eleven'];?></span></p>
  </div>
  
  
  <div  class="fill11-in-div-6">
    <label>
    <p><?php echo $row['yes11'];?></p>
    </label>
  </div>
  
  
  <div class="fill11-in-div-7">
    <label>
      <p><?php echo $row['no11'];?>
    </label>
  </div>
  
  
  </div>
  
  <!--------------------------------------------------filling div end-->  
  
<!------------------------------end of  INNSER 3 DIV-->
    </div>

<!------------------------------end of  INNSER 3 DIV-->



<!------------------------------end of  WHITE PAPER 3 DIV-->
  </div>
<!------------------------------end of  WHITE PAPER 3 DIV-->


</section>
<!------------------------------end of  WHITE PAPER 3 section 4 DIV-->



<section class="section-5">

<div class="white-paper4">
  <div class="inner-paper4">


<div class="authorized-representertive">
<h1>5.Authorized-Representertive</h1><br />
<p>(To act on behalf of the Applicant and respond to any questions regarding the application)</p>
</div>


<div class="authorized-representertive-name-of-contact-person">
<div class="authorized-div-1">
<p>Name Of Contact Person:<span class="code-numbers1"><?php echo $row['authorized_representertive_name_of_contact_person'];?></span></p>
</div>

<div class="authorized-div-2">
  <p>Position In Business</p>
</div>


<div class="authorized-div-3">
  <p><span class="code-numbers1"><?php echo $row['authorized_representertive_position_in_business'];?></span></p>
</div>


<div class="authorized-section2-div-1">
  <p>Contact Numbers</p>
</div>


<div class="authorized-section2-div-2">
  <p>Cell:<span class="code-numbers1"><?php echo $row['authorized_representertive_contact_number_cell'];?></span></p>
</div>


<div class="authorized-section2-div-3">
  <p>Telephone Number<br /><span class="code-numbers1"><?php echo $row['authorized_representertive_contact_number_telephone'];?></span></p>
</div>


<div class="authorized-section3-div-1">
  <p>Email</p>
</div>


<div class="authorized-section3-div-2">
  <p><span class="code-numbers1">ludocius@yahoo.com<?php echo $row['authorized_representertive_email'];?></span></p>
</div>

<div class="authorized-section4-div-1"></div>

<div class="authorized-section4-div-2"></div>


<div class="project-location">
<h1>6.Project Location</h1>
</div>


<div class="names-of-district">
  <h1>(a).Name Of District: <span class="code-numbers3"><?php echo $row['project_location_name_of_district'];?></span></h1><br />
  <h1>(a).Name Of constituency: <span class="code-numbers3"><?php echo $row['project_location_name_of_constituency'];?></span></h1><br />
  <h1>(a).Name Of Ward: <span class="code-numbers3"><span class="code-numbers1"><?php echo $row['project_location_name_of_ward'];?></span></h1><br />
  <h1>(a).Name Of Zone: <span class="code-numbers3"><?php echo $row['project_location_name_of_zone'];?></span></h1><br />
  <h1>(a).Physical Address: <span class="code-numbers3"><?php echo $row['project_location_name_physical_address'];?></span></h1><br />
  
</div>


<div class="details-of-loan-aplication">
  <h1>Section B: Details OF Application:</h1>
</div>

<div class="details-of-loan-aplication1">
  <p>1.Loan Application Amount (in Figures and words):<span class="code-numbers"><?php echo $row['loan_application_amount_in_Figures'];?><br /></span></p>
    
  <p>(K100,000):<span class="code-numbers"><?php echo $row['loan_application_amount_in_words'];?></span></p>
  <hr class="loan-apllication-hr">
</div>


  </div>
</div>

</section>










<section class="section-6">


  <div class="white-paper6">
    <div class="inner-paper6">

    <div class="discription-of-business">
   <h2>2.Description Of Business</h2><p>(eg, pottery, piggery, tailoring, metal fabrication etc)</p>
    </div>


    <div class="discription-of-business-typing">
      <p><span class="code-numbers2"><?php echo $row['description_of_business'];?></span></p>
     
    </div>


    <div class="indicate-weather">
      <h2>3.Indicate Weather the company/Cooperative/Club is an existing One or Start-up:</h2>
    </div>


    <div class="indicate-weather-typing">
      <p><span class="code-numbers2"><?php echo $row['indicate_weather_company_is_start_up'];?></span></p>
      
    </div>




    <div class="purpose-of-loan">
      <h2>4.Purpose Of The Loan</h2><p>(eg.To Start or expand a pottery Business, To buy Sewing Machin,To buy Metal Fabrication Equipment etc)</p>
    </div>





    <div class="purpose-of-loan-typing">
      <p><span class="code-numbers2"><?php echo $row['purpose_of_the_loan'];?></span></p>
    
    </div>



    <div class="repayment-period">
      <h2>5.Repayment Period</h2><p>(Time period for paying back the loan:) The Loan</p>
    </div>


    <div class="repayment-period-typing">
      <p><span class="code-numbers2"><?php echo $row['repayment_period'];?></span></p>
      
    </div>

   
    <div class="source-of-funds-for-repayment">
      <h2>6.Source of Funds For Repayment Of Loan</h2>
      <p>(Funds Realized From the Business and any other source)</p>
    </div>


    <div class="source-of-funds-for-repayment-typing">
      <p><span class="code-numbers2"><?php echo $row['source_of_funds_of_repayment_loan'];?></span></p>
    
    </div>


    

    </div>

  </div>





<div class="white-paper-collateral">
  <div class="inner-paper-collateral">
    <div class="collatral">
      <h2>7.Collatral If Any</h2><p>(eg. Assts Such as Land, Equipments etc)</p>
    </div>


    <div class="collateral-typing">
      <p><span class="code-numbers2"><?php echo $row['collaterial_if_any'];?></span></p>
    
    </div>
  </div>
</div>

  
</section>






<section class="section-8">

  <div class="white-paper-financials">
   <div class="inner-paper-financials">

  <div class="financials">
    <h2>8.Financials</h2>
  </div>


  <div class="break-down-of-capital-expenditure">
    <h2>(A)Breakdown Of Capital Expenditure Of Business Proposal</h2>
  </div>



<div class="brakedown-lines-div-mother">


<!-------------------row one---------------->
  <div class="Description-brakedown">

     <div class="Description-brakedown-1">

     </div>


     <div class="Description-brakedown-2">
      <p>Description Cost</p>
    </div>


     <div class="Description-brakedown-3">
      <p>Quality</p>
    </div>

     <div class="Description-brakedown-4">
      <p>Unit Cost(K)</p>
    </div>


     <div class="Description-brakedown-5">
      <p>Total Cost(K)</p>
    </div>


  </div>

<!-------------------row one---------------->

<div class="Description-brakedown-row-one">

     <div class="Description-brakedown-row-one1">
     <p>1.</p>
     </div>


     <div class="Description-brakedown-row-one2">
      <p><span class="code-numbers1"><?php echo $row['financials_description_cost_one'];?></span></p>
    </div>


     <div class="Description-brakedown-row-one3">
      <p><span class="code-numbers2"><?php echo $row['financials_description_quality_one'];?></span></p>
    </div>

     <div class="Description-brakedown-row-one4">
     <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_one'];?></span></p>
    </div>


     <div class="Description-brakedown-row-one5">
      <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_one'];?></span></p>
    </div>
    

  </div>




<!-------------------row two---------------->

<div class="Description-brakedown-row-two">

  <div class="Description-brakedown-row-two1">
    <p>2.</p>
  </div>


  <div class="Description-brakedown-row-two2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_two'];?></span></p>
 </div>


  <div class="Description-brakedown-row-two3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_two'];?></span></p>
 </div>

  <div class="Description-brakedown-row-two4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_two'];?></span></p>
 </div>


  <div class="Description-brakedown-row-two5">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_two'];?></span></p>
 </div>
 

</div>






<!-------------------row three---------------->

<div class="Description-brakedown-row-three">

  <div class="Description-brakedown-row-three1">
   <p>3.</p>
  </div>


  <div class="Description-brakedown-row-three2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_three'];?></span></p>
 </div>


  <div class="Description-brakedown-row-three3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_three'];?></span></p>
 </div>

  <div class="Description-brakedown-row-three4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_three'];?></span></p>
 </div>


  <div class="Description-brakedown-row-three5">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_three'];?></span></p>
 </div>
 

</div>



<!-------------------row four---------------->

<div class="Description-brakedown-row-four">

  <div class="Description-brakedown-row-four1">
  <p>4.</p>
  </div>


  <div class="Description-brakedown-row-four2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_four'];?></span></p>
 </div>


  <div class="Description-brakedown-row-four3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_four'];?></span></p>
 </div>

  <div class="Description-brakedown-row-four4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_four'];?></span></p>
 </div>


  <div class="Description-brakedown-row-four5">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_four'];?></span></p>
 </div>
 

</div>



<!-------------------row five---------------->

<div class="Description-brakedown-row-five">

  <div class="Description-brakedown-row-five1">
   <p>5.</p>
  </div>


  <div class="Description-brakedown-row-five2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_five'];?></span></p>
 </div>


  <div class="Description-brakedown-row-five3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_five'];?></span></p>
 </div>

  <div class="Description-brakedown-row-five4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_five'];?></span></p>
 </div>


  <div class="Description-brakedown-row-five5">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_five'];?></span></p>
 </div>
 

</div>


<!-------------------row six---------------->

<div class="Description-brakedown-row-six">

  <div class="Description-brakedown-row-six1">
   <p>6.</p>
  </div>


  <div class="Description-brakedown-row-six2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_six'];?></span></p>
 </div>


  <div class="Description-brakedown-row-six3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_six'];?></span></p>
 </div>

  <div class="Description-brakedown-row-six4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_six'];?></span></p>
 </div>


  <div class="Description-brakedown-row-six5">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_six'];?></span></p>
 </div>
 

</div>


<!-------------------row seven---------------->

<div class="Description-brakedown-row-seven">

  <div class="Description-brakedown-row-seven1">
  <p>7.</p>
  </div>


  <div class="Description-brakedown-row-seven2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_seven'];?></span></p>
 </div>


  <div class="Description-brakedown-row-seven3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_seven'];?></span></p>
 </div>

  <div class="Description-brakedown-row-seven4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_seven'];?></span></p>
 </div>


  <div class="Description-brakedown-row-seven5">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_seven'];?></span></p>
 </div>
 

</div>



<!-------------------row eight---------------->

<div class="Description-brakedown-row-eight">

  <div class="Description-brakedown-row-eight1">
   <p>8</p>
  </div>


  <div class="Description-brakedown-row-eight2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_eight'];?></span></p>
 </div>


  <div class="Description-brakedown-row-eight3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_eight'];?></span></p>
 </div>

  <div class="Description-brakedown-row-eight4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_eight'];?></span></p>
 </div>


  <div class="Description-brakedown-row-eight5">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_eight'];?></span></p>
 </div>
 

</div>



<!-------------------row 9---------------->

<div class="Description-brakedown-row-nine">

  <div class="Description-brakedown-row-nine1">
   <p>9.</p>
  </div>


  <div class="Description-brakedown-row-nine2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_nine'];?></span></p>
 </div>


  <div class="Description-brakedown-row-nine3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_nine'];?></span></p>
 </div>

  <div class="Description-brakedown-row-nine4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_nine'];?></span></p>
 </div>


  <div class="Description-brakedown-row-nine5">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_nine'];?></span></p>
 </div>
 

</div>


<!-------------------row 10---------------->

<div class="Description-brakedown-row-ten">

  <div class="Description-brakedown-row-ten1">
   <p>10.</p>
  </div>


  <div class="Description-brakedown-row-ten2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_ten'];?></span></p>
 </div>


  <div class="Description-brakedown-row-ten3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_ten'];?></span></p>
 </div>

  <div class="Description-brakedown-row-ten4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_ten'];?></span></p>
 </div>


  <div class="Description-brakedown-row-ten5">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_ten'];?></span></p>
 </div>
 

</div>

<!-------------------row 11---------------->

<div class="Description-brakedown-row-eleven">

  <div class="Description-brakedown-row-eleven1">
  <p>11</p>
  </div>


  <div class="Description-brakedown-row-eleven2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_eleven'];?></span></p>
 </div>


  <div class="Description-brakedown-row-eleven3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_eleven'];?></span></p>
 </div>

  <div class="Description-brakedown-row-eleven4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_eleven'];?></span></p>
 </div>


  <div class="Description-brakedown-row-eleven6">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_eleven'];?></span></p>
 </div>
 

</div>


<!-------------------row 12---------------->

<div class="Description-brakedown-row-twelve">

  <div class="Description-brakedown-row-twelve1">
  <p>12</p>
  </div>


  <div class="Description-brakedown-row-twelve2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_twelve'];?></span></p>
 </div>


  <div class="Description-brakedown-row-twelve3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_twelve'];?></span></p>
 </div>

  <div class="Description-brakedown-row-twelve4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_twelve'];?></span></p>
 </div>


  <div class="Description-brakedown-row-twelve6">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_twelve'];?></span></p>
 </div>
 

</div>




<!-------------------row 13---------------->

<div class="Description-brakedown-row-thirteen">

  <div class="Description-brakedown-row-thirteen1">
  <p>13</p>
  </div>


  <div class="Description-brakedown-row-thirteen2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_thirteen'];?></span></p>
 </div>


  <div class="Description-brakedown-row-thirteen3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_thirteen'];?></span></p>
 </div>

  <div class="Description-brakedown-row-thirteen4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_thirteen'];?></span></p>
 </div>


  <div class="Description-brakedown-row-thirteen6">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_thirteen'];?></span></p>
 </div>
 

</div>



<!-------------------row 14---------------->

<div class="Description-brakedown-row-fourteen">

  <div class="Description-brakedown-row-fourteen1">
 <p>14.</p>
  </div>


  <div class="Description-brakedown-row-fourteen2">
   <p><span class="code-numbers1"><?php echo $row['financials_description_cost_fourteen'];?></span></p>
 </div>


  <div class="Description-brakedown-row-fourteen3">
   <p><span class="code-numbers2"><?php echo $row['financials_description_quality_fourteen'];?></span></p>
 </div>

  <div class="Description-brakedown-row-fourteen4">
   <p><span class="code-numbers2"><?php echo $row['financials_description_unitcost_fourteen'];?></span></p>
 </div>


  <div class="Description-brakedown-row-fourteen6">
   <p><span class="code-numbers2"><?php echo $row['financials_description_totalcost_fourteen'];?></span></p>
 </div>
 

</div>





<!-------------------row 16---------------->

<div class="Description-brakedown-row-sixteen">

  <div class="Description-brakedown-row-sixteen1">
   <p>16.</p>
  </div>


  <div class="Description-brakedown-row-sixteen2">
   <p>TOTAL</p>
 </div>


  <div class="Description-brakedown-row-sixteen3">
   <p></p>
 </div>

  <div class="Description-brakedown-row-sixteen4">
   <p></p>
 </div>


  <div class="Description-brakedown-row-sixteen6">
   <p><span class="code-numbers1"><?php echo $row['financials_description_totalcost_final'];?></span></p>
 </div>
 

</div>

<!---------------------------------brakedown-div-mother end div-->
</div>
<!---------------------------------brakedown-div-mother end div-->


  </div>
</div>
</section>




<div class="white-paper-projected_level-of-production">
  <div class="inner-paper-projected_level-of-production">



<div class="projected_level-of-production">
<h1>(B)Projected Level Of Production</h1><br />
</div>







<div class="projected_level-of-production-below">


<div class="projected_level-div-1">
 <h1>S/NO.</h1>
</div>


<div class="projected_level-div-2">
 <h1>Description Of Business.</h1>
</div>

<div class="projected_level-div-3">
 <h1>Quality.</h1>
</div>




<div class="projected_level-div-1-below">
 <h1></h1>
</div>


<div class="projected_level-div-2-below">
 <h1></h1>
</div>

<div class="projected_level-div-3-below">
 <h1>Year 1/Months.</h1>
</div>


<div class="projected_level-div-4-below">
 <h1>Y2</h1>
</div>

<div class="projected_level-div-5-below">
 <h1>Y3</h1>
</div>

<div class="projected_level-div-6-below">
 <h1>Y4</h1>
</div>


<!-----------------------------LINE TWO BELOW----------------------------------->

<div class="projected_level-div-1-line2">
 <h1>S/NO1.</h1>
</div>


<div class="projected_level-div-2-line2">
 <h1></h1>
</div>


<!-----------------------------LINE TWO BELOW-->



<div class="mothering-box1-projected-below1">
 <div class="projected_level-div-two-below1">
   <h1></h1>
 </div>
 
 
 <div class="projected_level-div-two-below2">
   <h1></h1>
 </div>


 <div class="projected_level-div-two-below3">
   <h1>M1</h1>
 </div>

 <div class="projected_level-div-two-below4">
   <h1>M2</h1>
 </div>

 <div class="projected_level-div-two-below5">
   <h1>M3</h1>
 </div>

 <div class="projected_level-div-two-below6">
   <h1>M4</h1>
 </div>

 <div class="projected_level-div-two-below7">
   <h1>M5</h1>
 </div>

 <div class="projected_level-div-two-below8">
   <h1>M6</h1>
 </div>

 <div class="projected_level-div-two-below9">
   <h1>M7</h1>
 </div>

 <div class="projected_level-div-two-below10">
   <h1>M8</h1>
 </div>

 <div class="projected_level-div-two-below11">
   <h1>M9</h1>
 </div>

 <div class="projected_level-div-two-below12">
   <h1>M10</h1>
 </div>

 <div class="projected_level-div-two-below13">
   <h1>M11</h1>
 </div>

 <div class="projected_level-div-two-below14">
   <h1>M12</h1>
 </div>

 <div class="projected_level-div-two-below15">
   <h1>13</h1>
 </div>

 <div class="projected_level-div-two-below16">
   <h1>14</h1>
 </div>

 <div class="projected_level-div-two-below17">
   <h1>15</h1>
 </div>

 
</div>


<!----------------------------------------mothering-2-below-->

<div class="mothering-box2-projected-below1">
 <div class="projected_level-div2-two-below1">
   <h1>1</h1>
 </div>
 
 
 <div class="projected_level-div2-two-below2">
   <h1><span class="code-numbers1"><?php echo $row['projected_level_of_production_description_of_product_one'];?></span></h1>
 </div>


 <div class="projected_level-div2-two-below3">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month1'];?></span></h1>
 </div>

 <div class="projected_level-div2-two-below4">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month2'];?></span></h1>
 </div>

 <div class="projected_level-div2-two-below5">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month3'];?></span></h1>
 </div>

 <div class="projected_level-div2-two-below6">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month4'];?></span></h1>
 </div>

 <div class="projected_level-div2-two-below7">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month5'];?></span></h1>
 </div>

 <div class="projected_level-div2-two-below8">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month6'];?></span></h1>
 </div>

 <div class="projected_level-div2-two-below9">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month7'];?></span></h1>
 </div>

 <div class="projected_level_div2_two_below10">
   <h2><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month8'];?></span></h2>
 </div>

 <div class="projected_level-div2-two-below11">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month9'];?></span></h1>
 </div>

 <div class="projected_level_div_two_below122">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month10'];?></span></h1>
 </div>

 <div class="projected_level-div2-two-below13">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month11'];?></span></h1>
 </div>

 <div class="projected_level-div2-two-below14">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_month12'];?></span></h1>
 </div>

 <div class="projected_level-div2-two-below15">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_year2'];?></span></h1>
 </div>

 <div class="projected_level-div2-two-below16">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_year3'];?></span></h1>
 </div>

 <div class="projected_level-div2-two-below17">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_one_year4'];?></span></h1>
 </div>

 
</div>





<!----------------------------------------mothering-3-below-->

<div class="mothering-box3-projected-below1">
 <div class="projected_level-div3-two-below1">
   <h1>2</h1>
 </div>
 
 
 <div class="projected_level-div3-two-below2">
   <h1><span class="code-numbers1"><?php echo $row['projected_level_of_production_description_of_product_two'];?></span></h1>
 </div>


 <div class="projected_level-div3-two-below3">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month1'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below4">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month2'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below5">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month3'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below6">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month4'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below7">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month5'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below8">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month6'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below9">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month7'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below10">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month8'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below11">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month9'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below12">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month10'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below13">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month11'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below14">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_month12'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below15">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_year1'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below16">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_year2'];?></span></h1>
 </div>

 <div class="projected_level-div3-two-below17">
   <h1><span class="code-numbers2"><?php echo $row['projected_level_of_production_description_of_product_two_year3'];?></span></h1>
 </div>

 
</div>

<!-------------------------------------end of projected level div-->
</div>
<!-------------------------------------end of projected level div-->


  



<div class="Sale-Projections-For-The-Duration-Of-the-Loan-In-Years">
<h1>(C)Sale Projections For The Duration Of The Loan In Years</h1><br />
</div>



<div class="Sale-Projections-For-The-Duration-Of-the-Loan-In-Years-below">




<div class="sales-quantity">
<h1>S/NO.</h1>
</div>



<div class="sales-quantity-1">
 <h1>Description of Product.</h1>
</div>



<div class="sales-quantity-2">
 <h1>Sales quantity</h1>
</div>


<div class="sales-quantity-3">
 <h1>Unit Price(K)</h1>
</div>


<div class="sales-quantity-4">
 <h1>Total Sales(K)</h1>
</div>

<!--------------------below sales quantity-->
<div class="sales-quantity-below">
 <h1></h1>
 </div>
 
 
 
 <div class="sales-quantity-1-below">
   <h1></h1>
 </div>
 
 
 
 <div class="sales-quantity-2-below">
   <h1>Year 1/Months</h1>
 </div>
 

 
 <!---small ending sales quantity boxes top-->
 
 <div class="sales-quantity-small-boxes-below1">
   <h1>Total Y1</h1>
 </div>
 
 <div class="sales-quantity-small-boxes-below2">
   <h1>Y1</h1>
 </div>

 <div class="sales-quantity-small-boxes-below3">
   <h1>Y2</h1>
 </div>

 <div class="sales-quantity-small-boxes-below4">
   <h1>Y3</h1>
 </div>

 <div class="sales-quantity-small-boxes-below5">
   <h1> Y4</h1>
 </div>
 
 <!---small ending sales quantity boxes top2-->
 
 
 <div class="sales-quantity-small-boxes-below6">
   <h1>Y1</h1>
 </div>

 <div class="sales-quantity-small-boxes-below7">
   <h1>Y2</h1>
 </div>

 <div class="sales-quantity-small-boxes-below8">
   <h1>Y4</h1>
 </div>

 <div class="sales-quantity-small-boxes-below9">
   <h1>Y4</h1>
 </div>








<!------------------mother-small-box-divs-->
<div class="mother-small-box-divs">


<div class="mother-small-box-divs-below1">
<h1></h1>
</div>
   
   
<div class="mother-small-box-divs-below2">
<h1></h1>
</div>


<div class="mother-small-box-divs-below3">
 <h1>M1</h1>
</div>


<div class="mother-small-box-divs-below4">
 <h1>M2</h1>
</div>

<div class="mother-small-box-divs-below5">
 <h1>M3</h1>
</div>


<div class="mother-small-box-divs-below6">
 <h1>M4</h1>
</div>


<div class="mother-small-box-divs-below7">
 <h1>M5</h1>
</div>


<div class="mother-small-box-divs-below8">
 <h1>M6</h1>
</div>

<div class="mother-small-box-divs-below9">
 <h1>M7</h1>
</div>


<div class="mother-small-box-divs-below10">
 <h1>M8</h1>
</div>

<div class="mother-small-box-divs-below11">
 <h1>M9</h1>
</div>

<div class="mother-small-box-divs-below12">
 <h1>M10</h1>
</div>

<div class="mother-small-box-divs-below13">
 <h1>M11</h1>
</div>


<div class="mother-small-box-divs-below14">
 <h1>M12</h1>
</div>


<!------------------yyy-->

<div class="mother-small-box-divs-below15">
 <h1></h1>
</div>


<div class="mother-small-box-divs-below16">
 <h1></h1>
</div>


<div class="mother-small-box-divs-below17">
 <h1></h1>
</div>



<div class="mother-small-box-divs-below18">
 <h1></h1>
</div>


<div class="mother-small-box-divs-below19">
 <h1></h1>
</div>


<div class="mother-small-box-divs-below20">
 <h1></h1>
</div>


<div class="mother-small-box-divs-below21">
 <h1></h1>
</div>


<div class="mother-small-box-divs-below22">
 <h1></h1>
</div>


<div class="mother-small-box-divs-below23">
 <h1></h1>
</div>



</div>








<!------------------mother-small-box-divs1-->
<div class="mother-small-box-divs-two">


 <div class="mother-small-box-divs-below1-two">
 <h1>1</h1>
 </div>
     
     
 <div class="mother-small-box-divs-below2-two">
 <p><span class="code-numbers2"><?php echo $row['sales_projections_description_one'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below3-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below4-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m2'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below5-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below6-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m4'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below7-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m5'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below8-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m6'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below9-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m7'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below10-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m8'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below11-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m9'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below12-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m10'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below13-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m11'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below14-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_m12'];?></span></p>
 </div>
 
 
 <!------------------yyy-->
 
 <div class="mother-small-box-divs-below15-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_totaly1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below16-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_unitprice_y1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below17-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_unitprice_y2'];?></span></p>
 </div>
 
 
 
 <div class="mother-small-box-divs-below18-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_unitprice_y3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below19-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_unitprice_y4'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below20-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_totalsale_y1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below21-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_totalsale_y2'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below22-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_totalsale_y3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below23-two">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description_one_totalsale_y4'];?></span></p>
 </div>
 
 
 
 
 </div>
 
 
 
<!------------------mother-small-box-divs2-->
<div class="mother-small-box-divs-three">


 <div class="mother-small-box-divs-below1-three">
 <h1>2</h1>
 </div>
     
     
 <div class="mother-small-box-divs-below2-three">
 <p><span class="code-numbers2"><?php echo $row['sales_projections_description_two'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below3-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below4-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m2'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below5-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below6-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m4'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below7-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m5'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below8-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m6'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below9-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m7'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below10-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m8'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below11-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m9'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below12-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m10'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below13-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m11'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below14-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_m12'];?></span></p>
 </div>
 
 
 <!------------------yyy-->
 
 <div class="mother-small-box-divs-below15-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_totaly1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below16-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_unitprice_y1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below17-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_unitprice_y2'];?></span></p>
 </div>
 
 
 
 <div class="mother-small-box-divs-below18-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_unitprice_y3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below19-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_unitprice_y4'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below20-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_totalsale_y1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below21-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_totalsale_y2'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below22-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_totalsale_y3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below23-three">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description2_one_totalsale_y4'];?></span></p>
 </div>
 
 
 
 
 </div>
 
 
 


<!------------------mother-small-box-divs2-->
<div class="mother-small-box-divs-four">


 <div class="mother-small-box-divs-below1-four">
 <h1>3</h1>
 </div>
     
     
 <div class="mother-small-box-divs-below2-four">
 <p><span class="code-numbers2"><?php echo $row['sales_projections_description_three'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below3-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below4-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m2'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below5-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below6-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m4'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below7-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m5'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below8-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m6'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below9-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m7'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below10-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m8'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below11-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m9'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below12-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m10'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below13-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m11'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below14-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_m12'];?></span></p>
 </div>
 
 
 <!------------------yyy-->
 
 <div class="mother-small-box-divs-below15-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_totaly1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below16-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_unitprice_y1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below17-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_unitprice_y2'];?></span></p>
 </div>
 
 
 
 <div class="mother-small-box-divs-below18-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_unitprice_y3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below19-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_unitprice_y4'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below20-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_totalsale_y1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below21-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_totalsale_y2'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below22-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_totalsale_y3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below23-four">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description3_one_totalsale_y4'];?></span></p>
 </div>
 
 
 
 
 </div>
 
 
 





<!------------------mother-small-box-divs2-->
<div class="mother-small-box-divs-five">


 <div class="mother-small-box-divs-below1-five">
 <h1>4</h1>
 </div>
     
     
 <div class="mother-small-box-divs-below2-five">
 <p><span class="code-numbers2"><?php echo $row['sales_projections_description_four'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below3-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below4-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m2'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below5-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below6-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m4'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below7-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m5'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below8-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m6'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below9-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m7'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below10-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m8'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below11-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m9'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below12-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m10'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below13-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m11'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below14-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_m12'];?></span></p>
 </div>
 
 
 <!------------------yyy-->
 
 <div class="mother-small-box-divs-below15-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_totaly1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below16-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_unitprice_y1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below17-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_unitprice_y2'];?></span></p>
 </div>
 
 
 
 <div class="mother-small-box-divs-below18-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_unitprice_y3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below19-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_unitprice_y4'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below20-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_totalsale_y1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below21-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_totalsale_y2'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below22-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_totalsale_y3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below23-five">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description4_one_totalsale_y4'];?></span></p>
 </div>
 
 
 
 
 </div>
 
 
 








<!------------------mother-small-box-divs2-->
<div class="mother-small-box-divs-six">


 <div class="mother-small-box-divs-below1-six">
 <h1>5</h1>
 </div>
     
     
 <div class="mother-small-box-divs-below2-six">
 <p><span class="code-numbers2"><?php echo $row['sales_projections_description_five'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below3-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m1'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below4-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m2'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below5-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m3'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below6-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m4'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below7-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m5'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below8-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m6'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below9-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m7'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below10-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m8'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below11-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m9'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below12-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m10'];?></span></p>
 </div>
 
 <div class="mother-small-box-divs-below13-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m11'];?></span></p>
 </div>
 
 
 <div class="mother-small-box-divs-below14-six">
   <p><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_m12'];?></span></p>
 </div>
 
 
 <!------------------yyy-->
 
 <div class="mother-small-box-divs-below15-six">
   <h1><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_totaly1'];?></span></h1>
 </div>
 
 
 <div class="mother-small-box-divs-below16-six">
   <h1><span class="code-numbers2"><?php echo $row['sales_projections_description5_one_tsaleunitprice_y1'];?></span></h1>
 </div>
 
 
 

 
 
 <div class="mother-small-box-divs-below20-six">
   <h1><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_totalsale_y1'];?></span></h1>
 </div>
 
 
 <div class="mother-small-box-divs-below21-six">
   <h1><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_totalsale_y2'];?></span></h1>
 </div>
 
 
 <div class="mother-small-box-divs-below22-six">
   <h1><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_totalsale_y3'];?></span></h1>
 </div>
 
 
 <div class="mother-small-box-divs-below23-six">
   <h1><span class="code-numbers1"><?php echo $row['sales_projections_description5_one_totalsale_y4'];?></span></h1>
 </div>
 

 
 </div>

<!------------------------------------------------Sale-Projections-For-The-Duration-Of-the-Loan-In-Years-below end div-------------------->
</div>
<!------------------------------------------------Sale-Projections-For-The-Duration-Of-the-Loan-In-Years-below end div-------------------->                  



  </div>

</div>





<section class="section-10">


  <div class="white-paper-operations-costs">
    <div class="inner-paper-operations-costs">
  
  
  <div class="projections-of-total-operations">
  <h1>(A)Projections Of Total Operating Costs For The Duration Of The Loan</h1>
  </div>
  
  
  
  <div class="projections-of-total-operations-container-div">
  
  
  
  
  <div class="operations-costs-div-1below">
  
  
     <div class="operations-costs1">
      <h1>S/NO.</h1>
     </div>
  
  
     <div class="operations-costs2">
      <h1>Description Of Costs</h1>
     </div>
  
  
     <div class="operations-costs3">
      <h1>operating-costs(K)</h1>
     </div>
  
  
  
     <div class="operations-costs4">
      <h1>Total-costs(K)</h1>
     </div>
   
  
  
  </div>
  
  <!---------------------endof projections-of-total-operations-container-div -->
  
  <div class="operations-costs-div-2below">
  
  
    <div class="operations-costs1-two">
     <p></p>
    </div>
  
  
    <div class="operations-costs2-two">
     <p></p>
    </div>
  
  
    <div class="operations-costs3-two">
     <h1>Year 1/Months</h1>
    </div>
  
  
  
    <div class="operations-costs4-two">
     <p>Y1</p>
    </div>
  
  
    <div class="operations-costs5-two">
      <p>Y2</p>
     </div>
  
  
     <div class="operations-costs6-two">
      <p>Y3</p>
     </div>
   
  
     <div class="operations-costs7-two">
      <p>Y4</p>
     </div>
   
   
  
  </div>
  
  <!-------------------------------------END OF OPERTIONS COSTS-TWO-->
  
  <div class="operations-costs-div-3below">
  
  
    <div class="operations-costs1-three">
     <p></p>
    </div>
  
  
    <div class="operations-costs2-three">
     <p></p>
    </div>
  
  
    <div class="operations-costs3-three">
     <p>M1</p>
    </div>
  
  
  
    <div class="operations-costs4-three">
     <p>M2</p>
    </div>
  
  
    <div class="operations-costs5-three">
      <p>M3</p>
     </div>
  
  
     <div class="operations-costs6-three">
      <p>M4</p>
     </div>
   
  
     <div class="operations-costs7-three">
      <p>M5</p>
     </div>
   
   
     <div class="operations-costs8-three">
      <p>M6</p>
     </div>
   
  
  
     <div class="operations-costs9-three">
      <p>M7</p>
     </div>
   
  
     <div class="operations-costs10-three">
      <p>M8</p>
     </div>
   
  
  
     <div class="operations-costs11-three">
      <p>M9</p>
     </div>
   
  
  
     <div class="operations-costs12-three">
      <p>M10</p>
     </div>
   
  
  
     <div class="operations-costs13-three">
      <p>M11</p>
     </div>
   
  
     <div class="operations-costs14-three">
      <p>M12</p>
     </div>
   
  
  
     <div class="operations-costs15-three">
      <p></p>
     </div>
   
  
  
     <div class="operations-costs16-three">
      <p></p>
     </div>
  
  
     <div class="operations-costs17-three">
      <p></p>
     </div>
   
   
     <div class="operations-costs18-three">
      <p></p>
     </div>
  
  
  
  </div>
  
  
  
  
  <!-------------------------------------END OF OPERTIONS COSTS-TWO-->
  
  <div class="operations-costs-div-4below">
  
  
    <div class="operations-costs1-four">
     <p>1.</p>
    </div>
  
  
    <div class="operations-costs2-four">
     <p><span class="code-numbers1"><?php echo $row['projections_description_operatingcosts_one'];?></span></p>
    </div>
  
  
    <div class="operations-costs3-four">
     <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m1'];?></span></p>
    </div>
  
  
  
    <div class="operations-costs4-four">
     <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m2'];?></span></p>
    </div>
  
  
    <div class="operations-costs5-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m3'];?></span></p>
     </div>
  
  
     <div class="operations-costs6-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m4'];?></span></p>
     </div>
   
  
     <div class="operations-costs7-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m5'];?></span></p>
     </div>
   
   
     <div class="operations-costs8-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m6'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs9-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m7'];?></span></p>
     </div>
   
  
     <div class="operations-costs10-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m8'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs11-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m9'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs12-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m10'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs13-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m11'];?></span></p>
     </div>
   
  
     <div class="operations-costs14-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_m12'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs15-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_y1'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs16-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_y2'];?></span></p>
     </div>
  
  
     <div class="operations-costs17-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_y3'];?></span></p>
     </div>
   
   
     <div class="operations-costs18-four">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_one_y4'];?></span></p>
     </div>
  
  
  
  </div>
  
  
  
  
  
  
  
  
  <!-------------------------------------END OF OPERTIONS COSTS-TWO-->
  
  <div class="operations-costs-div-5below">
  
  
    <div class="operations-costs1-five">
     <p>2.</p>
    </div>
  
  
    <div class="operations-costs2-five">
     <p><span class="code-numbers1"><?php echo $row['projections_description_operatingcosts_two'];?></span></p>
    </div>
  
  
    <div class="operations-costs3-five">
     <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m1'];?></span></p>
    </div>
  
  
  
    <div class="operations-costs4-five">
     <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m2'];?></span></p>
    </div>
  
  
    <div class="operations-costs5-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m3'];?></span></p>
     </div>
  
  
     <div class="operations-costs6-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m4'];?></span></p>
     </div>
   
  
     <div class="operations-costs7-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m5'];?></span></p>
     </div>
   
   
     <div class="operations-costs8-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m6'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs9-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m7'];?></span></p>
     </div>
   
  
     <div class="operations-costs10-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m8'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs11-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m9'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs12-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m10'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs13-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m11'];?></span></p>
     </div>
   
  
     <div class="operations-costs14-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_m12'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs15-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_y1'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs16-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_y2'];?></span></p>
     </div>
  
  
     <div class="operations-costs17-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_y3'];?></span></p>
     </div>
   
   
     <div class="operations-costs18-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_two_y4'];?></span></p>
     </div>
  
  
  
  </div>
  
  
  
  
  
  
  <!-------------------------------------END OF OPERTIONS COSTS-TWO-->
  
  <div class="operations-costs-div-6below">
  
  
    <div class="operations-costs1-six">
     <p>3.</p>
    </div>
  
  
    <div class="operations-costs2-six">
     <p><span class="code-numbers1"><?php echo $row['projections_description_operatingcosts_three'];?></span></p>
    </div>
  
  
    <div class="operations-costs3-six">
     <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m1'];?></span></p>
    </div>
  
  
  
    <div class="operations-costs4-six">
     <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m2'];?></span></p>
    </div>
  
  
    <div class="operations-costs5-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m3'];?></span></p>
     </div>
  
  
     <div class="operations-costs6-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m4'];?></span></p>
     </div>
   
  
     <div class="operations-costs7-five">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m5'];?></span></p>
     </div>
   
   
     <div class="operations-costs8-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m6'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs9-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m7'];?></span></p>
     </div>
   
  
     <div class="operations-costs10-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m8'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs11-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m9'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs12-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m10'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs13-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m11'];?></span></p>
     </div>
   
  
     <div class="operations-costs14-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_m12'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs15-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_y1'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs16-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_y2'];?></span></p>
     </div>
  
  
     <div class="operations-costs17-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_y3'];?></span></p>
     </div>
   
   
     <div class="operations-costs18-six">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_three_y4'];?></span></p>
     </div>
  
  
  
  </div>
  
  
  
  
  
  
  <!-------------------------------------END OF OPERTIONS COSTS-TWO-->
  
  <div class="operations-costs-div-7below">
  
  
    <div class="operations-costs1-seven">
     <p>4.</p>
    </div>
  
  
    <div class="operations-costs2-seven">
     <p><span class="code-numbers1"><?php echo $row['projections_description_operatingcosts_four'];?></span></p>
    </div>
  
  
    <div class="operations-costs3-seven">
     <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m1'];?></span></p>
    </div>
  
  
  
    <div class="operations-costs4-seven">
     <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m2'];?></span></p>
    </div>
  
  
    <div class="operations-costs5-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m3'];?></span></p>
     </div>
  
  
     <div class="operations-costs6-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m4'];?></span></p>
     </div>
   
  
     <div class="operations-costs7-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m5'];?></span></p>
     </div>
   
   
     <div class="operations-costs8-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m6'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs9-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m7'];?></span></p>
     </div>
   
  
     <div class="operations-costs10-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m8'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs11-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m9'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs12-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m10'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs13-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m11'];?></span></p>
     </div>
   
  
     <div class="operations-costs14-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_m12'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs15-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_y1'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs16-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_y2'];?></span></p>
     </div>
  
  
     <div class="operations-costs17-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_y3'];?></span></p>
     </div>
   
   
     <div class="operations-costs18-seven">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_four_y4'];?></span></p>
     </div>
  
  
  
  </div>
  
  
  
  
  <!-------------------------------------END OF OPERTIONS COSTS-TWO-->
  
  <div class="operations-costs-div-8below">
  
  
    <div class="operations-costs1-eight">
     <p>5.</p>
    </div>
  
  
    <div class="operations-costs2-eight">
     <p><span class="code-numbers1"><?php echo $row['projections_description_operatingcosts_five'];?></span></p>
    </div>
  
  
    <div class="operations-costs3-eight">
     <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m1'];?></span></p>
    </div>
  
  
  
    <div class="operations-costs4-eight">
     <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m2'];?></span></p>
    </div>
  
  
    <div class="operations-costs5-eight">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m3'];?></span></p>
     </div>
  
  
     <div class="operations-costs6-eight">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m4'];?></span></p>
     </div>
   
  
     <div class="operations-costs7-eight">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m5'];?></span></p>
     </div>
   
   
     <div class="operations-costs8-eight">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m6'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs9-eight">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m7'];?></span></p>
     </div>
   
  
     <div class="operations-costs10-eight">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m8'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs11-eight">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m9'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs12-eight">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m10'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs13-eight">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m11'];?></span></p>
     </div>
   
  
     <div class="operations-costs14-eight">
      <p><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_five_m12'];?></span></p>
     </div>
   
  
  
     <div class="operations-costs15-eight">
      <h1><span class="code-numbers2"><?php echo $row['projections_description_operatingcosts_totalsale'];?></span></h1>
     </div>
   
  
  
     </div>
  
  
  
  
  </div>
  
  
    </div>
  </div>
   
  </section>












  <section class="section-eleven">
  <div class="white-paper-section11">
    <div class="inner-paper-section11">



      <div class="finacial-data">
        <h2>(E)Finacial Data Of Current Business Operations Where Applicable</h2>
      </div>
    


    <div class="finacial-data-below">


     <div class="data">
      <h2>Please Provide Finacial Data for your Business </h2>
     </div>


<!----start of data 2 div-->

     <div class="data2">

     <div class="data2-inner1">
      <p>(A) What Is The Monthly Revenue Of the Current Business if Any</p>
     </div>


     <div class="data2-inner2">
      <p>K<span class="code-numbers1"><?php echo $row['what_is_the_monthly_revenue'];?></span></p>
     </div>

     </div>

<!----end of data 2 div AND START OF DATA3-->


<div class="data3">

  <div class="data3-inner1">
   <p>(Business23) What Is The Total Operation cost Of the Current Business</p>
  </div>


  <div class="data3-inner2">
   <p>K<span class="code-numbers1"><?php echo $row['what_is_the_total_operation_cost'];?></span></p>
  </div>

  </div>



<!----end of data 3 div AND START OF DATA4-->


<div class="data4">

  <div class="data4-inner1">
   <p>(C) What Is The Total Operation cost Of the Current Business</p>
  </div>


  <div class="data4-inner2">
   <p>K<span class="code-numbers1"><?php echo $row['what_is_the_total_current_operation_cost'];?></span></p>
  </div>

  </div>


<!----end of data 3 div AND START OF DATA 5-->


<div class="data5">

  <div class="data5-inner1">
   <p>(D)How Much have You Invested In the Current Business</p>
  </div>


  <div class="data5-inner2">
   <p>K<span class="code-numbers1"><?php echo $row['what_is_the_total_investment_cost'];?></span></p>
  </div>

  </div>

<!----end of data 3 div AND START OF DATA 6-->


<div class="data6">

  <div class="data6-inner1">
   <p>(E)Provide a brake down of current investments eg(Land)<br />Assets: Equipment,Vehicles,Tractors.</p>
  </div>


  <div class="data6-inner2">
   <p>1.<span class="code-numbers1"><?php echo $row['brakedown_of_investments1'];?></span></p>
  </div>

  </div>


  <!--------------------end of financial-data-below-div-->
    </div>
  <!--------------------end of financial-data-below-div-->




  <div class="previous-cdf-funding">
    <h2>(F)Previous CDF Funding</h2>
  </div>




  <div class="previous-cdf-funding-below">


    <div class="previous-data1">

      <div class="previous-data1-inner1">
       <p>(A)iF Applicants or any of its Shareholders/Members Already Beneficiary of a Loan or Grant Under CDF Empowerment Fund. </p>
      </div>
    
    
      <div class="previous-data1-inner2">

        <div class="computers">
         <p><?php echo $row['funded'];?></p>
        </div>


        <div class="computers2">
          <p><?php echo $row['was_not_funded'];?></p>
        </div>

    </div>
 
  </div>

<!-------------------start  previous-data2  -->


  <div class="previous-data2">

    <div class="previous-data2-inner1">
     <p>(B)If Yes Give Details:</p>
    </div>
  
  
    <div class="previous-data2-inner2">
      <p><span class="code-numbers1"><?php echo $row['finacialdata_If_Yes_Give_details'];?></span></p>
    </div>
  
  </div>


<!-------------------start  previous-data3  -->

<div class="previous-data3">

  <div class="previous-data3-inner1">
   <p>(C)Status Of Loan (Outstanding/Re-paid):</p>
  </div>


  <div class="previous-data3-inner2">
    <p><span class="code-numbers1"><?php echo $row['status_ofLoan_outstandingre_paid'];?></span></p>
  </div>

</div>





<!-------------------start  previous-data3  -->

<div class="previous-data4">

  <div class="previous-data4-inner1">
   <p>(D)Name Of Business/Cooperative/Club:</p>
  </div>


  <div class="previous-data4-inner2">
    <p><span class="code-numbers1"><?php echo $row['finacialdata_name_ofbusiness'];?></span></p>
  </div>

</div>


<!--------------------start of previous-cdf-funding-below-->
  </div>
<!--------------------end of previous-cdf-funding-below-->

  </div>
</div>

</section>



  
<section class="section-twelve">
  <div class="white-paper-section12">
    <div class="inner-paper-section12">
   
  
  
  <div class="proposed-management-team-section12">
  <h2>9.Proposed Management Team</h2>
  </div>
  
  
  
  
  <div class="proposed-management-div">
  
  
  
  <div class="proposed-management-inner1">
     <div class="one">
      <h1>No</h1>
     </div>
  
     <div class="two1">
      <h1>Full Names</h1>
     </div>
  
  
     <div class="three-one">
      <h1>Management Positions</h1>
     </div>
  
  
     <div class="four">
      <h1>Management Qualification Experience</h1>
     </div>
  
  </div>
  
  
  
  
  
  <div class="proposed-management-inner2">
  <div class="one1">
    <h1>1</h1>
   </div>
  
     <div class="two2">
      <p><span class="code-numbers1"><?php echo $row['proposed_management_team_one_fullnames'];?></span></p>
     </div>
  
  
     <div class="three3">
      <p><span class="code-numbers2"><?php echo $row['management_team_one_management_positions'];?></span></p>
     </div>
  
  
     <div class="four4">
      <p><span class="code-numbers2"><?php echo $row['management_team_one_management_qualifications'];?></span></p>
     </div>
  </div>
  
  
  
  
  
  
  
  
  
  <div class="proposed-management-inner3">
    <div class="one2">
      <h1>2</h1>
     </div>
  
     <div class="two22">
      <p><span class="code-numbers1"><?php echo $row['proposed_management_team_two_fullnames'];?></span></p>
     </div>
  
  
     <div class="three33">
      <p><span class="code-numbers2"><?php echo $row['management_team_two_management_positions'];?></span></p>
     </div>
  
  
     <div class="four44">
      <p><span class="code-numbers2"><?php echo $row['management_team_two_management_qualifications'];?></span></p>
     </div>
  </div>
  
  
  
  
  <div class="proposed-management-inner4">
    <div class="one3">
        <h1>3</h1>
     </div>
  
     <div class="two222">
      <p><span class="code-numbers1"><?php echo $row['proposed_management_team_three_fullnames'];?></span></p>
     </div>
  
  
     <div class="three333">
      <p><span class="code-numbers2"><?php echo $row['management_team_three_management_positions'];?></span></p>
     </div>
  
  
     <div class="four444">
      <p><span class="code-numbers2"><?php echo $row['management_team_three_management_qualifications'];?></span></p>
     </div>
  </div>
  </div>
  
  </div>
  
  
  </div>
  </div>
  
  </section>
  
  
  
  


    
  <section class="section-thirteen">
      
    <div class="white-paper-section13">
      <div class="inner-paper-section13">
           
  
  <div class="business-benefits">
  <h1>10.Business Benefits/impact On The Following</h1>
  </div>
  
  <!------------------------------------business-benefits1---div-->
  <div class="business-benefits-div-below">
  
  
  <div class="business-benefits1">
  
   <div class="business-benefits-top">
    <h1>(A)Customers</h1>
   </div>
  
  
  
   <div class="business-benefits-top2">
    <p><span class="code-numbers1"><?php echo $row['Business_benefit_customers'];?></span></p>
   </div>
  
  
  </div> 
  
  <!------------------------------------end business-benefits1---div-->
  
  
  <div class="business-bene2">
  
    <div class="business-bene-top2">
      <h1>(B)Suppliers</h1>
    </div>
   
   
   
    <div class="business-bene-top22">
    <p><span class="code-numbers1"><?php echo $row['Business_benefit_suppliers'];?></span></p>
    </div>
   
   
  </div> 
   
  
  
  
  
  <div class="business-bene3">
  
    <div class="business-bene-top3">
      <h1>(C)Employment <br />Number OF Workers</h1>
    </div>
   
   
   
    <div class="business-bene-top33">
  
    </div>
  
  
  
    <div class="business-bene-top34">
      <h1>Before CDF Funding</h1>
    </div>
  
  
    <div class="business-bene-top35">
      <h1>After CDF Funding</h1>
    </div>
  
  
  
  
  
  
  
  
    <div class="business-bene-top333">
      <h1>Women</h1>
    </div>
  
  
  
    <div class="business-bene-top344">
      <p><span class="code-numbers2"><?php echo $row['Before_cdf_funding_women'];?></span></p>
    </div>
  
  
    <div class="business-bene-top355">
      <p><span class="code-numbers2"><?php echo $row['after_cdf_funding_women'];?></span></p>
    </div>
   
  
  
  
  
  
  
  
    <div class="business-bene-top3333">
      <h1>Men</h1>
    </div>
  
  
  
    <div class="business-bene-top3444">
      <p><span class="code-numbers2"><?php echo $row['Before_cdf_funding_men'];?></span></p>
    </div>
  
  
    <div class="business-bene-top3555">
      <p><span class="code-numbers2"><?php echo $row['after_cdf_funding_men'];?></span></p>
    </div>
  
  
  
  
    <div class="business-bene-top33331">
      <h1>Total</h1>
    </div>
  
  
  
    <div class="business-bene-top34441">
      <p><span class="code-numbers2"><?php echo $row['before_cdf_funding_all_total'];?></span></p>
    </div>
  
  
  
  
  
    <div class="business-bene-top35551">
      <p><span class="code-numbers2"><?php echo $row['after_cdf_funding_all_total'];?></span></p>
    </div>
  
  
  <!-----------of which-->
  
    <div class="business-bene-top-of-which">
      <h1>Of Which</h1>
    </div>
  <!-----------of which-->
  
  
  
  
  
  
  <div class="business-bene-top333311">
    <h1>Youth</h1>
  </div>
  
  
  
  <div class="business-bene-top344411">
    <p><span class="code-numbers2"><?php echo $row['Before_cdf_funding_youth'];?></span></p>
  </div>
  
  
  
  
  
  <div class="business-bene-top3555112">
    <p><span class="code-numbers2"><?php echo $row['after_cdf_funding_youth'];?></span></p>
  </div>
  
  
  
  
  <div class="business-bene-top3333112">
    <h1>Physically<br />Challenged<br />(disabled)</h1>
  </div>
  
  
  
  <div class="business-bene-top3444112">
    <p><span class="code-numbers2"><?php echo $row['Before_cdf_funding_physically_challenged'];?></span></p>
  </div>
  
  
  
  
  
  <div class="business-bene-top35551120">
    <p><span class="code-numbers2"><?php echo $row['after_cdf_funding_physically_challenged'];?></span></p>
  </div>
  
  
   
   
    </div>
  </div>
  
  
  
  
  
  <div class="Capital-Threshold">
    <h1>11.Capital Threshold And Repayment Period</h1>
  </div>
  
  
  
  <div class="Capital-Threshold-container-below">
  
   <div class="Capital-Threshold-container-below-inner">
  
  
  
    <!-------------------------------------------------------top-capital-threshold-div1 ---->
      <div class="top-capital-threshold-div1">
      
        <div class="top-capital-threshold-div1-inner-1">
        <h1>S/NO</h1>
        </div>
  
        <div class="top-capital-threshold-div1-inner-2">
          <h1>ZMW</h1>
        </div>
  
        <div class="top-capital-threshold-div1-inner-3">
          <h1>Repayment Period</h1>
        </div>
  
  
        <div class="top-capital-threshold-div1-inner-4">
          <h1>Tick Selected Option</h1>
        </div>
  
  
      </div>
  
  
  
  <!-------------------------------------------------------top-capital-threshold-div1 ---->
  <div class="top-capital-threshold-div-two">
      
    <div class="top-capital-threshold-div1-inner-1-two">
    <h1>1.</h1>
    </div>
  
    <div class="top-capital-threshold-div1-inner-2-two">
      <p>5,000 - 10,000</p>
    </div>
  
    <div class="top-capital-threshold-div1-inner-3-two">
      <p>12 months</p>
    </div>
  
  
    <div class="top-capital-threshold-div1-inner-4-two">
      <h1><span class="code-numbers1"><?php echo $row['checkbox12_months'];?></span></h1>
    </div>
  
  
  </div>
  
  
  <!-------------------------------------------------------top-capital-threshold-div1 ---->
  <div class="top-capital-threshold-div-three">
      
    <div class="top-capital-threshold-div1-inner-1-three">
    <h1>2.</h1>
    </div>
  
    <div class="top-capital-threshold-div1-inner-2-three">
      <p>10,001 - 25,000</p>
    </div>
  
    <div class="top-capital-threshold-div1-inner-3-three">
      <p>18 months</p>
    </div>
  
  
    <div class="top-capital-threshold-div1-inner-4-three">
      <h1><span class="code-numbers1"><?php echo $row['checkbox18_months'];?></span></h1>
    </div>
  
  
  </div>
  
  
  <!-------------------------------------------------------top-capital-threshold-div1 ---->
  <div class="top-capital-threshold-div-four">
      
    <div class="top-capital-threshold-div1-inner-1-four">
    <h1>3.</h1>
    </div>
  
    <div class="top-capital-threshold-div1-inner-2-four">
      <p>25,001 - 50,000</p>
    </div>
  
    <div class="top-capital-threshold-div1-inner-3-four">
      <p>24 months</p>
    </div>
  
  
    <div class="top-capital-threshold-div1-inner-4-four">
      <h1><span class="code-numbers1"><?php echo $row['checkbox24_months'];?></span></h1>
    </div>
  
  
  </div>
  
  
  <!-------------------------------------------------------top-capital-threshold-div1 ---->
  <div class="top-capital-threshold-div-five">
      
    <div class="top-capital-threshold-div1-inner-1-five">
    <h1>4</h1>
    </div>
  
    <div class="top-capital-threshold-div1-inner-2-five">
      <p>50,001 - 100,000</p>
    </div>
  
    <div class="top-capital-threshold-div1-inner-3-five">
      <p>36 months</p>
    </div>
  
  
    <div class="top-capital-threshold-div1-inner-4-five">
      <h1><span class="code-numbers1"><?php echo $row['checkbox36_months'];?></span></h1>
    </div>
  
  
  </div>
  
  
  
  <!-------------------------------------------------------top-capital-threshold-div1 ---->
  <div class="top-capital-threshold-div-six">
      
    <div class="top-capital-threshold-div1-inner-1-six">
    <h1>5</h1>
    </div>
  
    <div class="top-capital-threshold-div1-inner-2-six">
      <p>100,001 - 200,000</p>
    </div>
  
    <div class="top-capital-threshold-div1-inner-3-six">
      <p>48 months</p>
    </div>
  
  
    <div class="top-capital-threshold-div1-inner-4-six">
      <h1><span class="code-numbers1"><?php echo $row['checkbox48_months'];?></span></h1>
    </div>
  
  
  </div>
  
  
  
  
  <!------------------------------------------------------ end-top-capital-threshold-div1 ---->
  
  <div class="note">
    <h1>NOTE:</h1><p>The Loans Are to Be Repaid Within The Agreed Period and Recovery Efforts Will be Initiated Should The Borrowers not pay back the Loan. </p>
  </div>
  
  
  
     </div>
  
  </div>
  
  
  <!-----------------end of the divs-->
          
   </div>
  </div>
  </section>
  
  
  
  <section class="section-fourteen">
    <div class="white-paper-section14">
      <div class="inner-paper-section14">
     


<div class="Project-Implimentation-section14">
<h2>12.Project Implimentation</h2>
</div>




  <div class="Project-Implimentation-div">

   <div class="Project-Implimentation-div-inner">
    <h2>If you are funded,when would your operaions start?-Tick Where applicable</h2>
   </div>


   <div class="Project-Implimentation-div-inner1">
    <h2>Within 1-3 Months<br /><br />Within 3-6 Months</h2>
   </div>


   <div class="Project-Implimentation-div-inner3">
    <P><?php echo $row['checkbox1_3months'];?></P>
   </div>


   <div class="Project-Implimentation-div-inner2">
    <p><?php echo $row['checkbox3_6months'];?></p>
   </div>

   


   <div class="Project-Implimentation-div-inner4">
    <h2><br /><br />More Than 9 Months</h2>
   </div>

   <div class="Project-Implimentation-div-inner-checkbox2">
    <p><?php echo $row['checkbox6_9months'];?></p>
   </div>

   <div class="Project-Implimentation-div-inner-checkbox">
    <p><?php echo $row['checkbox_morethan9'];?></p>
   </div>

  
  
  </div>


  </div>
</div>
</section>

  




<section class="section-fifteen">
  <div class="white-paper-section15">
    <div class="inner-paper-section15">

<div class="section-c-bank-details">
<h1>Section:C Bank Details Of Applicant</h1>
<p>Provide Bank Account Or Mobil Money Wallet Registered For Your Company/Group/Cooperative/Club</p>
</div>

<!----------------------------bank name container start div-->
<div class="bank-name-container">

<div class="bank-name-container-div-1">
<h1>Bank Name:</h1><hr><p><?php echo $row['bank_name'];?></p>
</div>

<div class="bank-name-container-div-2">
  <h1>Branch:</h1><p><?php echo $row['branch'];?></p>
</div>


<div class="bank-name-container-div-3">
  <h1>Soft Code:</h1><hr><p><p><?php echo $row['soft_code'];?></p>
</div>


<div class="bank-name-container-div-4">
  <h1>Swift Code:</h1><p><?php echo $row['swift_code'];?></p>
</div>


<div class="bank-name-container-div-5">
  <h1>Account Number:</h1><hr><p><?php echo $row['account_number'];?></p>
</div>


<div class="bank-name-container-div-6">
  <h1>Tipn:</h1><p><?php echo $row['tipn_user'];?></p>
</div>


<div class="bank-name-container-div-7">
  <h1>Mobil Money Name And Number:</h1><p><?php echo $row['mobil_money_name_and_number'];?></p>
</div>



</div>
<!----------------------------bank name container end div-->



<div class="section-d-bank-details">
<h1>Section-D: Applicant Declaration</h1>
<p>We the Undersigned,that the information given herein is correct to the best of our knowledge an will take full responsibilty of the repayment of the load and in the event of abuse and missmanagement,of the funds provided under this Empowerment fund. </p>
</div>




<div class="section-club-secretary-bank-details">
<h1>Company/Group/Cooperative/Club Secretary</h1>
<p>Full Names:<span class="code-numbers1"><?php echo $row['club_secretary_name'];?></span> </p><br />
<h3>Signature: <?php echo $row['signature_image'];?></h3><br />
<h4>Date:<span class="code-numbers2"><?php echo $row['date_of_signing1'];?></span></h4>
</div>

</div>
</div>
</section>

  
<section class="section-sixteen">

<div class="white-paper-section16">
<div class="inner-paper-section16">


<div class="section-club-secretary-bank-witness-details">
<h1>Witness</h1>
<p>Head Of the Business/Company Director/Group/Copperative/Club Chairperson or Shareholde/Member:</p><br />
<h3>Signature: <?php echo $row['head_of_business_signature_image'];?></h3><br />
<h4>Date:<span class="code-numbers2"><?php echo $row['date_of_signing2'];?></span></h4>
</div>


</div>
</div>
</section>

  
  
  <section class="section-seventeen">
    <div class="white-paper-section17">
      <div class="inner-paper-section17">





        <div class="section-e-approval">
          <h1>Section E: Approval Process</h1>
          <h3>Recommendation By the Ward Development Committee:</h3><br />
          <h3>Recommended/Not Recommended/Deferred:</h3><p class="recommended-tik">Recommended</p><br />
          <h3>Reasons:</h3><p>The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.<br /></p><br/>
          <h3>Name(Chairperson):</h3><p>jones kabanga</p><br />
          <h3>Signature: nicolas</h3><br />
          <h4>Date:2nd April 2023</h4>

        </div>



        <div class="section-e-approval-1">
       
          <h3>Decision By The Constituency Development Fund Committee:</h3><br />
          <h3>Supported/Not Supported:</h3><p class="supported-tik1">Supported</p><br />
          <h3>Reasons:</h3><p>The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.<br /></p><br/>
          <h3>Name(Chairperson):</h3><p>jones kabanga</p><br />
          <h3>Signature: nicolas</h3><br />
          <h4>Date:2nd April 2023</h4>

        </div>


    </div>
  </div>
</section>






  
  
  <section class="section-seventeen">
    <div class="white-paper-section17">
      <div class="inner-paper-section17">





        <div class="section-e-approval">
          <h1>Section E: Approval Process</h1>
          <h3>Recommendation By the Ward Development Committee:</h3><br />
          <h3>Recommended/Not Recommended/Deferred:</h3><p class="recommended-tik">Recommended</p><br />
          <h3>Reasons:</h3><p>The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.<br /></p><br/>
          <h3>Name(Chairperson):</h3><p>jones kabanga</p><br />
          <h3>Signature: nicolas</h3><br />
          <h4>Date:2nd April 2023</h4>

        </div>



        <div class="section-e-approval-1">
       
          <h3>Decision By The Constituency Development Fund Committee:</h3><br />
          <h3>Supported/Not Supported:</h3><p class="supported-tik1">Supported</p><br />
          <h3>Reasons:</h3><p>The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.<br /></p><br/>
          <h3>Name(Chairperson):</h3><p>jones kabanga</p><br />
          <h3>Signature: nicolas</h3><br />
          <h4>Date:2nd April 2023</h4>

        </div>


    </div>
  </div>
</section>








<section class="section-eightteen">
  <div class="white-paper-section18">
    <div class="inner-paper-section18">


      <div class="section-e-approval18">
       
        <h3>Recommendation By the Approved Finacial Institution :</h3><br />
        <h3>Recommended For Approval/Not Recommended For Approval:</h3><p class="approval-tik18">Not Approved</p><br />
        <h3>Reasons:</h3><p>The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.The resons of denying the applicant the loan are as folllows: the proposal was not properperly written,the business does not show growth or profitablity.<br /></p><br/>
        <h3>Full Names:</h3><p>jones kabanga</p><br />
        <h3>Signature: nicolas</h3><br />
        <h4>Date:2nd April 2023</h4>

      </div>



      


  </div>
</div>
</section>









</div>   






<?php

    }
  }
 
?>





</body>
</html>

