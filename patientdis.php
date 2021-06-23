<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");

$query="Select pat_no from pat_admit" ;
$query1=mysqli_query($con,$query) ;

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<style type="text/css">.add{
	background-color: blue;
	color: white;
	text-decoration: none;
	text-align: center;
	padding: 14px 25px;
	border-radius: 3px;
}</style>
	<title></title>
</head>
<body style="background-color: lightblue; ">

<h3 class="display-1" align="center">Patient Discharge Data</h3>
<a href="home.php" class="add" style="background-color: green;">Home</a><br><br>
<form action="dischargesubmit.php" method="post">
<label class="h5">Patient Number</label>
<select name="pat_no" class="form-select">
	<?php
while ($res= mysqli_fetch_array($query1)) {
?>
<option><?php echo $res['pat_no'] ;?></option>
<?php } ?>
</select>
<label class="h5"> Treatment Advise</label>
<input type="text" name="tr_advs" class="form-control" id="exampleFormControlInput1">
<label class="h5">Treatment Given</label>
<input type="text" name="tr_gvn" class="form-control" id="exampleFormControlInput1">
<label class="h5">Medicines</label>
<input type="text" name="medicines" class="form-control" id="exampleFormControlInput1">
<label class="h5">Payment Given</label>
<input type="text" name="pymt_gv" class="form-control" id="exampleFormControlInput1">
<label class="h5">Discharge On </label>
<input type="Date" name="dis_on" class="form-control" id="exampleFormControlInput1"><br>
<input type="submit" name="submit" class="btn btn-primary">
</form>
</body>
</html>