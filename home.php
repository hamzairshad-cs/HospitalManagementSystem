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
	<div style="flex: wrap; text-align: center;">
	<h3 class="display-1" align="center" >Add Records</h3><br>
	
	<a href="departmententry.php" class="add" >Department Entry</a>
<a href="doctorform.php" class="add">Doctor Entry</a>

<a href="patiententry.php" class="add">Patient Entry</a>
<a href="patientdis.php" class="add">Patient Discharge</a>
<a href="roomdetails.php" class="add">Add Rooms</a>
</div>
<br><br>


<div style="flex: wrap; text-align: center; ">
<h3 class="display-1" align="center">Show Records</h3><br>

<a href="showdepartment.php" class="add">Show Departments</a>
<a href="showdoctors.php" class="add">Show Doctors</a>
<a href="showpatients.php" class="add">Show Patients</a>
<a href="showdischarge.php" class="add">Show Discharge Patients</a>
<a href="showrooms.php" class="add">Show Rooms</a>
</div>
</body>
</html>