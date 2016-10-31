<?php
	//calling the cart file
	require 'schedule_cart.php';	//schedule code
	?>		
<?php
	//connection to database
	include('connection.php');
	
	if ($_SERVER['REQUEST_METHOD']=='POST'){
	
 
    if(empty($_POST['route'])){
        $errors['route'] = 'Please select your route.';
    }else{
		
		if( $_POST['route'] == 'default')
		{
			$errors['route'] = 'Please select your route.';
		}
		else{	
        $route = mysqli_real_escape_string($connection,trim($_POST['route']));
		}
    

    if(empty($_POST['date1'])){
        $errors['date1'] = 'Please select your date.';
    }else{
		
		if( $_POST['date1'] == 'default')
		{
			$errors['date1'] = 'Please select date';
		}
		else{	
        $date1 = mysqli_real_escape_string($connection,trim($_POST['date1']));
		}
    }
	 
    if(empty($_POST['payment'])){
        $errors['payment'] = 'Please select payment method';
    }else{
		
		if( $_POST['payment'] == 'default')
		{
			$errors['payment'] = 'Please select payment method';
		}
		else{	
        $payment = mysqli_real_escape_string($connection,trim($_POST['payment']));
		}
    }

	
	
    if(empty($errors)){
        $query  = "INSERT INTO booking ";
        $query .= "(RouteID,ScheduleDate,PaymentMethod) ";
        $query .= "VALUES ('$route','$date1', '$payment')";

        $booking = $connection->query($query);
		
		//$BookingID = $connection->query("SELECT BookingID FROM booking WHERE RouteID = '$route' and ScheduleDate = '$date1'")->fetch_object()->BookingID;

        if(!$booking){
        
			echo "error".mysql_error();    
		}
		else
		{
			$_SESSION['RouteId']=$route;
			$_SESSION['date1']=$date1;
			$message = 'Your booking request has been submit successfully';
			if ($payment=='PayPal')
			{
				
				header("Location:confirm.php");
			}
			else 
							{
				
				header("Location:confirm_c.php");
			}
		}
    }
	}}
    
	
?>
<?php
  // You will need to send the $_POST data along with the redirect
  if(isset($_POST['submit1']))
	  ?>

<!DOCTYPE html>
<html>
<head>
	<title>CITYLINER</title>
	<meta charset="UTF-8"/>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="home_css.css" />
<script src="js/jquery-ui.js"></script>
	<script language="javascript" type="text/javascript">
function clearText(field){

    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;

}
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
<?
session_start();
if (!isset($_SESSION["name"])) {
	header("Location:signup.php");
}
?>
	<?php
	//connection to database
	include('connection.php');
	//start a session
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
				<?php
					{
						echo '<br/><font color="black" size="6em">'.$_SESSION['name']  . ', you can start booking with CITYLINER! </font><br />';
						//destroying the session using logout.php file
						echo '<a href="./logout.php">logout</a>';
					}
					?>
                     </div>
                </div>
				

				

					
				<?php 
					    if ($_SERVER['REQUEST_METHOD']=='POST'){ if(empty($errors)){ echo '<br/><span style="color:green;">Your booking request has been submit successfully</span>'; 
							} else 
					    { echo '<br/><span style="font-size: 13px;"><font color="red">Your booking request is not complete.</font></span><br><br><span style="
						display: block;
						padding: 10px;
						background-color: #FFE5E5;
						margin-bottom:5px;
						color: #FF5757;">'. implode("</span><span style='
						display: block;
						padding: 10px;
						background-color: #FFE5E5;
						margin-bottom:5px;
						color: #FF5757;'>",$errors). '</span>';} } 
						?>	
						
			<div ="section" align="center">		
				<form action="booking.php" method="post" name="booking" class="form_input">
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
					<br/>
					<select name="route" style=" visibility: visible;">
					
						<?php
						include('connection_form.php');
						$result = mysql_query("SELECT * FROM route");
						while($row = mysql_fetch_array($result))
							{
								echo '<option value="'.$row['RouteID'].'">';
								echo $row['RouteID'];
								echo '</option>';
							}
						?>
				</select>
				<br/>Departure Date<br/>
					<input name="date1" class="date" id="datepicker" type="text"  placeholder="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
					<br/>
					Payment<br/>
					<select name="payment" style=" visibility: visible;">
					<option value="default">Select your payment method</option>
					<option value="Cash">Cash</option>
					<option value="PayPal">PayPal</option>
					</select><br />
					<button onclick="about.php">SUBMIT</button>
				<p id="demo"></p>
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
