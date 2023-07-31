<?php
session_start();
include('user_loan_connection.php');

if(!isset($_SESSION['email'])){
  
header('location:login_fund_application.php');
}
else{
$email = $_SESSION['email'];
      
}

?>




<?php


if(isset($_POST['submit_infor'])){





if(isset($_POST['user_registration_id'])){
$user_registration_id = $_POST['user_registration_id'];
}

if(isset($_POST['firstname'])){
$firstname = $_POST['firstname'];
}
  
if(isset($_POST['lastname'])){
$lastname = $_POST['lastname'];
}

if(isset($_POST['username'])){
$username = $_POST['username'];
}
  
if(isset($_POST['email'])){
$email = $_POST['email'];
}
   
 
if(isset($_POST['password'])){
$password = $_POST['password'];
}
 
if(isset($_POST['cpass'])){
$cpass = $_POST['cpass'];
}
   

if(isset($_POST['logo_image'])){
$logo_image = $_POST['logo_image'];
}
  

if(isset($_POST['project_identification_number'])){
$project_identification_number = $_POST['project_identification_number'];
}


if(isset($_POST['yezoneward_code_number'])){
  $yezoneward_code_number = $_POST['yezoneward_code_number'];
}



if(isset($_POST['wezone_ward_code_number'])){
  $wezone_ward_code_number = $_POST['wezone_ward_code_number'];
}


if(isset($_POST['cezoneward_code_number'])){
$cezoneward_code_number = $_POST['cezoneward_code_number'];
}


if(isset($_POST['name_of_business_organization_company_group_cooperative_club'])){
$name_of_business_organization_company_group_cooperative_club = $_POST['name_of_business_organization_company_group_cooperative_club'];
}
  

if(isset($_POST['legal_form_Of_applicant_limited_company_sme_group_cooperative'])){
$legal_form_Of_applicant_limited_company_sme_group_cooperative = $_POST['legal_form_Of_applicant_limited_company_sme_group_cooperative'];
  }
   

if(isset($_POST['date_Of_company_group_cooperative_club_registration'])){
$date_Of_company_group_cooperative_club_registration = $_POST['date_Of_company_group_cooperative_club_registration'];
}
       

if(isset($_POST['tipn'])){
  $tipn = $_POST['tipn'];
  }
   


if(isset($_POST['shareholder_name_one'])){
$shareholder_name_one = $_POST['shareholder_name_one'];
}
  

if(isset($_POST['shareholder_name_two'])){
  $shareholder_name_two = $_POST['shareholder_name_two'];
}


if(isset($_POST['shareholder_name_three'])){
  $shareholder_name_three = $_POST['shareholder_name_three'];
}


if(isset($_POST['shareholder_name_four'])){
  $shareholder_name_four = $_POST['shareholder_name_four'];
}


if(isset($_POST['shareholder_name_five'])){
  $shareholder_name_five = $_POST['shareholder_name_five'];
}



if(isset($_POST['shareholder_name_six'])){
  $shareholder_name_six = $_POST['shareholder_name_six'];
}



if(isset($_POST['shareholder_name_seven'])){
$shareholder_name_seven = $_POST['shareholder_name_seven'];
}


if(isset($_POST['shareholder_name_eight'])){
$shareholder_name_eight = $_POST['shareholder_name_eight'];
}


if(isset($_POST['shareholder_name_nine'])){
$shareholder_name_nine = $_POST['shareholder_name_nine'];
}


if(isset($_POST['shareholder_name_ten'])){
$shareholder_name_ten = $_POST['shareholder_name_ten'];
}
  

if(isset($_POST['shareholder_name_eleven'])){
  $shareholder_name_eleven = $_POST['shareholder_name_eleven'];
}
   

if(isset($_POST['nrc_name_one'])){
  $nrc_name_one = $_POST['nrc_name_one']; 
}
 


if(isset($_POST['nrc_name_two'])){
  $nrc_name_two = $_POST['nrc_name_two'];
}
 


if(isset($_POST['nrc_name_three'])){
  $nrc_name_three = $_POST['nrc_name_three'];
}
 

if(isset($_POST['nrc_name_four'])){
  $nrc_name_four = $_POST['nrc_name_four'];
}
 

if(isset($_POST['nrc_name_five'])){
$nrc_name_five = $_POST['nrc_name_five'];
}


if(isset($_POST['nrc_name_six'])){
$nrc_name_six = $_POST['nrc_name_six'];
}



if(isset($_POST['nrc_name_seven'])){
$nrc_name_seven = $_POST['nrc_name_seven'];
}
  

if(isset($_POST['nrc_name_eight'])){
  $nrc_name_eight = $_POST['nrc_name_eight'];
}
   


if(isset($_POST['nrc_name_nine'])){
  $nrc_name_nine = $_POST['nrc_name_nine'];
}
 

if(isset($_POST['nrc_name_ten'])){
$nrc_name_ten = $_POST['nrc_name_ten'];
}



if(isset($_POST['nrc_name_eleven'])){
$nrc_name_eleven = $_POST['nrc_name_eleven'];
}



if(isset($_POST['shareholding_percent_name_one'])){
  $shareholding_percent_name_one = $_POST['shareholding_percent_name_one'];
  }
  

  
if(isset($_POST['shareholding_percent_name_two'])){
  $shareholding_percent_name_two = $_POST['shareholding_percent_name_two'];
  }
 

if(isset($_POST['shareholding_percent_name_three'])){
$shareholding_percent_name_three = $_POST['shareholding_percent_name_three'];
}
  


if(isset($_POST['shareholding_percent_name_four'])){
 $shareholding_percent_name_four = $_POST['shareholding_percent_name_four'];
}
    


if(isset($_POST['shareholding_percent_name_five'])){
$shareholding_percent_name_five = $_POST['shareholding_percent_name_five'];
}


if(isset($_POST['shareholding_percent_name_six'])){
$shareholding_percent_name_six = $_POST['shareholding_percent_name_six'];
}
  

if(isset($_POST['shareholding_percent_name_seven'])){
  $shareholding_percent_name_seven = $_POST['shareholding_percent_name_seven'];
}


if(isset($_POST['shareholding_percent_name_eight'])){
$shareholding_percent_name_eight = $_POST['shareholding_percent_name_eight'];
}


if(isset($_POST['shareholding_percent_name_nine'])){
  $shareholding_percent_name_nine = $_POST['shareholding_percent_name_nine'];
  }


if(isset($_POST['shareholding_percent_name_ten'])){
$shareholding_percent_name_ten = $_POST['shareholding_percent_name_ten'];
}

if(isset($_POST['shareholding_percent_name_eleven'])){
$shareholding_percent_name_eleven = $_POST['shareholding_percent_name_eleven'];
}
  

if(isset($_POST['position_in_business_name_one'])){
$position_in_business_name_one = $_POST['position_in_business_name_one'];
}


if(isset($_POST['position_in_business_name_two'])){
$position_in_business_name_two = $_POST['position_in_business_name_two'];
}
  

if(isset($_POST['position_in_business_name_three'])){
  $position_in_business_name_three = $_POST['position_in_business_name_three'];
}
   
 

if(isset($_POST['position_in_business_name_four'])){
  $position_in_business_name_four = $_POST['position_in_business_name_four'];
}
 

if(isset($_POST['position_in_business_name_five'])){
  $position_in_business_name_five = $_POST['position_in_business_name_five'];
}



if(isset($_POST['position_in_business_name_six'])){
  $position_in_business_name_six = $_POST['position_in_business_name_six'];
}


if(isset($_POST['position_in_business_name_seven'])){
  $position_in_business_name_seven = $_POST['position_in_business_name_seven'];
}

if(isset($_POST['position_in_business_name_eight'])){
  $position_in_business_name_eight = $_POST['position_in_business_name_eight'];
}


if(isset($_POST['position_in_business_name_nine'])){
  $position_in_business_name_nine = $_POST['position_in_business_name_nine'];
}


if(isset($_POST['position_in_business_name_ten'])){
  $position_in_business_name_ten = $_POST['position_in_business_name_ten'];
}


if(isset($_POST['position_in_business_name_eleven'])){
  $position_in_business_name_eleven = $_POST['position_in_business_name_eleven']; 
}




if(isset($_POST['yes1'])){
  $yes1 = $_POST['yes1']; 
}


if(isset($_POST['no1'])){
  $no1 = $_POST['no1']; 
}



if(isset($_POST['yes2'])){
  $yes2 = $_POST['yes2']; 
}


if(isset($_POST['no2'])){
  $no2 = $_POST['no2']; 
}




if(isset($_POST['yes3'])){
  $yes3 = $_POST['yes3']; 
}


if(isset($_POST['no3'])){
  $no3 = $_POST['no3']; 
}


if(isset($_POST['yes4'])){
  $yes4 = $_POST['yes4']; 
}


if(isset($_POST['no4'])){
  $no4 = $_POST['no4']; 
}





if(isset($_POST['yes5'])){
  $yes5 = $_POST['yes5']; 
}


if(isset($_POST['no5'])){
  $no5 = $_POST['no5']; 
}



if(isset($_POST['yes6'])){
  $yes6 = $_POST['yes6']; 
}


if(isset($_POST['no6'])){
  $no6 = $_POST['no6']; 
}




if(isset($_POST['yes7'])){
  $yes7 = $_POST['yes7']; 
}


if(isset($_POST['no7'])){
  $no7 = $_POST['no7']; 
}




if(isset($_POST['yes8'])){
  $yes8 = $_POST['yes8']; 
}


if(isset($_POST['no8'])){
  $no8 = $_POST['no8']; 
}





if(isset($_POST['yes9'])){
  $yes9 = $_POST['yes9']; 
}


if(isset($_POST['no9'])){
  $no9 = $_POST['no9']; 
}




if(isset($_POST['yes10'])){
  $yes10 = $_POST['yes10']; 
}


if(isset($_POST['no10'])){
  $no10 = $_POST['no10']; 
}




if(isset($_POST['yes11'])){
  $yes11 = $_POST['yes11']; 
}


if(isset($_POST['no11'])){
  $no11 = $_POST['no11']; 
}





if(isset($_POST['authorized_representertive_name_of_contact_person'])){
$authorized_representertive_name_of_contact_person = $_POST['authorized_representertive_name_of_contact_person'];
}
  

if(isset($_POST['authorized_representertive_position_in_business'])){
$authorized_representertive_position_in_business = $_POST['authorized_representertive_position_in_business'];
}
    
if(isset($_POST['authorized_representertive_contact_number_cell'])){
  $authorized_representertive_contact_number_cell = $_POST['authorized_representertive_contact_number_cell'];
}  

   
if(isset($_POST['authorized_representertive_contact_number_telephone'])){
$authorized_representertive_contact_number_telephone = $_POST['authorized_representertive_contact_number_telephone'];
}  

  
if(isset($_POST['authorized_representertive_email'])){
  $authorized_representertive_email = $_POST['authorized_representertive_email'];
  }


  if(isset($_POST['project_location_name_of_district'])){
    $project_location_name_of_district = $_POST['project_location_name_of_district'];
}
     


if(isset($_POST['project_location_name_of_constituency'])){
$project_location_name_of_constituency = $_POST['project_location_name_of_constituency'];
}
  

if(isset($_POST['project_location_name_of_ward'])){
  $project_location_name_of_ward = $_POST['project_location_name_of_ward'];
}



if(isset($_POST['project_location_name_of_zone'])){
$project_location_name_of_zone = $_POST['project_location_name_of_zone'];
}
  




if(isset($_POST['project_location_name_physical_address'])){
$project_location_name_physical_address = $_POST['project_location_name_physical_address'];
  }
    



if(isset($_POST['loan_application_amount_in_Figures'])){
$loan_application_amount_in_Figures = $_POST['loan_application_amount_in_Figures'];
}



if(isset($_POST['loan_application_amount_in_words'])){
  $loan_application_amount_in_words = $_POST['loan_application_amount_in_words'];
  }


if(isset($_POST['description_of_business'])){
$description_of_business = $_POST['description_of_business'];
}


 
if(isset($_POST['indicate_weather_company_is_start_up'])){
  $indicate_weather_company_is_start_up = $_POST['indicate_weather_company_is_start_up'];    
 }
  

 
 if(isset($_POST['purpose_of_the_loan'])){
  $purpose_of_the_loan = $_POST['purpose_of_the_loan']; 
 }
  

 if(isset($_POST['repayment_period'])){
  $repayment_period = $_POST['repayment_period'];
 }
  
 

 if(isset($_POST['source_of_funds_of_repayment_loan'])){
  $source_of_funds_of_repayment_loan = $_POST['source_of_funds_of_repayment_loan'];
 }




 if(isset($_POST['collaterial_if_any'])){
  $collaterial_if_any = $_POST['collaterial_if_any'];
 }




 if(isset($_POST['financials_description_cost_one'])){
  $financials_description_cost_one = $_POST['financials_description_cost_one'];
 }

 
 if(isset($_POST['financials_description_cost_two'])){
  $financials_description_cost_two = $_POST['financials_description_cost_two'];
 }

 
 if(isset($_POST['financials_description_cost_three'])){
  $financials_description_cost_three = $_POST['financials_description_cost_three'];
 }



 if(isset($_POST['financials_description_cost_four'])){
  $financials_description_cost_four = $_POST['financials_description_cost_four'];
 }


 
 if(isset($_POST['financials_description_cost_five'])){
  $financials_description_cost_five = $_POST['financials_description_cost_five'];
 }


 
 if(isset($_POST['financials_description_cost_six'])){
  $financials_description_cost_six = $_POST['financials_description_cost_six'];
 }


 if(isset($_POST['financials_description_cost_seven'])){
  $financials_description_cost_seven = $_POST['financials_description_cost_seven'];
 }


 
 if(isset($_POST['financials_description_cost_eight'])){
  $financials_description_cost_eight = $_POST['financials_description_cost_eight'];
 }



 if(isset($_POST['financials_description_cost_eight'])){
  $financials_description_cost_nine = $_POST['financials_description_cost_nine'];
 }



 if(isset($_POST['financials_description_cost_ten'])){
  $financials_description_cost_ten = $_POST['financials_description_cost_ten'];
 }

 
 if(isset($_POST['financials_description_cost_eleven'])){
  $financials_description_cost_eleven = $_POST['financials_description_cost_eleven'];
 }


 
 if(isset($_POST['financials_description_cost_twelve'])){
  $financials_description_cost_twelve = $_POST['financials_description_cost_twelve'];
 }

 
 if(isset($_POST['financials_description_cost_thirteen'])){
  $financials_description_cost_thirteen = $_POST['financials_description_cost_thirteen'];
 }


 if(isset($_POST['financials_description_cost_fourteen'])){
 $financials_description_cost_fourteen = $_POST['financials_description_cost_fourteen'];
 }


 if(isset($_POST['financials_description_cost_fifteen'])){
  $financials_description_cost_fifteen = $_POST['financials_description_cost_fifteen'];
  }
 



 if(isset($_POST['financials_description_quality_one'])){
  $financials_description_quality_one = $_POST['financials_description_quality_one'];
  }
 


if(isset($_POST['financials_description_quality_two'])){
 $financials_description_quality_two = $_POST['financials_description_quality_two'];   
}
   

if(isset($_POST['financials_description_quality_three'])){
$financials_description_quality_three = $_POST['financials_description_quality_three'];
}

 
if(isset($_POST['financials_description_quality_four'])){
  $financials_description_quality_four = $_POST['financials_description_quality_four'];
}



if(isset($_POST['financials_description_quality_five'])){
  $financials_description_quality_five = $_POST['financials_description_quality_five'];
}


 
if(isset($_POST['financials_description_quality_six'])){
$financials_description_quality_six = $_POST['financials_description_quality_six'];
}



if(isset($_POST['financials_description_quality_seven'])){
 $financials_description_quality_seven = $_POST['financials_description_quality_seven'];
  }
  


if(isset($_POST['financials_description_quality_eight'])){ 
$financials_description_quality_eight = $_POST['financials_description_quality_eight'];
}
     


if(isset($_POST['financials_description_quality_nine'])){ 
  $financials_description_quality_nine = $_POST['financials_description_quality_nine'];
}
    
 

if(isset($_POST['financials_description_quality_ten'])){ 
  $financials_description_quality_ten = $_POST['financials_description_quality_ten'];
}




if(isset($_POST['financials_description_quality_eleven'])){ 
  $financials_description_quality_eleven = $_POST['financials_description_quality_eleven'];
}

 

if(isset($_POST['financials_description_quality_twelve'])){ 
 $financials_description_quality_twelve = $_POST['financials_description_quality_twelve'];
}



if(isset($_POST['financials_description_quality_thirteen'])){ 
  $financials_description_quality_thirteen = $_POST['financials_description_quality_thirteen'];
 }


 if(isset($_POST['financials_description_quality_fourteen'])){ 
  $financials_description_quality_fourteen = $_POST['financials_description_quality_fourteen'];
 }





 if(isset($_POST['financials_description_unitcost_one'])){ 
  $financials_description_unitcost_one = $_POST['financials_description_unitcost_one'];
 }



 if(isset($_POST['financials_description_unitcost_two'])){ 
  $financials_description_unitcost_two = $_POST['financials_description_unitcost_two'];
 }



 if(isset($_POST['financials_description_unitcost_three'])){ 
  $financials_description_unitcost_three = $_POST['financials_description_unitcost_three'];
 }



 if(isset($_POST['financials_description_unitcost_four'])){ 
  $financials_description_unitcost_four = $_POST['financials_description_unitcost_four'];
  }


if(isset($_POST['financials_description_unitcost_five'])){ 
    $financials_description_unitcost_five = $_POST['financials_description_unitcost_five'];
}



if(isset($_POST['financials_description_unitcost_six'])){ 
  $financials_description_unitcost_six = $_POST['financials_description_unitcost_six'];
}



if(isset($_POST['financials_description_unitcost_seven'])){ 
$financials_description_unitcost_seven = $_POST['financials_description_unitcost_seven'];
}



if(isset($_POST['financials_description_unitcost_eight'])){ 
  $financials_description_unitcost_eight = $_POST['financials_description_unitcost_eight'];
}



if(isset($_POST['financials_description_unitcost_nine'])){ 
  $financials_description_unitcost_nine = $_POST['financials_description_unitcost_nine'];
}



if(isset($_POST['financials_description_unitcost_ten'])){  
$financials_description_unitcost_ten = $_POST['financials_description_unitcost_ten'];
}



if(isset($_POST['financials_description_unitcost_eleven'])){  
  $financials_description_unitcost_eleven = $_POST['financials_description_unitcost_eleven'];
  }
  


  if(isset($_POST['financials_description_unitcost_twelve'])){  
$financials_description_unitcost_twelve = $_POST['financials_description_unitcost_twelve'];
}


if(isset($_POST['financials_description_unitcost_thirteen'])){  
  $financials_description_unitcost_thirteen = $_POST['financials_description_unitcost_thirteen'];
}




if(isset($_POST['financials_description_unitcost_fourteen'])){  
  $financials_description_unitcost_fourteen = $_POST['financials_description_unitcost_fourteen'];
}






if(isset($_POST['financials_description_totalcost_one'])){  
$financials_description_totalcost_one = $_POST['financials_description_totalcost_one'];
}
 

if(isset($_POST['financials_description_totalcost_two'])){  
  $financials_description_totalcost_two = $_POST['financials_description_totalcost_two'];
  }



if(isset($_POST['financials_description_totalcost_three'])){  
  $financials_description_totalcost_three = $_POST['financials_description_totalcost_three'];
  }




  if(isset($_POST['financials_description_totalcost_four'])){  
    $financials_description_totalcost_four = $_POST['financials_description_totalcost_four'];
  }
    


  if(isset($_POST['financials_description_totalcost_five'])){  
 $financials_description_totalcost_five = $_POST['financials_description_totalcost_five'];
  }
    


if(isset($_POST['financials_description_totalcost_six'])){  
$financials_description_totalcost_six = $_POST['financials_description_totalcost_six'];
}
       
 
 
if(isset($_POST['financials_description_totalcost_seven'])){  
  $financials_description_totalcost_seven = $_POST['financials_description_totalcost_seven'];
  }


if(isset($_POST['financials_description_totalcost_eight'])){  
$financials_description_totalcost_eight = $_POST['financials_description_totalcost_eight'];
}


 
if(isset($_POST['financials_description_totalcost_nine'])){  
  $financials_description_totalcost_nine = $_POST['financials_description_totalcost_nine'];
  }


 
if(isset($_POST['financials_description_totalcost_ten'])){  
  $financials_description_totalcost_ten = $_POST['financials_description_totalcost_ten'];
}

 
if(isset($_POST['financials_description_totalcost_eleven'])){  
  $financials_description_totalcost_eleven = $_POST['financials_description_totalcost_eleven'];
}


if(isset($_POST['financials_description_totalcost_twelve'])){  
  $financials_description_totalcost_twelve = $_POST['financials_description_totalcost_twelve'];
}


if(isset($_POST['financials_description_totalcost_thirteen'])){  
  $financials_description_totalcost_thirteen = $_POST['financials_description_totalcost_thirteen'];
}
 
 
if(isset($_POST['financials_description_totalcost_fourteen'])){  
  $financials_description_totalcost_fourteen = $_POST['financials_description_totalcost_fourteen'];
}






if(isset($_POST['financials_description_totalcost_final'])){  
  $financials_description_totalcost_final = $_POST['financials_description_totalcost_final'];
}



if(isset($_POST['projected_level_of_production_description_of_product_one'])){  
  $projected_level_of_production_description_of_product_one = $_POST['projected_level_of_production_description_of_product_one'];
}



if(isset($_POST['projected_level_of_production_description_of_product_two'])){  
  $projected_level_of_production_description_of_product_two = $_POST['projected_level_of_production_description_of_product_two'];
}


if(isset($_POST['projected_level_of_production_description_of_product_one_month1'])){  
$projected_level_of_production_description_of_product_one_month1 = $_POST['projected_level_of_production_description_of_product_one_month1'];
}


if(isset($_POST['projected_level_of_production_description_of_product_one_month2'])){  
  $projected_level_of_production_description_of_product_one_month2 = $_POST['projected_level_of_production_description_of_product_one_month2'];
  }



if(isset($_POST['projected_level_of_production_description_of_product_one_month3'])){  
$projected_level_of_production_description_of_product_one_month3 = $_POST['projected_level_of_production_description_of_product_one_month3'];
}


if(isset($_POST['projected_level_of_production_description_of_product_one_month4'])){  
  $projected_level_of_production_description_of_product_one_month4 = $_POST['projected_level_of_production_description_of_product_one_month4'];
}
  

if(isset($_POST['projected_level_of_production_description_of_product_one_month5'])){  
$projected_level_of_production_description_of_product_one_month5 = $_POST['projected_level_of_production_description_of_product_one_month5'];
}
    


  if(isset($_POST['projected_level_of_production_description_of_product_one_month6'])){  
  $projected_level_of_production_description_of_product_one_month6 = $_POST['projected_level_of_production_description_of_product_one_month6'];
  }
      


if(isset($_POST['projected_level_of_production_description_of_product_one_month7'])){  
$projected_level_of_production_description_of_product_one_month7 = $_POST['projected_level_of_production_description_of_product_one_month7'];
}
       

if(isset($_POST['projected_level_of_production_description_of_product_one_month8'])){  
  $projected_level_of_production_description_of_product_one_month8 = $_POST['projected_level_of_production_description_of_product_one_month8'];
  }
     

  if(isset($_POST['projected_level_of_production_description_of_product_one_month9'])){  
$projected_level_of_production_description_of_product_one_month9 = $_POST['projected_level_of_production_description_of_product_one_month9'];
}
       

if(isset($_POST['projected_level_of_production_description_of_product_one_month10'])){  
  $projected_level_of_production_description_of_product_one_month10 = $_POST['projected_level_of_production_description_of_product_one_month10'];
  }
     

  if(isset($_POST['projected_level_of_production_description_of_product_one_month11'])){  
    $projected_level_of_production_description_of_product_one_month11 = $_POST['projected_level_of_production_description_of_product_one_month11'];
    }
     

  if(isset($_POST['projected_level_of_production_description_of_product_one_month12'])){  
    $projected_level_of_production_description_of_product_one_month12 = $_POST['projected_level_of_production_description_of_product_one_month12'];
    }
       


if(isset($_POST['projected_level_of_production_description_of_product_one_year2'])){  
  $projected_level_of_production_description_of_product_one_year2 = $_POST['projected_level_of_production_description_of_product_one_year2'];      
}
         

if(isset($_POST['projected_level_of_production_description_of_product_one_year3'])){  
  $projected_level_of_production_description_of_product_one_year3 = $_POST['projected_level_of_production_description_of_product_one_year3'];      
}
   


if(isset($_POST['projected_level_of_production_description_of_product_one_year4'])){  
  $projected_level_of_production_description_of_product_one_year4 = $_POST['projected_level_of_production_description_of_product_one_year4'];      
}
   




if(isset($_POST['projected_level_of_production_description_of_product_two_month1'])){  
  $projected_level_of_production_description_of_product_two_month1 = $_POST['projected_level_of_production_description_of_product_two_month1'];
  }
  
  
  if(isset($_POST['projected_level_of_production_description_of_product_two_month2'])){  
    $projected_level_of_production_description_of_product_two_month2 = $_POST['projected_level_of_production_description_of_product_two_month2'];
    }
  
  
  
  if(isset($_POST['projected_level_of_production_description_of_product_two_month3'])){  
  $projected_level_of_production_description_of_product_two_month3 = $_POST['projected_level_of_production_description_of_product_two_month3'];
  }
  
  
  if(isset($_POST['projected_level_of_production_description_of_product_two_month4'])){  
    $projected_level_of_production_description_of_product_two_month4 = $_POST['projected_level_of_production_description_of_product_two_month4'];
  }
    
  
  if(isset($_POST['projected_level_of_production_description_of_product_two_month5'])){  
  $projected_level_of_production_description_of_product_two_month5 = $_POST['projected_level_of_production_description_of_product_two_month5'];
  }
      
  
  
    if(isset($_POST['projected_level_of_production_description_of_product_two_month6'])){  
    $projected_level_of_production_description_of_product_two_month6 = $_POST['projected_level_of_production_description_of_product_two_month6'];
    }
        
  
  
  if(isset($_POST['projected_level_of_production_description_of_product_two_month7'])){  
  $projected_level_of_production_description_of_product_two_month7 = $_POST['projected_level_of_production_description_of_product_two_month7'];
  }
         
  
  if(isset($_POST['projected_level_of_production_description_of_product_two_month8'])){  
    $projected_level_of_production_description_of_product_two_month8 = $_POST['projected_level_of_production_description_of_product_two_month8'];
    }
       
  
    if(isset($_POST['projected_level_of_production_description_of_product_two_month9'])){  
  $projected_level_of_production_description_of_product_two_month9 = $_POST['projected_level_of_production_description_of_product_two_month9'];
  }
         
  
  if(isset($_POST['projected_level_of_production_description_of_product_two_month10'])){  
    $projected_level_of_production_description_of_product_two_month10 = $_POST['projected_level_of_production_description_of_product_two_month10'];
    }
       
  
    if(isset($_POST['projected_level_of_production_description_of_product_two_month11'])){  
      $projected_level_of_production_description_of_product_two_month11 = $_POST['projected_level_of_production_description_of_product_two_month11'];
      }
       
  
    if(isset($_POST['projected_level_of_production_description_of_product_two_month12'])){  
      $projected_level_of_production_description_of_product_two_month12 = $_POST['projected_level_of_production_description_of_product_two_month12'];
      }
         








if(isset($_POST['projected_level_of_production_description_of_product_two_year1'])){  
  $projected_level_of_production_description_of_product_two_year1 = $_POST['projected_level_of_production_description_of_product_two_year1'];      
}
         



if(isset($_POST['projected_level_of_production_description_of_product_two_year2'])){  
$projected_level_of_production_description_of_product_two_year2 = $_POST['projected_level_of_production_description_of_product_two_year2'];      
}
               
      
      
if(isset($_POST['projected_level_of_production_description_of_product_two_year3'])){  
$projected_level_of_production_description_of_product_two_year3 = $_POST['projected_level_of_production_description_of_product_two_year3'];      
}
         
      
      
    
     
      
if(isset($_POST['sales_projections_description_one'])){  
$sales_projections_description_one = $_POST['sales_projections_description_one'];    
}
     

     
if(isset($_POST['sales_projections_description_two'])){  
  $sales_projections_description_two = $_POST['sales_projections_description_two'];    
}


     
if(isset($_POST['sales_projections_description_three'])){  
$sales_projections_description_three = $_POST['sales_projections_description_three'];    
}


     
if(isset($_POST['sales_projections_description_four'])){  
$sales_projections_description_four = $_POST['sales_projections_description_four'];    
}

     
if(isset($_POST['sales_projections_description_five'])){  
$sales_projections_description_five = $_POST['sales_projections_description_five'];    
}


     
if(isset($_POST['sales_projections_description_six'])){  
  $sales_projections_description_six = $_POST['sales_projections_description_six'];    
}






     
if(isset($_POST['sales_projections_description_one_m1'])){  
$sales_projections_description_one_m1 = $_POST['sales_projections_description_one_m1'];    
}


    
if(isset($_POST['sales_projections_description_one_m2'])){  
  $sales_projections_description_one_m2 = $_POST['sales_projections_description_one_m2'];    
  }

    
  if(isset($_POST['sales_projections_description_one_m3'])){  
    $sales_projections_description_one_m3 = $_POST['sales_projections_description_one_m3'];    
    }

    
if(isset($_POST['sales_projections_description_one_m4'])){  
  $sales_projections_description_one_m4 = $_POST['sales_projections_description_one_m4'];    
}

    
if(isset($_POST['sales_projections_description_one_m5'])){  
  $sales_projections_description_one_m5 = $_POST['sales_projections_description_one_m5'];    
  }



    
if(isset($_POST['sales_projections_description_one_m6'])){  
$sales_projections_description_one_m6 = $_POST['sales_projections_description_one_m6'];    
}
    
    
if(isset($_POST['sales_projections_description_one_m7'])){  
$sales_projections_description_one_m7 = $_POST['sales_projections_description_one_m7'];    
}
    
        
if(isset($_POST['sales_projections_description_one_m8'])){  
  $sales_projections_description_one_m8 = $_POST['sales_projections_description_one_m8'];    
}
    
        
if(isset($_POST['sales_projections_description_one_m9'])){  
$sales_projections_description_one_m9 = $_POST['sales_projections_description_one_m9'];    
}
    
        
if(isset($_POST['sales_projections_description_one_m10'])){  
$sales_projections_description_one_m10 = $_POST['sales_projections_description_one_m10'];    
}



if(isset($_POST['sales_projections_description_one_m11'])){  
$sales_projections_description_one_m11 = $_POST['sales_projections_description_one_m11'];    
}
      
          
if(isset($_POST['sales_projections_description_one_m12'])){  
 $sales_projections_description_one_m12 = $_POST['sales_projections_description_one_m12'];    
}
  
  
         
if(isset($_POST['sales_projections_description_one_totaly1'])){  
  $sales_projections_description_one_totaly1 = $_POST['sales_projections_description_one_totaly1'];   
 }



        
 if(isset($_POST['sales_projections_description_one_unitprice_y1'])){   
$sales_projections_description_one_unitprice_y1 = $_POST['sales_projections_description_one_unitprice_y1']; 
}

      
if(isset($_POST['sales_projections_description_one_unitprice_y2'])){   
  $sales_projections_description_one_unitprice_y2 = $_POST['sales_projections_description_one_unitprice_y2']; 
}


      
if(isset($_POST['sales_projections_description_one_unitprice_y3'])){   
$sales_projections_description_one_unitprice_y3 = $_POST['sales_projections_description_one_unitprice_y3']; 
}
      
if(isset($_POST['sales_projections_description_one_unitprice_y4'])){   
  $sales_projections_description_one_unitprice_y4 = $_POST['sales_projections_description_one_unitprice_y4']; 
}








       
if(isset($_POST['sales_projections_description_one_totalsale_y1'])){   
  $sales_projections_description_one_totalsale_y1 = $_POST['sales_projections_description_one_totalsale_y1'];
}
  
        
  if(isset($_POST['sales_projections_description_one_totalsale_y2'])){   
    $sales_projections_description_one_totalsale_y2 = $_POST['sales_projections_description_one_totalsale_y2']; 
  }
  
  
        
  if(isset($_POST['sales_projections_description_one_totalsale_y3'])){   
    $sales_projections_description_one_totalsale_y3 = $_POST['sales_projections_description_one_totalsale_y3'];
  }
        
  if(isset($_POST['sales_projections_description_one_totalsale_y4'])){   
    $sales_projections_description_one_totalsale_y4 = $_POST['sales_projections_description_one_totalsale_y4'];
  }






if(isset($_POST['sales_projections_description2_one_m1'])){     
$sales_projections_description2_one_m1 = $_POST['sales_projections_description2_one_m1'];
}


if(isset($_POST['sales_projections_description2_one_m2'])){     
  $sales_projections_description2_one_m2 = $_POST['sales_projections_description2_one_m2'];
  }


if(isset($_POST['sales_projections_description2_one_m3'])){     
$sales_projections_description2_one_m3 = $_POST['sales_projections_description2_one_m3'];
}


if(isset($_POST['sales_projections_description2_one_m4'])){     
  $sales_projections_description2_one_m4 = $_POST['sales_projections_description2_one_m4'];
  }


if(isset($_POST['sales_projections_description2_one_m5'])){     
$sales_projections_description2_one_m5 = $_POST['sales_projections_description2_one_m5'];
}


if(isset($_POST['sales_projections_description2_one_m6'])){     
 $sales_projections_description2_one_m6 = $_POST['sales_projections_description2_one_m6'];
}



if(isset($_POST['sales_projections_description2_one_m7'])){     
  $sales_projections_description2_one_m7 = $_POST['sales_projections_description2_one_m7'];
  }
  
  
if(isset($_POST['sales_projections_description2_one_m8'])){     
  $sales_projections_description2_one_m8 = $_POST['sales_projections_description2_one_m8'];
}
  
  
  
  
if(isset($_POST['sales_projections_description2_one_m9'])){     
$sales_projections_description2_one_m9 = $_POST['sales_projections_description2_one_m9'];
}
  
  
if(isset($_POST['sales_projections_description2_one_m10'])){     
$sales_projections_description2_one_m10 = $_POST['sales_projections_description2_one_m10'];
}
  
  
  if(isset($_POST['sales_projections_description2_one_m11'])){     
   $sales_projections_description2_one_m11 = $_POST['sales_projections_description2_one_m11'];
  }



if(isset($_POST['sales_projections_description2_one_m12'])){     
$sales_projections_description2_one_m12 = $_POST['sales_projections_description2_one_m12'];
}





if(isset($_POST['sales_projections_description2_one_totaly1'])){     
  $sales_projections_description2_one_totaly1 = $_POST['sales_projections_description2_one_totaly1'];
  }





if(isset($_POST['sales_projections_description2_one_unitprice_y1'])){      
$sales_projections_description2_one_unitprice_y1 = $_POST['sales_projections_description2_one_unitprice_y1']; 
}
  
 
if(isset($_POST['sales_projections_description2_one_unitprice_y2'])){      
$sales_projections_description2_one_unitprice_y2 = $_POST['sales_projections_description2_one_unitprice_y2']; 
}
      

if(isset($_POST['sales_projections_description2_one_unitprice_y3'])){      
$sales_projections_description2_one_unitprice_y3 = $_POST['sales_projections_description2_one_unitprice_y3']; 
}
      
     
if(isset($_POST['sales_projections_description2_one_unitprice_y4'])){      
$sales_projections_description2_one_unitprice_y4 = $_POST['sales_projections_description2_one_unitprice_y4']; 
 }
        
       



    
 if(isset($_POST['sales_projections_description2_one_totalsale_y1'])){      
  $sales_projections_description2_one_totalsale_y1 = $_POST['sales_projections_description2_one_totalsale_y1'];
   }
   
   
if(isset($_POST['sales_projections_description2_one_totalsale_y2'])){      
$sales_projections_description2_one_totalsale_y2 = $_POST['sales_projections_description2_one_totalsale_y2'];
}
     
if(isset($_POST['sales_projections_description2_one_totalsale_y3'])){      
$sales_projections_description2_one_totalsale_y3 = $_POST['sales_projections_description2_one_totalsale_y3'];
}
      
   
if(isset($_POST['sales_projections_description2_one_totalsale_y4'])){      
$sales_projections_description2_one_totalsale_y4 = $_POST['sales_projections_description2_one_totalsale_y4'];
}
  






if(isset($_POST['sales_projections_description3_one_m1'])){     
$sales_projections_description3_one_m1 = $_POST['sales_projections_description3_one_m1'];
}


if(isset($_POST['sales_projections_description3_one_m2'])){     
  $sales_projections_description3_one_m2 = $_POST['sales_projections_description3_one_m2'];
  }


if(isset($_POST['sales_projections_description3_one_m3'])){     
$sales_projections_description3_one_m3 = $_POST['sales_projections_description3_one_m3'];
}


if(isset($_POST['sales_projections_description3_one_m4'])){     
  $sales_projections_description3_one_m4 = $_POST['sales_projections_description3_one_m4'];
  }


if(isset($_POST['sales_projections_description3_one_m5'])){     
$sales_projections_description3_one_m5 = $_POST['sales_projections_description3_one_m5'];
}


if(isset($_POST['sales_projections_description3_one_m6'])){     
 $sales_projections_description3_one_m6 = $_POST['sales_projections_description3_one_m6'];
}



if(isset($_POST['sales_projections_description3_one_m7'])){     
  $sales_projections_description3_one_m7 = $_POST['sales_projections_description3_one_m7'];
  }
  
  
if(isset($_POST['sales_projections_description3_one_m8'])){     
  $sales_projections_description3_one_m8 = $_POST['sales_projections_description3_one_m8'];
}
  
  
  
  
if(isset($_POST['sales_projections_description3_one_m9'])){     
$sales_projections_description3_one_m9 = $_POST['sales_projections_description3_one_m9'];
}
  
  
if(isset($_POST['sales_projections_description3_one_m10'])){     
$sales_projections_description3_one_m10 = $_POST['sales_projections_description3_one_m10'];
}
  
  
  if(isset($_POST['sales_projections_description3_one_m11'])){     
   $sales_projections_description3_one_m11 = $_POST['sales_projections_description3_one_m11'];
  }



if(isset($_POST['sales_projections_description3_one_m12'])){     
$sales_projections_description3_one_m12 = $_POST['sales_projections_description3_one_m12'];
}





if(isset($_POST['sales_projections_description3_one_totaly1'])){     
  $sales_projections_description3_one_totaly1 = $_POST['sales_projections_description3_one_totaly1'];
  }





if(isset($_POST['sales_projections_description3_one_unitprice_y1'])){      
$sales_projections_description3_one_unitprice_y1 = $_POST['sales_projections_description3_one_unitprice_y1']; 
}
  
 
if(isset($_POST['sales_projections_description3_one_unitprice_y2'])){      
$sales_projections_description3_one_unitprice_y2 = $_POST['sales_projections_description3_one_unitprice_y2']; 
}
      

if(isset($_POST['sales_projections_description3_one_unitprice_y3'])){      
$sales_projections_description3_one_unitprice_y3 = $_POST['sales_projections_description3_one_unitprice_y3']; 
}
      
     
if(isset($_POST['sales_projections_description3_one_unitprice_y4'])){      
$sales_projections_description3_one_unitprice_y4 = $_POST['sales_projections_description3_one_unitprice_y4']; 
 }
        
       



    
 if(isset($_POST['sales_projections_description3_one_totalsale_y1'])){      
  $sales_projections_description3_one_totalsale_y1 = $_POST['sales_projections_description3_one_totalsale_y1'];
   }
   
   
if(isset($_POST['sales_projections_description3_one_totalsale_y2'])){      
$sales_projections_description3_one_totalsale_y2 = $_POST['sales_projections_description3_one_totalsale_y2'];
}
     
if(isset($_POST['sales_projections_description3_one_totalsale_y3'])){      
$sales_projections_description3_one_totalsale_y3 = $_POST['sales_projections_description3_one_totalsale_y3'];
}
      
   
if(isset($_POST['sales_projections_description3_one_totalsale_y4'])){      
$sales_projections_description3_one_totalsale_y4 = $_POST['sales_projections_description3_one_totalsale_y4'];
}
 





if(isset($_POST['sales_projections_description4_one_m1'])){     
$sales_projections_description4_one_m1 = $_POST['sales_projections_description4_one_m1'];
}


if(isset($_POST['sales_projections_description4_one_m2'])){     
  $sales_projections_description4_one_m2 = $_POST['sales_projections_description4_one_m2'];
  }


if(isset($_POST['sales_projections_description4_one_m3'])){     
$sales_projections_description4_one_m3 = $_POST['sales_projections_description4_one_m3'];
}


if(isset($_POST['sales_projections_description4_one_m4'])){     
  $sales_projections_description4_one_m4 = $_POST['sales_projections_description4_one_m4'];
  }


if(isset($_POST['sales_projections_description4_one_m5'])){     
$sales_projections_description4_one_m5 = $_POST['sales_projections_description4_one_m5'];
}


if(isset($_POST['sales_projections_description4_one_m6'])){     
 $sales_projections_description4_one_m6 = $_POST['sales_projections_description4_one_m6'];
}



if(isset($_POST['sales_projections_description4_one_m7'])){     
  $sales_projections_description4_one_m7 = $_POST['sales_projections_description4_one_m7'];
  }
  
  
if(isset($_POST['sales_projections_description4_one_m8'])){     
  $sales_projections_description4_one_m8 = $_POST['sales_projections_description4_one_m8'];
}
  
  
  
  
if(isset($_POST['sales_projections_description4_one_m9'])){     
$sales_projections_description4_one_m9 = $_POST['sales_projections_description4_one_m9'];
}
  
  
if(isset($_POST['sales_projections_description4_one_m10'])){     
$sales_projections_description4_one_m10 = $_POST['sales_projections_description4_one_m10'];
}
  
  
  if(isset($_POST['sales_projections_description4_one_m11'])){     
   $sales_projections_description4_one_m11 = $_POST['sales_projections_description4_one_m11'];
  }



if(isset($_POST['sales_projections_description4_one_m12'])){     
$sales_projections_description4_one_m12 = $_POST['sales_projections_description4_one_m12'];
}





if(isset($_POST['sales_projections_description4_one_totaly1'])){     
  $sales_projections_description4_one_totaly1 = $_POST['sales_projections_description4_one_totaly1'];
  }












if(isset($_POST['sales_projections_description4_one_unitprice_y1'])){      
$sales_projections_description4_one_unitprice_y1 = $_POST['sales_projections_description4_one_unitprice_y1']; 
}
     
       


if(isset($_POST['sales_projections_description4_one_unitprice_y2'])){      
  $sales_projections_description4_one_unitprice_y2 = $_POST['sales_projections_description4_one_unitprice_y2']; 
  }
       
    


  if(isset($_POST['sales_projections_description4_one_unitprice_y3'])){      
    $sales_projections_description4_one_unitprice_y3 = $_POST['sales_projections_description4_one_unitprice_y3']; 
    }
     


    if(isset($_POST['sales_projections_description4_one_unitprice_y4'])){      
      $sales_projections_description4_one_unitprice_y4 = $_POST['sales_projections_description4_one_unitprice_y4']; 
      }
       










    
 if(isset($_POST['sales_projections_description4_one_totalsale_y1'])){      
  $sales_projections_description4_one_totalsale_y1 = $_POST['sales_projections_description4_one_totalsale_y1'];
   }
   
   
if(isset($_POST['sales_projections_description4_one_totalsale_y2'])){      
$sales_projections_description4_one_totalsale_y2 = $_POST['sales_projections_description4_one_totalsale_y2'];
}
     
if(isset($_POST['sales_projections_description4_one_totalsale_y3'])){      
$sales_projections_description4_one_totalsale_y3 = $_POST['sales_projections_description4_one_totalsale_y3'];
}
      
   
if(isset($_POST['sales_projections_description4_one_totalsale_y4'])){      
$sales_projections_description4_one_totalsale_y4 = $_POST['sales_projections_description4_one_totalsale_y4'];
}
 




if(isset($_POST['sales_projections_description5_one_m1'])){     
$sales_projections_description5_one_m1 = $_POST['sales_projections_description5_one_m1'];
}


if(isset($_POST['sales_projections_description5_one_m2'])){     
  $sales_projections_description5_one_m2 = $_POST['sales_projections_description5_one_m2'];
  }


if(isset($_POST['sales_projections_description5_one_m3'])){     
$sales_projections_description5_one_m3 = $_POST['sales_projections_description5_one_m3'];
}


if(isset($_POST['sales_projections_description5_one_m4'])){     
  $sales_projections_description5_one_m4 = $_POST['sales_projections_description5_one_m4'];
  }


if(isset($_POST['sales_projections_description5_one_m5'])){     
$sales_projections_description5_one_m5 = $_POST['sales_projections_description5_one_m5'];
}


if(isset($_POST['sales_projections_description5_one_m6'])){     
 $sales_projections_description5_one_m6 = $_POST['sales_projections_description5_one_m6'];
}



if(isset($_POST['sales_projections_description5_one_m7'])){     
  $sales_projections_description5_one_m7 = $_POST['sales_projections_description5_one_m7'];
  }
  
  
if(isset($_POST['sales_projections_description5_one_m8'])){     
  $sales_projections_description5_one_m8 = $_POST['sales_projections_description5_one_m8'];
}
  
  
  
  
if(isset($_POST['sales_projections_description5_one_m9'])){     
$sales_projections_description5_one_m9 = $_POST['sales_projections_description5_one_m9'];
}
  
  
if(isset($_POST['sales_projections_description5_one_m10'])){     
$sales_projections_description5_one_m10 = $_POST['sales_projections_description5_one_m10'];
}
  
  
  if(isset($_POST['sales_projections_description5_one_m11'])){     
   $sales_projections_description5_one_m11 = $_POST['sales_projections_description5_one_m11'];
  }



if(isset($_POST['sales_projections_description5_one_m12'])){     
$sales_projections_description5_one_m12 = $_POST['sales_projections_description5_one_m12'];
}


if(isset($_POST['sales_projections_description5_one_totaly1'])){     
  $sales_projections_description5_one_totaly1 = $_POST['sales_projections_description5_one_totaly1'];
  }





    
 if(isset($_POST['sales_projections_description5_one_totalsale_y1'])){      
  $sales_projections_description5_one_totalsale_y1 = $_POST['sales_projections_description5_one_totalsale_y1'];
   }
   
   
if(isset($_POST['sales_projections_description5_one_totalsale_y2'])){      
$sales_projections_description5_one_totalsale_y2 = $_POST['sales_projections_description5_one_totalsale_y2'];
}
     
if(isset($_POST['sales_projections_description5_one_totalsale_y3'])){      
$sales_projections_description5_one_totalsale_y3 = $_POST['sales_projections_description5_one_totalsale_y3'];
}
      
   
if(isset($_POST['sales_projections_description5_one_totalsale_y4'])){      
$sales_projections_description5_one_totalsale_y4 = $_POST['sales_projections_description5_one_totalsale_y4'];
}


if(isset($_POST['sales_projections_description5_one_tsaleunitprice_y1'])){      
$sales_projections_description5_one_tsaleunitprice_y1 = $_POST['sales_projections_description5_one_tsaleunitprice_y1'];
}




if(isset($_POST['projections_description_operatingcosts_one'])){      
  $projections_description_operatingcosts_one = $_POST['projections_description_operatingcosts_one'];
}


if(isset($_POST['projections_description_operatingcosts_two'])){      
  $projections_description_operatingcosts_two = $_POST['projections_description_operatingcosts_two'];
}


if(isset($_POST['projections_description_operatingcosts_three'])){      
  $projections_description_operatingcosts_three = $_POST['projections_description_operatingcosts_three'];
}


if(isset($_POST['projections_description_operatingcosts_four'])){      
  $projections_description_operatingcosts_four = $_POST['projections_description_operatingcosts_four'];
}



if(isset($_POST['projections_description_operatingcosts_five'])){      
  $projections_description_operatingcosts_five = $_POST['projections_description_operatingcosts_five'];
}






if(isset($_POST['projections_description_operatingcosts_one_m1'])){      
  $projections_description_operatingcosts_one_m1 = $_POST['projections_description_operatingcosts_one_m1'];
}


if(isset($_POST['projections_description_operatingcosts_one_m2'])){      
$projections_description_operatingcosts_one_m2 = $_POST['projections_description_operatingcosts_one_m2'];
}


if(isset($_POST['projections_description_operatingcosts_one_m3'])){      
  $projections_description_operatingcosts_one_m3 = $_POST['projections_description_operatingcosts_one_m3'];
}


if(isset($_POST['projections_description_operatingcosts_one_m4'])){      
  $projections_description_operatingcosts_one_m4 = $_POST['projections_description_operatingcosts_one_m4'];
}


if(isset($_POST['projections_description_operatingcosts_one_m5'])){      
  $projections_description_operatingcosts_one_m5 = $_POST['projections_description_operatingcosts_one_m5'];
}


if(isset($_POST['projections_description_operatingcosts_one_m6'])){      
  $projections_description_operatingcosts_one_m6 = $_POST['projections_description_operatingcosts_one_m6'];
}


if(isset($_POST['projections_description_operatingcosts_one_m7'])){      
  $projections_description_operatingcosts_one_m7 = $_POST['projections_description_operatingcosts_one_m7'];
}


if(isset($_POST['projections_description_operatingcosts_one_m8'])){      
  $projections_description_operatingcosts_one_m8 = $_POST['projections_description_operatingcosts_one_m8'];
}


if(isset($_POST['projections_description_operatingcosts_one_m9'])){      
  $projections_description_operatingcosts_one_m9 = $_POST['projections_description_operatingcosts_one_m9'];
}


if(isset($_POST['projections_description_operatingcosts_one_m10'])){      
  $projections_description_operatingcosts_one_m10 = $_POST['projections_description_operatingcosts_one_m10'];
}


if(isset($_POST['projections_description_operatingcosts_one_m11'])){      
  $projections_description_operatingcosts_one_m11 = $_POST['projections_description_operatingcosts_one_m11'];
}


if(isset($_POST['projections_description_operatingcosts_one_m12'])){      
  $projections_description_operatingcosts_one_m12 = $_POST['projections_description_operatingcosts_one_m12'];
}







if(isset($_POST['projections_description_operatingcosts_one_y1'])){      
  $projections_description_operatingcosts_one_y1 = $_POST['projections_description_operatingcosts_one_y1'];
}


if(isset($_POST['projections_description_operatingcosts_one_y2'])){      
  $projections_description_operatingcosts_one_y2 = $_POST['projections_description_operatingcosts_one_y2'];
}


if(isset($_POST['projections_description_operatingcosts_one_y3'])){      
  $projections_description_operatingcosts_one_y3 = $_POST['projections_description_operatingcosts_one_y3'];
}


if(isset($_POST['projections_description_operatingcosts_one_y4'])){      
  $projections_description_operatingcosts_one_y4 = $_POST['projections_description_operatingcosts_one_y4'];
}








if(isset($_POST['projections_description_operatingcosts_two_m1'])){      
  $projections_description_operatingcosts_two_m1 = $_POST['projections_description_operatingcosts_two_m1'];
}


if(isset($_POST['projections_description_operatingcosts_two_m2'])){      
$projections_description_operatingcosts_two_m2 = $_POST['projections_description_operatingcosts_two_m2'];
}


if(isset($_POST['projections_description_operatingcosts_two_m3'])){      
  $projections_description_operatingcosts_two_m3 = $_POST['projections_description_operatingcosts_two_m3'];
}


if(isset($_POST['projections_description_operatingcosts_two_m4'])){      
  $projections_description_operatingcosts_two_m4 = $_POST['projections_description_operatingcosts_two_m4'];
}


if(isset($_POST['projections_description_operatingcosts_two_m5'])){      
  $projections_description_operatingcosts_two_m5 = $_POST['projections_description_operatingcosts_two_m5'];
}


if(isset($_POST['projections_description_operatingcosts_two_m6'])){      
  $projections_description_operatingcosts_two_m6 = $_POST['projections_description_operatingcosts_two_m6'];
}


if(isset($_POST['projections_description_operatingcosts_two_m7'])){      
  $projections_description_operatingcosts_two_m7 = $_POST['projections_description_operatingcosts_two_m7'];
}


if(isset($_POST['projections_description_operatingcosts_two_m8'])){      
  $projections_description_operatingcosts_two_m8 = $_POST['projections_description_operatingcosts_two_m8'];
}


if(isset($_POST['projections_description_operatingcosts_two_m9'])){      
  $projections_description_operatingcosts_two_m9 = $_POST['projections_description_operatingcosts_two_m9'];
}


if(isset($_POST['projections_description_operatingcosts_two_m10'])){      
  $projections_description_operatingcosts_two_m10 = $_POST['projections_description_operatingcosts_two_m10'];
}


if(isset($_POST['projections_description_operatingcosts_two_m11'])){      
  $projections_description_operatingcosts_two_m11 = $_POST['projections_description_operatingcosts_two_m11'];
}


if(isset($_POST['projections_description_operatingcosts_two_m12'])){      
  $projections_description_operatingcosts_two_m12 = $_POST['projections_description_operatingcosts_two_m12'];
}







if(isset($_POST['projections_description_operatingcosts_two_y1'])){      
  $projections_description_operatingcosts_two_y1 = $_POST['projections_description_operatingcosts_two_y1'];
}


if(isset($_POST['projections_description_operatingcosts_two_y2'])){      
  $projections_description_operatingcosts_two_y2 = $_POST['projections_description_operatingcosts_two_y2'];
}


if(isset($_POST['projections_description_operatingcosts_two_y3'])){      
  $projections_description_operatingcosts_two_y3 = $_POST['projections_description_operatingcosts_two_y3'];
}


if(isset($_POST['projections_description_operatingcosts_two_y4'])){      
  $projections_description_operatingcosts_two_y4 = $_POST['projections_description_operatingcosts_two_y4'];
}






if(isset($_POST['projections_description_operatingcosts_three_m1'])){      
  $projections_description_operatingcosts_three_m1 = $_POST['projections_description_operatingcosts_three_m1'];
}


if(isset($_POST['projections_description_operatingcosts_three_m2'])){      
$projections_description_operatingcosts_three_m2 = $_POST['projections_description_operatingcosts_three_m2'];
}


if(isset($_POST['projections_description_operatingcosts_three_m3'])){      
  $projections_description_operatingcosts_three_m3 = $_POST['projections_description_operatingcosts_three_m3'];
}


if(isset($_POST['projections_description_operatingcosts_three_m4'])){      
  $projections_description_operatingcosts_three_m4 = $_POST['projections_description_operatingcosts_three_m4'];
}


if(isset($_POST['projections_description_operatingcosts_three_m5'])){      
  $projections_description_operatingcosts_three_m5 = $_POST['projections_description_operatingcosts_three_m5'];
}


if(isset($_POST['projections_description_operatingcosts_three_m6'])){      
  $projections_description_operatingcosts_three_m6 = $_POST['projections_description_operatingcosts_three_m6'];
}


if(isset($_POST['projections_description_operatingcosts_three_m7'])){      
  $projections_description_operatingcosts_three_m7 = $_POST['projections_description_operatingcosts_three_m7'];
}


if(isset($_POST['projections_description_operatingcosts_three_m8'])){      
  $projections_description_operatingcosts_three_m8 = $_POST['projections_description_operatingcosts_three_m8'];
}


if(isset($_POST['projections_description_operatingcosts_three_m9'])){      
  $projections_description_operatingcosts_three_m9 = $_POST['projections_description_operatingcosts_three_m9'];
}


if(isset($_POST['projections_description_operatingcosts_three_m10'])){      
  $projections_description_operatingcosts_three_m10 = $_POST['projections_description_operatingcosts_three_m10'];
}


if(isset($_POST['projections_description_operatingcosts_three_m11'])){      
  $projections_description_operatingcosts_three_m11 = $_POST['projections_description_operatingcosts_three_m11'];
}


if(isset($_POST['projections_description_operatingcosts_three_m12'])){      
  $projections_description_operatingcosts_three_m12 = $_POST['projections_description_operatingcosts_three_m12'];
}







if(isset($_POST['projections_description_operatingcosts_three_y1'])){      
  $projections_description_operatingcosts_three_y1 = $_POST['projections_description_operatingcosts_three_y1'];
}


if(isset($_POST['projections_description_operatingcosts_three_y2'])){      
  $projections_description_operatingcosts_three_y2 = $_POST['projections_description_operatingcosts_three_y2'];
}


if(isset($_POST['projections_description_operatingcosts_three_y3'])){      
  $projections_description_operatingcosts_three_y3 = $_POST['projections_description_operatingcosts_three_y3'];
}


if(isset($_POST['projections_description_operatingcosts_three_y4'])){      
  $projections_description_operatingcosts_three_y4 = $_POST['projections_description_operatingcosts_three_y4'];
}







if(isset($_POST['projections_description_operatingcosts_four_m1'])){      
  $projections_description_operatingcosts_four_m1 = $_POST['projections_description_operatingcosts_four_m1'];
}


if(isset($_POST['projections_description_operatingcosts_four_m2'])){      
$projections_description_operatingcosts_four_m2 = $_POST['projections_description_operatingcosts_four_m2'];
}


if(isset($_POST['projections_description_operatingcosts_four_m3'])){      
  $projections_description_operatingcosts_four_m3 = $_POST['projections_description_operatingcosts_four_m3'];
}


if(isset($_POST['projections_description_operatingcosts_four_m4'])){      
  $projections_description_operatingcosts_four_m4 = $_POST['projections_description_operatingcosts_four_m4'];
}


if(isset($_POST['projections_description_operatingcosts_four_m5'])){      
  $projections_description_operatingcosts_four_m5 = $_POST['projections_description_operatingcosts_four_m5'];
}


if(isset($_POST['projections_description_operatingcosts_four_m6'])){      
  $projections_description_operatingcosts_four_m6 = $_POST['projections_description_operatingcosts_four_m6'];
}


if(isset($_POST['projections_description_operatingcosts_four_m7'])){      
  $projections_description_operatingcosts_four_m7 = $_POST['projections_description_operatingcosts_four_m7'];
}


if(isset($_POST['projections_description_operatingcosts_four_m8'])){      
  $projections_description_operatingcosts_four_m8 = $_POST['projections_description_operatingcosts_four_m8'];
}


if(isset($_POST['projections_description_operatingcosts_four_m9'])){      
  $projections_description_operatingcosts_four_m9 = $_POST['projections_description_operatingcosts_four_m9'];
}


if(isset($_POST['projections_description_operatingcosts_four_m10'])){      
  $projections_description_operatingcosts_four_m10 = $_POST['projections_description_operatingcosts_four_m10'];
}


if(isset($_POST['projections_description_operatingcosts_four_m11'])){      
  $projections_description_operatingcosts_four_m11 = $_POST['projections_description_operatingcosts_four_m11'];
}


if(isset($_POST['projections_description_operatingcosts_four_m12'])){      
  $projections_description_operatingcosts_four_m12 = $_POST['projections_description_operatingcosts_four_m12'];
}







if(isset($_POST['projections_description_operatingcosts_four_y1'])){      
  $projections_description_operatingcosts_four_y1 = $_POST['projections_description_operatingcosts_four_y1'];
}


if(isset($_POST['projections_description_operatingcosts_four_y2'])){      
  $projections_description_operatingcosts_four_y2 = $_POST['projections_description_operatingcosts_four_y2'];
}


if(isset($_POST['projections_description_operatingcosts_four_y3'])){      
  $projections_description_operatingcosts_four_y3 = $_POST['projections_description_operatingcosts_four_y3'];
}


if(isset($_POST['projections_description_operatingcosts_four_y4'])){      
  $projections_description_operatingcosts_four_y4 = $_POST['projections_description_operatingcosts_four_y4'];
}









if(isset($_POST['projections_description_operatingcosts_five_m1'])){      
  $projections_description_operatingcosts_five_m1 = $_POST['projections_description_operatingcosts_five_m1'];
}


if(isset($_POST['projections_description_operatingcosts_five_m2'])){      
$projections_description_operatingcosts_five_m2 = $_POST['projections_description_operatingcosts_five_m2'];
}


if(isset($_POST['projections_description_operatingcosts_five_m3'])){      
  $projections_description_operatingcosts_five_m3 = $_POST['projections_description_operatingcosts_five_m3'];
}


if(isset($_POST['projections_description_operatingcosts_five_m4'])){      
  $projections_description_operatingcosts_five_m4 = $_POST['projections_description_operatingcosts_five_m4'];
}


if(isset($_POST['projections_description_operatingcosts_five_m5'])){      
  $projections_description_operatingcosts_five_m5 = $_POST['projections_description_operatingcosts_five_m5'];
}


if(isset($_POST['projections_description_operatingcosts_five_m6'])){      
  $projections_description_operatingcosts_five_m6 = $_POST['projections_description_operatingcosts_five_m6'];
}


if(isset($_POST['projections_description_operatingcosts_five_m7'])){      
  $projections_description_operatingcosts_five_m7 = $_POST['projections_description_operatingcosts_five_m7'];
}


if(isset($_POST['projections_description_operatingcosts_five_m8'])){      
  $projections_description_operatingcosts_five_m8 = $_POST['projections_description_operatingcosts_five_m8'];
}


if(isset($_POST['projections_description_operatingcosts_five_m9'])){      
  $projections_description_operatingcosts_five_m9 = $_POST['projections_description_operatingcosts_five_m9'];
}


if(isset($_POST['projections_description_operatingcosts_five_m10'])){      
  $projections_description_operatingcosts_five_m10 = $_POST['projections_description_operatingcosts_five_m10'];
}


if(isset($_POST['projections_description_operatingcosts_five_m11'])){      
  $projections_description_operatingcosts_five_m11 = $_POST['projections_description_operatingcosts_five_m11'];
}


if(isset($_POST['projections_description_operatingcosts_five_m12'])){      
  $projections_description_operatingcosts_five_m12 = $_POST['projections_description_operatingcosts_five_m12'];
}



if(isset($_POST['projections_description_operatingcosts_totalsale'])){      
  $projections_description_operatingcosts_totalsale = $_POST['projections_description_operatingcosts_totalsale'];
}


if(isset($_POST['what_is_the_monthly_revenue'])){      
  $what_is_the_monthly_revenue = $_POST['what_is_the_monthly_revenue'];
}


if(isset($_POST['what_is_the_total_operation_cost'])){      
  $what_is_the_total_operation_cost = $_POST['what_is_the_total_operation_cost'];
}



if(isset($_POST['what_is_the_total_current_operation_cost'])){      
  $what_is_the_total_current_operation_cost = $_POST['what_is_the_total_current_operation_cost'];
}



if(isset($_POST['what_is_the_total_investment_cost'])){      
  $what_is_the_total_investment_cost = $_POST['what_is_the_total_investment_cost'];
}

if(isset($_POST['brakedown_of_investments1'])){      
$brakedown_of_investments1 = $_POST['brakedown_of_investments1'];
}





if(isset($_POST['funded'])){      
  $funded = $_POST['funded'];
 }
  

 if(isset($_POST['was_not_funded'])){      
  $was_not_funded = $_POST['was_not_funded'];
 }


 if(isset($_POST['finacialdata_If_Yes_Give_details'])){      
$finacialdata_If_Yes_Give_details  = $_POST['finacialdata_If_Yes_Give_details'];
 }


 if(isset($_POST['status_ofLoan_outstandingre_paid'])){      
  $status_ofLoan_outstandingre_paid = $_POST['status_ofLoan_outstandingre_paid'];
}



if(isset($_POST['finacialdata_name_ofbusiness'])){        
$finacialdata_name_ofbusiness = $_POST['finacialdata_name_ofbusiness'];
}
  


if(isset($_POST['proposed_management_team_one_fullnames'])){        
  $proposed_management_team_one_fullnames = $_POST['proposed_management_team_one_fullnames']; 
  }
    
  

if(isset($_POST['proposed_management_team_two_fullnames'])){        
$proposed_management_team_two_fullnames = $_POST['proposed_management_team_two_fullnames'];
}


if(isset($_POST['proposed_management_team_three_fullnames'])){        
$proposed_management_team_three_fullnames = $_POST['proposed_management_team_three_fullnames'];
}


if(isset($_POST['management_team_one_management_positions'])){        
$management_team_one_management_positions = $_POST['management_team_one_management_positions'];
}


if(isset($_POST['management_team_two_management_positions'])){        
  $management_team_two_management_positions = $_POST['management_team_two_management_positions'];
}
  


if(isset($_POST['management_team_three_management_positions'])){        
  $management_team_three_management_positions = $_POST['management_team_three_management_positions'];
}



if(isset($_POST['management_team_one_management_qualifications'])){        
  $management_team_one_management_qualifications = $_POST['management_team_one_management_qualifications'];
}


if(isset($_POST['management_team_two_management_qualifications'])){        
$management_team_two_management_qualifications = $_POST['management_team_two_management_qualifications'];
}


if(isset($_POST['management_team_three_management_qualifications'])){        
$management_team_three_management_qualifications = $_POST['management_team_three_management_qualifications'];
}






if(isset($_POST['Business_benefit_customers'])){        
$Business_benefit_customers = $_POST['Business_benefit_customers'];
}


if(isset($_POST['Business_benefit_suppliers'])){        

$Business_benefit_suppliers = $_POST['Business_benefit_suppliers'];
}



if(isset($_POST['Before_cdf_funding_women'])){        
$Before_cdf_funding_women = $_POST['Before_cdf_funding_women'];
}


if(isset($_POST['Before_cdf_funding_men'])){        
  $Before_cdf_funding_men = $_POST['Before_cdf_funding_men'];
}


if(isset($_POST['Before_cdf_funding_youth'])){        
 $Before_cdf_funding_youth = $_POST['Before_cdf_funding_youth'];
}



if(isset($_POST['Before_cdf_funding_physically_challenged'])){        
$Before_cdf_funding_physically_challenged = $_POST['Before_cdf_funding_physically_challenged'];
}



if(isset($_POST['before_cdf_funding_all_total'])){        
  $before_cdf_funding_all_total = $_POST['before_cdf_funding_all_total'];
}


if(isset($_POST['after_cdf_funding_women'])){        
  $after_cdf_funding_women = $_POST['after_cdf_funding_women'];
}




if(isset($_POST['after_cdf_funding_men'])){        
  $after_cdf_funding_men = $_POST['after_cdf_funding_men'];
}



if(isset($_POST['after_cdf_funding_youth'])){        
$after_cdf_funding_youth = $_POST['after_cdf_funding_youth'];
}




if(isset($_POST['after_cdf_funding_physically_challenged'])){        
$after_cdf_funding_physically_challenged = $_POST['after_cdf_funding_physically_challenged'];
}



if(isset($_POST['after_cdf_funding_all_total'])){        
$after_cdf_funding_all_total = $_POST['after_cdf_funding_all_total'];
}
  


if(isset($_POST['checkbox12_months'])){        
$checkbox12_months = $_POST['checkbox12_months'];
}


if(isset($_POST['checkbox18_months'])){        
$checkbox18_months= $_POST['checkbox18_months']; 
}


if(isset($_POST['checkbox24_months'])){        
$checkbox24_months = $_POST['checkbox24_months']; 
}


if(isset($_POST['checkbox36_months'])){        
$checkbox36_months = $_POST['checkbox36_months']; 
}


if(isset($_POST['checkbox48_months'])){        
$checkbox48_months = $_POST['checkbox48_months']; 
}








if(isset($_POST['checkbox1_3months'])){        
  $checkbox1_3months = $_POST['checkbox1_3months'];  
  }

if(isset($_POST['checkbox3_6months'])){        
$checkbox3_6months = $_POST['checkbox3_6months'];  
}


if(isset($_POST['checkbox6_9months'])){        
$checkbox6_9months = $_POST['checkbox6_9months'];
}



if(isset($_POST['checkbox_morethan9'])){        
  $checkbox_morethan9 = $_POST['checkbox_morethan9'];
  }
  







if(isset($_POST['bank_name'])){        
$bank_name = $_POST['bank_name']; 
}


if(isset($_POST['branch'])){        
$branch = $_POST['branch']; 
}


if(isset($_POST['soft_code'])){        
$soft_code = $_POST['soft_code']; 
}

  
  
if(isset($_POST['swift_code'])){        
$swift_code = $_POST['swift_code'];
}

if(isset($_POST['account_number'])){        
$account_number = $_POST['account_number']; 
}

if(isset($_POST['tipn_user'])){        
$tipn_user = $_POST['tipn_user']; 
}

if(isset($_POST['mobil_money_name_and_number'])){        
$mobil_money_name_and_number = $_POST['mobil_money_name_and_number'];
}

if(isset($_POST['club_secretary_name'])){        
$club_secretary_name = $_POST['club_secretary_name'];
}

if(isset($_POST['signature_image'])){        
$signature_image = $_POST['signature_image'];
}

if(isset($_POST['date_of_signing1'])){        
  $date_of_signing1 = $_POST['date_of_signing1']; 
}

if(isset($_POST['head_of_business_signature_image'])){        
$head_of_business_signature_image = $_POST['head_of_business_signature_image'];  
}

if(isset($_POST['date_of_signing2'])){        
$date_of_signing2 = $_POST['date_of_signing2'];
}


if(isset($_POST['created_on'])){        
  $created_on = $_POST['created_on'];
  }
  

  
if(isset($_POST['status'])){        
  $status = $_POST['status'];
  }
  


$sql_submitions = "UPDATE `user_loan_registration` SET `project_identification_number` = '$project_identification_number', `yezoneward_code_number`= '$yezoneward_code_number', `wezone_ward_code_number`= '$wezone_ward_code_number',`cezoneward_code_number`= '$cezoneward_code_number',`name_of_business_organization_company_group_cooperative_club` = '$name_of_business_organization_company_group_cooperative_club',`legal_form_Of_applicant_limited_company_sme_group_cooperative` = '$legal_form_Of_applicant_limited_company_sme_group_cooperative',`date_Of_company_group_cooperative_club_registration` =  '$date_Of_company_group_cooperative_club_registration', `tipn`= '$tipn',`shareholder_name_one`='$shareholder_name_one',`shareholder_name_two`='$shareholder_name_two', `shareholder_name_three`='$shareholder_name_three', `shareholder_name_four`='$shareholder_name_four',`shareholder_name_five` ='$shareholder_name_five',`shareholder_name_six`='$shareholder_name_six',`shareholder_name_seven`='$shareholder_name_seven',`shareholder_name_eight`='$shareholder_name_eight',`shareholder_name_nine`='$shareholder_name_nine', `shareholder_name_ten`='$shareholder_name_ten',`shareholder_name_eleven`='$shareholder_name_eleven',`nrc_name_one`= '$nrc_name_one', `nrc_name_two`='$nrc_name_two', `nrc_name_three`='$nrc_name_three', `nrc_name_four`='$nrc_name_four', `nrc_name_five`='$nrc_name_five', `nrc_name_six`='$nrc_name_six', `nrc_name_seven`='$nrc_name_seven', `nrc_name_eight`='$nrc_name_eight', `nrc_name_nine`='$nrc_name_nine',`nrc_name_ten`='$nrc_name_ten', `nrc_name_eleven`='$nrc_name_eleven', `shareholding_percent_name_one`='$shareholding_percent_name_one',`shareholding_percent_name_two`='$shareholding_percent_name_two',`shareholding_percent_name_three`='$shareholding_percent_name_three',`shareholding_percent_name_four`= '$shareholding_percent_name_four',`shareholding_percent_name_five`='$shareholding_percent_name_five',   `shareholding_percent_name_six`='$shareholding_percent_name_six',`shareholding_percent_name_seven` = '$shareholding_percent_name_seven',`shareholding_percent_name_eight`='$shareholding_percent_name_eight', `shareholding_percent_name_nine`= '$shareholding_percent_name_nine',`shareholding_percent_name_ten`= '$shareholding_percent_name_ten',`shareholding_percent_name_eleven` = '$shareholding_percent_name_eleven',`position_in_business_name_one`= '$position_in_business_name_one',`position_in_business_name_two`='$position_in_business_name_two',`position_in_business_name_three`='$position_in_business_name_three',   `position_in_business_name_four`='$position_in_business_name_four',   `position_in_business_name_five`='$position_in_business_name_five',   `position_in_business_name_six`='=$position_in_business_name_six',   `position_in_business_name_seven`='$position_in_business_name_seven',   `position_in_business_name_eight`='$position_in_business_name_eight',   `position_in_business_name_nine`='$position_in_business_name_nine',  `position_in_business_name_ten`='$position_in_business_name_ten', `position_in_business_name_eleven`='$position_in_business_name_eleven',`yes1`='$yes1', `yes2`='$yes2', `yes3`='$yes3', `yes4`='$yes4',`yes5`='$yes5',`yes6`='$yes6',`yes7`='$yes7',`yes8`='$yes8',`yes9`='$yes9',`yes10`='$yes10',`yes11`='$yes11',   `no1`='$no1',`no2`='$no2',`no3`='$no3',`no4`='$no4',`no5`='$no5',`no6`='$no6',`no7`='$no7',`no8`='$no8',`no9`='$no9', `no10`='$no10',`no11`='$no11',`authorized_representertive_name_of_contact_person` = '$authorized_representertive_name_of_contact_person',`authorized_representertive_position_in_business` = '$authorized_representertive_position_in_business', `authorized_representertive_contact_number_cell`=
'$authorized_representertive_contact_number_cell', `authorized_representertive_contact_number_telephone` =
'$authorized_representertive_contact_number_telephone',`authorized_representertive_email`= '$authorized_representertive_email',`project_location_name_of_district`= '$project_location_name_of_district',`project_location_name_of_constituency`= '$project_location_name_of_constituency',`project_location_name_of_ward`= '$project_location_name_of_ward', `project_location_name_of_zone`= '$project_location_name_of_zone',`project_location_name_physical_address`= '$project_location_name_physical_address', `loan_application_amount_in_Figures` = '$loan_application_amount_in_Figures', `loan_application_amount_in_words` = '$loan_application_amount_in_words',`description_of_business`='$description_of_business', `indicate_weather_company_is_start_up`='$indicate_weather_company_is_start_up', `purpose_of_the_loan`='$purpose_of_the_loan', `repayment_period`='$repayment_period', `source_of_funds_of_repayment_loan`='$source_of_funds_of_repayment_loan',`collaterial_if_any`='$collaterial_if_any', `financials_description_cost_one`='$financials_description_cost_one',   `financials_description_cost_two`='$financials_description_cost_two', `financials_description_cost_three`='$financials_description_cost_three', `financials_description_cost_four`='$financials_description_cost_four', `financials_description_cost_five`='$financials_description_cost_five', `financials_description_cost_six`='$financials_description_cost_six', `financials_description_cost_seven`='$financials_description_cost_seven', `financials_description_cost_eight`='$financials_description_cost_eight', `financials_description_cost_nine`='$financials_description_cost_nine', `financials_description_cost_ten`='$financials_description_cost_ten', `financials_description_cost_eleven`='$financials_description_cost_eleven', `financials_description_cost_twelve`='$financials_description_cost_twelve', `financials_description_cost_thirteen`='$financials_description_cost_thirteen', `financials_description_cost_fourteen`='$financials_description_cost_fourteen',`financials_description_quality_one`=  '$financials_description_quality_one',`financials_description_quality_two`='$financials_description_quality_two', `financials_description_quality_three` = '$financials_description_quality_three', `financials_description_quality_four`= '$financials_description_quality_four',`financials_description_quality_five`='$financials_description_quality_five', `financials_description_quality_six` = '$financials_description_quality_six', `financials_description_quality_seven`= '$financials_description_quality_seven', `financials_description_quality_eight` ='$financials_description_quality_eight', `financials_description_quality_nine` ='$financials_description_quality_nine',`financials_description_quality_ten` = '$financials_description_quality_ten', `financials_description_quality_eleven` ='$financials_description_quality_eleven', `financials_description_quality_twelve` = '$financials_description_quality_twelve', `financials_description_quality_thirteen`= '$financials_description_quality_thirteen', `financials_description_quality_fourteen`='$financials_description_quality_fourteen',  `financials_description_unitcost_one`= '$financials_description_unitcost_one',
`financials_description_unitcost_two`='$financials_description_unitcost_two',
`financials_description_unitcost_three`= '$financials_description_unitcost_three',
`financials_description_unitcost_four`='$financials_description_unitcost_four',
`financials_description_unitcost_five`='$financials_description_unitcost_five',
`financials_description_unitcost_six`= '$financials_description_unitcost_six',
`financials_description_unitcost_seven`='$financials_description_unitcost_seven',
`financials_description_unitcost_eight`= '$financials_description_unitcost_eight',
`financials_description_unitcost_nine`='$financials_description_unitcost_nine',
`financials_description_unitcost_ten`='$financials_description_unitcost_ten',
`financials_description_unitcost_eleven`='$financials_description_unitcost_eleven',
`financials_description_unitcost_twelve`='$financials_description_unitcost_twelve',`financials_description_unitcost_thirteen`='$financials_description_unitcost_thirteen',
`financials_description_unitcost_fourteen`= '$financials_description_unitcost_fourteen',

`financials_description_totalcost_one`= '$financials_description_totalcost_one', 
`financials_description_totalcost_two`='$financials_description_totalcost_two', 
`financials_description_totalcost_three`='$financials_description_totalcost_three', 
`financials_description_totalcost_four`='$financials_description_totalcost_four', 
`financials_description_totalcost_five`='$financials_description_totalcost_five', 
`financials_description_totalcost_six`='$financials_description_totalcost_six', 
`financials_description_totalcost_seven`='$financials_description_totalcost_seven', 
`financials_description_totalcost_eight`='$financials_description_totalcost_eight', 
`financials_description_totalcost_nine`='$financials_description_totalcost_nine', 
`financials_description_totalcost_ten`='$financials_description_totalcost_ten', 
`financials_description_totalcost_eleven`='$financials_description_totalcost_eleven',
`financials_description_totalcost_twelve`='$financials_description_totalcost_twelve', 
`financials_description_totalcost_thirteen`='$financials_description_totalcost_thirteen', 
`financials_description_totalcost_fourteen`='$financials_description_totalcost_fourteen', 
`financials_description_totalcost_final`='$financials_description_totalcost_final',  

   `projected_level_of_production_description_of_product_one`='$projected_level_of_production_description_of_product_one', `projected_level_of_production_description_of_product_two`='$projected_level_of_production_description_of_product_two', `projected_level_of_production_description_of_product_one_month1`='$projected_level_of_production_description_of_product_one_month1',`projected_level_of_production_description_of_product_one_month2`='$projected_level_of_production_description_of_product_one_month2', 
   `projected_level_of_production_description_of_product_one_month3`='$projected_level_of_production_description_of_product_one_month3',`projected_level_of_production_description_of_product_one_month4`='$projected_level_of_production_description_of_product_one_month4', `projected_level_of_production_description_of_product_one_month5`='$projected_level_of_production_description_of_product_one_month5', `projected_level_of_production_description_of_product_one_month6`='$projected_level_of_production_description_of_product_one_month6', `projected_level_of_production_description_of_product_one_month7`='$projected_level_of_production_description_of_product_one_month7', `projected_level_of_production_description_of_product_one_month8`='$projected_level_of_production_description_of_product_one_month8', `projected_level_of_production_description_of_product_one_month9`='$projected_level_of_production_description_of_product_one_month9', `projected_level_of_production_description_of_product_one_month10`='$projected_level_of_production_description_of_product_one_month10', `projected_level_of_production_description_of_product_one_month11`='$projected_level_of_production_description_of_product_one_month11', `projected_level_of_production_description_of_product_one_month12`='$projected_level_of_production_description_of_product_one_month12',    
`projected_level_of_production_description_of_product_one_year2`='$projected_level_of_production_description_of_product_one_year2', 
`projected_level_of_production_description_of_product_one_year3`='$projected_level_of_production_description_of_product_one_year3', 
`projected_level_of_production_description_of_product_one_year4`='$projected_level_of_production_description_of_product_one_year4',  
`projected_level_of_production_description_of_product_two_month1`='$projected_level_of_production_description_of_product_two_month1', 
`projected_level_of_production_description_of_product_two_month2`='$projected_level_of_production_description_of_product_two_month2', 
`projected_level_of_production_description_of_product_two_month3`='$projected_level_of_production_description_of_product_two_month3', 
`projected_level_of_production_description_of_product_two_month4`='$projected_level_of_production_description_of_product_two_month4', 
`projected_level_of_production_description_of_product_two_month5`='$projected_level_of_production_description_of_product_two_month5', 
`projected_level_of_production_description_of_product_two_month6`='$projected_level_of_production_description_of_product_two_month6', 
`projected_level_of_production_description_of_product_two_month7`='$projected_level_of_production_description_of_product_two_month7', 
`projected_level_of_production_description_of_product_two_month8`='$projected_level_of_production_description_of_product_two_month8', 
`projected_level_of_production_description_of_product_two_month9`='$projected_level_of_production_description_of_product_two_month9', 
`projected_level_of_production_description_of_product_two_month10`='$projected_level_of_production_description_of_product_two_month10', 
`projected_level_of_production_description_of_product_two_month11`='$projected_level_of_production_description_of_product_two_month11', 
`projected_level_of_production_description_of_product_two_month12`='$projected_level_of_production_description_of_product_two_month12', 
`projected_level_of_production_description_of_product_two_year1`='$projected_level_of_production_description_of_product_two_year1',
`projected_level_of_production_description_of_product_two_year2`='$projected_level_of_production_description_of_product_two_year2',
`projected_level_of_production_description_of_product_two_year3`='$projected_level_of_production_description_of_product_two_year3',
`sales_projections_description_one`='$sales_projections_description_one',
`sales_projections_description_two`='$sales_projections_description_two', `sales_projections_description_three`='$sales_projections_description_three', `sales_projections_description_four`='$sales_projections_description_four', `sales_projections_description_five`='$sales_projections_description_five', `sales_projections_description_six`='$sales_projections_description_six', 
`sales_projections_description_one_m1`='$sales_projections_description_one_m1', `sales_projections_description_one_m2`='$sales_projections_description_one_m2', `sales_projections_description_one_m3`='$sales_projections_description_one_m3', `sales_projections_description_one_m4`='$sales_projections_description_one_m4', `sales_projections_description_one_m5`='$sales_projections_description_one_m5', `sales_projections_description_one_m6`='$sales_projections_description_one_m6',`sales_projections_description_one_m7`='$sales_projections_description_one_m7', `sales_projections_description_one_m8`='$sales_projections_description_one_m8', `sales_projections_description_one_m9`='$sales_projections_description_one_m9', `sales_projections_description_one_m10`='$sales_projections_description_one_m10', `sales_projections_description_one_m11`='$sales_projections_description_one_m11', `sales_projections_description_one_m12`='$sales_projections_description_one_m12',  `sales_projections_description_one_totaly1`='$sales_projections_description_one_totaly1', 
`sales_projections_description_one_unitprice_y1`='$sales_projections_description_one_unitprice_y1',`sales_projections_description_one_unitprice_y2`='$sales_projections_description_one_unitprice_y2',`sales_projections_description_one_unitprice_y3`='$sales_projections_description_one_unitprice_y3',`sales_projections_description_one_unitprice_y4`='$sales_projections_description_one_unitprice_y4',`sales_projections_description_one_totalsale_y1`='$sales_projections_description_one_totalsale_y1',`sales_projections_description_one_totalsale_y2`='$sales_projections_description_one_totalsale_y2',`sales_projections_description_one_totalsale_y3`='$sales_projections_description_one_totalsale_y3',`sales_projections_description_one_totalsale_y4`='$sales_projections_description_one_totalsale_y4', 

`sales_projections_description2_one_m1`='$sales_projections_description2_one_m1',`sales_projections_description2_one_m2`='$sales_projections_description2_one_m2',`sales_projections_description2_one_m3`='$sales_projections_description2_one_m3',`sales_projections_description2_one_m4`='$sales_projections_description2_one_m4',`sales_projections_description2_one_m5`='$sales_projections_description2_one_m5',`sales_projections_description2_one_m6`='$sales_projections_description2_one_m6',`sales_projections_description2_one_m7`='$sales_projections_description2_one_m7',`sales_projections_description2_one_m8`='$sales_projections_description2_one_m8',`sales_projections_description2_one_m9`='$sales_projections_description2_one_m9',`sales_projections_description2_one_m10`='$sales_projections_description2_one_m10',`sales_projections_description2_one_m11`='$sales_projections_description2_one_m11',`sales_projections_description2_one_m12`='$sales_projections_description2_one_m12',`sales_projections_description2_one_totaly1`='$sales_projections_description2_one_totaly1',
`sales_projections_description2_one_unitprice_y1`='$sales_projections_description2_one_unitprice_y1',`sales_projections_description2_one_unitprice_y2`='$sales_projections_description2_one_unitprice_y2',`sales_projections_description2_one_unitprice_y3`='$sales_projections_description2_one_unitprice_y3',`sales_projections_description2_one_unitprice_y4`='$sales_projections_description2_one_unitprice_y4',`sales_projections_description2_one_totalsale_y1`='$sales_projections_description2_one_totalsale_y1',`sales_projections_description2_one_totalsale_y2`='$sales_projections_description2_one_totalsale_y2',`sales_projections_description2_one_totalsale_y3`='$sales_projections_description2_one_totalsale_y3',`sales_projections_description2_one_totalsale_y4`='$sales_projections_description2_one_totalsale_y4', 

`sales_projections_description3_one_m1`='$sales_projections_description3_one_m1', `sales_projections_description3_one_m2`='$sales_projections_description3_one_m2',`sales_projections_description3_one_m3`='$sales_projections_description3_one_m3',`sales_projections_description3_one_m4`='$sales_projections_description3_one_m4',`sales_projections_description3_one_m5`='$sales_projections_description3_one_m5',`sales_projections_description3_one_m6`='$sales_projections_description3_one_m6',`sales_projections_description3_one_m7`='$sales_projections_description3_one_m7',`sales_projections_description3_one_m8`='$sales_projections_description3_one_m8',`sales_projections_description3_one_m9`='$sales_projections_description3_one_m9',`sales_projections_description3_one_m10`='$sales_projections_description3_one_m10',`sales_projections_description3_one_m11`='$sales_projections_description3_one_m11',`sales_projections_description3_one_m12`='$sales_projections_description3_one_m12',`sales_projections_description3_one_totaly1`='$sales_projections_description3_one_totaly1',`sales_projections_description3_one_unitprice_y1`='$sales_projections_description3_one_unitprice_y1', `sales_projections_description3_one_unitprice_y2`='$sales_projections_description3_one_unitprice_y2',`sales_projections_description3_one_unitprice_y3`='$sales_projections_description3_one_unitprice_y3',`sales_projections_description3_one_unitprice_y4`='$sales_projections_description3_one_unitprice_y4',`sales_projections_description3_one_totalsale_y1`='$sales_projections_description3_one_totalsale_y1', `sales_projections_description3_one_totalsale_y2`='$sales_projections_description3_one_totalsale_y2',`sales_projections_description3_one_totalsale_y3`='$sales_projections_description3_one_totalsale_y3',`sales_projections_description3_one_totalsale_y4`='$sales_projections_description3_one_totalsale_y4',

`sales_projections_description4_one_m1`='$sales_projections_description4_one_m1', `sales_projections_description4_one_m2`='$sales_projections_description4_one_m2',`sales_projections_description4_one_m3`='$sales_projections_description4_one_m3',`sales_projections_description4_one_m4`='$sales_projections_description4_one_m4',`sales_projections_description4_one_m5`='$sales_projections_description4_one_m5',`sales_projections_description4_one_m6`='$sales_projections_description4_one_m6',`sales_projections_description4_one_m7`='$sales_projections_description4_one_m7',`sales_projections_description4_one_m8`='$sales_projections_description4_one_m8',`sales_projections_description4_one_m9`='$sales_projections_description4_one_m9',`sales_projections_description4_one_m10`='$sales_projections_description4_one_m10',`sales_projections_description4_one_m11`='$sales_projections_description4_one_m11',`sales_projections_description4_one_m12`='$sales_projections_description4_one_m12',`sales_projections_description4_one_totaly1`='$sales_projections_description4_one_totaly1',`sales_projections_description4_one_unitprice_y1`='$sales_projections_description4_one_unitprice_y1', `sales_projections_description4_one_unitprice_y2`='$sales_projections_description4_one_unitprice_y2',`sales_projections_description4_one_unitprice_y3`='$sales_projections_description4_one_unitprice_y3',`sales_projections_description4_one_unitprice_y4`='$sales_projections_description4_one_unitprice_y4',`sales_projections_description4_one_totalsale_y1`='$sales_projections_description4_one_totalsale_y1', `sales_projections_description4_one_totalsale_y2`='$sales_projections_description4_one_totalsale_y2',`sales_projections_description4_one_totalsale_y3`='$sales_projections_description4_one_totalsale_y3',`sales_projections_description4_one_totalsale_y4`='$sales_projections_description4_one_totalsale_y4',

`sales_projections_description5_one_m1`='$sales_projections_description5_one_m1', `sales_projections_description5_one_m2`='$sales_projections_description5_one_m2',`sales_projections_description5_one_m3`='$sales_projections_description5_one_m3',`sales_projections_description5_one_m4`='$sales_projections_description5_one_m4',`sales_projections_description5_one_m5`='$sales_projections_description5_one_m5',`sales_projections_description5_one_m6`='$sales_projections_description5_one_m6',`sales_projections_description5_one_m7`='$sales_projections_description5_one_m7',`sales_projections_description5_one_m8`='$sales_projections_description5_one_m8',`sales_projections_description5_one_m9`='$sales_projections_description5_one_m9',`sales_projections_description5_one_m10`='$sales_projections_description5_one_m10',`sales_projections_description5_one_m11`='$sales_projections_description5_one_m11',`sales_projections_description5_one_m12`='$sales_projections_description5_one_m12',`sales_projections_description5_one_totaly1`='$sales_projections_description5_one_totaly1', `sales_projections_description5_one_totalsale_y1`='$sales_projections_description5_one_totalsale_y1', `sales_projections_description5_one_totalsale_y2`='$sales_projections_description5_one_totalsale_y2',`sales_projections_description5_one_totalsale_y3`='$sales_projections_description5_one_totalsale_y3',`sales_projections_description5_one_totalsale_y4`='$sales_projections_description5_one_totalsale_y4',
`sales_projections_description5_one_tsaleunitprice_y1`='$sales_projections_description5_one_tsaleunitprice_y1',


`projections_description_operatingcosts_one`='$projections_description_operatingcosts_one',
`projections_description_operatingcosts_two`='$projections_description_operatingcosts_two',
`projections_description_operatingcosts_three`='$projections_description_operatingcosts_three',
`projections_description_operatingcosts_four`='$projections_description_operatingcosts_four',
`projections_description_operatingcosts_five`='$projections_description_operatingcosts_five',
`projections_description_operatingcosts_one_m1`='$projections_description_operatingcosts_one_m1',
`projections_description_operatingcosts_one_m2`='$projections_description_operatingcosts_one_m2',
`projections_description_operatingcosts_one_m3`='$projections_description_operatingcosts_one_m3',
`projections_description_operatingcosts_one_m4`='$projections_description_operatingcosts_one_m4',
`projections_description_operatingcosts_one_m5`='$projections_description_operatingcosts_one_m5',
`projections_description_operatingcosts_one_m6`='$projections_description_operatingcosts_one_m6',
`projections_description_operatingcosts_one_m7`='$projections_description_operatingcosts_one_m7',
`projections_description_operatingcosts_one_m8`='$projections_description_operatingcosts_one_m8',
`projections_description_operatingcosts_one_m9`='$projections_description_operatingcosts_one_m9',
`projections_description_operatingcosts_one_m10`='$projections_description_operatingcosts_one_m10',
`projections_description_operatingcosts_one_m11`='$projections_description_operatingcosts_one_m11',
`projections_description_operatingcosts_one_m12`='$projections_description_operatingcosts_one_m12',
 `projections_description_operatingcosts_one_y1`='$projections_description_operatingcosts_one_y1',
 `projections_description_operatingcosts_one_y2`='$projections_description_operatingcosts_one_y2',
 `projections_description_operatingcosts_one_y3`='$projections_description_operatingcosts_one_y3',
 `projections_description_operatingcosts_one_y4`='$projections_description_operatingcosts_one_y4',
 `projections_description_operatingcosts_two_m1`='$projections_description_operatingcosts_two_m1',
 `projections_description_operatingcosts_two_m2`='$projections_description_operatingcosts_two_m2',
 `projections_description_operatingcosts_two_m3`='$projections_description_operatingcosts_two_m3',
 `projections_description_operatingcosts_two_m4`='$projections_description_operatingcosts_two_m4',
 `projections_description_operatingcosts_two_m5`='$projections_description_operatingcosts_two_m5',
 `projections_description_operatingcosts_two_m6`='$projections_description_operatingcosts_two_m6',
 `projections_description_operatingcosts_two_m7`='$projections_description_operatingcosts_two_m7',
 `projections_description_operatingcosts_two_m8`='$projections_description_operatingcosts_two_m8',
 `projections_description_operatingcosts_two_m9`='$projections_description_operatingcosts_two_m9',
 `projections_description_operatingcosts_two_m10`='$projections_description_operatingcosts_two_m10',
 `projections_description_operatingcosts_two_m11`='$projections_description_operatingcosts_two_m11',
 `projections_description_operatingcosts_two_m12`='$projections_description_operatingcosts_two_m12',
 `projections_description_operatingcosts_two_y1`='$projections_description_operatingcosts_two_y1',
 `projections_description_operatingcosts_two_y2`='$projections_description_operatingcosts_two_y2',
 `projections_description_operatingcosts_two_y3`='$projections_description_operatingcosts_two_y3',
 `projections_description_operatingcosts_two_y4`='$projections_description_operatingcosts_two_y4',`projections_description_operatingcosts_three_m1`='$projections_description_operatingcosts_three_m1',
 `projections_description_operatingcosts_three_m2`='$projections_description_operatingcosts_three_m2',
 `projections_description_operatingcosts_three_m3`='$projections_description_operatingcosts_three_m3',
 `projections_description_operatingcosts_three_m4`='$projections_description_operatingcosts_three_m4',
 `projections_description_operatingcosts_three_m5`='$projections_description_operatingcosts_three_m5',
 `projections_description_operatingcosts_three_m6`='$projections_description_operatingcosts_three_m6',
 `projections_description_operatingcosts_three_m7`='$projections_description_operatingcosts_three_m7',
 `projections_description_operatingcosts_three_m8`='$projections_description_operatingcosts_three_m8',
 `projections_description_operatingcosts_three_m9`='$projections_description_operatingcosts_three_m9',
 `projections_description_operatingcosts_three_m10`='$projections_description_operatingcosts_three_m10',
 `projections_description_operatingcosts_three_m11`='$projections_description_operatingcosts_three_m11',
 `projections_description_operatingcosts_three_m12`='$projections_description_operatingcosts_three_m12',
 `projections_description_operatingcosts_three_y1`='$projections_description_operatingcosts_three_y1',
 `projections_description_operatingcosts_three_y2`='$projections_description_operatingcosts_three_y2',
 `projections_description_operatingcosts_three_y3`='$projections_description_operatingcosts_three_y3',
 `projections_description_operatingcosts_three_y4`='$projections_description_operatingcosts_three_y4',
 `projections_description_operatingcosts_four_m1`='$projections_description_operatingcosts_four_m1',
 `projections_description_operatingcosts_four_m2`='$projections_description_operatingcosts_four_m2',
 `projections_description_operatingcosts_four_m3`='$projections_description_operatingcosts_four_m3',
 `projections_description_operatingcosts_four_m4`='$projections_description_operatingcosts_four_m4',
 `projections_description_operatingcosts_four_m5`='$projections_description_operatingcosts_four_m5',
 `projections_description_operatingcosts_four_m6`='$projections_description_operatingcosts_four_m6',
 `projections_description_operatingcosts_four_m7`='$projections_description_operatingcosts_four_m7',
 `projections_description_operatingcosts_four_m8`='$projections_description_operatingcosts_four_m8',
 `projections_description_operatingcosts_four_m9`='$projections_description_operatingcosts_four_m9',
 `projections_description_operatingcosts_four_m10`='$projections_description_operatingcosts_four_m10',
 `projections_description_operatingcosts_four_m11`='$projections_description_operatingcosts_four_m11',
 `projections_description_operatingcosts_four_m12`='$projections_description_operatingcosts_four_m12',
 `projections_description_operatingcosts_four_y1`='$projections_description_operatingcosts_four_y1',
 `projections_description_operatingcosts_four_y2`='$projections_description_operatingcosts_four_y2',
 `projections_description_operatingcosts_four_y3`='$projections_description_operatingcosts_four_y3',
 `projections_description_operatingcosts_four_y4`='$projections_description_operatingcosts_four_y4',
 `projections_description_operatingcosts_five_m1`='$projections_description_operatingcosts_five_m1',
 `projections_description_operatingcosts_five_m2`='$projections_description_operatingcosts_five_m2',
 `projections_description_operatingcosts_five_m3`='$projections_description_operatingcosts_five_m3',
 `projections_description_operatingcosts_five_m4`='$projections_description_operatingcosts_five_m4',
 `projections_description_operatingcosts_five_m5`='$projections_description_operatingcosts_five_m5',
 `projections_description_operatingcosts_five_m6`='$projections_description_operatingcosts_five_m6',
 `projections_description_operatingcosts_five_m7`='$projections_description_operatingcosts_five_m7',
 `projections_description_operatingcosts_five_m8`='$projections_description_operatingcosts_five_m8',
 `projections_description_operatingcosts_five_m9`='$projections_description_operatingcosts_five_m9',
 `projections_description_operatingcosts_five_m10`='$projections_description_operatingcosts_five_m10',
 `projections_description_operatingcosts_five_m11`='$projections_description_operatingcosts_five_m11',
 `projections_description_operatingcosts_five_m12`='$projections_description_operatingcosts_five_m12',
 `projections_description_operatingcosts_totalsale`='$projections_description_operatingcosts_totalsale',

 `what_is_the_monthly_revenue`='$what_is_the_monthly_revenue',
 `what_is_the_total_operation_cost`='$what_is_the_total_operation_cost',
 `what_is_the_total_current_operation_cost`='$what_is_the_total_current_operation_cost',
 `what_is_the_total_investment_cost`='$what_is_the_total_investment_cost',
 `brakedown_of_investments1`='$brakedown_of_investments1',
 `funded`='$funded',
 `was_not_funded`='$was_not_funded',
 `finacialdata_If_Yes_Give_details`='$finacialdata_If_Yes_Give_details',
 `status_ofLoan_outstandingre_paid`='$status_ofLoan_outstandingre_paid',
 `finacialdata_name_ofbusiness`= '$finacialdata_name_ofbusiness',

 `proposed_management_team_one_fullnames`='$proposed_management_team_one_fullnames',
 `proposed_management_team_two_fullnames`='$proposed_management_team_two_fullnames',
 `proposed_management_team_three_fullnames`='$proposed_management_team_three_fullnames',
 `management_team_one_management_positions`='$management_team_one_management_positions',
 `management_team_two_management_positions`='$management_team_two_management_positions',
 `management_team_three_management_positions`='$management_team_three_management_positions',
 `management_team_one_management_qualifications`='$management_team_one_management_qualifications',
 `management_team_two_management_qualifications`='$management_team_two_management_qualifications',
 `management_team_three_management_qualifications`='$management_team_three_management_qualifications',

`checkbox12_months`='$checkbox12_months',
`checkbox18_months`='$checkbox18_months',
`checkbox24_months`='$checkbox24_months',
`checkbox36_months`='$checkbox36_months',
`checkbox48_months`='$checkbox48_months',

`checkbox1_3months`='$checkbox1_3months',
`checkbox3_6months`='$checkbox3_6months',
`checkbox6_9months`='$checkbox6_9months',
`checkbox_morethan9`='$checkbox_morethan9',

`Business_benefit_customers`='$Business_benefit_customers',
`Business_benefit_suppliers`='$Business_benefit_suppliers',
`Before_cdf_funding_women`='$Before_cdf_funding_women',
`Before_cdf_funding_men`='$Before_cdf_funding_men',
`Before_cdf_funding_youth`='$Before_cdf_funding_youth',
`Before_cdf_funding_physically_challenged`='$Before_cdf_funding_physically_challenged',
`before_cdf_funding_all_total`='$before_cdf_funding_all_total',
`after_cdf_funding_women`='$after_cdf_funding_women',
`after_cdf_funding_men`='$after_cdf_funding_men',
`after_cdf_funding_youth`='$after_cdf_funding_youth',
`after_cdf_funding_physically_challenged`='$after_cdf_funding_physically_challenged',
`after_cdf_funding_all_total`='$after_cdf_funding_all_total',
`bank_name`='$bank_name',
`branch`='$branch',
`soft_code`='$soft_code',
`swift_code`='$swift_code',
`account_number`='$account_number',
`tipn_user`='$tipn_user',
`mobil_money_name_and_number`='$mobil_money_name_and_number',
`club_secretary_name`='$club_secretary_name',
`signature_image`='$signature_image',
`date_of_signing1`='$date_of_signing1',
`head_of_business_signature_image`='$head_of_business_signature_image',
`date_of_signing2`='$date_of_signing2'

WHERE email = '$email'";


$sql_submitions_results = mysqli_query($con, $sql_submitions);
      
if($sql_submitions_results){
  header('location:profileview.php?Update was successful-submited');
}

else{
  header('location:edit-profile1.php?Update was not successful-non');
}


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>postbox</title>
<link rel="Stylesheet" href="edit-profile1.css">
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
header('location:login.php');
}
                    
