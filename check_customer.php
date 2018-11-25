<?php
session_start();
//check if user has login
if(!isset($_SESSION['username'])){
 die( Header("Location: login.php"));
}
//check user level
if($_SESSION['level']!="Customer"){
 die( Header("Location: login.php"));
}
?>