<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");
$pat_no="PT-" . $_POST['pat_no'];
$pat_name=$_POST['pat_name'];
$chkkup_dt=$_POST['chkkup_dt'];
$pt_age=$_POST['pt_age'];
$sex=$_POST['sex'];
$diagonosis=$_POST['diagonosis'];
$rfd=$_POST['rfd'];
$address=$_POST['address'];
$city=$_POST['city'];
$ph_no=$_POST['ph_no'];
$department=$_POST['d_name'];
if (isset($_POST['submit'])) {
	$query="Insert into pat_entry (pat_no,pat_name,chkup_dt,pt_age,sex,diagonosis,rfd,address,city,ph_no,department) values ('$pat_no','$pat_name','$chkkup_dt','$pt_age','$sex','$diagonosis','$rfd','$address','$city','$ph_no','$department')";
	$queryrun=mysqli_query($con,$query);

}

$dept="select doc_no from all_doctors where department='$department'";
$query_dep=mysqli_query($con,$dept);


$dep11="select d_name from department";
$query_dep11=mysqli_query($con,$dep11);

$queryr="Select room_no,type,status from room_detail where status='Y'";
$queryro=mysqli_query($con,$queryr);



?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title></title>
	<script>
   function displayDivDemo( elementValue) {
     
      if (elementValue.value==='Regular') {
      	document.getElementById('op').style.display= 'none';
      	document.getElementById('adm').style.display= 'none';
      	document.getElementById('reg').style.display= 'block';
      }
   if (elementValue.value==='Operation') {
      	document.getElementById('reg').style.display= 'none';
      	document.getElementById('adm').style.display= 'none';
      	document.getElementById('op').style.display= 'block';
      }
      if (elementValue.value==='Admit') {
      	document.getElementById('op').style.display= 'none';
      	document.getElementById('reg').style.display= 'none';
      	document.getElementById('adm').style.display= 'block';
      }
   }
</script>
</head>
<body style="background-color: lightblue; ">
<h2 class="display-1" align="center">Patient Check Up and Treatment</h2>
<form action="patientchecksubmit.php" method="POST">
	<label class="h5">Patient Number</label>
	<input type="text" name="pat_no" value="<?php echo  $pat_no ; ?> " readonly class="form-control" id="exampleFormControlInput1" >
<label class="h5">Doctor Number</label>
<select name="doc_no" class="form-select">
	<?php
while ($ress= mysqli_fetch_array($query_dep)) {
?>
<option><?php echo $ress['doc_no']; ?></option>
<?php } ?>

</select>
<label class="h5">Department</label>
<input type="text" name="dept_name" value="<?php echo  $department ; ?>" readonly class="form-control" id="exampleFormControlInput1">
<label class="h5">Patient Name</label>
<input type="text" name="pat_name" value="<?php echo  $pat_name ; ?>" class="form-control" id="exampleFormControlInput1">
<label class="h5">Status</label>
<select name="status" onchange="displayDivDemo( this)" class="form-select">
	<option value="Regular">Regular</option>
	<option value="Operation">Operation</option>
	<option value="Admit">Admit</option>
</select>

<label class="h5">Treatment</label>
<input type="text" name="treatment" class="form-control" id="exampleFormControlInput1">
<label class="h5">Diagonosis</label>
<input type="text" name="diagonosis" value="<?php echo  $diagonosis ; ?>" readonly class="form-control" id="exampleFormControlInput1">
<br>

<div id="reg"><h3>Regular Patient</h3>
<label class="h5">Date Visit</label>
<input type="Date" name="dat_vis" class="form-control" id="exampleFormControlInput1">
<label class="h5">Condition</label>
<input type="text" name="conditio" class="form-control" id="exampleFormControlInput1">

<label class="h5">Medicines</label>
<input type="text" name="medicines" class="form-control" id="exampleFormControlInput1">
<label class="h5">Payment</label>
<input type="text" name="paymt" class="form-control" id="exampleFormControlInput1">
</div>


<div id="op" style="display: none;"><h3>Operation Patients</h3>
<label class="h5">Date Operation</label>
<input type="Date" name="date_opr" class="form-control" id="exampleFormControlInput1">
<label class="h5">In Condition Before Operation</label>
<input type="text" name="in_cond" class="form-control" id="exampleFormControlInput1">
<label class="h5">After Operation Cndition</label>
<input type="text" name="afop_cond" class="form-control" id="exampleFormControlInput1">
<label class="h5">Type Of Operation</label>
<input type="text" name="ty_operation" class="form-control" id="exampleFormControlInput1">
<label class="h5">Medicines</label>
<input type="text" name="medicinesop" class="form-control" id="exampleFormControlInput1">
<label class="h5">Operation Theatre Number</label>
<input type="text" name="opth_no" class="form-control" id="exampleFormControlInput1">
<label class="h5">Other Surgeons</label>
<input type="text" name="other_sug" class="form-control" id="exampleFormControlInput1">
</div>

<div  id="adm" style="display: none;"><h3>Admit Patients</h3>
	<label class="h5">Advance Payment</label>
	<input type="text" name="adv_pymt" class="form-control" id="exampleFormControlInput1">
	<label class="h5">Mode Of Payment</label>
	<input type="text" name="mode_pymt" class="form-control" id="exampleFormControlInput1">
	
	
<label class="h5">Admitted On</label>
<input type="date" name="admtd_on" class="form-control" id="exampleFormControlInput1">
<label class="h5">Cndition</label>
<input type="text" name="cond_on" class="form-control" id="exampleFormControlInput1">

<label class="h5">Investigating Doctor Numbers</label>
<input type="text" name="invstgtn_dn" class="form-control" id="exampleFormControlInput1">
<label class="h5">Attendent Numbers</label>
<input type="text" name="attdnt_nm" class="form-control" id="exampleFormControlInput1">
<label class="h5">Room Number</label>
<select name="room_no" class="form-select" >
	<?php
while ($resro= mysqli_fetch_array($queryro) ){
?>
<option value="<?php echo $resro['room_no']?>"> <?php echo $resro['room_no']?> </option>

<?php } ?>

</select>


</div><br>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</body>
</html>