if($usercount){
while($row = mysqli_fetch_assoc($result)){
                       
                    
                      
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

<li><a href="form-downloads.php"><img src="user_icons/news icon black.png" class="user-icon">Form Downloads</a></li>
<li><a href="contact.php"><img src="user_icons/call.png" class="user-icon">Contact</a></li>
<li><a href="logout_fund_applications.php"><img src="user_icons/log-ouy.png" class="user-icon">Logout</a></li>           
</ul>
</div>
                    
</nav>


                
</div>


  <div class="user-infor">
  
  <div class="profile-infornation">
  <p class="naming"><span class="nameis">Names:</span></p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/username.png" class="user-icon">User-Names:</span> </p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/area mapping.png" class="area-icon">Town:</span> </p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/locatio red transparent.png" class="loacation-icon">Area:</span> </p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/constituency.png" class="loacation-icon">constituency:</span> </p><br />    
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/age transparent.png" class="loacation-icon">Age:</span> </p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/enelope green.png" class="email-icon">Email:</span> </p><br />
    <p class="naming"><span class="nameis"><img src="user_icons/greens-icons/call green transparent.png" class="contact-icon">Contact:</span> </p><br />
    <p><img src="user_icons/greens-icons/about icon.png" class="loacation-icon"><strong>About & Specialization:</strong><br /> </p><br />
    <p class="netting"><img src="user_icons/greens-icons/network transparent.png" class="loacation-icon"><strong>Networking Intrests:</span></strong><br /></p><br />
           
           
  <center>
  <a href="edit13.php" class="btn-edit-profil-1">Fill Out Application</a>
  </center>


   </div>
  </div>




<!-------------------------------------------------right side ----------------------------------->


<div class="side-right">

  <div class="search">

  </div> 

  
  <div class="infor">
  <img src="user_icons/news icon black.png" class="innfo-icon"><h1>Infor</h1>
  </div>    
  
  <div class="about">
  <h1>About:</h1>
  <P>this is about</P>
  </div>    
  
  <div class="networking">
  <h1>Networking:</h1>
  <P>this is networking</P>
  </div>  
  
  <div class="copyright">
  <center>
  <p>Copyright 2023 
  <br />All Rights Researved
  </p>
  </center>
  </div>
  
  
</div>

<?php

    }
  }
 
