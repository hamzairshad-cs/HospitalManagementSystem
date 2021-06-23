<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

$query="Select * from department";
$query_dept=mysqli_query($con,$query)


?>

<!DOCTYPE html>
<html>
<head>
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
	

	<h3>Department Records </h3>
	<a href="departmententry.php" class="add">Add Deparment</a>
	<a href="home.php" class="add" style="background-color: green;">Home</a>
<table id="customers">
	<tr><th>Department Name
	</th>
	<th>Location</th>
	<th>Facilities</th>
	
	
	<th>Delete</th>
</tr>

<?php


while ($res= mysqli_fetch_array($query_dept)) {
	?>
	<tr>
		<td><?php echo $res['d_name'];?></td>
		<td><?php echo $res['d_location'];?></td>
		<td><?php echo $res['facilities'];?></td>
		
		
		<td><a class="edit" style="background-color: red;" href="deptdelete.php?delete=<?php echo $res['d_name'];?>">Delete</a></td>
	</tr><br>
	<?php
}




?></table>
</body>
</html>