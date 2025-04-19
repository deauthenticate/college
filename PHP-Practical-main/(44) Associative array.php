<!DOCTYPE html>
<html lang="en">
<head>
<title>Calculate Total and Percentage</title>
</head>
<body>
<form method="post">
    <?php for ($i = 1; $i <= 5; $i++): ?>
        <label for="subject<?php echo $i; ?>">Subject <?php echo $i; ?>:</label>
        <input type="number" id="subject<?php echo $i; ?>" name="subject<?php echo $i; ?>"><br>
    <?php endfor; ?>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total = 0;
    foreach ($_POST as $mark) {
        $total += (int)$mark;
    }
    $percentage = ($total / 500) * 100;
    echo "Total Marks: $total<br>";
    echo "Percentage: $percentage%<br>";
    echo"This Program is written by Shaurya Ranjan 0221BCA058";;
}
?>
</body>
</html>
