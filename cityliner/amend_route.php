<?php
//Make connection to database
include 'connection.php';
$RouteID = $_GET['id'];
$query = "SELECT * FROM route WHERE RouteID=$RouteID";
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
		<form method="post" action="update_route.php">

			<fieldset class="fieldset-width">
				<legend>
					Route Details
				</legend>
				<input type="hidden" name="hideRouteID" value="<?php echo $RouteID; ?>" />
				<label for="txtFromRoute">From Route: </label>
				<input type="text" name="txtFromRoute"  value="<?php echo $row['FromRoute']; ?>"/>
				<br />
				<br />
				<label for="txtToRoute">To Route: </label>
				<input type="text" name="txtToRoute"  value="<?php echo $row['ToRoute']; ?>"/>
				<br />
				<br />
				<label for="txtFares">Fares: </label>
				<input type="text" name="txtFares" value="<?php echo $row['Fares']; ?>" />
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