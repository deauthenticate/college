<?php

    class Rectangle
    {
        // Declare properties
        public $length = 10;
        public $width = 5;
        
        // Method to get the perimeter
        public function getPerimeter(){
            return (2 * ($this->length + $this->width));
        }
        
        // Method to get the area
        public function getArea(){
            return ($this->length * $this->width);
        }
    
        public function showResult(){
            echo "Length of Rectangle: " . $this->length . "<br>";
            echo "Width of Rectangle: " . $this->width . "<br>";
            echo "Perimeter of Rectangle: " . $this->getPerimeter() . "<br>";
            echo "Area of Rectangle: " . $this->getArea() . "<br>";
        }
    }
    
    $rec = new Rectangle;
    
    $rec->showResult();
    
   echo"This Program is written by Shaurya Ranjan 0221BCA058";

?>
