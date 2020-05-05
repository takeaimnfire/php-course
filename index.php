<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Testing</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <?php error_reporting (E_ALL ^ E_NOTICE); ?>

    <div style="position: fixed; top: 0; left: 0; right: 0; margin-top: 0px; text-align: center;" id="header">
        <?php
        include('header.php');
        ?>
    </div>
        <br/><br/>
        <h1 style="margin-top: 10%; text-align: center; font-family: Arial;">Welcome</h1>

        <h1 style="text-align: center;"><a href="addition.php">GO TO MATH FLASHCARD APP</a></h1>

        <div style="text-align: center;" id="welcome">
        <?php
            date_default_timezone_set('America/New_York');
            $hour = date('G');
            $year = date('y');

            if ( $hour >= 5 && $hour < 12 ) {
                echo  "<h3>Good Morning!</h3> <br/> Today's date is: " . date('l, M d, Y') . "<br/> The time is " . date('g:i a');
            } elseif ( $hour >= 12 && $hour < 18 ) {
                echo  "<h3>Good afternoon!</h3> <br/> Today's date is: " . date('l, M d, Y') . "<br/> The time is " . date('g:i a');
            } elseif ( $hour >= 18 && $hour < 22 ) {
                echo  "<h3>Good evening!</h3> <br/> Today's date is: " . date('l, M d, Y') . "<br/> The time is " . date('g:i a');
            } else {
                echo  "<h3>Good night!</h3> <br/> Today's date is: " . date('l, M d, Y') . "<br/> The time is " . date('g:i a');
            }

        ?>
        </div>
        
    
    </body>
    </html>