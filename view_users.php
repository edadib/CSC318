<?php
	include('check_admin.php'); //check if user if an administrator
	include('header_admin.php'); //load header content for admin page
	include("connection.php"); // connction to database
?>
<div class="container" style="margin-top:50px">
<div class="content">
	<h2>List of Members</h2>
<hr />
<?php
	if(isset($_GET['action']) == 'delete'){ // if remove button clicked
		$icno = $_GET['icno']; // get icno value
		$check = mysqli_query($connection, "SELECT * FROM staff WHERE icno='$icno'"); // query for selected ic number
		
	if(mysqli_num_rows($check) == 0){ // if no icno selected
			echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No data found..</div>'; // display message no data found.'
	}
	else{ // if there are data found
		$delete = mysqli_query($connection, "DELETE FROM staff WHERE icno='$icno'"); // query for removing data
	
	if($delete){ // if delete query succesfull
		echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data removed successfully.</div>'; // display message data removed'
	}
	else{ // if delete query unsuccesfull
		echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Cannot remove data.</div>'; // display message cannot remove data'
	}
	}
	}
?>
<!-- filtering members based on class -->
<br />
<!-- start responsive table-->
<div class="table-responsive">
	<table class="table table-striped table-hover">
		<tr>
			<th>No</th>
			<th>IC No</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Position</th>
			<th>Tools</th>
		</tr>
<?php
$sql = mysqli_query($connection, "SELECT * FROM staff ORDER BY icno ASC"); // query -filter

$no = 1; // start from number 1
while($row = mysqli_fetch_assoc($sql)){ // fetch query into array
echo '
<tr>
<td>'.$no.'</td>
<td>'.$row['icno'].'</td>
<td><a href="profile.php?icno='.$row['icno'].'">'.$row['name'].'</a></td>
<td>'.$row['gender'].'</td>
<td>'.$row['position'].'</td>
<td>
<a href="edit.php?icno='.$row['icno'].'" title="Update Data" data-toggle="tooltip" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
<a href="reset_password.php?icno='.$row['icno'].'" title="Reset Password" data-toggle="tooltip" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
<a href="view_users.php?action=delete&icno='.$row['icno'].'" title="Remove Data" data-toggle="tooltip" onclick="return confirm(\'Are you sure to remove this data for '.$row['name'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
</td>
</tr>
';
$no++; // next number
}
?>
</table>
</div> <!-- /.table-responsive -->
</div> <!-- /.content -->
</div> <!-- /.container -->
</body>
</html>
