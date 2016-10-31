<?php
//Make connection to database
include 'connection.php';
$StaffID = $_GET['id'];
$query = "SELECT * FROM driver WHERE StaffID=$StaffID";
//echo $query . '<br />';

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
If (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
} else {
	$row = NULL;
}
?>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="promotion.css"/>
		<title>CITYLINER</title>
	</head>
	<body>
		<form method="post" action="update_driver.php">

			<fieldset class="fieldset-width">
				<legend>
					Driver Details
				</legend>
				<input type="hidden" name="hideStaffID" value="<?php echo $StaffID; ?>" />
				<label for="txtLicenseNo">License No: </label>
				<input type="text" name="txtLicenseNo"  value="<?php echo $row['LicenseNo']; ?>"/>
				<br />
				<br />
				<label for="txtLicenseDate">License Date: </label>
				<input type="text" name="txtLicenseDate"  value="<?php echo $row['LicenseDate']; ?>"/>
				<br />
				<br />
				<label for="txtExpiryDate">Expiry Date: </label>
				<input type="text" name="txtExpiryDate" value="<?php echo $row['ExpiryDate']; ?>" />
				<br />
				<br />
				<label for="txtRouteID">Route ID: </label>
				<input type="text" name="txtRouteID" value="<?php echo $row['RouteID']; ?>" />
				<br />
				<br />
				<label for="txtTripID">Trip ID: </label>
				<input type="text" name="txtTripID" value="<?php echo $row['TripID']; ?>" />
				<br />
				<br />
				<label for="txtBusID">Bus ID: </label>
				<input type="text" name="txtBusID" value="<?php echo $row['BusID']; ?>" />
				<br />
				<br />
			</fieldset>

			<input type="submit" value="Update" name='submit' />
			<input type="reset" value="Clear" />
		</form>
	</body>
</html>