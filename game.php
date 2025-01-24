<?php 
    session_start();
    error_reporting(E_ERROR | E_PARSE);

    require "scripts/php/generateAns.php";
    require "scripts/php/printArr.php";

    if (!isset($_SESSION["_actualAttempts"])){
        $wordLength = $_POST["howLong"];
        $_SESSION["_actualAttempts"] = -1;
        $_SESSION["_attempts"] = $_POST["attempts"];
        $_SESSION["_win"] = FALSE;
        $_SESSION["_correctAns"] = generateAns($wordLength);
    }

    if($_SESSION["_actualAttempts"] != $_SESSION["_attempts"]){
        $_SESSION["_actualAttempts"]++;
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
        echo '<form>';
            echo '<input type="text" id="tbx" placeholder="Enter text here...">';
        echo '</form>';
        printArr($_SESSION);
    ?>
    
</body>
</html>