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
</script>
</head>
<body>
	<?php
	//connection to database
	include('connection.php');
	//start a session
	session_start();
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
					<h1> GET CONNECTED WITH YOUR LOVED ONES WITH CITYLINER</h1>
					<br><br><br>
					<hr>
						<h2> Welcome to admin page. Happy working with CITYLINER</h2>
						<br><br><br>
						<hr>
							<p> To do some changes, click on the link below according to your preference</p>
							<br><br>
							
							<table class="menu">
							<tr>
							<td>
								<a href="promotion.php" target="_parent" class="current">MANAGE PROMOTION</a>
							</td>
							<td>
								<a href="manage_schedule.php" target="_parent" class="current">MANAGE BUS SCHEDULE</a>
							</td>
						
							<td>
								<a href="manage_driver.php" target="_parent" class="current">MANAGE DRIVER</a>
							</td>
							<td>
								<a href="manage_route.php" target="_parent" class="current">MANAGE ROUTE</a>
							</td>
							</tr>
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
