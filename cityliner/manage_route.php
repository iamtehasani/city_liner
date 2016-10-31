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
		echo '<h2>Manage Bus Route</h2>';
		//run query to select all records from customer table
		//store the result of the query in a variable
		$query="SELECT * FROM route";
		if (isset($_GET['sort'])){
			$query=$query." ORDER BY ".$_GET['sort'];
			//echo $query;
		}
		//displaying the data stored in the product table.
		$result = mysqli_query($connection, $query) or die(mysqli_error());
		echo '<h1> <a href="admin.php" target="_parent" class="current">BACK TO ADMIN PAGE</a></h1>';
		echo '<table><tr><th><a href="manage_route.php?sort=RouteID">Route ID</a></th>
<th><a href="manage_route.php?sort=FromRoute">From Route</a></th>
<th><a href="manage_route.php?sort=ToRoute">To Route</a></th>
<th><a href="manage_route.php?sort=Fares">Fares</a></th>
<th><a href="manage_route.php?sort=BusID">Bus ID</a></th>
<th>Edit</th><th>Delete</th></tr>';
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>' . $row['RouteID'] . '</td>';
			echo '<td>' . $row['FromRoute'] . '</td>';
			echo '<td>' . $row['ToRoute'] . '</td>';
			echo '<td>' . $row['Fares'] . '</td>';
			echo '<td>' . $row['BusID'] . '</td>';
			echo '<td><a href="amend_route.php?id=' . $row['RouteID'] . '">Edit</a></td>';
			echo '<td><a href="delete_route.php?id=' . $row['RouteID'] . '">Delete</a></td>';
			echo '</tr>';
		}
		echo '</table>';
		?>
		<p>
			<form method="post" action="write_route.php">
				<fieldset class="fieldset-width1">
					<legend>
						Enter New Route Details
					</legend>
					<label class="align" for="txtRouteID">Route ID: </label>
					<input type="text" name="txtRouteID"  />
					<br />
					<br />
					<label class="align" for="txtFromRoute">From Route: </label>
					<input type="text" name="txtFromRoute"  />
					<br />
					<br />
					<label class="align" for="txtToRoute">To Route: </label>
					<input type="text" name="txtToRoute"  style="width: 95%;">
					<br />
					<br />
					<label class="align" for="txtFares">Fares: </label>
					<input type="text" name="txtFares"  />
					<br />
					<br />
					<label class="align" for="txtBusID">Bus ID: </label>
					<input type="text" name="txtBusID"  />
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