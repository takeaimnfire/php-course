<html>
    <head>
        <title>Math Flashcards</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <?php error_reporting (E_ALL ^ E_NOTICE); ?>
        <div class="body">
        <div style="position: fixed; top: 0; left: 0; right: 0; margin-top: 0px; text-align: center;" id="header">
        <?php
            include('header.php');
        ?>
        </div>
        <br/><br/>
        <h1 style="margin-top: 10%; text-align: center; font-family: Arial;">Division</h1>

        <h1 style="text-align: center; font-family: Arial;">
        <?php

        // echo rand(1,10) . " + " . rand(1,10);
        $fnum1 = rand(1,10);
        $fnum2 = rand(1,10);

        while ($fnum2 >= $fnum1) {
            if ($fnum1 == $fnum2) {
                $fnum2++;
            }
            $fnum1 = $fnum1 * $fnum2;
        }

        echo $fnum1 . " / " . $fnum2;

        ?>

        </h1>
        <br/><br/>
        <div style="text-align: center; font-family: Arial;">
        <?php
            if (is_null($_POST["answer"])) { } else {
                $correct_answer = $_POST["num1"] / $_POST["num2"];
                $correct_answer = round($correct_answer);
                if ($correct_answer  == $_POST["answer"]) {
                    echo "Correct: " . $_POST["num1"] . " / " . $_POST["num2"] . " = " . $_POST["answer"];
                } else {
                    echo "Wrong: " . $_POST["num1"] . " / " . $_POST["num2"] . " = " . $correct_answer;
                }
            }
        ?>
        </div>
        <br/><br/>
        
        <form method="post" action="divide.php" style="text-align: center; font-family: Arial;">
            <input name="num1" type="hidden" value="<?php echo $fnum1; ?>">
            <input name="num2" type="hidden" value="<?php echo $fnum2; ?>">
            Input Answer: <br/>
            <input name="answer" id="answer">
            <br/><br/>
            <button type="submit" id="button" class="button">Submit</button> <button type="button" onClick="history.go(0)" value="Refresh" id="button" class="button">New Card</button>
            
        </form>
        <div style="position: fixed; bottom: 0; left: 0; right: 0; margin-bottom: 5px; text-align: center;">
        <?php
        include('footer.php');
        ?>
        </div>
        </div>
    </body>
</html>