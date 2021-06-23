<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");
if (isset($_GET['edit'])) {
	$pat=$_GET['edit'];
	

	$queryo="select status from pat_chkup where pat_no='$pat'";
	$queryorun=mysqli_query($con,$queryo);
	$res= mysqli_fetch_array($queryorun);

	$queryr="Select room_no,type,status from room_detail where status='Y'";
$queryro=mysqli_query($con,$queryr);
$dep11="select d_name from department";
$query_dep11=mysqli_query($con,$dep11);


?>

<!DOCTYPE html>
<html>
<head>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title></title>
</head>
<body style="background-color: lightblue; ">
<?php



	if ($res['status'] == 'Admit') {

		$q="Select * from pat_admit where pat_no='$pat'";
		$qu=mysqli_query($con,$q);
		$ress= mysqli_fetch_array($qu);


		

		$doc="select department from pat_entry where pat_no='$pat'";
		$qdp=mysqli_query($con,$doc);
		$dc= mysqli_fetch_array($qdp);
		$doctor=$dc['department'];

		

		$doccom="Select doc_no from all_doctors where department='$doctor'";
		$doctorcome=mysqli_query($con,$doccom);
		$e=mysqli_fetch_array($doctorcome);
		
		?>


<h3 class="display-1" align="center">Admit Patients</h3>

	<form action="admitpatient.php" method="post">
		<label class="h5">Patient Number</label><input type="text" name="pat_no" value="<?php echo $ress['pat_no'] ?>"; readonly class="form-control" id="exampleFormControlInput1">
		<label class="h5">Doctor Number</label>
		<select name="doc_no" class="form-select">
	<?php
	$id=$ress['pat_no'];
$sqlq="Select * from pat_entry where pat_no='$pat'";
$sqlqrun=mysqli_query($con,$sqlq);
$sqll= mysqli_fetch_array($sqlqrun);




while ($resss= mysqli_fetch_array($doctorcome)) {
?>
<option><?php echo $resss['doc_no']; ?></option>
<?php } ?>

</select>
<label class="h5">Patient Name</label>
<input type="text" name="pat_name" value="<?php echo $sqll['pat_name']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Patient Age</label>
<input type="text" name="pt_age" value="<?php echo $sqll['pt_age']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Sex</label>
<SELECT name="sex" class="form-select"><option value="M">Male</option>
<option value="F">Female</option>
</SELECT>
<label class="h5">Entry Date</label>
<input type="date" name="chkkup_dt" value="<?php echo $sqll['chkup_dt']; ?>" class="form-control" id="exampleFormControlInput1" ">
<label class="h5">Diagonosis</label>
<input type="text" name="diagonosis" value="<?php echo $sqll['diagonosis']; ?>" class="form-control" id="exampleFormControlInput1" >
<label class="h5">City</label>
<input type="text" name="city" value="<?php echo $sqll['city']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Phone No.</label>
<input type="phone" name="ph_no" value="<?php echo $sqll['ph_no']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Referred </label>
<input type="text" name="rfd" value="<?php echo $sqll['rfd']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Address</label>
<input type="text" name="address" value="<?php echo $sqll['address']; ?>" class="form-control" id="exampleFormControlInput1"> 




	<label class="h5">Advance Payment</label>
	<input type="text" name="adv_pymt" value="<?php echo $ress['adv_pymt'] ?>;" class="form-control" id="exampleFormControlInput1">
	<label class="h5">Mode Of Payment</label>
	<input type="text" name="mode_pymt" value="<?php echo $ress['mode_pymt'] ?>;" class="form-control" id="exampleFormControlInput1">
	
	
<label class="h5" >Admitted On</label>
<input type="date" name="admtd_on" value="<?php echo $ress['admtd_on'] ?>;" class="form-control" id="exampleFormControlInput1">
<label class="h5">Cndition</label>
<input type="text" name="cond_on" value="<?php echo $ress['cond_on'] ?>;" class="form-control" id="exampleFormControlInput1">

<label class="h5">Investigating Doctor Numbers</label>
<input type="text" name="invstgtn_dn" value="<?php echo $ress['invstgtn_dn'] ?> ;"  class="form-control" id="exampleFormControlInput1">
<label class="h5">Attendent Numbers</label>
<input type="text" name="attdnt_nm" value="<?php echo $ress['attdnt_nm'] ?>;" class="form-control" id="exampleFormControlInput1">
<label class="h5">Room Number</label>
<select name="room_no" class="form-select">
	<?php
while ($resro= mysqli_fetch_array($queryro) ){
?>
<option value="<?php echo $resro['room_no']?>"> <?php echo $resro['room_no']?> </option>

<?php } ?>

</select>


</div><br>
<input type="submit" name="submit" class="btn btn-primary">
</form>







<?php		# code...
	}
	 else if ($res['status'] == 'Regular') {

	 	$q="Select * from pat_reg where pat_no='$pat'";
		$qu=mysqli_query($con,$q);
		$ress= mysqli_fetch_array($qu);
		$i=$ress['pat_no'];

		$doc="select department from pat_entry where pat_no='$i'";
		$qdp=mysqli_query($con,$doc);
		$dc= mysqli_fetch_array($qdp);

		$doctor=$dc['department'];

		$doccom="Select doc_no from all_doctors where department='$doctor'";
		$doctorcome=mysqli_query($con,$doccom);

		
		

		?>
		<h3 class="display-1" align="center"> Regular Patient</h3>
		<form action="regpatient.php" method="post">
			<label class="h5">Patient Number</label><input type="text" name="pat_no" value="<?php echo $ress['pat_no'] ?>"; readonly class="form-control" id="exampleFormControlInput1">
		<label class="h5">Doctor</label>
		<select name="doc_no" class="form-select">
	<?php
	$id=$ress['pat_no'];
$sqlq="Select * from pat_entry where pat_no='$id'";
$sqlqrun=mysqli_query($con,$sqlq);
$sqll= mysqli_fetch_array($sqlqrun);





while ($resss= mysqli_fetch_array($doctorcome)) {
?>
<option><?php echo $resss['doc_no']; ?></option>
<?php } ?>

</select>
<label class="h5">Patient Name</label>
<input type="text" name="pat_name" value="<?php echo $sqll['pat_name']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Patient Age</label>
<input type="text" name="pt_age" value="<?php echo $sqll['pt_age']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Sex</label>
<SELECT name="sex" class="form-select"><option value="M">Male</option>
<option value="F">Female</option>
</SELECT>
<label class="h5">Entry Date</label>
<input type="date" name="chkkup_dt" value="<?php echo $sqll['chkup_dt']; ?>"  class="form-control" id="exampleFormControlInput1">
<label class="h5">Diagonosis</label>
<input type="text" name="diagonosis" value="<?php echo $sqll['diagonosis']; ?>" class="form-control" id="exampleFormControlInput1" >
<label class="h5">City</label>
<input type="text" name="city" value="<?php echo $sqll['city']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Phone No.</label>
<input type="phone" name="ph_no" value="<?php echo $sqll['ph_no']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Referred </label>
<input type="text" name="rfd" value="<?php echo $sqll['rfd']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Address</label>
<input type="text" name="address" value="<?php echo $sqll['address']; ?>" class="form-control" id="exampleFormControlInput1">

		<label>Date Visit</label>
<input type="Date" name="dat_vis" value="<?php echo $ress['dat_vis']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Condition</label>
<input type="text" name="conditio" value="<?php echo $ress['conditio']; ?>" class="form-control" id="exampleFormControlInput1">

<label class="h5">Medicines</label>
<input type="text" name="medicines" value="<?php echo $ress['medicines']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Payment</label>
<input type="text" name="paymt" value="<?php echo $ress['pamyt']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Treatment</label>
<input type="text" name="treatment" value="<?php echo $ress['treatment']; ?>" class="form-control" id="exampleFormControlInput1"><br>
<input type="submit" name="submit" class="btn btn-primary">


		</form>
		
	



	<?php	# code...
	}
	else if ($res['status'] == 'Operation') {
$q="Select * from pat_opr where pat_no='$pat'";
		$qu=mysqli_query($con,$q);
		$ress= mysqli_fetch_array($qu);
		$i=$ress['pat_no'];

		$doc="select department from pat_entry where pat_no='$i'";
		$qdp=mysqli_query($con,$doc);
		$dc= mysqli_fetch_array($qdp);

		$doctor=$dc['department'];

		$doccom="Select doc_no from all_doctors where department='$doctor'";
		$doctorcome=mysqli_query($con,$doccom);

		$q="Select * from pat_opr where pat_no='$pat'";
		$qu=mysqli_query($con,$q);
		$ress= mysqli_fetch_array($qu);
		$dv=$ress['doc_no'];
		?>
		<h3 class="display-1" align="center">Operation Patients</h3>
		<form action="oprpatient.php" method="post">
			<label class="h5">Patient Number</label><input type="text" name="pat_no" value="<?php echo $ress['pat_no'] ?>"; readonly class="form-control" id="exampleFormControlInput1">
			<label class="h5">Doctor Number</label>
			<select name="doc_no" class="form-select">
	<?php
$id=$ress['pat_no'];
$sqlq="Select * from pat_entry where pat_no='$id'";
$sqlqrun=mysqli_query($con,$sqlq);
$sqll= mysqli_fetch_array($sqlqrun);



	
while ($resss= mysqli_fetch_array($doctorcome)) {
?>
<option><?php echo $resss['doc_no']; ?></option>
<?php } ?>

</select>
			

<label class="h5">Patient Name</label>
<input type="text" name="pat_name" value="<?php echo $sqll['pat_name']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Patient Age</label>
<input type="text" name="pt_age" value="<?php echo $sqll['pt_age']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Sex</label>
<SELECT name="sex" class="form-select"><option value="M">Male</option>
<option value="F">Female</option>
</SELECT>
<label class="h5">Entry Date</label>
<input type="date" name="chkkup_dt"  class="form-control" id="exampleFormControlInput1" value="<?php echo $sqll['chkup_dt']; ?>">
<label class="h5">Diagonosis</label>
<input type="text" name="diagonosis" value="<?php echo $sqll['diagonosis']; ?>" class="form-control" id="exampleFormControlInput1" >
<label class="h5">City</label>
<input type="text" name="city" value="<?php echo $sqll['city']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Phone No.</label>
<input type="phone" name="ph_no" value="<?php echo $sqll['ph_no']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Referred </label>
<input type="text" name="rfd" value="<?php echo $sqll['rfd']; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Address</label>
<input type="text" name="address" value="<?php echo $sqll['address']; ?>" class="form-control" id="exampleFormControlInput1">



<input type="Date" name="date_opr" value="<?php echo $ress['date_opr'] ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">In Condition Before Operation</label>
<input type="text" name="in_cond" value="<?php echo $ress['in_cond'] ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">After Operation Cndition</label>
<input type="text" name="afop_cond" value="<?php echo $ress['afop_cond'] ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Type Of Operation</label>
<input type="text" name="ty_operation" value="<?php echo $ress['ty_operation'] ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Medicines</label>
<input type="text" name="medicinesop" value="<?php echo $ress['medicines'] ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Operation Theatre Number</label>
<input type="text" name="opth_no" value="<?php echo $ress['opth_no'] ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Other Surgeons</label>
<input type="text" name="other_sug" value="<?php echo $ress['other_sug'] ?>" class="form-control" id="exampleFormControlInput1"><br>
<input type="submit" name="submit" class="btn btn-primary"></form>
	


	<?php	# code...
	}




}

?>
</body>
</html>