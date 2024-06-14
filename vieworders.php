<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Orders</title>
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

<table>
	<tr>
    <th> Customer Name |</th>
    <th> Items Ordered |</th>
    <th> Total Price ($) |</th>
    <th> Tip ($) |</th>
    <th> Deliverer</th>
	</tr>
<?php
   $orderDate = $_POST["orderDate"];
   $query = "SELECT * from customerorder join customer on customerorder.customerEmail = customer.customerEmail where customerorder.orderDate = '$orderDate'";
   $result = $connection->query($query);
   
	while ($row=$result->fetch()) {
      echo "<tr>";
      echo "<td>".$row["customerName"]."</td>";
      echo "<td>".$row["itemsOrdered"]."</td>";
      echo "<td>".$row["totalPrice"]."</td>";
      echo "<td>".$row["tip"]."</td>";
      echo "<td>".$row["deliverer"]."</td>";
      echo "</tr>";
    }
?>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>