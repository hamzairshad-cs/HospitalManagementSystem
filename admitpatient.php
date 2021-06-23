<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_POST['submit'])) {
	# code...
	$pat_no=$_POST['pat_no'];
	$doc_no=$_POST['doc_no'];
	$adv_pymt=$_POST['adv_pymt'];
	$mode_pymt=$_POST['mode_pymt'];
	$admtd_on=$_POST['admtd_on'];
	$cond_on=$_POST['cond_on'];
	$invstgtn_dn=$_POST['invstgtn_dn'];
	$attdnt_nm=$_POST['attdnt_nm'];
	$room_no=$_POST['room_no'];
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






	$up="update pat_admit set adv_pymt='$adv_pymt',mode_pymt='$mode_pymt',admtd_on='$admtd_on',cond_on='$cond_on',invstgtn_dn='$invstgtn_dn',attdnt_nm='$attdnt_nm',room_no='$room_no' where pat_no='$pat_no'";
$uprun=mysqli_query($con,$up);
$qu="update pat_chkup set doc_no='$doc_no' where status='admit' and pat_no='$pat_no'";
	$quu=mysqli_query($con,$qu);



}

