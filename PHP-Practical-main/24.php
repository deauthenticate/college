<?php

    /* example 1 */
    echo "First Way \t";
    for ($i = 1; $i <= 10; $i++)
    {
        echo "<br>";
        echo $i;
    	echo "\t";
    }
    echo "<br>";
    /* example 2 */
    echo "\nAnother Way\t";
    for ($i = 1; ; $i++)
    {
        if ($i > 10)
        {
            break;
        }
        echo "<br>";
        echo $i;
    	echo "\t";
    }
        echo "<br>";
        echo "Program by Shaurya Ranjan 0221BCA058"
        ?>