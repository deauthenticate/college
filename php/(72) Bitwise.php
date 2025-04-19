<?php 
// PHP code to demonstrate Bitwise Operator.

// Bitwise AND 
$First = 5; 
$second = 3; 
$answer = $First & $second; 
echo "Bitwise & of 5 and 3 is $answer<br>"; 

// Bitwise OR 
$answer = $First | $second; 
echo "Bitwise | of 5 and 3 is $answer<br>"; 

// Bitwise XOR 
$answer = $First ^ $second; 
echo "Bitwise ^ of 5 and 3 is $answer<br>"; 

// Bitwise NOT 
$answer = ~$First; 
echo "Bitwise ~ of 5 is $answer<br>"; 

// Bitwise Left shift 
$second = 1; 
$answer = $First << $second; 
echo "5 << 1 will be $answer<br>"; 

// Bitwise Right shift 
$answer = $First >> $second; 
echo "5 >> 1 will be $answer<br>"; 
echo"This Program is written by Shaurya Ranjan 0221BCA058";
?>
