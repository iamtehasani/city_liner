<?php
session_start();

$page = 'home.php';

$connection=mysqli_connect('localhost', 'root', '', 'cityliner') or die('Failed to connect');

function promotion() {
	$get = mysqli_query($GLOBALS['connection'], 'SELECT PromotionID, PromotionName, PromotionDesc, PromotionPrice FROM promotion');
	if (mysqli_num_rows($get) == 0) {
		echo 'There is no promotion';
	} else {
		while ($get_row = mysqli_fetch_assoc($get)) {
		
			
			echo '<table width="400px">';		
			echo '<p> ~ ' . $get_row['PromotionDesc'] . ' at ';	
			echo '' . $get_row['PromotionPrice'] . ' for ';
			echo '' . $get_row['PromotionName'] . ' ~</p></td>';
			
		}
	}
}

?>