<?php
$host="localhost";//server
$user="id2947628_root";
$pass="123456789";
$database="id2947628_ccrs_db";
$connection = mysqli_connect ($host,$user,$pass,$database);
if(mysqli_connect_errno()){
	 echo 'cannot connect to database:'.mysqli_connect_error();
}
?>