<?php

    // Class definition
    class greeting
    {
        // properties
        public $str = "Hello World!";
        
        // methods
        function show_greeting()
        {
            return $this->str;
        }
    }
     
    // Create object from class
    $message = new greeting;
    var_dump($message);  
    echo "<br>";
    echo "Program by Shaurya Ranjan 0221BCA058"

?>
