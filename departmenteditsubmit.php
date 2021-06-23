<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_POST['deptsubmit'])) {
	$d_name1=$_POST['d_name'];
	$d_location1=$_POST['d_location'];
	$facilities1=$_POST['facilities'];


	 $query1="update doc_on_call set d_name='d_name1' where d_name='$d_name1'";
	  $query1run=mysqli_query($con,$query1);
	  if ($query1run) {
	  	echo "call";
	  	# code...
	  }

	$query3="Update doc_reg Set d_name='$d_name1' where d_name='$d_name1'";
	  $query3run=mysqli_query($con,$query3);
	  if ($query3run) {
	  	echo "reg";
	  	# code...
	  }

	$query123="Update department Set d_location='$d_location1',facilities='$facilities1' where d_name='$d_name1'";
	$query123run=mysqli_query($con,$query123);
	if ($query123run) {
		echo "dept";
		# code...
	}

	
	  



	# code...
}



?>