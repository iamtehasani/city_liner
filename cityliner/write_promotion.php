<?php
//Connection to the database
include 'connection.php';
//colllecting submitted data and storing it in a variable 
$PromotionID=$_POST['txtPromotionID'];
$PromotionName=$_POST['txtPromotionName'];
$PromotionDesc=$_POST['txtPromotionDesc'];
$PromotionPrice= $_POST['txtPromotionPrice'];
//INSERT the variables that collected the data submitted.
$query = "INSERT INTO promotion (PromotionID, PromotionName, PromotionDesc, PromotionPrice)
		VALUES ('$PromotionID', '$PromotionName', '$PromotionDesc', '$PromotionPrice')";

//Temporarily echo $query for debugging purposes
//echo $query;

//run $query
mysqli_query($connection, $query) or die(mysqli_error());
if (mysqli_affected_rows($connection) > 0) {

	//If so , returning to the calling page( that stored in the server variables as HTTP_REFERER

	header("Location: {$_SERVER['HTTP_REFERER']}");

} else {

	// Displaying error message

	echo "Error in query: $query. " . mysqli_error($connection);

	exit ;

}
?>