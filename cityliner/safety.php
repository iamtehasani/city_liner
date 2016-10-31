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
		<img src="images/driver.jpg">
		</th>
	</tr>
	<tr>
		<td>How do we manage and recruitement drivers
		
		<br/><br/>

Step 1 -	Pre-Interview by Branch Operation Officer<br>

Our Branch Operation Officer will interview a candidate who are qualified for the driver position.<br><br/>

Step 2 -	Feedback by Branch Operation Officer<br>

All feedback upon pre - interview will be submitted via report to HQ office and qualified candidate will be selected.<br><br/>

Step 3 -	Checking Summons and Examine candidate background at previous company by Operation Dept / HRA<br>

Our Operation Dept and Human Resource will examine the selected candidate at the previous company and checking summons will be done accordingly.<br><br/>

Step 4 -	Driving Test - Operation Department<br>

Candidate will do a driving test skill on handling bus on the road and to determine the efficiency on driving methods.<br><br/>

Step 5 -	Interview and Overview of Job Scope, Work procedure and "Driving Ethics Code (LPKP) by Top Management OPR/HRA<br>

Selected candidate will be interviewed by COO / Manager and will be explain further on the Job Scope, Working Procedure and also overview of " Driving Ethics Code by LPKP<br><br/>

Step 6 -	Medical Treatment - Panel Clinic<br>

Candidate will be check up by our Panel Clinic for Medical Treatment ie: Urine, ecg, Blood pressure and etc. It is a compulsory that all selected candidate must have an excellent health to become a bus driver.<br><br/>

Step 7 -	Accepted an Offer Letter<br>

A successful candidate then will be offering a job as a Full time driver after all the above steps has been fulfilled.<br><br/>

Step 8 -	Induction for Safety Session by SHE Department<br>

Finally, our driver will be attending a induction session for Safety by our SHE Manager. Here we will elaborate more on Safety of buses, passenger and others related matter.<br>

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
