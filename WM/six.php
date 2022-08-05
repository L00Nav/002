<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Six</title>
</head>
<body>
    <style>
        body {
            background-color: #333;
        }
    </style>
    <form action="./six.php" method="get">
        <input type="text" value="sample" name="sample" style="display:none">
        <input type="submit" value="GET">
    </form>
    <form action="./six.php?" method="post">
        <input type="submit" value="POST">
    </form>
<?php

echo "<br>";

if(!empty($_POST))
    echo "post isn't empty";
echo "<br>";

if(!empty($_GET))
{
    echo "get isn't empty";

    echo "<style>
    body {
        background-color: #373
    }
    </style>";
}
echo "<br>";

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    echo "request method is post";

    echo "<style>
    body {
        background-color: #773
    }
    </style>";
}
echo "<br>";

if($_SERVER['REQUEST_METHOD'] === 'GET')
    echo "request method is get";
echo "<br>";

?>
</body>
</html>