<?php
$servername = "localhost";
$username = "root";
$password = "";
$dname = "login";


$con = mysqli_connect($servername,$username,$password);

$db = mysqli_select_db($con,$dname);

?>