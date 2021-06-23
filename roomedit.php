<?php

$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"hospital");
if (isset($_GET['edit'])) {
$room_no=$_GET['edit'];
$query="Select * from room_detail where room_no=$room_no";
$query1=mysqli_query($con,$query);
$edi=mysqli_fetch_assoc($query1);

	# code...


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body  style="background-color: lightblue; ">
<h2 class="display-1" align="center">Room Details</h2>
<form  action="roomeditsubmit.php" method="post">
<label class="h5">Room Number</label>
<input type="number" name="room_no" value="<?php echo $edi['room_no']  ?>" readonly  class="form-control" id="exampleFormControlInput1">
<label class="h5">Type Of Room</label>
<select name="type" class="form-select"><option value="G">General</option>
<option value="P">Private</option></select>
<label class="h5">Status</label>
<select name="status" class="form-select">
	<option value="N">Occupied</option>
	<option value="Y" selected="">Available</option>
</select>
<label class="h5">Room Daily Charges</label>
<input type="text" name="rm_dl_cg" value="<?php echo $edi['rm_dl_crg']  ?>"  class="form-control" id="exampleFormControlInput1">

<input type="submit" name="submit" class="btn btn-primary">
</body>
</html>


















<?php

}

?>