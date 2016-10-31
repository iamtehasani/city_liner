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
	?>
	<section  id="signin">
	<?php
	
	$txtUsername=$_POST['name'] ;
	$txtPassword=$_POST['password'] ;
	
	$query="SELECT * FROM customer WHERE CustomerName = '$txtUsername' 
	AND CustomerPassword ='$txtPassword'";
	$result = mysqli_query($connection, $query) or 
	die(mysqli_error());
	
	if ($row = mysqli_fetch_assoc($result)) {

	$_SESSION['name']=$txtUsername;
	$_SESSION['CustomerId']=$row['CustomerID'];
	header ('location:booking.php');
	
	}
	else
	{
	
	$_SESSION['errors']= '<P><font color="red">User not recognised</font></P>';
	header ('location:errorpage.php');
	
	}
	?>
</section>	

</body>

</html>



