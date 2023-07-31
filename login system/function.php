<?php

function search_user(){
global $con;

if(isset($_GET['search_user-btn'])){


    $search_query = htmlentities($_GET['search_user']);
    $get_user = "SELECT * FROM login_user WHERE firstname like '%search_query%' OR lastname like '%search_query%' OR username like '%search_query%'";                
}

else{

$get_user = "SELECT * FROM login_user";

}


$result_run_user = mysqli_query($con,$get_user);
while($row_user = mysqli_fetch_array($result_run_user)){
   $users_id = $row_user['users_id'];     
   $firstname = $row_user['firstname'];  
   $lastname = $row_user['lastname'];   
   $username = $row_user['username'];    
   $pic_upload = $row_user['pic_upload'];   

echo"

<div class='row'>

  <div class='col-sm-3'>
  </div>

  <div class='col-sm-6'>
       <div class='row' id='find_people'>

          <div class='col-sm-4'>
          <a href='user_profile.php?u_id=$users_id'>
          <img src='user-uploads/$pic_upload' width='150px' height='150px' title='$username' style='float:left;' ,margin:1px;'/>
          </a>
          </div><br /><br />

          <div class='col-sm-6'>
          <a style='text-decoration:none; cursor:pointer;color:#3897f0; 'href='user_profile.php?u_id=$users_id'>
          <strong><h2>$firstname $lastname</h2></strong>
          </a>
          </div>
         
          <div class='col-sm-3'></div>

       </div>
  </div>


  <div class='col-sm-4'>
  </div>


</div><br />

";

}




}
?>