<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="promotion.css"/>
		<title>CITYLINER</title>
	</head>
	<body>
		<?php
session_start();
if (!isset($_SESSION["admin"])) {
	header("Location: admin_login.php");
}
		//connection to database
		include 'connection.php';
		//Display heading
		echo '<h2>Manage Promotion</h2>';
		//run query to select all records from customer table
		//store the result of the query in a variable
		$query="SELECT * FROM promotion";
		if (isset($_GET['sort'])){
			$query=$query." ORDER BY ".$_GET['sort'];
			//echo $query;
		}
		//displaying the data stored in the product table.
		$result = mysqli_query($connection, $query) or die(mysqli_error());
		echo '<h1> <a href="admin.php" target="_parent" class="current">BACK TO ADMIN PAGE</a></h1>';
		echo '<table><tr><th><a href="promotion.php?sort=PromotionID">Promotion ID</a></th>
<th><a href="promotion.php?sort=PromotionName">Promotion Name</a></th>
<th><a href="promotion.php?sort=PromotionDesc">Promotion Description</a></th>
<th><a href="promotion.php?sort=PromotionPrice">Promotion Price</a></th>
<th>Edit</th><th>Delete</th></tr>';
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>' . $row['PromotionID'] . '</td>';
			echo '<td>' . $row['PromotionName'] . '</td>';
			echo '<td>' . $row['PromotionDesc'] . '</td>';
			echo '<td>' . $row['PromotionPrice'] . '</td>';
			echo '<td><a href="amend_promotion.php?id=' . $row['PromotionID'] . '">Edit</a></td>';
			echo '<td><a href="delete_promotion.php?id=' . $row['PromotionID'] . '">Delete</a></td>';
			echo '</tr>';
		}
		echo '</table>';
		?>
		<p>
			<form method="post" action="write_promotion.php">
				<fieldset class="fieldset-width1">
					<legend>
						Enter New Promotion Details
					</legend>
					<label class="align" for="txtPromotionID">Promotion ID: </label>
					<input type="text" name="txtPromotionID"  />
					<br />
					<br />
					<label class="align" for="txtPromotionName">Promotion Name: </label>
					<input type="text" name="txtPromotionName"  />
					<br />
					<br />
					<label class="align" for="txtPromotionDesc">Promotion Description: </label>
					<input type="text" name="txtPromotionDesc"  style="width: 95%;">
					<br />
					<br />
					<label class="align" for="txtPromotionPrice">Promotion Price: </label>
					<input type="text" name="txtPromotionPrice"  />
					<br />
					<br />

					<input type="submit" value="Submit" name='submit' />
					<input type="reset" value="Clear" />
			</form>
			<br />
			<br />
			<?php
						if (isset($_SESSION['errors'])){
					}
					else
					{
						echo '<a href="./logout.php">logout</a>';
					}
					?>
		</p>

	</body>
</html>