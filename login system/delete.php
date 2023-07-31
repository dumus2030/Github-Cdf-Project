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

