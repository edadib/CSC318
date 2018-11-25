<?php
	include('check_admin.php'); //check if user if an administrator
	include('header_admin.php'); //load header content for admin page
	include("connection.php"); // connction to database
?>
<div class="container" style="margin-top:50px">
<div class="content">
	<h2>List of Car</h2>
<hr />
<?php
	if(isset($_GET['action']) == 'delete'){ // if remove button clicked
		$model = $_GET['model']; // get icno value
		$check = mysqli_query($connection, "SELECT * FROM car WHERE model='$model'"); // query for selected ic number
		
	if(mysqli_num_rows($check) == 0){ // if no model selected
			echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No data found..</div>'; // display message no data found.'
	}
	else{ // if there are data found
		$delete = mysqli_query($connection, "DELETE FROM car WHERE model='$model'"); // query for removing data
	
	if($delete){ // if delete query succesfull
		echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Car removed successfully.</div>'; // display message data removed'
	}
	else{ // if delete query unsuccesfull
		echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Cannot remove car.</div>'; // display message cannot remove data'
	}
	}
	}
?>
<!-- filtering members based on class -->
<form class="form-inline" method="get">
<div class="form-group">
	<select name="filter" class="form-control" onchange="form.submit()">
		<option value="0"> Filter Member by Model </option>
		<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL); ?>
		<option value="1" <?php if($filter == '1'){ echo 'selected'; } ?>>812 Superfast</option>
		<option value="2" <?php if($filter == '2'){ echo 'selected'; } ?>>488GTB/Spyder</option>
		<option value="3" <?php if($filter == '3'){ echo 'selected'; } ?>>GTC4Lusso/Lusso T</option>
		<option value="4" <?php if($filter == '4'){ echo 'selected'; } ?>>California</option>
	</select>
</div>

</form> <!-- end filter -->

<br />
<!-- start responsive table-->
<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>Model</th>
			<th>Name</th>
			<th>In Stock</th>
			<th>Price</th>
			<th>Tools</th>
		</tr>
<?php
if($filter){
$sql = mysqli_query($connection, "SELECT * FROM car WHERE model='$filter' ORDER BY model ASC"); // query -filter
} else{
$sql = mysqli_query($connection, "SELECT * FROM car ORDER BY name ASC"); // if no filter
}
if(mysqli_num_rows($sql) == 0){
echo '<tr><td colspan="14">No data retrieved..</td></tr>'; // if no data retrieved from database
}else{ // if there are data
$no = 1; // start from number 1
while($row = mysqli_fetch_assoc($sql)){ // fetch query into array
echo '
<tr>
<td>'.$no.'</td>
<td>'.$row['model'].'</td>
<td><a href="car_profile.php?model='.$row['model'].'">'.$row['name'].'</a></td>
<td>'.$row['inStock'].'</td>
<td>'.$row['price'].'</td>
<td>
<a href="edit_car.php?model='.$row['model'].'" title="Update Data" data-toggle="tooltip" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
<a href="view_cars.php?action=delete&model='.$row['model'].'" title="Remove Data" data-toggle="tooltip" onclick="return confirm(\'Are you sure to remove this data for '.$row['name'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
</td>
</tr>
';
$no++; // next number
}
}
?>
</table>
</div> <!-- /.table-responsive -->
</div> <!-- /.content -->
</div> <!-- /.container -->
</body>
</html>
