<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

if (isset($_GET['edit'])) {
	$d_name=$_GET['edit'];
	$query="Select * from department where d_name='$d_name'";
	$query1=mysqli_query($con,$query);
	$edi=mysqli_fetch_assoc($query1);
?>
	





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Department Entry</h2>
<a href="home.php" class="add" style="background-color: green;">Home</a>

<form action="departmenteditsubmit.php" method="post">
	<label>Department name</label>	
	<input type="text" name="d_name" value=" <?php echo $edi['d_name']  ?>"  readonly>
<label>Department Location</label>	
<input type="text " name="d_location" value="<?php echo $edi['d_location'] ?>">
<label>Facilities</label>	
<input type="text" name="facilities"  value="<?php echo $edi['facilities'] ?>">
<input type="submit" name="deptsubmit">
</form>

</body>
</html>







<?php
}
?>