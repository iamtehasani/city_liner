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
	
	$AdminName=$_POST['username'] ;
	$AdminPassword=$_POST['password'] ;
	
	$query="SELECT * FROM admin WHERE AdminName = '$AdminName' 
	AND AdminPassword ='$AdminPassword'";
	$result = mysqli_query($connection, $query) or 
	die(mysqli_error());
	
	if ($row = mysqli_fetch_assoc($result)) {

	$_SESSION['admin']=$AdminName;
	header ('location:admin.php');
	
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



