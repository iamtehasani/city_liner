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
						echo '<font color="black">Get connected to your love ones with CITYLINER ' . $_SESSION['name'] . '</font><br />';
						echo '<a href="./logout.php">logout</a>';
					}
					?>
					<h1><font color="red"> WRONG USERNAME OR PASSWORD! </font></h1>
					<h4>Please try again</h4>
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
					
                 <h2>If you are not a member <a href="Signup.php">CLICK HERE</a> to Register</h2>		
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
