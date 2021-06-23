<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_POST['submit'])) {
	if (substr($_POST['doc_no'], 0, 3) === "DR-" )
	{
		$doc_no=$_POST['doc_no'];
		$salary=$_POST['salary'];
		$en_time=$_POST['en_time'];
		$ex_time=$_POST['ex_time'];
		$address=$_POST['address'];
		$ph_no=$_POST['ph_no'];
		$doj=$_POST['doj'];
		$d_name=$_POST['d_name'];
		$qualification=$_POST['qualification'];

			$query="Update all_doctors SET department='$d_name' where doc_no='$doc_no'";
		$queryrun=mysqli_query($con,$query);

		$query1="Update doc_reg SET qualification='$qualification',salary='$salary',en_time='$en_time',ex_time='$ex_time',address='$address',ph_no='$ph_no',doj='$doj',d_name='$d_name' where doc_no='$doc_no'";

		$query1run=mysqli_query($con,$query1);



	
	if ($query1run) {
		# code...
		echo "2 run";
	}
	}
	if(substr($_POST['doc_no'], 0, 3) === "DC-" ){
		$doc_no=$_POST['doc_no'];
		$d_name=$_POST['d_namee'];
		$qualification=$_POST['qualificationcall'];
		$fs_pr_cl=$_POST['fs_pr_clcall'];
		$pymt_du=$_POST['pymt_ducall'];
		$address=$_POST['addresscall'];
		$ph_no=$_POST['ph_nocall'];

		$query="Update all_doctors set department='$d_name' where doc_no='$doc_no'";
		$queryrun=mysqli_query($con,$query);

		$query1="Update doc_on_call set d_name='$d_name',qualification='$qualification',fs_pr_cl='$fs_pr_cl',pymt_du='$pymt_du',address='$address',ph_no='$ph_no' where doc_no='$doc_no'";
		$query1run=mysqli_query($con,$query1);


	}







}

header("location:showdoctors.php")


?>