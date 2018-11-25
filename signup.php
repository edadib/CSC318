<?php
session_start();
if($_SESSION){
if($_SESSION['level']=="Administrator")
{
header("Location: admin.php");
}
if($_SESSION['level']=="Member")
{
header("Location: member.php");
}
}
include('header.php'); //load header content for public users
include("connection.php"); // connection to database
?>
<div class="container" style="margin-top:50px">
<div class="content">
<h2>Sign Up &raquo;</h2>
<hr />
<?php
if(isset($_POST['btn-signup'])) {
$icno=mysqli_real_escape_string($connection,$_POST['icno']); 
$username=mysqli_real_escape_string($connection,$_POST['username']);
$password=mysqli_real_escape_string($connection,$_POST['password']);
$password=md5($password); // Encrypted Password
$level = "Customer";
$name=mysqli_real_escape_string($connection,$_POST['name']);
$gender=mysqli_real_escape_string($connection,$_POST['gender']);
$dob=mysqli_real_escape_string($connection,$_POST['dob']);
$address=mysqli_real_escape_string($connection,$_POST['address']);
$email=mysqli_real_escape_string($connection,$_POST['email']);
$telephone=mysqli_real_escape_string($connection,$_POST['telephone']);
$position= "Customer";
$check_icno = $connection->query("SELECT icno FROM admin WHERE icno='$icno'");
$countic = $check_icno->num_rows;
$check_username = $connection->query("SELECT username FROM admin WHERE username='$username'");
$countun = $check_username->num_rows;
if (($countic==0) && ($countun==0)){
$query = "INSERT INTO admin(username,password,level,icno) VALUES ('$username','$password','$level','$icno')";
$query2 = "INSERT INTO staff(icno, name, gender, dob, address, telephone, email, position) VALUES('$icno','$name', '$gender', '$dob','$address', '$telephone', '$email', '$position')";
if ($s1=mysqli_query($connection,$query) && $s2=mysqli_query($connection,$query2)) {
$msg = "<div class='alert alert-success'> <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Successfully registered - User level is Customer !</div>";
} else {
$msg = "<div class='alert alert-danger'> <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while registering !</div>";
}
} else {
$msg = "<div class='alert alert-danger'> <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Sorry.. Username or IC Number already exist!</div>";
}
$connection->close();
}
?>
<!-- Form for collecting member data during signup -->
<form class="form-horizontal" action="signup.php" method="post">
<?php
if (isset($msg)) {
echo $msg;
}
?>
<div class="form-group">
<label class="col-sm-3 control-label">IC No</label>
<div class="col-sm-2">
<input type="text" name="icno" class="form-control" placeholder="IC No" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Username</label>
<div class="col-sm-2">
<input type="text" name="username" class="form-control"
onkeyup="showResult2(this.value)" placeholder="Username"
autocomplete="off"/>
<div id="livesearch_username" style="position: center;"></div>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Password</label>
<div class="col-sm-2">
<input type="password" name="password" class="form-control" placeholder="Password" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Name</label>
<div class="col-sm-4">
<input type="text" name="name" class="form-control" placeholder="Name" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Gender</label>
<div class="col-sm-2">
<select name="gender" class="form-control" required>
<option value="">- Select Gender -</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Date of Birth</label>
<div class="col-sm-3">
<input type="date" name="dob" class="input-group datepicker form-control" date="" data-date-format="dd-mm-yyyy" placeholder="DD-MM-YYYY" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Address</label>
<div class="col-sm-3">
<textarea name="address" class="form-control" placeholder="Address"></textarea>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Telephone No</label>
<div class="col-sm-3">
<input type="text" name="telephone" class="form-control" placeholder="Telephone No" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Email</label>
<div class="col-sm-3">
<input type="email" name="email" class="form-control" placeholder="Email" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label"></label>
<div class="col-sm-2">
<button type="submit" class="btn btn-sm btn-primary" name="btn-signup">
<span class="glyphicon glyphicon-log-in"></span> &nbsp;
Create Account
</button>
<hr />
<a href="login.php" class="btn btn-default">Log In Here</a>
</div>
</div>
</form>
</div> <!-- /.content -->
</div> <!-- /.container -->
<script>
function showResult2(str) {
if (str.length==0) {
document.getElementById("livesearch_username").innerHTML="";

document.getElementById("livesearch_username").style.background="transparent";
document.getElementById("livesearch_username").style.border="0px";
return;
}
if (window.XMLHttpRequest) {
// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
} else { // code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function() {
if (this.readyState==4 && this.status==200) {
document.getElementById("livesearch_username").innerHTML=this.responseText;
document.getElementById("livesearch_username").style.border="1px solid black";
document.getElementById("livesearch_username").style.background="#F0E68C";
document.getElementById("livesearch_username").style.padding="2px 7px 2px 7px";}
}
xmlhttp.open("GET","livesearch_username.php?w="+str,true);
xmlhttp.send();
}
</script>
<?php
include('footer.php');
?>