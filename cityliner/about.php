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
				
<table class="about" border="1" style="text-align:center">
	<tr>
		<th>
		<img src="images/img_bus.png">
		</th>
	</tr>
	<tr>
		<td>
			Cityliner is the largest private stage bus operator in Malaysia, serving people in states/areas namely Kedah, Penang, Pahang, Kelantan, Negeri Sembilan and Selangor. With a fleet of more than 700 buses, ranging from mini to double-decker, the red and grey signature color of Cityliner has been a major mode of transport, connecting rural and urban areas, villages to towns ferrying thousands of passengers every day of the year. From school going children to housewife buying groceries and workers commuting to work, with trips schedule tailored to the local needs, Cityliner has become part of daily life for many Malaysians.

			Cityliner has pioneered the stage bus industry with many firsts. With the rising environmental concerns and increasing fuel prices, Cityliner was the first in the country to opt for Compressed Natural Gas (CNG) technology which allows the buses to run on an alternative source of fuel commonly known as Natural Gas.

			Cityliner was also the first to introduce double-decker stage buses. The additional seating capacity enables Cityliner to carry double number of passengers of single deck at one time thus making it the most efficient among the stage bus providers.
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
