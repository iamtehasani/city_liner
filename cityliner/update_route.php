<?php
//Connection to the database
$connection = mysqli_connect('localhost', 'root', '', 'cityliner') or die(mysqli_error());
//colllecting submitted data and storing it in a variable 
$RouteID=$_POST['hideRouteID'];
$FromRoute=$_POST['txtFromRoute'] ;
$ToRoute=$_POST['txtToRoute'];
$Fares= $_POST['txtFares'];
$BusID= $_POST['txtBusID'];

//INSERT the variables that collected the data submitted.
$query="UPDATE route SET FromRoute='$FromRoute', ToRoute='$ToRoute'
, Fares='$Fares', BusID='$BusID' WHERE RouteID='$RouteID' ";

//run the $query 
mysqli_query($connection, $query)or die (mysqli_error());

//link to the page
header( 'Location: manage_route.php' ) ;
?>