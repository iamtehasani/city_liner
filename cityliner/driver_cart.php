<?php
session_start();

$page = 'driver.php';

$connection=mysqli_connect('localhost', 'root', '', 'cityliner') or die('Failed to connect');

function driver() {
	$get = mysqli_query($GLOBALS['connection'], 'SELECT StaffID, LicenseNo, LicenseDate, ExpiryDate, RouteID, TripID, BusID FROM driver');
	if (mysqli_num_rows($get) == 0) {
		echo 'There is no details';
	} else {
		while ($get_row = mysqli_fetch_assoc($get)) {
		
			
	
			echo '<tr>';	
			echo '<td style="background-color: white; color: blue;">' . $get_row['StaffID'] . ' </td>';
			echo '<td style="background-color: white; color: blue;">' . $get_row['LicenseNo'] . '</td>';
			echo '<td style="background-color: white; color: blue;">' . $get_row['LicenseDate'] . ' to ' . $get_row['ExpiryDate'] . '</td>';
			echo '<td style="background-color: white; color: blue;">' . $get_row['RouteID'] . '</td>';
			echo '<td style="background-color: white; color: blue;">' . $get_row['TripID'] . '</td>';
			echo '<td style="background-color: white; color: blue;">' . $get_row['BusID'] . '</td>';
			
		}
	}
}

?>