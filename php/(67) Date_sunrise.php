<?php

    //Calculate the sunrise time for Lisbon, Portugal
    //Latitude: 38.4 North
    //Longitude: 9 West
    //Zenith ~= 90
    //offset: +1 GMT
    
    echo "Lisbon, Portugal<br>";
    echo("Date: " . date("D M d Y") . "<br>");
    echo("Sunrise time: ");
    echo(date_sunrise(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1) . "<br>");
    echo("Sunset time: ");
    echo(date_sunset(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1) . "<br>");
    echo"This Program is written by Shaurya Ranjan 0221BCA058";;

?>
