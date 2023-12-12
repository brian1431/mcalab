<?php
// Array of Indian cricket players
$indianPlayers = array("Virat Kohli",
"Rohit Sharma",
"Jasprit Bumrah",
"Hardik Pandya",
"Ravindra Jadeja",
"KL Rahul",
"Shikhar Dhawan",
"Cheteshwar Pujara",
"Ajinkya Rahane",
"Rishabh Pant"
);
// Function to generate an HTML table from an array
function generateTable($data) {
echo "<table border='1'>";
echo "<tr><th>Indian Cricket Players</th></tr>";
foreach ($data as $player) {
echo "<tr><td>$player</td></tr>";
}
echo "</table>";
}
// Display the HTML table
generateTable($indianPlayers);
?>
