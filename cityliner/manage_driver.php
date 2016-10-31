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
		echo '<h2>Manage Driver Schedule</h2>';
		//run query to select all records from customer table
		//store the result of the query in a variable
		$query="SELECT * FROM driver";
		if (isset($_GET['sort'])){
			$query=$query." ORDER BY ".$_GET['sort'];
			//echo $query;
		}
		//displaying the data stored in the product table.
		$result = mysqli_query($connection, $query) or die(mysqli_error());
		echo '<h1> <a href="admin.php" target="_parent" class="current">BACK TO ADMIN PAGE</a></h1>';
		echo '<table><tr><th><a href="manage_driver.php?sort=StaffID">Staff ID</a></th>
<th><a href="manage_driver.php?sort=LicenseNo">License No</a></th>
<th><a href="manage_driver.php?sort=LicenseDate">License Date</a></th>
<th><a href="manage_driver.php?sort=ExpiryDate">Expiry Date</a></th>
<th><a href="manage_driver.php?sort=RouteID">Route ID</a></th>
<th><a href="manage_driver.php?sort=TripID">Trip ID</a></th>
<th><a href="manage_driver.php?sort=BusID">Bus ID</a></th>
<th>Edit</th><th>Delete</th></tr>';
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>' . $row['StaffID'] . '</td>';
			echo '<td>' . $row['LicenseNo'] . '</td>';
			echo '<td>' . $row['LicenseDate'] . '</td>';
			echo '<td>' . $row['ExpiryDate'] . '</td>';
			echo '<td>' . $row['RouteID'] . '</td>';
			echo '<td>' . $row['TripID'] . '</td>';
			echo '<td>' . $row['BusID'] . '</td>';
			echo '<td><a href="amend_driver.php?id=' . $row['StaffID'] . '">Edit</a></td>';
			echo '<td><a href="delete_driver.php?id=' . $row['StaffID'] . '">Delete</a></td>';
			echo '</tr>';
		}
		echo '</table>';
		?>
		<p>
			<form method="post" action="write_driver.php">
				<fieldset class="fieldset-width1">
					<legend>
						Enter New Driver Details
					</legend>
					<label class="align" for="txtStaffID">Staff ID: </label>
					<input type="text" name="txtstaffID"  />
					<br />
					<br />
					<label class="align" for="txtLicenseNo">License No: </label>
					<input type="text" name="txtLicenseNo"  />
					<br />
					<br />
					<label class="align" for="txtExpiryDate">Expiry Date: </label>
					<input type="text" name="txtExpiryDate"  style="width: 95%;">
					<br />
					<br />
					<label class="align" for="txtRouteID">Route ID: </label>
					<input type="text" name="txtRouteID"  />
					<br />
					<br />
					<label class="align" for="txtTripID">Trip ID: </label>
					<input type="text" name="txtTripID"  />
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