<?php 
include('check_member.php');
include('header_member.php');
?>
?>

<?php

$car1_price=100000;
$car2_price=230000;
$car3_price=60000;
$car4_price=130000;
$table_price=2000;
$chair_price=5000;

$total=0;

if(isset($_POST['table']) && $_POST['table']=='1')
{
    $total=$total+$table_price;
}

if(isset($_POST['chair']) && $_POST['chair']=='1')
{
    $total=$total+$chair_price;
}


if(isset($_POST['car1']) && $_POST['car1']=='1')
{
    $total=$total+$car1_price;
}

if(isset($_POST['car2']) && $_POST['car2']=='1')
{
    $total=$total+$car2_price;
}

if(isset($_POST['car3']) && $_POST['car3']=='1')
{
    $total=$total+$car3_price;
}

if(isset($_POST['car4']) && $_POST['car4']=='1')
{
    $total=$total+$car4_price;
}

if(isset($_POST['car5']) && $_POST['car5']=='1')
{
    $total=$total+$car5_price;
}


?>


<div class="container" style="margin-top:50px">
<div class="content">
<h2>Buying Car &raquo;</h2>
<hr />


<form id="pricecalculation" method="post" action="">
<table>
    
<div class="form-group">
<label class="col-sm-3 control-label">Car With Accesorry</label>
<div class="col-sm-2">
<tr>
<td>812 Superfast</td>
<td><input  type="radio" name="car1" value="1" />Yes</td>
<td><input  type="radio" name="car1" value="0" checked="checked" />No</td>
</tr>
<tr>
<td>488 GTB</td>
<td><input  type="radio" name="car2" value="1" />Yes</td>
<td><input  type="radio" name="car2" value="0" checked="checked" />No</td>
</tr>
<tr>
<td>488 Spyder</td>
<td><input  type="radio" name="car3" value="1" />Yes</td>
<td><input  type="radio" name="car3" value="0" checked="checked" />No</td>
</tr>
<tr>
<td>GTC4Lusso</td>
<td><input  type="radio" name="car4" value="1" />Yes</td>
<td><input  type="radio" name="car4" value="0" checked="checked" />No</td>
</tr>
<tr>
<td>California T</td>
<td><input  type="radio" name="car5" value="1" />Yes</td>
<td><input  type="radio" name="car5" value="0" checked="checked" />No</td>
</tr>
</div>
</div>

<tr> <br><hr><br></tr>

<tr>
<td>Add Bumpers?</td>
<td><input  type="radio" name="table" value="1" />Yes</td>
<td><input  type="radio" name="table" value="0" checked="checked" />No</td>
</tr>
<tr>
<td>Add Spoiler?</td>
<td><input  type="radio" name="chair" value="1" />Yes</td>
<td><input  type="radio" name="chair" value="0" checked="checked" />No</td>
</tr>

<?php

echo "<p><b>Total price is = RM <b>$total</p>\n";

?>


</table>
<br><br>
<input name="submit" type="submit" value="Calculate price"/>
</form>


<br><br>
<a href="loan.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Loan Calculator</a>


</form>
</div> <!-- /.content -->
</div> <!-- /.container -->
<script>

<?php
