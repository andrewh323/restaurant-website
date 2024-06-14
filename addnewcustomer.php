<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>New Account</title>
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
<ol>
<?php
   $customerName = $_POST["customerName"];
   $customerEmail = $_POST["customerEmail"];
   $customerPhone = $_POST["customerPhone"];
   $customerAddress = $_POST["customerAddress"];
   
   $query1 = "SELECT * FROM customer WHERE customerEmail = '$customerEmail'";
   $result1 = $connection->query($query1);
   $numRows1 = $result1->rowCount();
   
   $query2 = "SELECT * FROM customeraccount WHERE customeremail = '$customerEmail'";
   $result2 = $connection->query($query2);
   $numRows2 = $result2->rowCount();
   
   if ($numRows1 == 0 && $numRows2 == 0) {
       $query3 = "INSERT INTO customer VALUES ('$customerEmail','$customerName','$customerPhone','$customerAddress')";
       $numRows3 = $connection->exec($query3);
       $query4 = "INSERT INTO customeraccount VALUES (NULL,NULL,5,'$customerEmail')";
       $numRows4 = $connection->exec($query4);
       
       echo "New customer added!";
   } else {
       echo "Customer with email $customerEmail already exists!";
   }
   
   $connection = NULL;
?>
</ol>
</body>
</html>