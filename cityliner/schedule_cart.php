<?php
session_start();

$page = 'schedule.php';

$connection=mysqli_connect('localhost', 'root', '', 'cityliner') or die('Failed to connect');


function schedule() {
	$get = mysqli_query($GLOBALS['connection'], 'SELECT TripID, RouteID, DepartureTime, ArrivalTime FROM trip');
	if  (mysqli_num_rows($get) == 0) {
		echo 'Your cart is empty';
	} else {
		while ($get_row = mysqli_fetch_assoc($get)) {

			echo '<tr>';
			echo '<td style="background-color: #ffb3ff; color: black;"><p>'. $get_row['TripID'] . '</p></td>';
			echo '<td style="background-color: #99ffdd; color: black;"><p>'. $get_row['RouteID'] . '</p></td>';
			echo '<td style="background-color: green; color: white;"><p>' . $get_row['DepartureTime'] . '</p></td>';
			echo '<td style="background-color: orange; color: white;"><p>' . $get_row['ArrivalTime'] . '</p></td>';

		}
	}
}
function route() {
	$get = mysqli_query($GLOBALS['connection'], 'SELECT RouteID, FromRoute, ToRoute, Fares, BusID FROM route');
	if  (mysqli_num_rows($get) == 0) {
		echo 'There is no route';
	} else {
		while ($get_row = mysqli_fetch_assoc($get)) {

			echo '<tr>';
			echo '<td style="background-color: maroon; color: white;"><p>'. $get_row['RouteID'] . '</p></td>';
			echo '<td style="background-color: yellow; color: black;"><p>'. $get_row['FromRoute'] . ' to '. $get_row['ToRoute'] . '</p></td>';
		}
	}
}



?>
