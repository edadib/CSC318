<?php
include('check_admin.php'); //check if user if an administrator
include('header_admin.php'); //load header content for admin page
include("connection.php"); // connction to database
?>

<div class="container" style="margin-top:50px">
<div class="content">
<h2>Car Details &raquo;</h2>
<hr />

<?php
	$model = $_GET['model']; // get selected ic number
	$sql = mysqli_query($connection, "SELECT * FROM car WHERE model='$model'"); // query for selecting model number from db
	if(mysqli_num_rows($sql) == 0){
	header("Location: view_cars.php");
	}else{
	$row = mysqli_fetch_assoc($sql);
	}
	if(isset($_GET['action']) == 'delete'){ // if delete button clicked
	$delete = mysqli_query($connection, "DELETE FROM car WHERE model='$model'"); // query for deleting data based on model number
	if($delete){ // if query executed successfully
	echo '<div class="alert alert-danger alert-dismissable">><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Car removed.</div>'; // display data removed.'
	}else{ // if query unsuccessfull
	echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Cannot remove car.</div>'; // display message cannot remove data.'
	}
	}
?>

<!-- Display member details -->
<table class="table table-striped table-condensed">
	<tr>
		<th width="20%">Model</th>
		<td><?php echo $row['model']; ?></td>
	</tr>
	
	<tr>
		<th>Name</th>
		<td><?php echo $row['name']; ?></td>
	</tr>
	
	<tr>
		<th>In Stock</th>
		<td><?php echo $row['inStock']; ?></td>
	</tr>
	
	<tr>
		<th>Price</th>
		<td><?php echo $row['price']; ?></td>
	</tr>
	</table>
		<a href="view_cars.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>
		<a href="edit_car.php?model=<?php echo $row['model']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Update Data</a>
		<a href="car_profile.php?action=delete&model=<?php echo $row['model']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure remove data belong to <?php echo $row['name']; ?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Remove Data</a>
</div> <!-- /.content -->
</div> <!-- /.container -->

<script>
$('.datepicker').datepicker({
format: 'dd-mm-yyyy',
})
</script>

<?php
include('footer.php');
?>