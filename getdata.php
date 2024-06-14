<?php
$query = "SELECT * FROM employee";
$result = $connection->query($query);
echo "Which employee's schedule would you like to see?</br>";
echo "<ol>";

while ($row = $result->fetch()) {
	echo '<input type="radio" name="employeeID" value="';
    echo $row["employeeID"];
    echo '">' . $row["employeeName"] . "<br>";
}
?>