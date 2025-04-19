<!DOCTYPE html>
<html lang="en">
<head>
    <title>Marks and Percentage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            width: 50%;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        td.serial-number {
            width: 10%;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Marks and Percentage</h2>
    <?php
    $marks = ["Maths" => 85, "English" => 90, "Science" => 78, "History" => 92, "Geography" => 88];
    $total = array_sum($marks);
    $percentage = ($total / 500) * 100;

    echo "<table><tr><th class='serial-number'>Serial</th><th>Subject</th><th>Marks</th></tr>";
    foreach (array_keys($marks) as $i => $subject) {
        echo "<tr><td>" . ($i + 1) . "</td><td>" . ucfirst($subject) . "</td><td>" . $marks[$subject] . "</td></tr>";
    }
    echo "<tr><th colspan='2'>Total Marks</th><td>$total</td></tr>";
    echo "<tr><th colspan='2'>Percentage</th><td>$percentage%</td></tr></table>";
    echo"This Program is written by Shaurya Ranjan 0221BCA058"
    ?>
</div>

</body>
</html>
