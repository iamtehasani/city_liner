<?php
//Make connection to database
include 'connection.php';
$TripID = $_GET['id'];
$query = "SELECT * FROM trip WHERE TripID=$TripID";
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
		<form method="post" action="update_schedule.php">

			<fieldset class="fieldset-width">
				<legend>
					Schedule Details
				</legend>
				<input type="hidden" name="hideTripID" value="<?php echo $TripID; ?>" />
				<label for="txtRouteID">Route ID: </label>
				<input type="text" name="txtRouteID"  value="<?php echo $row['RouteID']; ?>"/>
				<br />
				<br />
				<label for="txtDepartureTime">Departure Time: </label>
				<input type="text" name="txtDepartureTime"  value="<?php echo $row['DepartureTime']; ?>"/>
				<br />
				<br />
				<label for="txtArrivalTime">Arrival Time: </label>
				<input type="text" name="txtArrivalTime" value="<?php echo $row['ArrivalTime']; ?>" />
				<br />
				<br />
			</fieldset>

			<input type="submit" value="Update" name='submit' />
			<input type="reset" value="Clear" />
		</form>
	</body>
</html>