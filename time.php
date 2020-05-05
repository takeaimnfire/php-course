<?php
    date_default_timezone_set('America/New_York');
    $hour = date('G');
    $year = date('y');

    if ( $hour >= 5 && $hour < 12 ) {
        echo  "<h3>Good Morning!</h3> <br/> Today's date is: " . date('l, M d, Y') . "<br/> The time is " . date('g:i a') . " EST";
    } elseif ( $hour >= 12 && $hour < 18 ) {
        echo  "<h3>Good afternoon!</h3> <br/> Today's date is: " . date('l, M d, Y') . "<br/> The time is " . date('g:i a') . " EST";
    } elseif ( $hour >= 18 && $hour < 22 ) {
        echo  "<h3>Good evening!</h3> <br/> Today's date is: " . date('l, M d, Y') . "<br/> The time is " . date('g:i a') . " EST";
    } else {
        echo  "<h3>Good night!</h3> <br/> Today's date is: " . date('l, M d, Y') . "<br/> The time is " . date('g:i a') . " EST";
    }
?>