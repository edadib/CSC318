<?php
include('check_admin.php'); //check if user if an administrator 
include('header_admin.php'); //load header content for admin page 
include("connection.php"); // connection to database
?>
<div class="container" style="margin-top:50px">
<div class="content">
<h2>Add New Member &raquo;</h2>
<hr />

<?php
if(isset($_POST['add'])){ // if button Add clicked
$icno	= $_POST['icno'];
$name	= $_POST['name'];
$gender	= $_POST['gender'];
$dob	= $_POST['dob'];
$address	= $_POST['address'];
$telephone	= $_POST['telephone'];
$email	= $_POST['email'];
$position	= $_POST['position'];

$check = mysqli_query($connection, "SELECT * FROM staff WHERE icno='$icno'"); // query for selected ic number
if(mysqli_num_rows($check) == 0){ // check if ic number do not exist in database
$insert = mysqli_query($connection, "INSERT INTO staff(icno, name, gender, dob, address, telephone, email, position) VALUES('$icno','$name', '$gender', '$dob', '$address', '$telephone', '$email', '$position')") or die(mysqli_error()); // query for adding data into database

if($insert){ // if query executed successfully
echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria- hidden="true">&times;</button>Data for new member added.. <a
 
href="view_users.php"><- Back</a></div>'; // display message data saved successfully.'
}else{ // if query unsuccessfull
echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria- hidden="true">&times;</button>Ups, Cannot add data for new member! <a href="view_users.php"><- Back</a></div>'; // display message data unsuccessfull added!'
}
}else{ // if ic number exist in database
echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria- hidden="true">&times;</button>IC Number already exist..! <a href="view_users.php"><- Back</a></div>'; // display message ic number already exist..!'
}
}
?>
<!-- Form for collecting member data -->
<form class="form-horizontal" action="" method="post">
<div class="form-group">
<label class="col-sm-3 control-label">IC No</label>
<div class="col-sm-2">
<input type="text" name="icno" class="form-control" placeholder="IC No" required>
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
<option value=""> - Select Gender - </option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Date of Birth</label>
<div class="col-sm-3">
<input type="text" name="dob" class="input-group datepicker form-control" date="" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" required>
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
<label class="col-sm-3 control-label">Position</label>
<div class="col-sm-2">
<select name="position" class="form-control" required>
<option value=""> - Select Position - </option>
<option value="Member">Member</option>
<option value="Customer">Customer</option>
</select>
</div>
</div>
<label class="col-sm-3 control-label">&nbsp;</label>
<div class="col-sm-6">
<input type="submit" name="add" class="btn btn-sm btn-primary" value="Add" data-toggle="tooltip" title="Add member data">
<a href="view_users.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Cancel">Cancel</a>
</div>
</div>
</form> <!-- /form -->

</div> <!-- /.content -->
</div> <!-- /.container -->
<script>
$('.datepicker').datepicker({ format: 'dd-mm-yyyy',
})
</script>
<?php include('footer.php');
?>
