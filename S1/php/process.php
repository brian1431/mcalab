<?php
$db = new mysqli("localhost", "root","", "data1");
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
$result = $db->query("SELECT * FROM iyyee");
while ($row = $result->fetch_assoc()) {
  
	echo "a1: " . $row['a1'] . "<br>";
	echo "b2: " . $row['b2'] . "<br>";
}
$db->close();
?>
