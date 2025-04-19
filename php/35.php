<?php
$greeting = "Hello, World!";
echo "The length of the string '$greeting' is: " . strlen($greeting) . "<br>";

$name = "php programming";
echo "Uppercase version of '$name' is: " . strtoupper($name) . "<br>";

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$mergedArray = array_merge($array1, $array2);
echo "The merged array is: ";
print_r($mergedArray);
echo "<br>";  
$value = 123;
if (is_int($value)) {
    echo "'$value' is an integer.<br>";
} else {
    echo "'$value' is not an integer.<br>";
}
echo "Program by Shaurya Ranjan 0221BCA058";
?>