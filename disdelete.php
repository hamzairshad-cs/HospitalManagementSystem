<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_GET['delete'])) {
	# code...
$pat_no=$_GET['delete'];
$query="delete from pat_dis where pat_no='$pat_no'";
$queryruin=mysqli_query($con,$query);


header("location:showdischarge.php");
}
?>