?>






<!-------------------------------------------------------------------------------------start of form div ------------------------->


<div class="container-form">
 <form action="edit-profile1.php" method="POST" enctype="multipart/form-data">




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
            <P>Project identification Number: <input type="text" name="project_identification_number"><br /></P>
            <P>(For Offical Use)<br /></P>
          </div>
        </div>


        <div class="pro2">
        <div class="pro2-inner">
          <p>YE/Zone/Ward Code Number: <input type="text" name="yezoneward_code_number"><br /></p>
          <p>WE/Zone/Ward Code Number: <input type="text" name="wezone_ward_code_number"><br /></p>
          <p>CE/Zone/Ward Code Number: <input type="text" name="cezoneward_code_number"><br /></p>
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
          <p><input type="text" name="name_of_business_organization_company_group_cooperative_club"></p>
          <hr>
        </div>
       
        <div class="legal-form">
          <h1>2.Legal Form Of Applicant(Limited Company(SME)/Group/Cooperative/Club):</h1>
          <p><input type="text" name="legal_form_Of_applicant_limited_company_sme_group_cooperative"></p>
          <hr class="leagal-hr">
        </div>



       <div class="date-of-company-registration">
        <h1>3.Date Of Company/Group/Cooperative/Club Registration:</h1>
        <p><input type="text" name="date_Of_company_group_cooperative_club_registration"></p>
        <hr class="date-of-company-registration-hr">
       </div>




       <div class="tpin">
        <h1>4.TPIN:</h1>
        <p><input type="text" name="tipn"></p>
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
    <p><input type="text" name="shareholder_name_one"></p>
  </div>


