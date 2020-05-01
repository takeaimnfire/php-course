<html>
    <head>
        <title>Math Flashcards</title>
    </head>
    <body>
        <div style="text-align: center;">
        <a href="addition.php">Addition</a> | <a href="subtraction.php">Subtraction</a> | <a href="multiply.php">Multiplication</a> | <a href="divide.php">Division</a>
        <br/><br/>
        </div>
        <h1 style="text-align: center; font-family: Arial;">Multiplication</h1>

        <h1 style="text-align: center; font-family: Arial;">
        <?php

        // echo rand(1,10) . " + " . rand(1,10);
        $fnum1 = rand(1,10);
        $fnum2 = rand(1,10);

        echo $fnum1 . " * " . $fnum2;

        ?>

        </h1>
        <br/><br/>
        <div style="text-align: center; font-family: Arial;">
        <?php
            if (!$_POST["answer"]) { } else {
                $correct_answer = $_POST["num1"] * $_POST["num2"];
                if ($correct_answer  == $_POST["answer"]) {
                    echo "Correct: " . $_POST["num1"] . " * " . $_POST["num2"] . " = " . $_POST["answer"];
                } else {
                    echo "Wrong: " . $_POST["num1"] . " * " . $_POST["num2"] . " = " . $correct_answer;
                }
            }
        ?>
        </div>
        <br/><br/><br/><br/>
        
        <form method="post" action="multiply.php" style="text-align: center; font-family: Arial;">
            <input name="num1" type="hidden" value="<?php echo $fnum1; ?>">
            <input name="num2" type="hidden" value="<?php echo $fnum2; ?>">
            Answer: <input name="answer"> <button>Submit</button> <button>New Card</button>
            
        </form>

    </body>
</html>