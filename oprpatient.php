<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_POST['submit'])) {
	$pat_no=$_POST['pat_no'];
	$date_opr=$_POST['date_opr'];
	$in_cond=$_POST['in_cond'];
	$afop_cond=$_POST['afop_cond'];
	$ty_operation=$_POST['ty_operation'];
	$medicines=$_POST['medicinesop'];
	$opth_no=$_POST['opth_no'];
	$other_sug=$_POST['other_sug'];
	$doc_no=$_POST['doc_no'];
	$pat_name=$_POST['pat_name'];
$pt_age=$_POST['pt_age'];
$city=$_POST['city'];
$ph_no=$_POST['ph_no'];
$rfd=$_POST['rfd'];
$address=$_POST['address'];
$diagonosis=$_POST['diagonosis'];
$chkupdt=$_POST['chkkup_dt'];



$qq="update pat_entry set pat_name='$pat_name',pt_age=$pt_age,city='$city',ph_no='$ph_no',rfd='$rfd',address='$address',chkup_dt='$chkupdt',diagonosis='$diagonosis' where  pat_no='$pat_no' ";
$qp=mysqli_query($con,$qq);




	$q="update pat_opr set date_opr='$date_opr',in_cond='$in_cond',afop_cond='$afop_cond',ty_operation='$ty_operation',medicines='$medicines',opth_no='$opth_no',doc_no='$doc_no' where pat_no='$pat_no'";

	$qq=mysqli_query($con,$q);
	$qu="update pat_chkup set doc_no='$doc_no' where status='operation' and pat_no='$pat_no'";
	$quu=mysqli_query($con,$qu);
	header("location:showpatients.php");
	# code...
}