<div class="fill-in-div-3">
  <p><input type="text" name="nrc_name_one"></p>
</div>


<div class="fill-in-div-4">
  <p><input type="text" name="shareholding_percent_name_one"></p>
</div>


<div class="fill-in-div-5">
  <p><input type="text" name="position_in_business_name_one"></p>
</div>


<div  class="fill-in-div-6">
  <label>
  <input type="checkbox" name="yes1" value="yes1">
  </label>
</div>


<div class="fill-in-div-7">
  <label>
  <input type="checkbox" name="no1" value="no1">
  </label>
</div>


</div>



<!--------------------------------------------------filling 2 div start-->    
<div class="fill2-in-div">


  <div class="fill2-in-div-1">
    <p>2.</p>
  </div>
  
  
    <div class="fill2-in-div-2">
      <p><input type="text" name="shareholder_name_two"></p>
    </div>
  
  
  <div class="fill2-in-div-3">
    <p><input type="text" name="nrc_name_two"></p>
  </div>
  
  
  <div class="fill2-in-div-4">
    <p><input type="text" name="shareholding_percent_name_two"></p>
  </div>
  
  
  <div class="fill2-in-div-5">
    <p><input type="text" name="position_in_business_name_two"></p>
  </div>
  
  
  <div  class="fill2-in-div-6">
    <label>
    <input type="checkbox" name="yes2" value="yes2">
    </label>
  </div>
  
  
  <div class="fill2-in-div-7">
    <label>
    <input type="checkbox" name="no2" value="no2">
    </label>
  </div>
  
  
  </div>
  
  
  
  <!--------------------------------------------------filling 3 div start-->    
