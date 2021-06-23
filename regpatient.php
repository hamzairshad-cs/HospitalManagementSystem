<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");


if (isset($_POST['submit']) )
{

$pat_no=$_POST['pat_no'];
$doc_no=$_POST['doc_no'];
$dat_vis=$_POST['dat_vis'];
$conditio=$_POST['conditio'];
$medicines=$_POST['medicines'];
$paymt=$_POST['paymt'];
$treatment=$_POST['treatment'];
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




$q="update pat_reg set dat_vis= '$dat_vis', conditio='$conditio',treatment='$treatment',medicines='$medicines',pamyt='$paymt',doc_no='$doc_no' where pat_no='$pat_no' and treatment='$treatment'";
$qu=mysqli_query($con,$q);
$qu="update pat_chkup set doc_no='$doc_no' where status='regular' and pat_no='$pat_no'";
	$quu=mysqli_query($con,$qu);





	# code...
}
?>