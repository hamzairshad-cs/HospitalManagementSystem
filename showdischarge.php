<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

$query="Select * from pat_dis";

$query_dept=mysqli_query($con,$query)

?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title></title>
		<style type="text/css">
		#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
input{
	width: 50%;
	height: 30px;
	border-radius: 3px;
}
.idd{
	background-color: 	#C8C8C8;
}
#us,#fn,#do{
	background-color: 	#F0E68C;
}
.edit{
	background-color: orange;
	color: white;
	text-decoration: none;
	text-align: center;
	padding: 7px 15px;
	border-radius: 3px;
}
.add{
	background-color: blue;
	color: white;
	text-decoration: none;
	text-align: center;
	padding: 14px 25px;
	border-radius: 3px;
}

	</style>
</head>
<body style="background-color: lightblue; ">

	<h3 class="display-1" align="center">Discharge Patients Record </h3>
	<a href="patientdis.php" class="add">Add Discharge Patient</a>
	<a href="home.php" class="add" style="background-color: green;">Home</a>
	<br><Br>
<table id="customers">
	<tr><th>Patient Number
	</th>
	<th>Treatment Advise</th>
	<th>Treatment Given</th>
	
	<th>Medicines</th>
	<th>Payment Given</th>
	<th>Discharge On Date</th>
	<TH></TH>
</tr>

<?php


while ($res= mysqli_fetch_array($query_dept)) {
	?>
	<tr>
		<td><?php echo $res['pat_no'];?></td>
		<td><?php echo $res['tr_advs'];?></td>
		<td><?php echo $res['tr_gvn'];?></td>
		<td><?php echo $res['medicines'];?></td>
		<td><?php echo $res['pymt_gv'];?></td>
		<td><?php echo $res['dis_on'];?></td>
		
		
		<td><a class="edit" style="background-color: red;" href="disdelete.php?delete=<?php echo $res['pat_no'];?>">Delete</a></td>
	</tr><br>
	<?php
}




?></table>
</body>
</html>