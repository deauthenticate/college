<?php
$my_str = 'World'; // Assigning the string 'World' to $my_str

// Correct usage of $my_str in double quotes:
echo "Hello, $my_str!<br>"; // Displays: Hello, World!
// Correct usage of $my_str in single quotes:
echo 'Hello, $my_str!<br>'; // Displays: Hello, $my_str! (variables inside single quotes are not parsed)
// Correct usage of <pre> tag to format text:
echo '<pre>Hello\tWorld!</pre>'; // Displays: Hello\tWorld! (but \t is not interpreted in single quotes)
echo "<pre>Hello\tWorld!</pre>"; // Displays: Hello    World! (with a tab space)
// Correct usage of escape character:
echo 'I\'ll be back'; // Displays: I'll be back
echo"This Program is written by Shaurya Ranjan 0221BCA058"; // Adding a line break at the end
?>