<div class="fill3-in-div">


  <div class="fill3-in-div-1">
    <p>3.</p>
  </div>
  
  
    <div class="fill3-in-div-2">
      <p><input type="text" name="shareholder_name_three"></p>
    </div>
  
  
  <div class="fill3-in-div-3">
    <p><input type="text" name="nrc_name_three"></p>
  </div>
  
  
  <div class="fill3-in-div-4">
    <p><input type="text" name="shareholding_percent_name_three"></p>
  </div>
  
  
  <div class="fill3-in-div-5">
    <p><input type="text" name="position_in_business_name_three"></p>
  </div>
  
  
  <div  class="fill3-in-div-6">
    <label>
    <input type="checkbox" name="yes3" value="yes3">
    </label>
  </div>
  
  
  <div class="fill3-in-div-7">
    <label>
    <input type="checkbox" name="no3" value="no3">
    </label>
  </div>
  
  
  </div>
  
<!--------------------------------------------------filling 4 div start-->    
<div class="fill4-in-div">


  <div class="fill4-in-div-1">
    <p>4.</p>
  </div>
  
  
    <div class="fill4-in-div-2">
      <p><input type="text" name="shareholder_name_four"></p>
    </div>
  
  
  <div class="fill4-in-div-3">
    <p><input type="text" name="nrc_name_four"></p>
  </div>
  
  
  <div class="fill4-in-div-4">
    <p><input type="text" name="shareholding_percent_name_four"></p>
  </div>
  
  
  <div class="fill4-in-div-5">
    <p><input type="text" name="position_in_business_name_four"></p>
  </div>
  
  
  <div  class="fill4-in-div-6">
    <label>
    <input type="checkbox" name="yes4" value="yes4">
    </label>
  </div>
  
  
  <div class="fill4-in-div-7">
    <label>
    <input type="checkbox" name="no4" value="no4">
    </label>
  </div>
  
  
  </div>
  

  
  <!--------------------------------------------------filling 5 div start-->    
