<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

$query= "SELECT COUNT(pat_chkup.pat_no) as visited_times,pat_entry.pat_no,pat_entry.pat_name,pat_entry.chkup_dt,pat_entry.pt_age,pat_entry.sex,pat_entry.diagonosis,pat_entry.address,pat_entry.ph_no,pat_entry.department,COALESCE(pat_reg.treatment,pat_admit.trmt_sdt) as treatment,COALESCE(pat_reg.medicines,pat_opr.medicines) as medicines,pat_reg.pamyt,pat_opr.date_opr,COALESCE(pat_opr.in_cond,pat_admit.cond_on) as condtion,pat_opr.afop_cond,pat_opr.ty_operation,COALESCE(pat_opr.doc_no,pat_reg.doc_no,pat_chkup.doc_no) as doc_no,pat_admit.adv_pymt,pat_chkup.status,pat_admit.admtd_on,pat_admit.invstgtn_dn,pat_admit.attdnt_nm,pat_admit.room_no FROM pat_entry left JOIN pat_reg ON pat_entry.pat_no=pat_reg.pat_no left JOIN pat_opr ON pat_entry.pat_no=pat_opr.pat_no left JOIN pat_admit ON pat_entry.pat_no=pat_admit.pat_no LEFT JOIN pat_chkup ON pat_entry.pat_no=pat_chkup.pat_no GROUP BY pat_chkup.pat_no"; 

$qeuryrun=mysqli_query($con,$query);

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
	<h2 class="display-1" align="center">Patient Data</h2>
	<a href="patiententry.php" class="add">Add Patient</a>
	<a href="home.php" class="add" style="background-color: green;">Home</a>
	<br><br>
<table id="customers">

	<tr>
		<th>Visited Counting</th><th>Patient Number
	</th>
	<th>Patient Name</th>
	<th>Check Up Date</th>
	<th>Patient Age</th>
	<th>Sex</th>
	<th>Diagonosis</th>
	<th>Address</th>
	<th>Phone No</th>
	<th>Department</th>

	<th>Treatment</th>
	<th>Medicines</th>
	<th>Payment</th>
	<th>Operation Date</th>
	<th>Condition</th>
	<th>After Operation Condition</th>
	<th>Operation Type</th>
	<th>Doctor Number</th>
	<th>Advance Payment</th>
	<th>Status</th>
	<th>Admitted Date</th>
	<th>Investigating Doctors Count</th>
	<th>Attendants COunt</th>
	<th>Room Number</th>
	
	
	<th></th>
	<th></th>
</tr>

<?php


while ($res= mysqli_fetch_array($qeuryrun)) {
	$a=$res['visited_times'];
	?>
	<tr>
		<td><?php echo round(sqrt($a)) ; ?></td>
		<td><?php echo $res['pat_no'];?></td>
		<td><?php echo $res['pat_name'];?></td>
		<td><?php echo $res['chkup_dt']; ?></td>
		<td><?php echo $res['pt_age']; ?></td>
		<td><?php echo $res['sex']; ?></td>
		<td><?php echo $res['diagonosis']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['ph_no']; ?></td>
		
		<td><?php echo $res['department']; ?></td>
		<td><?php echo $res['treatment']; ?></td>
		<td><?php echo $res['medicines']; ?></td>
		<td><?php echo $res['pamyt']; ?></td>
		<td><?php echo $res['date_opr']; ?></td>
		<td><?php echo $res['condtion']; ?></td>
		<td><?php echo $res['afop_cond']; ?></td>
		<td><?php echo $res['ty_operation']; ?></td>
		<td><?php echo $res['doc_no']; ?></td>
		<td><?php echo $res['adv_pymt']; ?></td>
		<td><?php echo $res['status']; ?></td>
		<td><?php echo $res['admtd_on']; ?></td>
		<td><?php echo $res['invstgtn_dn']; ?></td>
		<td><?php echo $res['attdnt_nm']; ?></td>
		<td><?php echo $res['room_no']; ?></td>


		
		<td><a class="edit" href="patedit.php?edit=<?php echo $res['pat_no'];?>">Edit</a></td>
		<td><a class="edit" style="background-color: red;" href="patdelete.php?delet=<?php echo $res['pat_no'];?>">Delete</a></td>
	</tr><br>
	<?php
}
?></table>
<br>


</body>
</html>