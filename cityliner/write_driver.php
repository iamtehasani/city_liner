<?php
//Connection to the database
include 'connection.php';
//colllecting submitted data and storing it in a variable 
$StaffID=$_POST['txtStaffID'];
$LicenseNo=$_POST['txtLicenseNo'];
$LicenseDate=$_POST['txtLicenseDate'];
$ExpiryDate= $_POST['txtExpiryDate'];
$RouteID= $_POST['txtRouteID'];
$TripID= $_POST['txtTripID'];
$BusID= $_POST['txtBusID'];
//INSERT the variables that collected the data submitted.
$query = "INSERT INTO driver (StaffID, LicenseNo, LicenseDate, ExpiryDate, RouteID, TripID, BusID)
		VALUES ('$StaffID', '$LicenseNo', '$LicenseDate', '$ExpiryDate', '$RouteID', '$TripID', '$BusID')";

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