<html>
    <head>
        <title>PHP Testing</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1 style="text-align: center;">Form Acceptance</h1>

        <?php

        echo "Hello " . $_POST["Name"];
        echo "<br/><br/>";
        echo "I see that your job is " . $_POST["job"];

        ?>

        <h1 style="text-align: center;"><a href="index.php">Return to Index</a></h1>
        <h1 style="text-align: center;"><a href="addition.php">GO TO MATH FLASHCARD APP</a></h1>
    
    </body>
</html>