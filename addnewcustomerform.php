<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Restaurant - Add New Customer</title>
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
	<h1>Add New Customer</h1>
	<form action="addnewcustomer.php" method="post">
	New Customer's Name: <input type="text" name="customerName"><br>
	New Customer's Email: <input type="text" name="customerEmail"><br>
	New Customer's Phone Number: <input type="text" name="customerPhone"><br>
	New Customer's Address: <input type="text" name="customerAddress"><br>
	<input type="submit" value="Add New Customer">
	</form>
</body>
</html>