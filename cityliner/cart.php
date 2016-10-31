<?php
session_start();

$page = 'booking.php';

$connection=mysqli_connect('localhost', 'root', '', 'cityliner') or die('Failed to connect');

if (isset($_GET['add'])) {
	$quantity = mysqli_query($connection, 'SELECT RouteID, NoOfSeat FROM route WHERE RouteID=' . mysql_real_escape_string((int)$_GET['add']));
	while ($quantity_row = mysqli_fetch_assoc($quantity)) {
		if ($quantity_row['NoOfSeat'] != $_SESSION['cart_' . (int)$_GET['add']]) {
			$_SESSION['cart_' . (int)$_GET['add']] += 1;

		}

	}
	header('Location:' . $page);
}

if (isset($_GET['remove'])) {
	$_SESSION['cart_' . (int)$_GET['remove']]--;
	header('Location:' . $page);
}

if (isset($_GET['delete'])) {
	$_SESSION['cart_' . (int)$_GET['delete']] = '0';
	header('Location:' . $page);
}

function paypal_items(){
	$num='0';
	foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
			if (substr($name, 0, 5) == 'cart_') {
				$id = substr($name, 5, (strlen($name) - 5));
				$get = mysqli_query($GLOBALS['connection'], 'SELECT RouteID, FromRoute, ToRoute, Fares, BusID, NoOfSeat FROM route WHERE RouteID=' . mysql_real_escape_string((int)$id));
				while ($get_row = mysqli_fetch_assoc($get)) {
					$num++;
					echo '<input type="hidden" name="booking_number_'.$num.'" value="'.$id.'">';
				    echo '<input type="hidden" name="Route_'.$num.'" value="'.$get_row['RouteID'].'">';
					echo '<input type="hidden" name="From_route_'.$num.'" value="'.$get_row['FromRoute'].'">';
					echo '<input type="hidden" name="To_route_'.$num.'" value="'.$get_row['ToRoute'].'">';
					echo '<input type="hidden" name="Fares_'.$num.'" value="'.$get_row['Fares'].'">';
					echo '<input type="hidden" name="Bus_ID_'.$num.'" value="'.$get_row['BusID'].'">';
					
				}
			}

		}

	}
	
	
}

function cart() {
	/*foreach ($_SESSION as $name => $value) {
		if ($value > 0) {
			if (substr($name, 0, 5) == 'cart_') {
				$id = substr($name, 5, (strlen($name) - 5));
				$get = mysqli_query($GLOBALS['connection'], 'SELECT RouteID, FromRoute, ToRoute, Fares FROM route WHERE RouteID=' . mysql_real_escape_string((int)$id));
				while ($get_row = mysqli_fetch_assoc($get)) {
					echo $_SESSION['name'];
					echo $_SESSION['CustomerID'];
					$fare = $get_row['Fares'];
					echo $_SESSION['date1'];
					echo $get_row['Fares'];
					$fare 	= substr($fare,2,(strlen($fare) - 2));
					echo $fare;
					echo "ghhjdbvjdf";
				}
			}
			$total = @$total + @$sub;

		}

	}*/
	$total=1;
	if (!isset($total)) {
		echo '<p>Your booking is empty!</p>';
	} else {
		echo '<p>Please click BELOW, to confirm your payment; You have booked ONE seat.'. '</p>';
?>
<p>
	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="cityliner@onlinepayment.com.my">

<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Specify details about the item that buyers will purchase. -->


<input type="hidden" name="item_title" value="<?php echo 'Ticket';?>">
<input type="hidden" name="item_name" value="<?php echo $_SESSION['date1'];?>">
<input type="hidden" name="amount" value="<?php $fare ?>"> 

<input type="hidden" name="currency_code" value="MYR">

<!--Process to confirm page -->
   <input type="hidden" name="return" value="http://localhost/Customer/insertbook.php">
   
<!--Cancel and return to checkout-->
<input type="hidden" name="cancel_return" value="http://localhost/Customer/checkout.php">

<!-- Display the payment button. -->
<input type="image" name="submit" border="0"
<img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-medium.png" alt="Check out with PayPal" />
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" />

</form>
</p>
<?php
}
}
?>