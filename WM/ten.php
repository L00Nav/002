<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ten</title>
</head>
<body>
    <style>
        body{
            background-color: #111;
            color: #eee;
        }
    </style>
    
<?php
$abc = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
if($_SERVER['REQUEST_METHOD'] !== 'POST')
{
    $length = rand(3, 10);
    echo "<form action='./ten.php' method='post'>
        <input type='submit' value='Button'>
        <input type='number' style='display: none' name='max' value='$length'>
        <br><br>";


for ($i = 0; $i < $length; $i++)
{
    echo "<br><input type='checkbox' name='$abc[$i]' value='1'> $abc[$i]";
}

echo '</form>';
}

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    echo "<style>
    body {
        background-color: #999;
        color: #000;
    }
    </style>";

    $count = 0;
    for ($i = 0; $i < 10; $i++)
    {
        if($_POST[$abc[$i]] ?? 0 == 1)
        {
            $count++;
        }
    }
    echo 'Tickboxes checked: ' . $count . '/' . $_POST['max'];
}
?>
</body>
</html>