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
            include('time.php')
        ?>
        </div>
        <div style="position: fixed; bottom: 0; left: 0; right: 0; margin-bottom: 5px; text-align: center;">
        <?php
        include('footer.php');
        ?>
        </div>
    
    </body>
    </html>