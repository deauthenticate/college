<!DOCTYPE html>
<html>
<body>
<?php
var_dump(checkdate(12,31,2025));
echo "<br>";
var_dump(checkdate(2,29,2023)); // 2023 is not a leap year
echo "<br>";
var_dump(checkdate(2,29,2024)); // 2024 is a leap year
echo"This Program is written by Shaurya Ranjan 0221BCA058";
?>
</body>
</html>
