<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

$dept="select d_name from department";
$query_dep=mysqli_query($con,$dept);
$dep="select d_name from department";
$query_dept=mysqli_query($con,$dep);


if (isset($_GET['edit'])) {
	$id=$_GET['edit'];

	if (substr($id, 0, 3) === "DR-" ) {
		
		$query="Select * from doc_reg where doc_no='$id'";
		$query_edit=mysqli_query($con,$query);

		$editdoc=mysqli_fetch_assoc($query_edit);
		?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title></title>
</head>
<body  style="background-color: lightblue; ">
	<h2 class="display-1" align="center"> Doctor Edit Form</h2>
	<form action="doctoreditsubmit.php" method="post">
		<label  class="h5">Registeration Number</label><input type="text" name="doc_no" value="<?php echo $editdoc['doc_no']; ?>" readonly class="form-control" id="exampleFormControlInput1">
		<div id="reg" style="display: block;">
<label  class="h5">Qualification</label>
<input type="text" name="qualification" value="<?php echo $editdoc['qualification']; ?>" class="form-control" id="exampleFormControlInput1">
<label  class="h5">Salary</label>
<input type="text" name="salary" value="<?php echo $editdoc['salary']; ?>" class="form-control" id="exampleFormControlInput1">
<label  class="h5">Entry Time</label>
<input type="time" name="en_time" value="<?php echo $editdoc['en_time']; ?>" class="form-control" id="exampleFormControlInput1">
<label  class="h5">Exit Time</label>
<input type="time" name="ex_time" value="<?php echo $editdoc['ex_time']; ?>" class="form-control" id="exampleFormControlInput1">
<label  class="h5">Phone Number</label>


<input type="phone" name="ph_no" value="<?php echo $editdoc['ph_no']; ?>" class="form-control" id="exampleFormControlInput1">
<label  class="h5">Address</label>
<input type="text" name="address" value="<?php echo $editdoc['address']; ?>" class="form-control" id="exampleFormControlInput1">
<label  class="h5">Date of Join</label>
<input type="date" name="doj" value="<?php echo $editdoc['doj']; ?>" class="form-control" id="exampleFormControlInput1">
<label  class="h5">Department</label>
<select name="d_name" class="form-select">
	<?php
while ($res= mysqli_fetch_array($query_dep)) {
?>
<option><?php echo $res['d_name']; ?></option>
<?php } ?>
</select>
</div>

<input type="submit" name="submit" class="btn btn-primary">

	</form>



		
		


<?php	}

else
{
	$query="Select * from doc_on_call where doc_no='$id'";
		$query_edit=mysqli_query($con,$query);

		$editdoc1=mysqli_fetch_assoc($query_edit);
		?>


		<form action="doctoreditsubmit.php" method="post">
		<label>Registeration Number</label><input type="text" name="doc_no" value="<?php echo $editdoc1['doc_no']; ?>" readonly>

<label  class="h5">Qualification</label>
<input type="text" name="qualificationcall" value="<?php echo $editdoc1['qualification']; ?>" >
<label  class="h5">Fees Per Call</label>
<input type="text" name="fs_pr_clcall" value="<?php echo $editdoc1['fs_pr_cl']; ?>">
<label  class="h5">Payment Due</label>
<input type="text" name="pymt_ducall" value="<?php echo $editdoc1['pymt_du']; ?>">
<label  class="h5">Address</label>
<input type="text" name="addresscall" value="<?php echo $editdoc1['address']; ?>">
<label  class="h5">Phone Number</label>
<input type="phone" name="ph_nocall" value="<?php echo $editdoc1['ph_no']; ?>">
<label  class="h5">Department</label>
<select name="d_namee" >

	<?php
while ($re= mysqli_fetch_array($query_dept)) {
?>
<option><?php echo $re['d_name']; ?></option>
<?php } ?>
</select>
</div>


<input type="submit" name="submit">

</body>
</html>

<?php }
	
}





?>

