<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="index.css"/>
		<title>MY WANDERLUST</title>
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
		echo '<h2>Manage Ideas</h2>';
		//run query to select all records from customer table
		//store the result of the query in a variable
		$query="SELECT * FROM activity";
		if (isset($_GET['sort'])){
			$query=$query." ORDER BY ".$_GET['sort'];
			//echo $query;
		}
		//displaying the data stored in the product table.
		$result = mysqli_query($connection, $query) or die(mysqli_error());
		echo '<h1> <a href="admin.php" target="_parent" class="current">BACK TO ADMIN PAGE</a></h1>';
		echo '<table><tr><th><a href="idea.php?sort=ActivityID">Activity ID</a></th>
<th><a href="idea.php?sort=ActivityName">Activity Name</a></th>
<th><a href="idea.php?sort=ActivityDescription">Activity Description</a></th>
<th><a href="idea.php?sort=ActivityImage">Activity Image</a></th>
<th>Edit</th><th>Delete</th></tr>';
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<tr>';
			echo '<td>' . $row['ActivityID'] . '</td>';
			echo '<td>' . $row['ActivityName'] . '</td>';
			echo '<td>' . $row['ActivityDescription'] . '</td>';
			echo '<td><img src="./images/'.$row['ActivityImage'].'" width="500" height="500"/></td>';
			echo '<td><a href="amend_idea.php?id=' . $row['ActivityID'] . '">Edit</a></td>';
			echo '<td><a href="delete_idea.php?id=' . $row['ActivityID'] . '">Delete</a></td>';
			echo '</tr>';
		}
		echo '</table>';
		?>
		<p>
			<form method="post" action="write_idea.php">
				<fieldset class="fieldset-width1">
					<legend>
						Enter New Activity Details
					</legend>
					<label class="align" for="txtActivityID">Activity ID: </label>
					<input type="text" name="txtActivityID"  />
					<br />
					<br />
					<label class="align" for="txtActivityName">Activity Name: </label>
					<input type="text" name="txtActivityName"  />
					<br />
					<br />
					<label class="align" for="txtActivityDescription"> Description: </label>
					<input type="text" name="txtActivityDescription"  style="width: 95%;">
					<br />
					<br />
					<label class="align" for="txtActivityImage">ActivityImage: </label>
					<input type="text" name="txtActivityImage"  />
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