<div class="fill5-in-div">


  <div class="fill5-in-div-1">
    <p>5.</p>
  </div>
  
  
    <div class="fill5-in-div-2">
      <p><input type="text" name="shareholder_name_five"></p>
    </div>
  
  
  <div class="fill5-in-div-3">
    <p><input type="text" name="nrc_name_five"></p>
  </div>
  
  
  <div class="fill5-in-div-4">
    <p><input type="text" name="shareholding_percent_name_five"></p>
  </div>
  
  
  <div class="fill5-in-div-5">
    <p><input type="text" name="position_in_business_name_five"></p>
  </div>
  
  
  <div  class="fill5-in-div-6">
    <label>
    <input type="checkbox" name="yes5" value="yes5">
    </label>
  </div>
  
  
  <div class="fill5-in-div-7">
    <label>
    <input type="checkbox" name="no5" value="no5">
    </label>
  </div>
  
  
  </div>
  
  
  
  <!--------------------------------------------------filling 6 div start-->    
<div class="fill6-in-div">


  <div class="fill6-in-div-1">
    <p>6.</p>
  </div>
  
  
    <div class="fill6-in-div-2">
      <p><input type="text" name="shareholder_name_six"></p>
    </div>
  
  
  <div class="fill6-in-div-3">
    <p><input type="text" name="nrc_name_six"></p>
  </div>
  
  
  <div class="fill6-in-div-4">
    <p><input type="text" name="shareholding_percent_name_six"></p>
  </div>
  
  
  <div class="fill6-in-div-5">
    <p><input type="text" name="position_in_business_name_six"></p>
  </div>
  
  
  <div  class="fill6-in-div-6">
    <label>
    <input type="checkbox" name="yes6" value="yes6">
    </label>
  </div>
  
  
  <div class="fill6-in-div-7">
    <label>
    <input type="checkbox" name="no6" value="no6">
    </label>
  </div>
  
  
  </div>
  
  
  
  <!--------------------------------------------------filling 7 div start-->    
<div class="fill7-in-div">


  <div class="fill7-in-div-1">
    <p>7.</p>
  </div>
  
  
    <div class="fill7-in-div-2">
      <p><input type="text" name="shareholder_name_seven"></p>
    </div>
  
  
  <div class="fill7-in-div-3">
    <p><input type="text" name="nrc_name_seven"></p>
  </div>
  
  
  <div class="fill7-in-div-4">
    <p><input type="text" name="shareholding_percent_name_seven"></p>
  </div>
  
  
  <div class="fill7-in-div-5">
    <p><input type="text" name="position_in_business_name_seven"></p>
  </div>
  
  
  <div  class="fill7-in-div-6">
    <label>
    <input type="checkbox" name="yes7" value="yes7">
    </label>
  </div>
  
  
  <div class="fill7-in-div-7">
    <label>
    <input type="checkbox" name="no7" value="no7">
    </label>
  </div>
  
  
  </div>
  


  
  
  
  <!--------------------------------------------------filling 8 div start-->    
<div class="fill8-in-div">


  <div class="fill8-in-div-1">
    <p>8.</p>
  </div>
  
  
    <div class="fill8-in-div-2">
      <p><input type="text" name="shareholder_name_eight"></p>
    </div>
  
  
  <div class="fill8-in-div-3">
    <p><input type="text" name="nrc_name_eight"></p>
  </div>
  
  
  <div class="fill8-in-div-4">
    <p><input type="text" name="shareholding_percent_name_eight"></p>
  </div>
  
  
  <div class="fill8-in-div-5">
    <p><input type="text" name="position_in_business_name_eight"></p>
  </div>
  
  
  <div  class="fill8-in-div-6">
    <label>
    <input type="checkbox" name="yes8" value="yes8">
    </label>
  </div>
  
  
  <div class="fill8-in-div-7">
    <label>
    <input type="checkbox" name="no8" value="no8">
    </label>
  </div>
  
  
  </div>
  

  
  

  
  
  
  
  <!--------------------------------------------------filling 9 div start-->    
<div class="fill9-in-div">


  <div class="fill9-in-div-1">
    <p>9.</p>
  </div>
  
  
    <div class="fill9-in-div-2">
      <p><input type="text" name="shareholder_name_nine"></p>
    </div>
  
  
  <div class="fill9-in-div-3">
    <p><input type="text" name="nrc_name_nine"></p>
  </div>
  
  
  <div class="fill9-in-div-4">
    <p><input type="text" name="shareholding_percent_name_nine"></p>
  </div>
  
  
  <div class="fill9-in-div-5">
    <p><input type="text" name="position_in_business_name_nine"></p>
  </div>
  
  
  <div  class="fill9-in-div-6">
    <label>
    <input type="checkbox" name="yes9" value="yes9">
    </label>
  </div>
  
  
  <div class="fill9-in-div-7">
    <label>
    <input type="checkbox" name="no9" value="no9">
    </label>
  </div>
  
  
  </div>
  

  
  
  
  
  <!--------------------------------------------------filling 10 div start-->    
<div class="fill10-in-div">


  <div class="fill10-in-div-1">
    <p>10.</p>
  </div>
  
  
    <div class="fill10-in-div-2">
      <p><input type="text" name="shareholder_name_ten"></p>
    </div>
  
  
  <div class="fill10-in-div-3">
    <p><input type="text" name="nrc_name_ten"></p>
  </div>
  
  
  <div class="fill10-in-div-4">
    <p><input type="text" name="shareholding_percent_name_ten"></p>
  </div>
  
  
  <div class="fill10-in-div-5">
    <p><input type="text" name="position_in_business_name_ten"></p>
  </div>
  
  
  <div  class="fill10-in-div-6">
    <label>
    <input type="checkbox" name="yes10" value="yes10">
    </label>
  </div>
  
  
  <div class="fill10-in-div-7">
    <label>
    <input type="checkbox" name="no10" value="no10">
    </label>
  </div>
  
  
  </div>
  

  
  
  
  <!--------------------------------------------------filling 11 div start-->    
<div class="fill11-in-div">


  <div class="fill11-in-div-1">
    <p>11.</p>
  </div>
  
  
    <div class="fill11-in-div-2">
      <p><input type="text" name="shareholder_name_eleven"></p>
    </div>
  
  
  <div class="fill11-in-div-3">
    <p><input type="text" name="nrc_name_eleven"></p>
  </div>
  
  
  <div class="fill11-in-div-4">
    <p><input type="text" name="shareholding_percent_name_eleven"></p>
  </div>
  
  
  <div class="fill11-in-div-5">
    <p><input type="text" name="position_in_business_name_eleven"></p>
  </div>
  
  
  <div  class="fill11-in-div-6">
    <label>
    <input type="checkbox" name="yes11" value="yes11">
    </label>
  </div>
  
  
  <div class="fill11-in-div-7">
    <label>
    <input type="checkbox" name="no11" value="no11">
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
<p>Name Of Contact Person:<input type="text" name="authorized_representertive_name_of_contact_person"></p>
</div>

<div class="authorized-div-2">
  <p>Position In Business</p>
</div>


<div class="authorized-div-3">
  <p><input type="text" name="authorized_representertive_position_in_business"></p>
</div>


<div class="authorized-section2-div-1">
  <p>Contact Numbers</p>
</div>


<div class="authorized-section2-div-2">
  <p>Cell:<input type="text" name="authorized_representertive_contact_number_cell"></p>
</div>


<div class="authorized-section2-div-3">
  <p>Telephone Number<br /><input type="text" name="authorized_representertive_contact_number_telephone"></p>
</div>


<div class="authorized-section3-div-1">
  <p>Email</p>
</div>


<div class="authorized-section3-div-2">
  <p><input type="text" name="authorized_representertive_email"></p>
</div>

<div class="authorized-section4-div-1"></div>

<div class="authorized-section4-div-2"></div>


<div class="project-location">
<h1>6.Project Location</h1>
</div>


<div class="names-of-district">
  <h1>(a).Name Of District: <input type="text" name="project_location_name_of_district"></h1><br />
  <h1>(a).Name Of constituency: <input type="text" name="project_location_name_of_constituency"></h1><br />
  <h1>(a).Name Of Ward: <input type="text" name="project_location_name_of_ward"></h1><br />
  <h1>(a).Name Of Zone:<br ><input type="text" name="project_location_name_of_zone"></h1><br />
  <h1>(a).Physical Address:<input type="text" name="project_location_name_physical_address"></h1><br />
  
</div>


<div class="details-of-loan-aplication">
  <h1>Section B: Details OF Application:</h1>
</div>

