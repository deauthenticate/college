<?php

    function factiorial($num)
    {
        if($num == 0 || $num == 1)
        {
            return 1;
        }
        else 
        {
            return $num *factiorial($num -1); 
        }

    }

    $f = factiorial(5);
    echo "$f";
    echo"<br>";
    echo "Program by Shaurya Ranjan 0221BCA058";

?>