<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");





?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<style type="text/css">.add{
	background-color: blue;
	color: white;
	text-decoration: none;
	text-align: center;
	padding: 14px 25px;
	border-radius: 3px;
}</style>
	<title></title>
</head>
<body style="background-color: lightblue; ">
<h2 class="display-1" align="center">Room Details</h2>
<a href="home.php" class="add" style="background-color: green;">Home</a><br><br>
<form  action="roomsubmit.php" method="post">
<label class="h5">Room Number</label>
<input type="number" name="room_no" class="form-control" id="exampleFormControlInput1">
<label class="h5">Type Of Room</label>
<select name="type" class="form-select"><option value="G">General</option>
<option value="P">Private</option></select>
<label class="h5">Status</label>
<select name="status" class="form-select">
	<option value="N">Occupied</option>
	<option value="Y" selected="">Available</option>
</select>
<label class="h5">Room Daily Charges</label>
<input type="text" name="rm_dl_cg" class="form-control" id="exampleFormControlInput1">
<br>
<input type="submit" name="submit" class="btn btn-primary">



</form>
</body>
</html>