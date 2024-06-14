<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Restaurant</title>
	<style>
		.container {
			position: relative;
		}
		.my-image {
			position: absolute;
			top: 20px;
			right: 20px;
			z-index: -1;
		}
	</style>
	<style>
		body {
			background-image: url("background.jpg");
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			background-color: #F5DEB3;
			z-index: -2;
		}
	</style>
</head>
<body>
<?php
include 'connectdb.php';
?>

	<div class="container">
		<h1>Welcome to the Cool Restaurant</h1>
		<img class = "image" src="food.jpg" alt="Food" class="my-image" style="width: 450px; height: auto;">
		<h2>Please choose an action to perform</h2>
		<form action="getschedule.php" method="post">
			<?php
				include 'getdata.php';
			?>
			<input type="submit" value="Get Employee Schedule">
		</form>
		
		<p>
		<hr>
		<p>
		
		<a href="addnewcustomerform.php">Don't have an account? Create one here</a>
		
		<p>
		<hr>
		<p>
		
		<h2> List of dates on which orders were placed: </h2>
		<table>
		<tr>
		<th> Order Date |</th>
		<th> Number of Orders</th>
		</tr>
		<?php
			$query = "SELECT orderDate, COUNT(*) as numOrders from customerorder group by orderDate";
			$result = $connection->query($query);
	   
			while ($row=$result->fetch()) {
			echo "<tr>";
			echo "<td>".$row["orderDate"]."</td>";
			echo "<td>".$row["numOrders"]."</td>";
			echo "</tr>";
		}
		?>
		</table>
		
		<p>
		<hr>
		<p>
		
		<h2> Search orders from particular date:</h2>
		<form action="vieworders.php" method="post">
			Order Date: <input type="text" name="orderDate"><br>
		<input type="submit" value="Search">
	<?php
		$connection =- NULL;
	?>
	</div>
</body>
</html>