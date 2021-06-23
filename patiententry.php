
<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");
$dept="select d_name from department";
$query_dep=mysqli_query($con,$dept);




?>
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
	<title></title>
</head>
<body style="background-color: lightblue; "> 
	
<h2 class="display-1" align="center">Patient Entry Form</h2>
<a href="home.php" class="add" style="background-color: green;">Home</a><br><br>
<form action="patiententrysubmit.php" method="post">
<label class="h5">Patient Number</label>
<input type="text" name="pat_no"  class="form-control" id="exampleFormControlInput1">
<label class="h5"> Patient Name</label>
<input type="text" name="pat_name"  class="form-control" id="exampleFormControlInput1">
<label class="h5">Entry Date</label>
<input type="date" name="chkkup_dt"  class="form-control" id="exampleFormControlInput1">
<label class="h5">Patient Age</label>
<input type="text" name="pt_age"  class="form-control" id="exampleFormControlInput1">
<label class="h5">Sex</label><br>
<SELECT name="sex" class="form-select"><option value="M" >Male</option>
<option value="F">Female</option>
</SELECT>
<label class="h5">Diagonosis</label>
<input type="text" name="diagonosis"  class="form-control" id="exampleFormControlInput1">
<label class="h5">Referred </label>
<input type="text" name="rfd"  class="form-control" id="exampleFormControlInput1">
<label class="h5">Address</label>
<input type="text" name="address"  class="form-control" id="exampleFormControlInput1">
<label class="h5">City</label>
<input type="text" name="city"  class="form-control" id="exampleFormControlInput1">
<label class="h5">Phone No.</label>
<input type="phone" name="ph_no"  class="form-control" id="exampleFormControlInput1">
<label class="h5">Department</label><br>
<select name="d_name" class="form-select">
	<?php
while ($res= mysqli_fetch_array($query_dep)) {
?>
<option value="<?php echo $res['d_name']; ?>"><?php echo $res['d_name']; ?></option>
<?php } ?>
</select><br>
<input type="submit" name="submit" class="btn btn-primary">

</form>




</body>
</html>