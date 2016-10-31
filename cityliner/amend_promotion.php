<?php
//Make connection to database
include 'connection.php';
$PromotionID = $_GET['id'];
$query = "SELECT * FROM promotion WHERE PromotionID=$PromotionID";
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
		<form method="post" action="update_promotion.php">

			<fieldset class="fieldset-width">
				<legend>
					Promotion Details
				</legend>
				<input type="hidden" name="hidePromotionID" value="<?php echo $PromotionID; ?>" />
				<label for="txtPromotionName">Promotion Name: </label>
				<input type="text" name="txtPromotionName"  value="<?php echo $row['PromotionName']; ?>"/>
				<br />
				<br />
				<label for="txtPromotionDesc">Promotion Description: </label>
				<input type="text" name="txtPromotionDesc"  value="<?php echo $row['PromotionDesc']; ?>"/>
				<br />
				<br />
				<label for="txtPromotionPrice">Promotion Price: </label>
				<input type="text" name="txtPromotionPrice" value="<?php echo $row['PromotionPrice']; ?>" />
				<br />
				<br />
			</fieldset>

			<input type="submit" value="Update" name='submit' />
			<input type="reset" value="Clear" />
		</form>
	</body>
</html>