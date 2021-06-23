<!DOCTYPE html>
<html>
<head>
	<title></title>
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

</head>
<body style="background-color: lightblue; ">
	<?php
	$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_POST['deptsubmit'])) 
{
$d_name=$_POST['d_name'];
$d_location=$_POST['d_location'];
$facilities=$_POST['facilities'];
	
	$query="Insert Into department (d_name,d_location,facilities) values ('$d_name','$d_location','$facilities')";
	$query_dept=mysqli_query($con,$query);
	if ($query_dept) {
header("location:showdepartment.php");
	# code...
}

	# code...
}

	?>

	<h2 class="display-1" align="center">Department Entry</h2>

&nbsp&nbsp<a href="home.php" class="add" style="background-color: green;">Home</a><br><br>
<form action="" method="post">
	<label class="h5"> Department name</label>	<input type="text" name="d_name" class="form-control" id="exampleFormControlInput1">
<label class="h5">Department Location</label>	<input type="text " name="d_location" class="form-control" id="exampleFormControlInput1">
<label class="h5">Facilities</label>	<input type="text" name="facilities" class="form-control" id="exampleFormControlInput1">
<Br>
&nbsp&nbsp<input type="submit" name="deptsubmit" class="btn btn-primary">
</form>
</body>
</html>