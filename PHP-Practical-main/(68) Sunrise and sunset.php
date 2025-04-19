<?php

    // Calculate the sunrise time for New Delhi, India
    // Latitude: 28.6139 North
    // Longitude: 77.2090 East
    // Zenith ~= 90
    // offset: +5.5 GMT

    echo "New Delhi, India<br>";
    echo("Date: " . date("D M d Y") . "<br>");
    echo("Sunrise time: ");
    echo(date_sunrise(time(), SUNFUNCS_RET_STRING, 28.6139, 77.2090, 90, 5.5) . "<br>");
    echo("Sunset time: ");
    echo(date_sunset(time(), SUNFUNCS_RET_STRING, 28.6139, 77.2090, 90, 5.5) . "<br>");
    echo"This Program is written by Shaurya Ranjan 0221BCA058";;

?>
