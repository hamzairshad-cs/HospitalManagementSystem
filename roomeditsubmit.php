<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_POST['submit'])) {
	$room_no=$_POST['room_no'];
	$type=$_POST['type'];
	$status=$_POST['status'];
	$rm_dl_cg=$_POST['rm_dl_cg'];

	$query="Update room_detail set  type='$type',status='$status',rm_dl_crg='$rm_dl_cg' where room_no=$room_no";
	$queryrun=mysqli_query($con,$query);

	header("location:showrooms.php");
	# code...
}