<!DOCTYPE html>
<html>
<head>
	<title>CITYLINER</title>
</head>
<body>
	<?php
	//make connection to database
	include('connection.php');
	//start a session
	session_start();
	
	$StaffName=$_POST['username'] ;
	$StaffPassword=$_POST['password'] ;
	
	$query="SELECT * FROM staff WHERE StaffName = '$StaffName' 
	AND StaffPassword ='$StaffPassword'";
	$result = mysqli_query($connection, $query) or 
	die(mysqli_error());
	
	if ($row = mysqli_fetch_assoc($result)) {

	$_SESSION['driver']=$StaffName;
	header ('location:driver.php');
	
	}
	else
	{
	
	$_SESSION['errors']= '<P><font color="red">User not recognised!</font></P>';
	header ('location:signin.php');
	
	}
	?>
</section>	

</body>

</html>



