<!DOCTYPE html>
<html>
<head>
	<title>CITYLINER</title>
	<meta charset="UTF-8"/>
	<link href="schedule_css.css" rel="stylesheet" type="text/css" />
	<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
</script>
</head>
<body>
	<?php
	//calling the cart file
	require 'schedule_cart.php';
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
				
			<div class="title">DESTINATION CODE</div>
			<table width="474" border="2" align="center">
			<tr>	
			<td style="background-color: maroon; color: white;"><p><font size="2"><strong>RouteID</font></strong></p></td>
			<td style="background-color: maroon; color: white;"><p><font size="2"><strong>Route</font></strong></p></td>
			   		<?php
					//displaying the  products function in the schedule_cart.php file
					route();
					?>
						</table>
					<br>
					<hr><br>
			
				  			<div class="title">ROUTE SCHEDULE</div>
			<table width="474" border="2" align="center">
			<tr>	
			<td style="background-color: maroon; color: white;"><p><font size="2"><strong>TRIPID</font></strong></p></td>
			<td style="background-color: darkblue; color: white;"><p><font size="2"><strong>RouteID</font></strong></p></td>
			<td style="background-color: darkgreen; color: white;"><p><font size="2"><strong>Departure</font></strong></p></td>
			<td style="background-color: brown; color: white;"><p><font size="2"><strong>Arrival</font></strong></p></td>
   					<?php
					//displaying the  products function in the schedule_cart.php file
					schedule();
					?>
						</table>
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
