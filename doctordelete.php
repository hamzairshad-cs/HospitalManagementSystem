<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_GET['delet'])) {
$id=$_GET['delet'];

if (substr($id, 0, 3) === "DR-" ){
	
	$query="Delete from doc_reg where doc_no='$id' ";
	$queryrun=mysqli_query($con,$query);

	$query1="Delete from all_doctors where all_doctors.doc_no='$id'";
	$query1run=mysqli_query($con,$query1);
	


}
else{
	$query="Delete from doc_on_call where doc_no='$id'";
	$queryrun=mysqli_query($con,$query);
	$query1="Delete from all_doctors where all_doctors.doc_no='$id'";
	$query1run=mysqli_query($con,$query1);

}
}
header("location:showdoctors.php");



?>