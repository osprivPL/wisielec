<?php 
    session_start();
    error_reporting(E_ERROR | E_PARSE);

    require "scripts/php/generateAns.php";
    require "scripts/php/printArr.php";

    if (!isset($_SESSION["_actualAttempts"])){
        $_SESSION["guessed"] = array();
        $_SESSION["wrong"] = array();
        $wordLength = intval($_POST["howLong"]);
        $_SESSION["_actualAttempts"] = -1;
        $_SESSION["_actualString"] = str_repeat("_", $wordLength);
        $_SESSION["_attempts"] = $_POST["attempts"];
        $_SESSION["_win"] = FALSE;
        $_SESSION["_correctAns"] = generateAns($wordLength);
    }

    if($_SESSION["_actualAttempts"] != $_SESSION["_attempts"]){
        $_SESSION["_actualAttempts"]++;
    }


    if ($_SESSION['_actualAttempts'] > 0){
        $guess = $_POST["guess"];
        if ($guess == ''){
            $_SESSION["_actualAttempts"]--;
        }
        else if (strlen($guess) > 1){

        }
        else{
            $found = FALSE;
            $guess = strtolower($guess);
            for ($i = 0; $i < strlen($_SESSION["_actualString"]); $i++) {
                if ($_SESSION["_correctAns"][$i] == $guess){
                    $_SESSION["_actualString"][$i] = $guess;
                    $found = TRUE;
                }
            }
            if ($found){
                $_SESSION["guessed"][] = $guess;
            }
            else{
                $_SESSION["wrong"][] = $guess;
            }

        }
        $guess= '';
    }

    if ($_SESSION["_attempts"]-1 == $_SESSION["_actualAttempts"] || $_SESSION["win"]){
        header("Location: end.php");
        exit();
    }
?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "author" content = "Michał Ożdżyński">

    <link rel ="stylesheet" href = "styles/game.css">
    <link rel ="stylesheet" href = "styles/style.css">
    
    <title>game</title>
</head>
<body>
    <h1>WISIELEC</h1>
    <?php
        echo '<form method = "post">';
            echo '<h3>';
                for ($i = 0; $i < strlen($_SESSION["_actualString"]); $i++) {
                    echo $_SESSION["_actualString"][$i] . ' ';
                }
                echo '<br>';
            echo '</h3>';
            echo '<input style="text-align: center" type="text" class="tbx" placeholder="Enter text here..." id="guess" name = "guess"><br>';
            echo '<input type="submit" id="send" value="STRZEL">';
        echo '</form>';

        echo '<div style = "clear:both"></div>';

        
        echo '<div class="message">';
        echo '<p>POPRAWNE: </p>';
        printArr($_SESSION["guessed"]);
        echo '</div>';
        
        echo '<div class="message">';
        echo '<p>NIEPOPRAWNE: </p>';
        printArr($_SESSION["wrong"]);
        echo '</div>';
        
        echo '<div style = "clear:both"></div>';

        printArr($_SESSION);
    ?>
    
</body>
</html>
