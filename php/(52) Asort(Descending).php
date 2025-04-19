<!DOCTYPE html>
<html lang="en">
<head>
<title>Sorting PHP Associative Array in Descending Order by Value</title>
</head>
<body>
<?php
// Define array
$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35); // Corrected syntax
// Sorting array by value and print
arsort($age);
foreach($age as $name => $value) {
    echo "$name: $value<br>";
}
echo"This Program is written by Shaurya Ranjan 0221BCA058";
?>
</body>
</html>
