<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One</title>
</head>
<body>
    <style>
        body {
            background-color: #111;
        }
    
        .colourButton {
            font-size: 20px;
            background-color: #ddd;
            padding: 5px 10px;
            margin: 5px;
            border-radius: 8px;
        }
    </style>

    <a href="./one.php?colour=crimson" className="colourButton" style="color:#ddd">Crimson</a>
    <a href="./one.php" className="colourButton" style="color:#ddd">Black</a>

<?php

$colour = $_GET['colour'] ?? '#111';

echo "<style>
body {
    background-color: " . $colour .
"}
</style>";

?>
</body>
</html>