<div class="details-of-loan-aplication1">
  <p>1.Loan Application Amount (in Figures and words):<br /></p>
    
  <p>eg.K100,000 <input type="text" name="loan_application_amount_in_Figures" class="hundred-kwacha"><br /> One Hundred Thousand Kwacha  <input type="text" name="loan_application_amount_in_words" class="works-kwacha"></p>

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
      <p><textarea type="text" maxlength="230" name="description_of_business"></textarea></p>
     
    </div>


    <div class="indicate-weather">
      <h2>3.Indicate Weather the company/Cooperative/Club is an existing One or Start-up:</h2>
    </div>


    <div class="indicate-weather-typing">
      <p><textarea type="text" maxlength="230" name="indicate_weather_company_is_start_up"></textarea></p>
      
    </div>




    <div class="purpose-of-loan">
      <h2>4.Purpose Of The Loan</h2><p>(eg.To Start or expand a pottery Business, To buy Sewing Machin,To buy Metal Fabrication Equipment etc)</p>
    </div>





    <div class="purpose-of-loan-typing">
      <p><textarea type="text" maxlength="230" name="purpose_of_the_loan"></textarea></p>
    
    </div>



    <div class="repayment-period">
      <h2>5.Repayment Period</h2><p>(Time period for paying back the loan:) The Loan</p>
    </div>


    <div class="repayment-period-typing">
      <p><textarea type="text" maxlength="160" name="repayment_period"></textarea></p>
    </div>

   
    <div class="source-of-funds-for-repayment">
      <h2>6.Source of Funds For Repayment Of Loan</h2>
      <p>(Funds Realized From the Business and any other source)</p>
    </div>


    <div class="source-of-funds-for-repayment-typing">
      <p><textarea type="text" maxlength="230" name="source_of_funds_of_repayment_loan"></textarea></p>
    </div>


    

    </div>

  </div>





<div class="white-paper-collateral">
  <div class="inner-paper-collateral">
    <div class="collatral">
      <h2>7.Collatral If Any</h2><p>(eg. Assts Such as Land, Equipments etc)</p>
    </div>


    <div class="collateral-typing">
      <p><textarea type="text" maxlength="230" name="collaterial_if_any"></textarea></p>
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
       <p>1</p>
     </div>


     <div class="Description-brakedown-row-one2">
      <p><input type="text" maxlength="30" name="financials_description_cost_one"></p>
    </div>


     <div class="Description-brakedown-row-one3">
      <p><input type="text" maxlength="15" name="financials_description_quality_one"></p>
    </div>

     <div class="Description-brakedown-row-one4">
      <p><input type="text" maxlength="15" name="financials_description_unitcost_one"></p>
    </div>


     <div class="Description-brakedown-row-one5">
      <p><input type="text" maxlength="15" name="financials_description_totalcost_one"></p>
    </div>
    

  </div>




<!-------------------row two---------------->

<div class="Description-brakedown-row-two">

  <div class="Description-brakedown-row-two1">
    <p>2.</p>
  </div>


  <div class="Description-brakedown-row-two2">
   <p><input type="text" maxlength="30" name="financials_description_cost_two"></p>
 </div>


  <div class="Description-brakedown-row-two3">
   <p><input type="text" maxlength="15" name="financials_description_quality_two"></p>
 </div>

  <div class="Description-brakedown-row-two4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_two"></p>
 </div>


  <div class="Description-brakedown-row-two5">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_two"></p>
 </div>
 

</div>






<!-------------------row three---------------->

<div class="Description-brakedown-row-three">

  <div class="Description-brakedown-row-three1">
    <p>3.</p>
  </div>


  <div class="Description-brakedown-row-three2">
   <p><input type="text" maxlength="30" name="financials_description_cost_three"></p>
 </div>


  <div class="Description-brakedown-row-three3">
   <p><input type="text" maxlength="15" name="financials_description_quality_three"></p>
 </div>

  <div class="Description-brakedown-row-three4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_three"></p>
 </div>


  <div class="Description-brakedown-row-three5">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_three"></p>
 </div>
 

</div>



<!-------------------row four---------------->

<div class="Description-brakedown-row-four">

  <div class="Description-brakedown-row-four1">
    <p>4.</p>
  </div>


  <div class="Description-brakedown-row-four2">
   <p><input type="text" maxlength="30" name="financials_description_cost_four"></p>
 </div>


  <div class="Description-brakedown-row-four3">
   <p><input type="text" maxlength="15" name="financials_description_quality_four"></p>
 </div>

  <div class="Description-brakedown-row-four4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_four"></p>
 </div>


  <div class="Description-brakedown-row-four5">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_four"></p>
 </div>
 

</div>



<!-------------------row five---------------->

<div class="Description-brakedown-row-five">

  <div class="Description-brakedown-row-five1">
    <p>5.</p>
  </div>


  <div class="Description-brakedown-row-five2">
   <p><input type="text" maxlength="30" name="financials_description_cost_five"></p>
 </div>


  <div class="Description-brakedown-row-five3">
   <p><input type="text" maxlength="15" name="financials_description_quality_five"></p>
 </div>

  <div class="Description-brakedown-row-five4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_five"></p>
 </div>


  <div class="Description-brakedown-row-five5">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_five"></p>
 </div>
 

</div>


<!-------------------row six---------------->

<div class="Description-brakedown-row-six">

  <div class="Description-brakedown-row-six1">
    <p>6.</p>
  </div>


  <div class="Description-brakedown-row-six2">
   <p><input type="text" maxlength="30" name="financials_description_cost_six"></p>
 </div>


  <div class="Description-brakedown-row-six3">
   <p><input type="text" maxlength="15" name="financials_description_quality_six"></p>
 </div>

  <div class="Description-brakedown-row-six4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_six"></p>
 </div>


  <div class="Description-brakedown-row-six5">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_six"></p>
 </div>
 

</div>


<!-------------------row seven---------------->

<div class="Description-brakedown-row-seven">

  <div class="Description-brakedown-row-seven1">
    <p>7.</p>
  </div>


  <div class="Description-brakedown-row-seven2">
   <p><input type="text" maxlength="30" name="financials_description_cost_seven"></p>
 </div>


  <div class="Description-brakedown-row-seven3">
   <p><input type="text" maxlength="15" name="financials_description_quality_seven"></p>
 </div>

  <div class="Description-brakedown-row-seven4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_seven"></p>
 </div>


  <div class="Description-brakedown-row-seven5">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_seven"></p>
 </div>
 

</div>




<!-------------------row 9---------------->

<div class="Description-brakedown-row-nine">

  <div class="Description-brakedown-row-nine1">
    <p>8.</p>
  </div>


  <div class="Description-brakedown-row-nine2">
   <p><input type="text" maxlength="30" name="financials_description_cost_eight"></p>
 </div>


  <div class="Description-brakedown-row-nine3">
   <p><input type="text" maxlength="15" name="financials_description_quality_eight"></p>
 </div>

  <div class="Description-brakedown-row-nine4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_eight"></p>
 </div>


  <div class="Description-brakedown-row-nine5">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_eight"></p>
 </div>
 

</div>


<!-------------------row 10---------------->

<div class="Description-brakedown-row-ten">

  <div class="Description-brakedown-row-ten1">
    <p>9.</p>
  </div>


  <div class="Description-brakedown-row-ten2">
   <p><input type="text" maxlength="30" name="financials_description_cost_nine"></p>
 </div>


  <div class="Description-brakedown-row-ten3">
   <p><input type="text" maxlength="15" name="financials_description_quality_nine"></p>
 </div>

  <div class="Description-brakedown-row-ten4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_nine"></p>
 </div>


  <div class="Description-brakedown-row-ten5">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_nine"></p>
 </div>
 

</div>

<!-------------------row 11---------------->

<div class="Description-brakedown-row-eleven">

  <div class="Description-brakedown-row-eleven1">
    <p>10.</p>
  </div>


  <div class="Description-brakedown-row-eleven2">
   <p><input type="text" maxlength="30" name="financials_description_cost_ten"></p>
 </div>


  <div class="Description-brakedown-row-eleven3">
   <p><input type="text" maxlength="15" name="financials_description_quality_ten"></p>
 </div>

  <div class="Description-brakedown-row-eleven4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_ten"></p>
 </div>


  <div class="Description-brakedown-row-eleven6">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_ten"></p>
 </div>
 

</div>


<!-------------------row 12---------------->

<div class="Description-brakedown-row-twelve">

  <div class="Description-brakedown-row-twelve1">
    <p>11.</p>
  </div>


  <div class="Description-brakedown-row-twelve2">
   <p><input type="text" maxlength="30" name="financials_description_cost_eleven"></p>
 </div>


  <div class="Description-brakedown-row-twelve3">
   <p><input type="text" maxlength="15" name="financials_description_quality_eleven"></p>
 </div>

  <div class="Description-brakedown-row-twelve4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_eleven"></p>
 </div>


  <div class="Description-brakedown-row-twelve6">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_eleven"></p>
 </div>
 

</div>




<!-------------------row 13---------------->

<div class="Description-brakedown-row-thirteen">

  <div class="Description-brakedown-row-thirteen1">
    <p>12.</p>
  </div>


  <div class="Description-brakedown-row-thirteen2">
   <p><input type="text" maxlength="30" name="financials_description_cost_twelve"></p>
 </div>


  <div class="Description-brakedown-row-thirteen3">
   <p><input type="text" maxlength="15" name="financials_description_quality_twelve"></p>
 </div>


  <div class="Description-brakedown-row-thirteen4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_twelve"></p>
 </div>


  <div class="Description-brakedown-row-thirteen6">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_twelve"></p>
 </div>
 

</div>



<!-------------------row 14---------------->

<div class="Description-brakedown-row-fourteen">

  <div class="Description-brakedown-row-fourteen1">
    <p>13.</p>
  </div>


  <div class="Description-brakedown-row-fourteen2">
   <p><input type="text" maxlength="15" name="financials_description_cost_thirteen"></p>
 </div>


  <div class="Description-brakedown-row-fourteen3">
   <p><input type="text" maxlength="15" name="financials_description_quality_thirteen"></p>
 </div>

  <div class="Description-brakedown-row-fourteen4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_thirteen"></p>
 </div>


  <div class="Description-brakedown-row-fourteen6">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_thirteen"></p>
 </div>
 

</div>


<!-------------------row 15---------------->

<div class="Description-brakedown-row-fifteen">

  <div class="Description-brakedown-row-fifteen1">
    <p>14.</p>
  </div>


  <div class="Description-brakedown-row-fifteen2">
   <p><input type="text" maxlength="30" name="financials_description_cost_fourteen"></p>
 </div>


  <div class="Description-brakedown-row-fifteen3">
   <p><input type="text" maxlength="15" name="financials_description_quality_fourteen"></p>
 </div>

  <div class="Description-brakedown-row-fifteen4">
   <p><input type="text" maxlength="15" name="financials_description_unitcost_fourteen"></p>
 </div>


  <div class="Description-brakedown-row-fifteen6">
   <p><input type="text" maxlength="15" name="financials_description_totalcost_fourteen"></p>
 </div>
 

</div>







<!-------------------row 16---------------->

<div class="Description-brakedown-row-sixteen">

  <div class="Description-brakedown-row-sixteen1">
   
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
   <p><input type="text" maxlength="15" name="financials_description_totalcost_final"></p>
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
   <h1><input type="text" maxlength="40" name="projected_level_of_production_description_of_product_one"></h1>
 </div>


 <div class="projected_level-div2-two-below3">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month1"></h1>
 </div>

 <div class="projected_level-div2-two-below4">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month2"></h1>
 </div>

 <div class="projected_level-div2-two-below5">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month3"></h1>
 </div>

 <div class="projected_level-div2-two-below6">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month4"></h1>
 </div>

 <div class="projected_level-div2-two-below7">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month5"></h1>
 </div>

 <div class="projected_level-div2-two-below8">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month6"></h1>
 </div>

 <div class="projected_level-div2-two-below9">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month7"></h1>
 </div>

 <div class="projected_level_div2_two_below10">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month8"></h1>
 </div>

 <div class="projected_level-div2-two-below11">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month9"></h1>
 </div>

 <div class="projected_level_div_two_below122">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month10"></h1>
 </div>

 <div class="projected_level-div2-two-below13">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month11"></h1>
 </div>

 <div class="projected_level-div2-two-below14">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_month12"></h1>
 </div>

 <div class="projected_level-div2-two-below15">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_year2"></h1>
 </div>

 <div class="projected_level-div2-two-below16">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_year3"></h1>
 </div>

 <div class="projected_level-div2-two-below17">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_one_year4"></h1>
 </div>

 
</div>





<!----------------------------------------mothering-3-below-->

<div class="mothering-box3-projected-below1">
 <div class="projected_level-div3-two-below1">
   <h1>2</h1>
 </div>
 
 
 <div class="projected_level-div3-two-below2">
   <h1><input type="text" maxlength="40" name="projected_level_of_production_description_of_product_two"></h1>
 </div>


 <div class="projected_level-div3-two-below3">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month1"></h1>
 </div>

 <div class="projected_level-div3-two-below4">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month2"></h1>
 </div>

 <div class="projected_level-div3-two-below5">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month3"></h1>
 </div>

 <div class="projected_level-div3-two-below6">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month4"></h1>
 </div>

 <div class="projected_level-div3-two-below7">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month5"></h1>
 </div>

 <div class="projected_level-div3-two-below8">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month6"></h1>
 </div>

 <div class="projected_level-div3-two-below9">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month7"></h1>
 </div>

 <div class="projected_level-div3-two-below10">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month8"></h1>
 </div>

 <div class="projected_level-div3-two-below11">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month9"></h1>
 </div>

 <div class="projected_level-div3-two-below12">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month10"></h1>
 </div>

 <div class="projected_level-div3-two-below13">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month11"></h1>
 </div>

 <div class="projected_level-div3-two-below14">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_month12"></h1>
 </div>

 <div class="projected_level-div3-two-below15">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_year1"></h1>
 </div>

 <div class="projected_level-div3-two-below16">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_year2"></h1>
 </div>

 <div class="projected_level-div3-two-below17">
   <h1><input type="text" maxlength="4" name="projected_level_of_production_description_of_product_two_year3"></h1>
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
 <p><input type="text" maxlength="13" name="sales_projections_description_one"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below3-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_m1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below4-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_m2"></p>
 </div>
 
 <div class="mother-small-box-divs-below5-two">
   <p><input type="text" maxlength="4"  name="sales_projections_description_one_m3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below6-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_m4"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below7-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_m5"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below8-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_m6"></p>
 </div>
 
 <div class="mother-small-box-divs-below9-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_m7"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below10-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_m8"></p>
 </div>
 
 <div class="mother-small-box-divs-below11-two">
   <p><input type="text"maxlength="4"  name="sales_projections_description_one_m9"></p>
 </div>
 
 <div class="mother-small-box-divs-below12-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_m10"></p>
 </div>
 
 <div class="mother-small-box-divs-below13-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_m11"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below14-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_m12"></p>
 </div>
 
 
 <!------------------yyy-->
 
 <div class="mother-small-box-divs-below15-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_totaly1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below16-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_unitprice_y1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below17-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_unitprice_y2"></p>
 </div>
 
 
 
 <div class="mother-small-box-divs-below18-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_unitprice_y3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below19-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_unitprice_y4"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below20-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_totalsale_y1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below21-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_totalsale_y2"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below22-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_totalsale_y3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below23-two">
   <p><input type="text" maxlength="4" name="sales_projections_description_one_totalsale_y4"></p>
 </div>
 
 
 
 
 </div>
 
 
 
<!------------------mother-small-box-divs2-->
<div class="mother-small-box-divs-three">


 <div class="mother-small-box-divs-below1-three">
 <h1>2</h1>
 </div>
     
     
 <div class="mother-small-box-divs-below2-three">
 <p><input type="text" maxlength="13" name="sales_projections_description_two"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below3-three">
   <p><input type="text" maxlength="4"name="sales_projections_description2_one_m1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below4-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_m2"></p>
 </div>
 
 <div class="mother-small-box-divs-below5-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_m3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below6-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_m4"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below7-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_m5"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below8-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_m6"></p>
 </div>
 
 <div class="mother-small-box-divs-below9-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_m7"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below10-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_m8"></p>
 </div>
 
 <div class="mother-small-box-divs-below11-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_m9"></p>
 </div>
 
 <div class="mother-small-box-divs-below12-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_m10"></p>
 </div>
 
 <div class="mother-small-box-divs-below13-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_m11"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below14-three">
   <p><input type="text"maxlength="4" name="sales_projections_description2_one_m12"></p>
 </div>
 
 
 <!------------------yyy-->
 
 <div class="mother-small-box-divs-below15-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_totaly1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below16-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_unitprice_y1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below17-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_unitprice_y2"></p>
 </div>
 
 
 
 <div class="mother-small-box-divs-below18-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_unitprice_y3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below19-three">
   <p><input type="text"maxlength="4" name="sales_projections_description2_one_unitprice_y4"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below20-three">
   <p><input type="text"maxlength="4" name="sales_projections_description2_one_totalsale_y1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below21-three">
   <p><input type="text"maxlength="4" name="sales_projections_description2_one_totalsale_y2"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below22-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_totalsale_y3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below23-three">
   <p><input type="text" maxlength="4" name="sales_projections_description2_one_totalsale_y4"></p>
 </div>
 
 
 
 
 </div>
 
 
 


<!------------------mother-small-box-divs2-->
<div class="mother-small-box-divs-four">


 <div class="mother-small-box-divs-below1-four">
 <h1>3</h1>
 </div>
     
     
 <div class="mother-small-box-divs-below2-four">
 <p><input type="text" maxlength="13" name="sales_projections_description_three"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below3-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below4-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m2"></p>
 </div>
 
 <div class="mother-small-box-divs-below5-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below6-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m4"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below7-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m5"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below8-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m6"></p>
 </div>
 
 <div class="mother-small-box-divs-below9-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m7"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below10-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m8"></p>
 </div>
 
 <div class="mother-small-box-divs-below11-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m9"></p>
 </div>
 
 <div class="mother-small-box-divs-below12-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m10"></p>
 </div>
 
 <div class="mother-small-box-divs-below13-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m11"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below14-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_m12"></p>
 </div>
 
 
 <!------------------yyy-->
 
 <div class="mother-small-box-divs-below15-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_totaly1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below16-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_unitprice_y1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below17-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_unitprice_y2"></p>
 </div>
 
 
 
 <div class="mother-small-box-divs-below18-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_unitprice_y3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below19-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_unitprice_y4"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below20-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_totalsale_y1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below21-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_totalsale_y2"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below22-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_totalsale_y3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below23-four">
   <p><input type="text" maxlength="4" name="sales_projections_description3_one_totalsale_y4"></p>
 </div>
 
 
 
 
 </div>
 
 
 





<!------------------mother-small-box-divs2-->
<div class="mother-small-box-divs-five">


 <div class="mother-small-box-divs-below1-five">
 <h1>4</h1>
 </div>
     
     
 <div class="mother-small-box-divs-below2-five">
 <p><input type="text" maxlength="13" name="sales_projections_description_four"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below3-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_m1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below4-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_m2"></p>
 </div>
 
 <div class="mother-small-box-divs-below5-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_m3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below6-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_m4"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below7-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_m5"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below8-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_m6"></p>
 </div>
 
 <div class="mother-small-box-divs-below9-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_m7"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below10-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_m8"></p>
 </div>
 
 <div class="mother-small-box-divs-below11-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_m9"></p>
 </div>
 
 <div class="mother-small-box-divs-below12-five">
   <p><input type="text" maxlength="4" name="sales_projections_descriptio4_one_m10"></p>
 </div>
 
 <div class="mother-small-box-divs-below13-five">
   <p><input type="text" maxlength="4" name="sales_projections_descriptio4_one_m11"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below14-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_m12"></p>
 </div>
 
 
 <!------------------yyy-->
 
 <div class="mother-small-box-divs-below15-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_totaly1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below16-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_unitprice_y1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below17-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_unitprice_y2"></p>
 </div>
 
 
 
 <div class="mother-small-box-divs-below18-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_unitprice_y3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below19-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_unitprice_y4"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below20-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_totalsale_y1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below21-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_totalsale_y2"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below22-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_totalsale_y3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below23-five">
   <p><input type="text" maxlength="4" name="sales_projections_description4_one_totalsale_y4"></p>
 </div>
 
 
 
 
 </div>
 
 
 








