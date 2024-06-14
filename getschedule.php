<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Restaurant - Employee Schedule</title>
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
<h1>Here is this employee's schedule:</h1>
<table>
<?php
   $whichEmployee= $_POST["employeeID"];
   $query = 'SELECT * FROM schedule, employee WHERE employee.employeeID = schedule.employeeID AND employee.employeeID="' . $whichEmployee . '"';
   $result=$connection->query($query);
    
    while ($row=$result->fetch()) {
		$days = str_replace(array('Saturday', 'Sunday'), '', $row["days"]);
		echo "<tr><td>".$days."</td><td>".$row["startTimes"]."</td><td>".$row["endTimes"]."</td></tr>";
	}
?>
</table>
<?php
   $connection = NULL;
?>
</body>
</html>