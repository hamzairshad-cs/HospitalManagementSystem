<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_GET['delet'])) {
$room_no=$_GET['delet'];


$query="Delete from pat_admit where room_no='$room_no' ";
	$queryrun=mysqli_query($con,$query);

	$query1="Delete from room_detail where room_detail.room_no='$room_no'";
	$query1run=mysqli_query($con,$query1);

	

	# code...
}



header("location:showrooms.php");
?>
