<?php 
    session_start();
    session_unset();
    // error_reporting(E_ERROR| E_PARSE);

?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "author" content = "Michał Ożdżyński">
    
    <link rel ="stylesheet" href = "styles/index.css">
    <link rel ="stylesheet" href = "styles/style.css">
    <title>index</title>
</head>
<body>
    <div class = "container">
        <h1>WISIELEC</h1>
        <div class="message">
        <form method = "post" action = "game.php">
            <label for ="howLong">Długość słowa:</label><input type="number" name = "howLong" id = "howLong" value = "5" min = "3" max = "11"><br>
            <label for ="attempts">Ilość prób: </label><input type="number" name = "attempts" id = "attempts" value = "5" min = "3" max = "32"><br>
            <label for = "suprise" id="lblSuprise">Zaskocz mnie</label><input type ="checkbox" name="suprise" id = "suprise"><br>
            <input type = "submit" id ="send" value = "GRAJ">
        </form>
        </div>
    </div>
</body>
</html>