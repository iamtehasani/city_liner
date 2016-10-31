<?php
//Connection to the database
include 'connection.php';
//colllecting submitted data and storing it in a variable 
$TripID=$_POST['txtTripID'];
$RouteID=$_POST['txtRouteID'];
$DepartureTime=$_POST['txtDepartureTime'];
$ArrivalTime= $_POST['txtArrivalTime'];
//INSERT the variables that collected the data submitted.
$query = "INSERT INTO trip (TripID, RouteID, DepartureTime, ArrivalTime)
		VALUES ('$TripID', '$RouteID', '$DepartureTime', '$ArrivalTime')";

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