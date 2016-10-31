<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="promotion.css"/>
		<title>CITYLINER</title>
	</head>
	<body>
		<?php
session_start();
if (!isset($_SESSION["admin"])) {
	header("Location: admin_login.php");
}
		//connection to database
		include 'connection.php';
		//Display heading
		echo '<h2>Manage Bus Schedule</h2>';
		//run query to select all records from customer table
		//store the result of the query in a variable
		$query="SELECT * FROM trip";
		if (isset($_GET['sort'])){
			$query=$query." ORDER BY ".$_GET['sort'];
			//echo $query;
		}
		//displaying the data stored in the product table.
		$result = mysqli_query($connection, $query) or die(mysqli_error());
		echo '<h1> <a href="admin.php" target="_parent" class="current">BACK TO ADMIN PAGE</a></h1>';
		echo '<table><tr><th><a href="manage_schedule.php?sort=TripID">Trip ID</a></th>
<th><a href="manage_schedule.php?sort=RouteID">RouteID</a></th>
<th><a href="manage_schedule.php?sort=DepartureTime">Departure Time</a></th>
<th><a href="manage_schedule.php?sort=ArrivalTime">Arrival Time</a></th>
<th>Edit</th><th>Delete</th></tr>';
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>' . $row['TripID'] . '</td>';
			echo '<td>' . $row['RouteID'] . '</td>';
			echo '<td>' . $row['DepartureTime'] . '</td>';
			echo '<td>' . $row['ArrivalTime'] . '</td>';
			echo '<td><a href="amend_schedule.php?id=' . $row['TripID'] . '">Edit</a></td>';
			echo '<td><a href="delete_schedule.php?id=' . $row['TripID'] . '">Delete</a></td>';
			echo '</tr>';
		}
		echo '</table>';
		?>
		<p>
			<form method="post" action="write_schedule.php">
				<fieldset class="fieldset-width1">
					<legend>
						Enter New Schedule Details
					</legend>
					<label class="align" for="txtTripID">Trip ID: </label>
					<input type="text" name="txtTripID"  />
					<br />
					<br />
					<label class="align" for="txtRouteID">Route ID: </label>
					<input type="text" name="txtRouteID"  />
					<br />
					<br />
					<label class="align" for="txtDepartureTime">Departure Time: </label>
					<input type="text" name="txtDepartureTime"  style="width: 95%;">
					<br />
					<br />
					<label class="align" for="txtArrivalTime">Arrival Time: </label>
					<input type="text" name="txtArrivalTime"  />
					<br />
					<br />

					<input type="submit" value="Submit" name='submit' />
					<input type="reset" value="Clear" />
			</form>
			<br />
			<br />
			<?php
						if (isset($_SESSION['errors'])){
					}
					else
					{
						echo '<a href="./logout.php">logout</a>';
					}
					?>
		</p>

	</body>
</html>