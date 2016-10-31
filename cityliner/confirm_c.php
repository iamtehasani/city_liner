<!DOCTYPE html>
<html>
<head>
	<title>CITYLINER</title>
	<meta charset="UTF-8"/>
	<link href="home_css.css" rel="stylesheet" type="text/css" />
	<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}

function printPage(printContent) {
var display_setting="toolbar=yes,menubar=yes,";
display_setting+="scrollbars=yes,width=650, height=600, left=100, top=25";


var printpage=window.open("","",display_setting);
printpage.document.open();
printpage.document.write('<html><head><title>Print Page</title></head>');
printpage.document.write('<body onLoad="self.print()" align="center">'+ printContent +'</body></html>');
printpage.document.close();
printpage.focus(); }
</script>
</head>
<body>
	<?php
	//calling the cart file
	require 'cart.php';
	?>		
	<?php
	//connection to database
	include('connection.php');
	?>

		<div id="header">
			<div class="cityliner">
			</div>
		</div>
				
				<table class="menu">
					<tr>
						<td>
							<a href="home.php" target="_parent" class="current">CITYLINER</a>
						</td>
						<td>
							<a href="schedule.php" target="_parent" class="current">BUS SCHEDULE</a>
						</td>
						
						<td>
							<a href="about.php" target="_parent" class="current">ABOUT CITYLINER</a>
						</td>
						<td>
							<a href="safety.php" target="_parent" class="current">TRAVEL SAFETY</a>
						</td>
						<td>
							<a href="signin.php" target="_parent" class="current">LOGIN</a>
						</td>
					</tr>
				</table>
		
				<div id="section">
<?php
				
				$routeId=$_SESSION['RouteId'];
				$date1=$_SESSION['date1'];
				
				$query="SELECT * FROM route WHERE routeId ='$routeId' ";
	$result = mysqli_query($connection, $query) or 
	die(mysqli_error());
	
	if ($row = mysqli_fetch_assoc($result)) {
		$routename=$row['FromRoute'];
		$routeto=$row['ToRoute'];
		$fare=$row['Fares'];
		
	}
	
	

echo '<div id="printsection">
<table border="1" align="center" class="inlineTable" id="sch">
	<tr>
		<th> Name </th>
		<td> ' . $_SESSION['name'] . '</td>
	</tr>
	<tr>
		<th> Customer ID </th>
		<td> ' .$_SESSION['CustomerId']. '</td>
	</tr>
	<tr>
		<th> Route </th>
		<td> ' .$routename.'-'.$routeto. '</td>
	</tr>
	<tr>
		<th> Date of Travel</th>
		<td>' .$_SESSION['date1']. '</td>
	</tr>
	<tr>
		<th> Total Amount</th>
		<td>RM' .$fare.'</td>
	</tr>
	<tr>
		<th> Trip Time</th>
		<td>'
		
		
		
		
		
		
  
?> 
<select name="departuretime" style=" visibility: visible;">
					 
						<?php
						include('connection_form.php');
						$result = mysql_query("SELECT * FROM trip where RouteID='$routeId'");
						while($row = mysql_fetch_array($result))
							{
								echo '<option value="'.$row['DepartureTime'].'">';
								echo $row['DepartureTime'];
								echo '</option>';
							}
						
						?>
						
				</select>
				</td>
	</tr>
	</table>
  </div>'
		
		<p>Please click <a href="javascript:void(0);" onClick="printPage(printsection.innerHTML)">HERE</a>, to print this statement as your reference; You have booked ONE seat.</p>	
			</div>
			
			<div id="footer">
				<table class="footer">
					<tr>
						<td> SEREMBAN BUS TERMINAL ONE,<br>
							 JALAN LINTANG,<br>
							 70000 SEREMBAN,<br>
							 NEGERI SEMBILAN, MALAYSIA
								<div class="footer">
								</div>
						</td>
						<td>
							Operation Time: Mondays to Sundays <br>
							from 5.00a.m-12.00a.m
						</td>
						<td>Follow us on:
							<a href="www.facebook.com" target="_parent" class="current"><div class="fb"></div></a>
							<a href="www.twitter.com" target="_parent" class="current"><div class="twitter"></div></a>
							<a href="www.instagram.com" target="_parent" class="current"><div class="ig"></a></div>
				</table>
						
				<p> Copyright &copy; CITYLINER, All Right Reserved, 2015 </p>
		</div>	
</body>
</html>
