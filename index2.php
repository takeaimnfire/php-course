<?php
    session_start();
?>

<html>
    <head>
        <title>PHP Testing 2</title>
    </head>
    <body>
        <div style="margin-top: 0px; text-align: center;">
        <a href="index.php">Page 1</a>
        </div>
        <h1>Session Testing</h1>
        <?php
        echo $_SESSION["fav_pizza"] . "<br/><br/>";
        ?>
    
    </body>
</html>