<?php
//Connection to the database
$connection = mysqli_connect('localhost', 'root', '', 'cityliner') or die(mysqli_error());
//colllecting submitted data and storing it in a variable 
$StaffID=$_POST['hideStaffID'];
$LicenseNo=$_POST['txtLicenseNo'] ;
$LicenseDate=$_POST['txtLicenseDate'];
$ExpiryDate= $_POST['txtExpiryDate'];
$RouteID= $_POST['txtRouteID'];
$TripID= $_POST['txtTripID'];
$BusID= $_POST['txtBusID'];

//INSERT the variables that collected the data submitted.
$query="UPDATE driver SET LicenseNo='$LicenseNo', LicenseDate='$LicenseDate'
, ExpiryDate='$ExpiryDate', RouteID='$RouteID', TripID='$TripID', BusID='$BusID' WHERE StaffID='$StaffID' ";

//run the $query 
mysqli_query($connection, $query)or die (mysqli_error());

//link to the page
header( 'Location: manage_driver.php' ) ;
?>