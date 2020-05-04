<?php
    $cookie_name = "PHPTesting";
    $cookie_user = "Luke Copson";
    setcookie($cookie_name, $cookie_user, time() + (86400 * 30), "/");
    session_start();
?>  

<html>
    <head>
        <title>PHP Testing</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div style="margin-top: 0px; text-align: center;">
        <a href="index2.php">Page 2</a>
        </div>

        <h1 style="text-align: center;"><a href="addition.php">GO TO MATH FLASHCARD APP</a></h1>

        <h1 style="text-align: center;">Online Forms</h1>

        <form action="form.php" method="post">
        
            Name: <input type="text" name="Name" id="name"><br/><br/>

            Job Title: <input type="text" name="job" id="job"><br/><br/>
            <input type="submit" id="submit">
        </form>

    
    </body>
</html>
<?php
    echo $_SERVER['HTTP_USER_AGENT'] . "<br/><br/>";
    echo $_COOKIE[$cookie_name] . "<br/><br/>";

    if (!isset($_COOKIE[$cookie_name])) {
        echo "No cookie found. <br/><br/>";
    } else {
        echo "Cookie found. <br/><br/>";
    }
?>
<!--
Super Globals

$_SERVER
$_POST
$_GET
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV

-->


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
    sort($pizza_toppings);
    $_SESSION["fav_pizza"] = $pizza_toppings[0] . " " . $pizza_toppings[2];
    echo $pizza_toppings[0] . "<br/>";
    echo $_SESSION["fav_pizza"] . "<br/><br/>";
    $l = 0;

    while ($l < count($pizza_toppings)) {
        echo $pizza_toppings[$l] . "<br/>";
        $l++;
    }

    $age = array("Mary"=>"24", "Luke"=>"38", "Dave"=>"31");

    echo $age["Dave"] . "<br/>";

    asort($age);
    foreach ($age as $m) {
        echo $m . "<br/>";
    }

    echo count($pizza_toppings) . "<br/>";

    function mapping($num1, $num2) {
        echo $num1 + $num2 . "<br/><br/>";
    }

    mapping(rand(1,20), rand(1,50));

    echo date('D, M d, Y') . "<br/><br/>";

    $var = "luke copson";
    $var2 = "PHP is pretty cool.";

    echo strtoupper($var) . "<br/><br/>";

    echo ucwords($var) . "<br/><br/>";

    echo str_replace("cool", "lame", $var2) . "<br/><br/>";

    include 'footer.php';
?>