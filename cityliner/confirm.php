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
	
	

echo '<table border="1" align="center" class="inlineTable" id="sch">
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
		<td>RM' .$fare.' </td>
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
  </div>
  
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="cityliner@gmail.com.my">

<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Specify details about the item that buyers will purchase. -->


<input type="hidden" name="item_name" value="<?php echo $_SESSION['name'];?>">
<input type="hidden" name="amount" value="<?php echo $fare; ?>">

<input type="hidden" name="currency_code" value="MYR">

<!--Process to confirm page -->
   <input type="hidden" name="return" value="http://localhost/Customer/insertbook.php">
   
<!--Cancel and return to checkout-->
<input type="hidden" name="cancel_return" value="http://localhost/cityliner/confirm.php">

<!-- Display the payment button. -->
<input type="image" name="submit" border="0"
<img src="https://www.paypalobjects.com/en_US/i/btn/x-click-but6.gif" alt="Check out with PayPal" />
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" />

</form>
				
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
