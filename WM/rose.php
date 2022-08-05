<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rose</title>
</head>
<body>
    <style>
        body {
            background-color: #834;
        }
    </style>
<?php

if($_SERVER['REQUEST_METHOD'] !== 'POST')
{
    header('Location: ./pink.php');
    die();
}
echo "<br>";

?>
</body>
</html>