<!------------------mother-small-box-divs2-->
<div class="mother-small-box-divs-six">


 <div class="mother-small-box-divs-below1-six">
 <h1>5</h1>
 </div>
     
     
 <div class="mother-small-box-divs-below2-six">
 <p><input type="text" maxlength="13" name="sales_projections_description_five"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below3-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m1"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below4-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m2"></p>
 </div>
 
 <div class="mother-small-box-divs-below5-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m3"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below6-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m4"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below7-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m5"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below8-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m6"></p>
 </div>
 
 <div class="mother-small-box-divs-below9-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m7"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below10-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m8"></p>
 </div>
 
 <div class="mother-small-box-divs-below11-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m9"></p>
 </div>
 
 <div class="mother-small-box-divs-below12-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m10"></p>
 </div>
 
 <div class="mother-small-box-divs-below13-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m11"></p>
 </div>
 
 
 <div class="mother-small-box-divs-below14-six">
   <p><input type="text" maxlength="4" name="sales_projections_description5_one_m12"></p>
 </div>
 
 
 <!------------------yyy-->
 
 <div class="mother-small-box-divs-below15-six">
   <h1><input type="text" maxlength="4" name="sales_projections_description5_one_totaly1"></h1>
 </div>
 
 
 <div class="mother-small-box-divs-below16-six">
   <h1><input type="text" maxlength="11" name="sales_projections_description5_one_tsaleunitprice_y1"></h1>
 </div>
 
 
 

 
 
 <div class="mother-small-box-divs-below20-six">
   <h1><input type="text" maxlength="4" name="sales_projections_description5_one_totalsale_y1"></h1>
 </div>
 
 
 <div class="mother-small-box-divs-below21-six">
   <h1><input type="text" maxlength="4" name="sales_projections_description5_one_totalsale_y2"></h1>
 </div>
 
 
 <div class="mother-small-box-divs-below22-six">
   <h1><input type="text" maxlength="4" name="sales_projections_description5_one_totalsale_y3"></h1>
 </div>
 
 
 <div class="mother-small-box-divs-below23-six">
   <h1><input type="text" maxlength="4" name="sales_projections_description5_one_totalsale_y4"></h1>
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
     <p>1</p>
    </div>
  
  
    <div class="operations-costs2-four">
     <p><input type="text" maxlength="14" name="projections_description_operatingcosts_one"></p>
    </div>
  
  
    <div class="operations-costs3-four">
     <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m1"></p>
    </div>
  
  
  
    <div class="operations-costs4-four">
     <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m2"></p>
    </div>
  
  
    <div class="operations-costs5-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m3"></p>
     </div>
  
  
     <div class="operations-costs6-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m4"></p>
     </div>
   
  
     <div class="operations-costs7-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m5"></p>
     </div>
   
   
     <div class="operations-costs8-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m6"></p>
     </div>
   
  
  
     <div class="operations-costs9-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m7"></p>
     </div>
   
  
     <div class="operations-costs10-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m8"></p>
     </div>
   
  
  
     <div class="operations-costs11-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m9"></p>
     </div>
   
  
  
     <div class="operations-costs12-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m10"></p>
     </div>
   
  
  
     <div class="operations-costs13-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m11"></p>
     </div>
   
  
     <div class="operations-costs14-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_m12"></p>
     </div>
   
  
  
     <div class="operations-costs15-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_y1"></p>
     </div>
   
  
  
     <div class="operations-costs16-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_y2"></p>
     </div>
  
  
     <div class="operations-costs17-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_y3"></p>
     </div>
   
   
     <div class="operations-costs18-four">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_one_y4"></p>
     </div>
  
  
  
  </div>
  
  
  
  
  
  
  
  
  <!-------------------------------------END OF OPERTIONS COSTS-TWO-->
  
  <div class="operations-costs-div-5below">
  
  
    <div class="operations-costs1-five">
     <p>2</p>
    </div>
  
  
    <div class="operations-costs2-five">
     <p><input type="text" maxlength="14" name="projections_description_operatingcosts_two"></p>
    </div>
  
  
    <div class="operations-costs3-five">
     <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m1"></p>
    </div>
  
  
  
    <div class="operations-costs4-five">
     <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m2"></p>
    </div>
  
  
    <div class="operations-costs5-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m3"></p>
     </div>
  
  
     <div class="operations-costs6-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m4"></p>
     </div>
   
  
     <div class="operations-costs7-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m5"></p>
     </div>
   
   
     <div class="operations-costs8-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m6"></p>
     </div>
   
  
  
     <div class="operations-costs9-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m7"></p>
     </div>
   
  
     <div class="operations-costs10-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m8"></p>
     </div>
   
  
  
     <div class="operations-costs11-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m9"></p>
     </div>
   
  
  
     <div class="operations-costs12-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m10"></p>
     </div>
   
  
  
     <div class="operations-costs13-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m11"></p>
     </div>
   
  
     <div class="operations-costs14-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_m12"></p>
     </div>
   
  
  
     <div class="operations-costs15-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_y1"></p>
     </div>
   
  
  
     <div class="operations-costs16-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_y2"></p>
     </div>
  
  
     <div class="operations-costs17-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_y3"></p>
     </div>
   
   
     <div class="operations-costs18-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_two_y4"></p>
     </div>
  
  
  
  </div>
  
  
  
  
  
  
  <!-------------------------------------END OF OPERTIONS COSTS-TWO-->
  
  <div class="operations-costs-div-6below">
  
  
    <div class="operations-costs1-six">
     <p>3</p>
    </div>
  
  
    <div class="operations-costs2-six">
     <p><input type="text" maxlength="14" name="projections_description_operatingcosts_three"></p>
    </div>
  
  
    <div class="operations-costs3-six">
     <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m1"></p>
    </div>
  
  
  
    <div class="operations-costs4-six">
     <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m2"></p>
    </div>
  
  
    <div class="operations-costs5-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m3"></p>
     </div>
  
  
     <div class="operations-costs6-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m4"></p>
     </div>
   
  
     <div class="operations-costs7-five">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m5"></p>
     </div>
   
   
     <div class="operations-costs8-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m6"></p>
     </div>
   
  
  
     <div class="operations-costs9-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m7"></p>
     </div>
   
  
     <div class="operations-costs10-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m8"></p>
     </div>
   
  
  
     <div class="operations-costs11-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m9"></p>
     </div>
   
  
  
     <div class="operations-costs12-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m10"></p>
     </div>
   
  
  
     <div class="operations-costs13-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m11"></p>
     </div>
   
  
     <div class="operations-costs14-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_m12"></p>
     </div>
   
  
  
     <div class="operations-costs15-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_y1"></p>
     </div>
   
  
  
     <div class="operations-costs16-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_y2"></p>
     </div>
  
  
     <div class="operations-costs17-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_y3"></p>
     </div>
   
   
     <div class="operations-costs18-six">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_three_y4"></p>
     </div>
  
  
  
  </div>
  
  
  
  
  
  
  <!-------------------------------------END OF OPERTIONS COSTS-TWO-->
  
  <div class="operations-costs-div-7below">
  
  
    <div class="operations-costs1-seven">
     <p>4</p>
    </div>
  
  
    <div class="operations-costs2-seven">
     <p><input type="text" maxlength="14" name="projections_description_operatingcosts_four"></p>
    </div>
  
  
    <div class="operations-costs3-seven">
     <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m1"></p>
    </div>
  
  
  
    <div class="operations-costs4-seven">
     <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m2"></p>
    </div>
  
  
    <div class="operations-costs5-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m3"></p>
     </div>
  
  
     <div class="operations-costs6-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m4"></p>
     </div>
   
  
     <div class="operations-costs7-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m5"></p>
     </div>
   
   
     <div class="operations-costs8-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m6"></p>
     </div>
   
  
  
     <div class="operations-costs9-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m7"></p>
     </div>
   
  
     <div class="operations-costs10-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m8"></p>
     </div>
   
  
  
     <div class="operations-costs11-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m9"></p>
     </div>
   
  
  
     <div class="operations-costs12-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m10"></p>
     </div>
   
  
  
     <div class="operations-costs13-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m11"></p>
     </div>
   
  
     <div class="operations-costs14-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_m12"></p>
     </div>
   
  
  
     <div class="operations-costs15-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_y1"></p>
     </div>
   
  
  
     <div class="operations-costs16-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_y2"></p>
     </div>
  
  
     <div class="operations-costs17-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_y3"></p>
     </div>
   
   
     <div class="operations-costs18-seven">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_four_y4"></p>
     </div>
  
  
  
  </div>
  
  
  
  
  <!-------------------------------------END OF OPERTIONS COSTS-TWO-->
  
  <div class="operations-costs-div-8below">
  
  
    <div class="operations-costs1-eight">
     <p>5</p>
    </div>
  
  
    <div class="operations-costs2-eight">
     <p><input type="text" maxlength="14" name="projections_description_operatingcosts_five"></p>
    </div>
  
  
    <div class="operations-costs3-eight">
     <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m1"></p>
    </div>
  
  
  
    <div class="operations-costs4-eight">
     <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m2"></p>
    </div>
  
  
    <div class="operations-costs5-eight">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m3"></p>
     </div>
  
  
     <div class="operations-costs6-eight">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m4"></p>
     </div>
   
  
     <div class="operations-costs7-eight">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m5"></p>
     </div>
   
   
     <div class="operations-costs8-eight">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m6"></p>
     </div>
   
  
  
     <div class="operations-costs9-eight">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m7"></p>
     </div>
   
  
     <div class="operations-costs10-eight">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m8"></p>
     </div>
   
  
  
     <div class="operations-costs11-eight">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m9"></p>
     </div>
   
  
  
     <div class="operations-costs12-eight">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m10"></p>
     </div>
   
  
  
     <div class="operations-costs13-eight">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m11"></p>
     </div>
   
  
     <div class="operations-costs14-eight">
      <p><input type="text" maxlength="4" name="projections_description_operatingcosts_five_m12"></p>
     </div>
   
  
  
     <div class="operations-costs15-eight">
      <h1><input type="text" maxlength="11" name="projections_description_operatingcosts_totalsale"></h1>
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
      <p>K<input type="text" maxlength="11" name="what_is_the_monthly_revenue"></p>
     </div>

     </div>

<!----end of data 2 div AND START OF DATA3-->


<div class="data3">

  <div class="data3-inner1">
   <p>(Business23) What Is The Total Operation cost Of the Current Business</p>
  </div>


  <div class="data3-inner2">
   <p>K<input type="text" maxlength="11" name="what_is_the_total_operation_cost"></p>
  </div>

  </div>



<!----end of data 3 div AND START OF DATA4-->


<div class="data4">

  <div class="data4-inner1">
   <p>(C) What Is The Total Operation cost Of the Current Business</p>
  </div>


  <div class="data4-inner2">
   <p>K<input type="text" maxlength="11" name="what_is_the_total_current_operation_cost"></p>
  </div>

  </div>


<!----end of data 3 div AND START OF DATA 5-->


<div class="data5">

  <div class="data5-inner1">
   <p>(D)How Much have You Invested In the Current Business</p>
  </div>


  <div class="data5-inner2">
   <p>K<input type="text" maxlength="11" name="what_is_the_total_investment_cost"></p>
  </div>

  </div>

<!----end of data 3 div AND START OF DATA 6-->


<div class="data6">

  <div class="data6-inner1">
   <p>(E)Provide a brake down of current investments eg(Land)<br />Assets: Equipment,Vehicles,Tractors.</p>
  </div>


  <div class="data6-inner2">
   <p>1.<textarea type="text" maxlength="200" cols="3" rows="3" name="brakedown_of_investments1"></textarea></p>
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
         <p>Yes<input type="checkbox" class="checkbox" name="funded" value="Yes"></p>
        </div>


        <div class="computers2">
          <p>No<input type="checkbox" class="checkbox" name="was_not_funded" value="No"></p>
        </div>

    </div>
 
  </div>

<!-------------------start  previous-data2  -->


  <div class="previous-data2">

    <div class="previous-data2-inner1">
     <p>(B)If Yes Give Details:</p>
    </div>
  
  
    <div class="previous-data2-inner2">
      <p><textarea type="text" maxlength="55" cols="2" rows="2" name="finacialdata_If_Yes_Give_details"></textarea></p>
    </div>
  
  </div>


<!-------------------start  previous-data3-->

<div class="previous-data3">

  <div class="previous-data3-inner1">
   <p>(C)Status Of Loan (Outstanding/Re-paid):</p>
  </div>


  <div class="previous-data3-inner2">
    <p><textarea type="text" maxlength="55" cols="2" rows="2" name="status_ofLoan_outstandingre_paid"></textarea></p>
  </div>

</div>





<!-------------------start  previous-data3  -->

<div class="previous-data4">

  <div class="previous-data4-inner1">
   <p>(D)Name Of Business/Cooperative/Club:</p>
  </div>


  <div class="previous-data4-inner2">
    <p><input type="text" maxlength="55" cols="2" rows="2" name="finacialdata_name_ofbusiness"></p>
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
    <p><input type="text" maxlength="20" name="proposed_management_team_one_fullnames"></p>
   </div>


   <div class="three3">
    <p><input type="text" maxlength="20" name="management_team_one_management_positions"></p>
   </div>


   <div class="four4">
    <p><input type="text" maxlength="50" name="management_team_one_management_qualifications"></p>
   </div>
</div>









<div class="proposed-management-inner3">
  <div class="one2">
    <h1>2</h1>
   </div>

   <div class="two22">
    <p><input type="text" maxlength="20" name="proposed_management_team_two_fullnames"></p>
   </div>


   <div class="three33">
    <p><input type="text" maxlength="20" name="management_team_two_management_positions"></p>
   </div>


   <div class="four44">
    <p><input type="text" maxlength="50" name="management_team_two_management_qualifications"></p>
   </div>
</div>




<div class="proposed-management-inner4">
  <div class="one3">
      <h1>3</h1>
   </div>

   <div class="two222">
    <p><input type="text" maxlength="20" name="proposed_management_team_three_fullnames"></p>
   </div>


   <div class="three333">
    <p><input type="text" maxlength="20" name="management_team_three_management_positions"></p>
   </div>


   <div class="four444">
    <p><input type="text" maxlength="50" name="management_team_three_management_qualifications"></p>
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
  <p><input type="text" maxlength="100" name="Business_benefit_customers"></p>
 </div>


</div> 

<!------------------------------------end business-benefits1---div-->


<div class="business-bene2">

  <div class="business-bene-top2">
    <h1>(B)Suppliers</h1>
  </div>
 
 
 
  <div class="business-bene-top22">
  <p><input type="text" maxlength="100" name="Business_benefit_suppliers"></p>
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
    <p><input type="text" maxlength="8" name="Before_cdf_funding_women"></p>
  </div>


  <div class="business-bene-top355">
    <p><input type="text" maxlength="8" name="after_cdf_funding_women"></p>
  </div>
 







  <div class="business-bene-top3333">
    <h1>Men</h1>
  </div>



  <div class="business-bene-top3444">
    <p><input type="text" maxlength="7" name="Before_cdf_funding_men"></p>
  </div>


  <div class="business-bene-top3555">
    <p><input type="text" maxlength="8" name="after_cdf_funding_men"></p>
  </div>




  <div class="business-bene-top33331">
    <h1>Total</h1>
  </div>



  <div class="business-bene-top34441">
    <p><input type="text" maxlength="7" name="before_cdf_funding_all_total"></p>
  </div>





  <div class="business-bene-top35551">
    <p><input type="text" maxlength="7" name="after_cdf_funding_all_total"></p>
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
  <p><input type="text" maxlength="7" name="Before_cdf_funding_youth"></p>
</div>





<div class="business-bene-top3555112">
  <p><input type="text" maxlength="7" name="after_cdf_funding_youth"></p>
</div>




<div class="business-bene-top3333112">
  <h1>Physically<br />Challenged<br />(disabled)</h1>
</div>



<div class="business-bene-top3444112">
  <p><input type="text" maxlength="7" name="Before_cdf_funding_physically_challenged"></p>
</div>





<div class="business-bene-top35551120">
  <p><input type="text" maxlength="7" name="after_cdf_funding_physically_challenged"></p>
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
    <h1><input type="checkbox" name="checkbox12_months" value="12months"></h1>
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
    <h1><input type="checkbox" name="checkbox18_months" value="18months"></h1>
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
    <h1><input type="checkbox" name="checkbox24_months" value="24months"></h1>
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
    <h1><input type="checkbox" name="checkbox36_months"value="36months" ></h1>
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
    <h1><input type="checkbox" name="checkbox48_months" value="48months"></h1>
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
  <input type="checkbox" name="checkbox1_3months" value="1_3months">
 </div>


 <div class="Project-Implimentation-div-inner2">
  <input type="checkbox" name="checkbox3_6months" value="3_6months">
 </div>

 


 <div class="Project-Implimentation-div-inner4">
  <h2>Within 6-9 Months<br /><br />More Than 9 Months</h2>
 </div>

 <div class="Project-Implimentation-div-inner-checkbox2">
  <input type="checkbox" name="checkbox6_9months" value="6_9months">
 </div>

 <div class="Project-Implimentation-div-inner-checkbox">
  <input type="checkbox" name="checkbox_morethan9" value="morethan9">
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
<h1>Bank Name:</h1><hr><p><input type="text" maxlength="60"name="bank_name"></p>
</div>

<div class="bank-name-container-div-2">
  <h1>Branch:</h1><p><input type="text" maxlength="60"name="branch"></p>
</div>


<div class="bank-name-container-div-3">
  <h1>Soft Code:</h1><hr><p></h1><p><input type="text" maxlength="60"name="soft_code"></p>
</div>


<div class="bank-name-container-div-4">
  <h1>Swift Code:</h1><p><input type="text" maxlength="60"name="swift_code"></p>
</div>


<div class="bank-name-container-div-5">
  <h1>Account Number:</h1> <hr><p><input type="text" maxlength="16"name="account_number"></p>
</div>


<div class="bank-name-container-div-6">
  <h1>Tipn:</h1><p><input type="text" maxlength="16"name="tipn_user"></p>
</div>


<div class="bank-name-container-div-7">
  <h1>Mobil Money Name And Number:</h1><p><input type="text" maxlength="40"name="mobil_money_name_and_number"></p>
</div>



</div>
<!----------------------------bank name container end div-->



<div class="section-d-bank-details">
<h1>Section-D: Applicant Declaration</h1>
<p>We the Undersigned,that the information given herein is correct to the best of our knowledge an will take full responsibilty of the repayment of the load and in the event of abuse and missmanagement,of the funds provided under this Empowerment fund. </p>
</div>




<div class="section-club-secretary-bank-details">
<h1>Company/Group/Cooperative/Club Secretary</h1>
<p>Full Names: <input type="text" maxlength="30"name="club_secretary_name"></p><br />
<h3>Signature: <input type="file" name="signature_image"></h3><br />
<h4>Date:<input type="text" maxlength="30"name="date_of_signing1"></h4>
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
<h3>Signature: <input type="file" name="head_of_business_signature_image"></h3><br />
<h4>Date:<input type="text" maxlength="30"name="date_of_signing2"></h4>
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
















<button type="submit" name="submit_infor">submit</button>



   </form>
</div>
<!--------------------------------------------------------------------------end of form container div------------->
















</div>            
</body>
</html>

