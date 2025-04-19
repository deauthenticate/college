
<?php

    $x = 25;
    $y = 35;
    $z = "25";
    
    var_dump($x == $z) ;  echo "<br>";  // Outputs: boolean true
    var_dump($x === $z);  echo "<br>";// Outputs: boolean false
    var_dump($x != $y);  echo "<br>"; // Outputs: boolean true
    var_dump($x !== $z);  echo "<br>";// Outputs: boolean true
    var_dump($x < $y);   echo "<br>"; // Outputs: boolean true
    var_dump($x > $y);  echo "<br>";  // Outputs: boolean false
    var_dump($x <= $y);  echo "<br>"; // Outputs: boolean true
    var_dump($x >= $y);  echo "<br>"; // Outputs: boolean false
    echo "<br>";
    echo "Program by Shaurya Ranjan 0221BCA058"

?>