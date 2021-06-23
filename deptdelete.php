<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_GET['delete'])) {
	$d_name=$_GET['delete'];
	$query="Delete from department where d_name='$d_name'";
	$query1=mysqli_query($con,$query);
	}
	header("location:showdepartment.php");
?>