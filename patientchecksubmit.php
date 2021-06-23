<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_POST['submit'])) {
	$status=$_POST['status'];
	$pat_no=$_POST['pat_no'];
	$doc_no=$_POST['doc_no'];
	$dept_name=$_POST['dept_name'];
	$treatment=$_POST['treatment'];
	$diagonosis=$_POST['diagonosis'];
	$pat_name=$_POST['pat_name'];
	

	if ($status === 'Regular') {
		$dat_vis=$_POST['dat_vis'];
		$conditio=$_POST['conditio'];
		$medicines=$_POST['medicines'];
		$paymt=$_POST['paymt'];

		$queryreg="Insert into pat_reg (pat_no,dat_vis,conditio,treatment,medicines,doc_no,pamyt) values('$pat_no','$dat_vis','$conditio','$treatment','$medicines','$doc_no','$paymt')";
		$queryregrun=mysqli_query($con,$queryreg);
		if ($queryregrun) {
			echo "reg";
			# code...
		}
		
		$querymain="insert into pat_chkup (pat_no,doc_no,status,treatment) values ('$pat_no','$doc_no','$status','$treatment')";
		$querymainrun=mysqli_query($con,$querymain);
		if($querymainrun)
		{
			echo "REG";
		}
		
	}

	if ($status === 'Operation') {
		$date_opr=$_POST['date_opr'];
		$in_cond=$_POST['in_cond'];
		$afop_cond=$_POST['afop_cond'];
		$ty_operation=$_POST['ty_operation'];
		$medicinesop=$_POST['medicinesop'];
		$opth_no=$_POST['opth_no'];
		$other_sug=$_POST['other_sug'];

		$querymain1="insert into pat_chkup (pat_no,doc_no,status,treatment) values ('$pat_no','$doc_no','$status','$treatment')";
		$querymainrun1=mysqli_query($con,$querymain1);
		if ($querymainrun1) {
			echo "op1";
			# code...
		}

		$queryop="insert into pat_opr(pat_no,date_opr,in_cond,afop_cond,ty_operation,medicines,doc_no,opth_no,other_sug) values ('$pat_no','$date_opr','$in_cond','$afop_cond','$ty_operation','$medicinesop','$doc_no','$opth_no','$other_sug')";
		$queryoprun=mysqli_query($con,$queryop);
		if ($queryoprun) {
			echo "op";
			# code...
		}
	}

	if ($status === 'Admit') {
		$adv_pymt=$_POST['adv_pymt'];
		$mode_pymt=$_POST['mode_pymt'];
		$admtd_on=$_POST['admtd_on'];
		$cond_on=$_POST['cond_on'];
		$invstgtn_dn=$_POST['invstgtn_dn'];
		$attdnt_nm=$_POST['attdnt_nm'];
		$room_no=$_POST['room_no'];
		
		echo $pat_no;
		echo $adv_pymt;
		echo $mode_pymt;
		echo $dept_name;
		echo $admtd_on;
		echo $cond_on;
		echo $treatment;
		echo $invstgtn_dn;
		echo $attdnt_nm;
		echo $room_no;

			$querymain2="insert into pat_chkup (pat_no,doc_no,status,treatment) values ('$pat_no','$doc_no','$status','$treatment')";
		$querymainrun2=mysqli_query($con,$querymain2);
if ($querymainrun2) {
	# code...
	echo "adm1";
}


		$queryass="Insert INTO pat_admit (pat_no,adv_pymt,mode_pymt,dept_name,admtd_on,cond_on,trmt_sdt,invstgtn_dn,attdnt_nm,room_no) values ('$pat_no','$adv_pymt','$mode_pymt','$dept_name','$admtd_on','$cond_on','$treatment','$invstgtn_dn','$attdnt_nm',$room_no)";
		$queryassrun=mysqli_query($con,$queryass);
		if ($queryassrun) {
			echo "main runn";
			# code...
		}


	

		$queryadm1="Update room_detail set status='N', patient_name='$pat_name' , pat_no='$pat_no' where room_no=$room_no";
		$queryadm1run=mysqli_query($con,$queryadm1);
		if ($queryadm1run) {
			echo "adm3";
			# code...
		}





		
	}






}




?>