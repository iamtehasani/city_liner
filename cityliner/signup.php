<?php
	//connection to database
	include('connection.php');
	
	if ($_SERVER['REQUEST_METHOD']=='POST'){
	
	//Validation for Username
    $errors = array();
    if(empty($_POST['name'])){
        $errors['name'] = 'Please fill in your Username';//Username
    }else{
		
		  $name = mysqli_real_escape_string($connection,trim($_POST['name']));
		//validation to check if the username posted is in use.
        if($check = $connection->query("SELECT * FROM customer WHERE CustomerName = '$name'")){
            if($check->num_rows){
                $errors['name'] = 'Username in use';
            }
        }else{
            $errors['name'] = 'the qeury did not work';
        }
		
        
    }
	// validation for address textfield 
    if(empty($_POST['address'])){
        $errors['address'] = 'Please fill in your address';
    }else{
        $address = mysqli_real_escape_string($connection,trim($_POST['address']));
    }
	//validation for phone no 
    if(empty($_POST['phone'])){
        $errors['phone'] = 'Please fill in your phone';
    }else{
        $phone = mysqli_real_escape_string($connection,trim($_POST['phone']));
    }
	

	//validation for password
    if(empty($_POST['pass1'])){
        $errors['pass1'] = 'Please fill in password';
    }else{
        $pass1 = $_POST['pass1'];
    }
	//checking if the password ented in verify password is matching the password field
    if(empty($_POST['pass2'])){
        $errors['pass2'] = 'Please verify password';
    }else{
        $pass2 = $_POST['pass2'];

        if($pass1!=$pass2){
            $errors ['pass2'] = 'passwords do not match';
        }else{
            $password = mysqli_real_escape_string($connection,trim($_POST['pass1']));
           // $password = sha1($password);
        }
    }
	
    if(empty($errors)){
        $query  = "INSERT INTO customer ";
        $query .= "(CustomerName,CustomerAddress,CustomerPhoneNo,CustomerPassword,usertype) ";
        $query .= "VALUES ('$name','$address','$phone','$password','1')";

        $register = $connection->query($query);


$customerID = $connection->query("SELECT CustomerID FROM customer WHERE  CustomerName = '$name'")->fetch_object()->user_id;


		$query1  = "INSERT INTO cart ";
        $query1 .= "(customer_id) ";
        $query1 .= "VALUES ('$customer_id')";

        $addCart = $connection->query($query1);


        if(!$register && !addCart){
        
			echo $query;    
		}
		else
		{
			$message = 'Registration successfully completed, You can now login';
		}
    }
}
?>

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
							<a href="signin.php" target="_parent" class="current">LOGIN</a>
						</td>
					</tr>
				</table>
		
        <div id="section">    
			<h2>REGISTER NOW</h2>
					   <?php 
					    if ($_SERVER['REQUEST_METHOD']=='POST'){ if(empty($errors)){ echo '<span style="color:green;">'.$message; 
							} else 
					    { echo '<span style="font-size: 13px;"><font color="red">Registration denied!Please check again.</font></span><br><br><span style="
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
					   
					<form action="signup.php" method="post" name="Register" class="form_input">
				    <input id="name" type="text" name="name" placeholder="Username" style="width:45.5%;">
					<br />
					<input id="pass1" type="password" name="pass1" placeholder="Password" style="width:45.5%;">
					<br />
					<input id="pass2" type="password" name="pass2" placeholder="Confirm Password" style="width:45.5%;">
					<br />	
					<input id="address" type="text" name="address" placeholder="Valid Address" style="
					width: 95%;"><br>
					<input id="phone" name="phone" placeholder="Phone Number" type="text" style="width:45.5%;">        
					<br />
					
					<input type="submit" name="submit" value="Submit"> 
					</form> 
					
					<p>To Log in <a href="./signin.php">Click here</a></p>
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
