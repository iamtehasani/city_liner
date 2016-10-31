<?php
//Connection to the database
$connection = mysqli_connect('localhost', 'root', '', 'cityliner') or die(mysqli_error());
//colllecting submitted data and storing it in a variable 
$TripID=$_POST['hideTripID'];
$RouteID=$_POST['txtRouteID'] ;
$DepartureTime=$_POST['txtDepartureTime'];
$ArrivalTime= $_POST['txtArrivalTime'];

//INSERT the variables that collected the data submitted.
$query="UPDATE trip SET RouteID='$RouteID', DepartureTime='$DepartureTime'
, ArrivalTime='$ArrivalTime' WHERE TripID='$TripID' ";

//run the $query 
mysqli_query($connection, $query)or die (mysqli_error());

//link to the page
header( 'Location: manage_schedule.php' ) ;
?>