<?php
session_start();
$icno = $_SESSION['icno'];
//check if user has login
include('check_customer.php'); //load header content for customer page
include('header_customer.php'); //load header content for customer page
include("connection.php"); // connction to database
?>
<div class="container" style="margin-top:50px">
<div class="content">
<h2>View Details &raquo;</h2>
<hr />
<?php
$sql = mysqli_query($connection, "SELECT * FROM staff WHERE icno='$icno'");
// query for selecting ic number from db
if(mysqli_num_rows($sql) == 0){
header("Location: student.php");
}else{
$row = mysqli_fetch_assoc($sql);
}
?>
<!-- Display member details -->
<table class="table table-striped table-condensed">
    <tr> 
<tr>
<th width="20%">IC No</th>
<td><?php echo $row['icno']; ?></td>
</tr>
<tr>
<th>Name</th>
<td><?php echo $row['name']; ?></td>
</tr>
<tr>
<th>Gender</th>
<td><?php echo $row['gender']; ?></td>
</tr>
<tr>
<th>Date of Birth</th>
<td><?php echo $row['dob']; ?></td>
</tr>
<tr>
<th>Address</th>
<td><?php echo $row['address']; ?></td>
</tr>
<tr>
<th>Telephone</th>
<td><?php echo $row['telephone']; ?></td>
</tr>
<tr>
<th>Email</th>
<td><?php echo $row['email']; ?></td>
</tr>
<tr>
<th>Position</th>
<td><?php echo $row['position']; ?></td>
</tr>
</table>
<a href="customer.php" class="btn btn-sm btn-info"><span class="glyphicon glyphiconarrow-left"
aria-hidden="true"></span> Back</a>
<?php
?> 
 

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