<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_GET['delet'])) {
	$pat_no=$_GET['delet'];
	echo $pat_no;
	$q="delete from pat_entry where pat_no='$pat_no'";
	$qq=mysqli_query($con,$q);
	if ($qq) {
		# code...
	echo "as";
	}
	# code...
}

?>