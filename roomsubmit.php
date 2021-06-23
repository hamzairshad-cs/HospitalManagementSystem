<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");


if (isset($_POST['submit'])) {
	$room_no=$_POST['room_no'];

	$type=$_POST['type'];
	$status=$_POST['status'];
	$rm_dl_cg=$_POST['rm_dl_cg'];
	$patient_name=$_POST['patient_name'];
	$pat_no=$_POST['pat_no'];

	$query="Insert into room_detail (room_no,type,status,rm_dl_crg,patient_name,pat_no)values ($room_no,'$type','$status',$rm_dl_cg,'$patient_name','$pat_no')";
	$queryrun=mysqli_query($con,$query);
	
	# code...
}
header("location:showrooms.php");


?>