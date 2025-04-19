<?php
function countDigits($number) {
    $count = 0;
    if ($number == 0) {
        return 1;
    }
    while ($number != 0) {
        $number = intdiv($number, 10);
        $count++;
    }
    return $count;
}

$number = 123456;
echo "The number of digits in " . $number . " is: " . countDigits($number) . "<br>";
echo "This Program is written by Shaurya Ranjan 0221BCA058";
?>
