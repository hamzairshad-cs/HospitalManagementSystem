<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");


if($_POST['submit'])
{
	
	$check=$_POST['selector'];
	
	
	if ($check === 'DR' ) {
		$string="DR";
		$doc_no=$string . "-" . $_POST['doc_no'];
		$d_name=$_POST['d_name'];
		$qualification=$_POST['qualification'];
		$salary=$_POST['salary'];
		$en_time=$_POST['en_time'];
		$ex_time=$_POST['ex_time'];
		$address=$_POST['address'];
		$ph_no=$_POST['ph_no'];
		
		$doj=$_POST['doj'];
				
		$all="insert into all_doctors (doc_no,department) values ('$doc_no','$d_name')";
	$all_query=mysqli_query($con,$all);


		$query="Insert into doc_reg (qualification,salary,en_time,ex_time,address,ph_no,doj,doc_no,d_name) values('$qualification','$salary','$en_time','$ex_time','$address',$ph_no,'$doj','$doc_no','$d_name')";
		$insert_doc=mysqli_query($con,$query);

		

	
}


	else
	{
		$string="DC";
		$doc_no=$string . "-" . $_POST['doc_no'];
		$d_namee=$_POST['d_namee'];
		$qualification=$_POST['qualificationcall'];
		$address=$_POST['addresscall'];
	$ph_nocl=$_POST['ph_nocall'];
	$fs_pr_cl=$_POST['fs_pr_clcall'];
	$pymt_du=$_POST['pymt_ducall'];

	$all1="insert into all_doctors (doc_no,department) values ('$doc_no','$d_namee')";
	$all_query=mysqli_query($con,$all1);

	$query1="Insert into doc_on_call (doc_no,d_name,qualification,fs_pr_cl,pymt_du,address,ph_no) values ('$doc_no','$d_namee','$qualification','$fs_pr_cl','$pymt_du','$address',$ph_nocl)";
		$insert_doc=mysqli_query($con,$query1);







	}



header("location:showdoctors.php");




	}



?>