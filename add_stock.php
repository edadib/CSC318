<?php
include('check_admin.php'); //check if user if an administrator 
include('header_admin.php'); //load header content for admin page 
include("connection.php"); // connection to database
?>
<div class="container" style="margin-top:50px">
<div class="content">
<h2>Add New Car Stock &raquo;</h2>
<hr />

<?php
if(isset($_POST['add'])){ // if button Add clicked
$model	= $_POST['model'];
$name	= $_POST['name'];
$inStock	= $_POST['inStock'];
$price	= $_POST['price'];

$check = mysqli_query($connection, "SELECT * FROM car WHERE model='$model'"); // query for selected model number
if(mysqli_num_rows($check) == 0){ // check if ic number do not exist in database
$insert = mysqli_query($connection, "INSERT INTO car(model, name, inStock, price) VALUES('$model','$name','$inStock', '$price')") or die(mysqli_error()); // query for adding data into database

if($insert){ // if query executed successfully
echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria- hidden="true">&times;</button>Data for new car added.. <a
 
href="view_users.php"><- Back</a></div>'; // display message data saved successfully.'
}else{ // if query unsuccessfull
echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria- hidden="true">&times;</button>Ups, Cannot add data for new member! <a href="view_users.php"><- Back</a></div>'; // display message data unsuccessfull added!'
}
}else{ // if model number exist in database
echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria- hidden="true">&times;</button>Model Number already exist..! <a href="view_users.php"><- Back</a></div>'; // display message ic number already exist..!'
}
}
?>
<!-- Form for collecting member data -->
<form class="form-horizontal" action="" method="post">
<div class="form-group">
<label class="col-sm-3 control-label">Model</label>
<div class="col-sm-2">
<input type="text" name="model" class="form-control" placeholder="Model" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Name</label>
<div class="col-sm-3">
<input type="text" name="name" class="form-control" placeholder="Name" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">In Stock</label>
<div class="col-sm-4">
<input type="text" name="inStock" class="form-control" placeholder="In Stock" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Price</label>
<div class="col-sm-5">
<input type="text" name="price" class="form-control" placeholder="Price" required>
</div>
</div>
<label class="col-sm-3 control-label">&nbsp;</label>
<div class="col-sm-6">
<input type="submit" name="add" class="btn btn-sm btn-primary" value="Add" data-toggle="tooltip" title="Add member data">
<a href="view_cars.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Cancel">Cancel</a>
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
