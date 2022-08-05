<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tests</title>
</head>
<body>
    <style>
        body {
            background-color: #111;
            color: #ddd;
        }
    </style>

    <form method="post" action="./tests.php?butt=yes&noButt=no">
        <input type="checkbox" value="false">
        <input type="submit" value="post">
    </form>
<?php

/*header('Content-Type: application/json');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");*/

echo $_POST['test'] ?? 'true';

?>
</body>
</html>