<?php
include('check_admin.php'); //check if user if an administrator 
include('header_admin.php'); //load header content for admin page 
include("connection.php"); // connction to database
?>
<div class="container" style="margin-top:50px">
<div class="content">
<h2>Edit Car Details &raquo;</h2>
<hr />

<?php

$model = $_GET['model']; // get ic number
$sql = mysqli_query($connection, "SELECT * FROM car WHERE model='$model'"); // query for select member by model number

if(mysqli_num_rows($sql) == 0){ header("Location: view_cars.php");
 
}else{

}
 

$row = mysqli_fetch_assoc($sql);
 

if(isset($_POST['save'])){ // if save button clicked
$model = $_POST['model'];
$name = $_POST['name'];
$inStock = $_POST['inStock'];
$price = $_POST['price'];

$update = mysqli_query($connection, "UPDATE car SET name='$name', inStock='$inStock', price='$price' WHERE model='$model'") or die(mysqli_error()); // query for update data in database

}

if(isset($_GET['process']) == 'success'){ // if process-success available in update update
echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria- hidden="true">&times;</button>Data updated. <a href="view_cars.php"><- Back</a></div>'; // display data updated.'
}
?>
<!-- Form for updating data -->
<form class="form-horizontal" action="" method="post">
<div class="form-group">
<label class="col-sm-3 control-label">Model</label>
<div class="col-sm-2">
<input type="text" name="model" value="<?php echo $row ['model']; ?>" class="form-control" placeholder="Model" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Name</label>
<div class="col-sm-3">
<input type="text" name="name" value="<?php echo $row ['name']; ?>" class="form-control" placeholder="Name" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">In Stock</label>
<div class="col-sm-4">
<input type="text" name="inStock" value="<?php echo $row ['inStock']; ?>" class="form-control" placeholder="In Stock" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">Price</label>
<div class="col-sm-5">
<input type="text" name="price" value="<?php echo $row ['price']; ?>" class="form-control" placeholder="Price" required>
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">&nbsp;</label>
<div class="col-sm-6">
<input type="submit" name="save" class="btn btn-sm btn-primary" value="Update" data-toggle="tooltip" title="Update car details">
<a href="view_cars.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Cancel">Cancel</a>
</div>
</div>
</form>
</div> <!-- /.content -->
</div> <!-- /.container -->
<script>
$('.datepicker').datepicker({ format: 'dd-mm-yyyy',
})
</script>
<?php include('footer.php');
?>
