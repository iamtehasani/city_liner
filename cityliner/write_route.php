<?php
//Connection to the database
include 'connection.php';
//colllecting submitted data and storing it in a variable 
$RouteID=$_POST['txtRouteID'];
$FromRoute=$_POST['txtFromRoute'];
$ToRoute=$_POST['txtToRoute'];
$Fares= $_POST['txtFares'];
$BusID= $_POST['txtBusID'];
//INSERT the variables that collected the data submitted.
$query = "INSERT INTO route (RouteID, FromRoute, ToRoute, Fares, BusID)
		VALUES ('$RouteID', '$FromRoute', '$ToRoute', '$Fares', '$BusID')";

//Temporarily echo $query for debugging purposes
//echo $query;

//run $query
mysqli_query($connection, $query) or die(mysqli_error());
if (mysqli_affected_rows($connection) > 0) {

	//If so , returning to the calling page( that stored in the server variables as HTTP_REFERER

	header("Location: {$_SERVER['HTTP_REFERER']}");

} else {

	// Displaying error message

	echo "Error in query: $query. " . mysqli_error($connection);

	exit ;

}
?>