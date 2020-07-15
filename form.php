<html>
    <head>
        <title>PHP Testing</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1 style="text-align: center;">Form Acceptance</h1>
        <div style="text-align: center;" id="result">
            <?php

                echo "Hello " . $_POST["Name"];
                echo "<br/><br/>";
                echo "I see that your job is " . $_POST["job"];

            ?>
        </div>
        <h1 style="text-align: center;"><a href="index.php">Return to Index</a></h1>
        <h1 style="text-align: center;"><a href="addition.php">GO TO MATH FLASHCARD APP</a></h1>
        <br /><br />
        <div style="text-align: center;" id="welcome">
            <?php
                include('time.php');
            ?>
        </div>
        <div style="position: fixed; bottom: 0; left: 0; right: 0; margin-bottom: 5px; text-align: center;">
            <?php
                include('footer.php');
            ?>
        </div>
    
    </body>
</html>