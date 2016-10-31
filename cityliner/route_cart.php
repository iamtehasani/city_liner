<?php
session_start();

$page = 'schedule.php';

$connection=mysqli_connect('localhost', 'root', '', 'cityliner') or die('Failed to connect');


function route() {
	$get = mysqli_query($GLOBALS['connection'], 'SELECT RouteID, FromRoute, ToRoute, Fares, BusID FROM route');
	if  (mysqli_num_rows($get) == 0) {
		echo 'There is no route';
	} else {
		while ($get_row = mysqli_fetch_assoc($get)) {

			echo '<tr>';
			echo '<td style="background-color: maroon; color: white;"><p>'. $get_row['TripID'] . '</p></td>';
			echo '<td style="background-color: yellow; color: black;"><p>'. $get_row['RouteID'] . '</p></td>';
		}
	}
}



?>
