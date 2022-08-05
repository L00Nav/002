<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            background-color: #733;
        }
    </style>
    <h1>You are in the red zone</h1>
    <a href="./red.php?linked=true">Red me harder, Johny!</a>
<?php
if ($_GET['linked'] ?? false)
{
    header('Location: ./blue.php');
    die();
}
?>
</body>
</html>