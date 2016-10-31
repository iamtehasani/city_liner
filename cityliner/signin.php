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
		//make connection to database
		$connection = mysqli_connect('localhost', 'root', '','cityliner') or
		die(mysqli_error());
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
			<section id="signin">
				<?php
					if(!isset($_SESSION['name']))
					{
					?>
				<?php
						if (isset($_SESSION['errors'])){
					}
					}
					else
					{
						echo '<font color="black">' . $_SESSION['name'] . ', get connected to your love ones with CITYLINER! </font><br />';
						echo '<a href="./logout.php">logout</a>';
					}
					?>
		
				<h2>Please sign in to continue booking!</h2>
					<h3>Sign In</h3>
					<section id="signin">
					<?php
					if(!isset($_SESSION['name']))
					{
					?>
				  <form method="post" action="./login.php">	
					<table width="200" border="0">
					  <tr>
						<td><label for="username" class="style6">Username: </label></td>
						<td><input type="text" name="name" value=''/></td>
					  </tr>
					  <tr>
						<td><label for="password" class="style6">Password: </label></td>
						<td><input type="password" name="password" /></td>
					  </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td><button type="submit">Login</button></td>
				      </tr>
					</table>
				  </form>
				  				
				
					<?php
						if (isset($_SESSION['errors'])){
					}
					}
					else
					{
						echo '<a href="./booking.php">To Continue booking Click here</a>';
					}
					?>
					
                 <h2>If you are NOT a member <a href="Signup.php">CLICK HERE</a> to Register</h2>		
				  <hr>
				  <hr>
				  
				  
				 			
					<?php
					if(!isset($_SESSION['admin']))
					{
					?>
				<?php
						if (isset($_SESSION['errors'])){
					}
					}
					else
					{
						echo '<font color="black">Get connected with love one with CITYLINER ' . $_SESSION['admin'] . '</font><br />';
						echo '<a href="./logout.php">logout</a>';
					}
					?>
					
					<h1> ADMIN LOGIN </h2>
					<h2> SIGN IN </h2>
						<?php
					if(!isset($_SESSION['admin']))
					{
					?>
				  <form method="post" action="./admin_login.php">	
					<table width="200" border="0">
					  <tr>
						<td><label for="username" class="style6">Username: </label></td>
						<td><input type="text" name="username" /></td>
					  </tr>
					  <tr>
						<td><label for="password" class="style6">Password: </label></td>
						<td><input type="password" name="password" /></td>
					  </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td><button type="submit">Login</button></td>
				      </tr>
					</table>
				  </form>
				
					<?php
						if (isset($_SESSION['errors'])){
						echo $_SESSION['errors'];
					}
					}
					else
					{
						echo '<br /><a href="./admin.php">Click to continue</a>';
					}
					?>

				  <hr><hr>
				
				
				<?php
					if(!isset($_SESSION['driver']))
					{
					?>
				<?php
						if (isset($_SESSION['errors'])){
					}
					}
					else
					{
						echo '<font color="black">Get connected with love one with CITYLINER ' . $_SESSION['driver'] . '</font><br />';
						echo '<a href="./logout.php">logout</a>';
					}
					?>
					
					<h1> DRIVER LOGIN </h2>
					<h2> SIGN IN </h2>
						<?php
					if(!isset($_SESSION['driver']))
					{
					?>
				  <form method="post" action="./driver_login.php">	
					<table width="200" border="0">
					  <tr>
						<td><label for="username" class="style6">Username: </label></td>
						<td><input type="text" name="username" /></td>
					  </tr>
					  <tr>
						<td><label for="password" class="style6">Password: </label></td>
						<td><input type="password" name="password" /></td>
					  </tr>
					  <tr>
					    <td>&nbsp;</td>
					    <td><button type="submit">Login</button></td>
				      </tr>
					</table>
				  </form>
				
					<?php
						if (isset($_SESSION['errors'])){
						echo $_SESSION['errors'];
					}
					}
					else
					{
						echo '<br /><a href="./driver.php">Click to continue</a>';
					}
					?>
				
			

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
