<?php
$indianPlayers=array(
        "Virat Kohli",
        "Rohit sharma",
        "Jasprit Bumrah",
        "Haradik Pandya",
        "Ravindra Jadeja",
        "K L Rahul",
        "Shikhar Dhawan",
        "Cheteshwar Pujara",
        "Ajinkya Rahane",
        "Rishab Pant",
        );
      function generateTable($data)
      {
       echo"<table order='1'>";
       echo"<tr><th>Indian Cricket Players</th></tr>";
       foreach($data as $player)
       {
        echo"<tr><td>$player</td></tr>";
       }
       echo"</table>";
      }
      
      generateTable($indianPlayers)
  ?>
