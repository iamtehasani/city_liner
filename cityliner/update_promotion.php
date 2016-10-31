<?php
//Connection to the database
$connection = mysqli_connect('localhost', 'root', '', 'cityliner') or die(mysqli_error());
//colllecting submitted data and storing it in a variable 
$PromotionID=$_POST['hidePromotionID'];
$PromotionName=$_POST['txtPromotionName'] ;
$PromotionDesc=$_POST['txtPromotionDesc'];
$PromotionPrice= $_POST['txtPromotionPrice'];

//INSERT the variables that collected the data submitted.
$query="UPDATE promotion SET PromotionName='$PromotionName', PromotionDesc='$PromotionDesc'
, PromotionPrice='$PromotionPrice' WHERE PromotionID='$PromotionID' ";

//run the $query 
mysqli_query($connection, $query)or die (mysqli_error());

//link to the page
header( 'Location: promotion.php' ) ;
?>