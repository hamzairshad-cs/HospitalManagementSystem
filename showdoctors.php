<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

$query="Select all_doctors.doc_no,all_doctors.department,COALESCE(doc_reg.qualification, doc_on_call.qualification) as qualification,doc_reg.salary,COALESCE(doc_reg.address,doc_on_call.address) as address,COALESCE(doc_reg.ph_no,doc_on_call.ph_no) as phone,doc_reg.doj,doc_reg.en_time,doc_reg.ex_time,doc_on_call.fs_pr_cl,doc_on_call.pymt_du from all_doctors LEFT join doc_on_call on all_doctors.doc_no=doc_on_call.doc_no left JOIN doc_reg ON all_doctors.doc_no=doc_reg.doc_no " ;
$query_dept=mysqli_query($con,$query);



?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
	<h2 class="display-1" align="center">Doctors Data</h2>
	<a href="doctorform.php" class="add">Add Doctors</a>
	<a href="home.php" class="add" style="background-color: green;">Home</a>
	
<table id="customers">
	<tr><th>Doctor Number
	</th>
	<th>Department</th>
	<th>Qualification</th>
	<th>Salary</th>
	<th>Address</th>
	<th>Phone</th>
	<th>Date Of Join</th>
	<th>Entry Time</th>
	<th>Exit Time</th>

	
	<th>Payment Due</th>
	
	
	<th></th>
	<th></th>
</tr>

<?php


while ($res= mysqli_fetch_array($query_dept)) {
	?>
	<tr>
		<td><?php echo $res['doc_no'];?></td>
		<td><?php echo $res['department'];?></td>
		<td><?php echo $res['qualification'];?></td>
		<td><?php echo $res['salary']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['doj']; ?></td>
		<td><?php echo $res['en_time']; ?></td>
		<td><?php echo $res['ex_time']; ?></td>
		
		
		<td><?php echo $res['pymt_du']; ?></td>

		
		<td><a class="edit" href="doctoredit.php?edit=<?php echo $res['doc_no'];?>">Edit</a></td>
		<td><a class="edit" style="background-color: red;" href="doctordelete.php?delet=<?php echo $res['doc_no'];?>">Delete</a></td>
	</tr><br>
	<?php
}
?></table>
<br>


</body>
</html>