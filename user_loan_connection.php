<?php
$servername = "localhost";
$username = "root";
$password = "";
$dname = "cdf_loans";


$con = mysqli_connect($servername,$username,$password);

$db = mysqli_select_db($con,$dname);

?>