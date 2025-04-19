<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chessboard</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <table border="1">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $isBlack = ($row + $col) % 2 == 0; // Determine cell color
                echo "<td class='" . ($isBlack ? "black" : "white") . "'></td>";
            }
            echo "</tr>";
        }
       echo"This Program is written by Shaurya Ranjan 0221BCA058";
        ?>
    </table>
</body>
</html>