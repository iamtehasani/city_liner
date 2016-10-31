<!DOCTYPE html>
<html>
<head>
	<title>CITYLINER</title>
	<meta charset="UTF-8"/>
	<script src="js/jquery.min.js"></script>
	<link href="home_css.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-ui.js"></script>
	<script language="javascript" type="text/javascript">
		  $(function() {
    $("#datepicker,#datepicker1").datepicker({
        dateFormat: 'yy/mm/dd',
        minDate: 0
    });

    /*
    $('body').on('focus', ".datepicker", function(){
        $(this).datepicker({ dateFormat: 'dd/mm/yy' });
    })
    */

    $('.cal').on('click', function(e) {
        var target = $(this).closest('.calendar').find('.datepicker');
        target.datepicker('show');
    });
});

</script>
</head>
<body>
	<?php
	//calling the cart file
	require 'promo_cart.php';
	?>		
	<?php
	//connection to database
	include('connection.php');
	?>
		
		<div id="header">
			<div class="cityliner" >
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
				</div>
		
				<div id="nav">
					<a target="_blank" href="booking.php">
					<div class="buy">
				</div></a></div>
				
				<div id="section">
					<div class="busgif">

				</div>		
						
				
					<div id="container">
							<?php
						
						//displaying the  products function in the promo_cart.php file
						promotion();
						?>
						
						<br><br>
						<div class="img">
						<a target="_blank" href="https://en.wikipedia.org/wiki/A_Famosa">
						<div class="afamosa"></div>
						</a>
						<div class="desc">A Famosa is the main attraction in Melaka</div>
						</div>

						<div class="img">
						<a target="_blank" href="https://en.wikipedia.org/wiki/Kuala_Lumpur_City_Centre">
						<div class="klcc"></div>
						</a>
						<div class="desc">KLCC is one of the main attraction in Kuala Lumpur</div>
						</div>

						<div class="img">
						<a target="_blank" href="https://en.wikipedia.org/wiki/Teluk_Cempedak">
						<div class="tc"></div>
						</a>
						<div class="desc">Teluk Cempedak is one of the most beautiful beach in Kuantan</div>
						</div>
	
						<div class="img">
						<a target="_blank" href="https://en.wikipedia.org/wiki/Legoland_Malaysia_Resort">
						<div class="lego"></div>
						</a>
						<div class="desc">Legoland is the largest theme park in Asia found in Johor</div>
						</div>
						
						<div class="img">
						<a target="_blank" href="https://en.wikipedia.org/wiki/Penang_Bridge">
						<div class="penang"></div>
						</a>
						<div class="desc">Penang first and second bridge are the longest bridge in Malaysia</div>
						</div>
					
						<div class="img">
						<a target="_blank" href="https://en.wikipedia.org/wiki/Fraser%27s_Hill">
						<div class="bukit"></div>
						</a>
						<div class="desc">Fraser's Hill is one of the coldest highlands located in Pahang</div>
						</div>
					
						<div class="img">
						<a target="_blank" href="https://en.wikipedia.org/wiki/Pusat_Sains_Negara">
						<div class="sains"></div>
						</a>
						<div class="desc">Pusat Sains Negara located in Kuala Lumpur</div>
						</div>
					
						<div class="img">
						<a target="_blank" href="https://en.wikipedia.org/wiki/Pavilion_Kuala_Lumpur">
						<div class="pavvy"></div>
						</a>
						<div class="desc">Pavillion is one of the hottest shoping complex in Kuala Lumpur</div>
						</div>
				
					</div>
						
					
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
				<p><a href="#header">Back to top!</a></p>		
				<p> Copyright &copy; CITYLINER, All Right Reserved, 2015 </p>
		</div>	
</body>
</html>