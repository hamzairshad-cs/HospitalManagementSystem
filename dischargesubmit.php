<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_POST['submit'])) {

	$pat_no=$_POST['pat_no'];
	$tr_advs=$_POST['tr_advs'];
	$tr_gvn=$_POST['tr_gvn'];
	$medicines=$_POST['medicines'];
	$pymt_gv=$_POST['pymt_gv'];
	$dis_on=$_POST['dis_on'];

	$query="insert into pat_dis (pat_no,tr_advs,tr_gvn,medicines,pymt_gv,dis_on) values('$pat_no','$tr_advs','$tr_gvn','$medicines','$pymt_gv','$dis_on')";
	$queryrun=mysqli_query($con,$query);

	$queryadm="Delete from pat_admit where pat_no='$pat_no'";
	$queryadmrun=mysqli_query($con,$queryadm);

	$queryadm1="Delete from pat_entry where pat_no='$pat_no'";
	$queryadmrun1=mysqli_query($con,$queryadm1);

	$queryroo="update room_detail set status='y', patient_name='Null' , pat_no='Null' where pat_no='$pat_no'";
	$queryroorun=mysqli_query($con,$queryroo);
	if ($queryroorun) {
		echo "hello";
		# code...
	}


}

?>