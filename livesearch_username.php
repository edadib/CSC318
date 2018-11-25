<?php
$response="";
// connection to database
include("connection.php");
//get the q parameter from URL
$username=$_GET["w"];
//lookup all links from the xml file if length of q>0
if (strlen($username)>0) {
$hint = "";
$sql = mysqli_query($connection, "SELECT * FROM admin WHERE username LIKE
'$username'"); // query -filter
while($row = mysqli_fetch_assoc($sql)) // fetch query into array
{
$hint = "Username taken";
}
}
// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint!="") {
 $response="Username taken";
}else{
    $response="Username available";
}
//output the response
echo $response;
?>
