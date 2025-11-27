<?php

$players = [
    "Rohit Sharma",
    "Virat Kohli",
    "Jasprit Bumrah",
    "KL Rahul",
    "Ravindra Jadeja",
    "Shubman Gill",
    "Hardik Pandya"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 40%;
            border-collapse: collapse;
            margin: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Indian Cricket Players</h2>

<table>
    <tr>
        <th>Sl. No</th>
        <th>Player Name</th>
    </tr>

    <?php
    
    $count = 1;
    foreach ($players as $player) {
        echo "<tr>";
        echo "<td>$count</td>";
        echo "<td>$player</td>";
        echo "</tr>";
        $count++;
    }
    ?>
</table>

</body>
</html>
