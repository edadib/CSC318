<?php
include('check_member.php');
include('header_member.php');
?>
<!-- Content start here -->
<div class="container" style="margin-top:90px">
 <h2>Members Page</h2>
 <a href="update_member_data.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Update Profile</a>
<a href="member_profile.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Update Stock</a>
<a href="booking.php" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Loan</a>
</div>
<p>
<?php
include('footer.php');
?>