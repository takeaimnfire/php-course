<?php

    $firstname = "Dave";

    echo "Hello $firstname!";

    $number1 = 3;
    $number2 = 4;

    echo $number1 ** $number2;

    $i = 0;

    while ($i < 10) {
        echo "Your number is $i<br/>";
        $i++;
    }

    echo "<br/><br/>";

    for ($k = 0; $k < 10; $k++) {
        echo "Your number is $k<br/>";
    }

    $x = 0;

    while ($x <= 100) {
        if ($x % 3 == 0 && $x % 5 == 0) {
            echo "$x: FIZZBUZZ!<br/>";
        } elseif ($x % 3 == 0) {
            echo "$x: FIZZ!<br/>";
        } elseif ($x % 5 == 0) {
            echo "$x: BUZZ!<br/>";
        } else {
            echo "$x<br/>";
        }
        $x++;
    }

    $pizza_toppings = array("Pepperoni", "Cheese", "Mushrooms");

    echo $pizza_toppings[0] . "<br/>";

    $l = 0;

    while ($l <= 2) {
        echo $pizza_toppings[$l] . "<br/>";
        $l++;
    }

    $age = array("Mary"=>"24", "Luke"=>"38", "Dave"=>"31");

    echo $age["Dave"];
?>