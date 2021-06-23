
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<style type="text/css">
		.add{
	background-color: blue;
	color: white;
	text-decoration: none;
	text-align: center;
	padding: 14px 25px;
	border-radius: 3px;
}
.add:hover{
	color: white;
	background-color: red;
}
	</style>
	
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
   function displayDivDemo(id, elementValue) {
      document.getElementById(id).style.display = elementValue.value == 'DR' ? 'block' : document.getElementById('call').style.display = 'block';
      	   document.getElementById(id).style.display = 'none';
   }
</script>

</head>
<body style="background-color: lightblue; ">
	<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");
$dept="select d_name from department";
$query_dep=mysqli_query($con,$dept);
$dep="select d_name from department";
$query_dept=mysqli_query($con,$dep);
?>
	<h1 class="display-1" align="center">Doctor Form</h1>
	<a href="home.php" class="add" style="background-color: green;">Home</a><br><br><br>
	<form action="doctorentry.php" method="post">
<label class="h5">Registeration Number</label><br>

<select name="selector" class="form-select" onchange="displayDivDemo('reg', this)" >
<option value="DR">DR</option>
<option value="DC">DC</option></select>
<input type="text" name="doc_no" placeholder="Registeration Number" class="form-control" id="exampleFormControlInput1">
<br><br>
<div id="reg" style="display: block;">

<h3>Regular Doctor Only</h3>
<label class="h5">Qualification</label>
<input type="text" name="qualification" class="form-control" id="exampleFormControlInput1">
<label class="h5">Salary</label>
<input type="text" name="salary" class="form-control" id="exampleFormControlInput1">
<label class="h5">Entry Time</label>
<input type="time" name="en_time" class="form-control" id="exampleFormControlInput1">
<label class="h5">Exit Time</label>
<input type="time" name="ex_time" class="form-control" id="exampleFormControlInput1">
<label class="h5">Phone Number</label>


<input type="phone" name="ph_no" class="form-control" id="exampleFormControlInput1">
<label class="h5">Address</label>
<input type="text" name="address" class="form-control" id="exampleFormControlInput1">
<label class="h5">Date of Join</label>
<input type="date" name="doj" class="form-control" id="exampleFormControlInput1">
<label class="h5">Department</label>
<select name="d_name" class="form-select">
	<?php
while ($res= mysqli_fetch_array($query_dep)) {
?>
<option><?php echo $res['d_name']; ?></option>
<?php } ?>
</select>
</div><br>

<div  id="call" style="display: none;">
<h3>On Call Doctor Only</h3>
<label class="h5">Qualification</label>
<input type="text" name="qualificationcall" class="form-control" id="exampleFormControlInput1">
<label class="h5">Fees Per Call</label>
<input type="text" name="fs_pr_clcall" class="form-control" id="exampleFormControlInput1">
<label class="h5">Payment Due</label>
<input type="text" name="pymt_ducall" class="form-control" id="exampleFormControlInput1">
<label class="h5">Address</label>
<input type="text" name="addresscall" class="form-control" id="exampleFormControlInput1">
<label class="h5">Phone Number</label>
<input type="phone" name="ph_nocall" class="form-control" id="exampleFormControlInput1">
<label class="h5">Department</label>
<select name="d_namee" class="form-select" >

	<?php
while ($re= mysqli_fetch_array($query_dept)) {
?>
<option><?php echo $re['d_name']; ?></option>
<?php } ?>
</select>
</div>


<input type="submit" name="submit" class="btn btn-primary">




</form>


</body>
</html>