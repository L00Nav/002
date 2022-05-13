<head>
    <title>The cat loop</title>
</head>
<body style="background-color:#111; color:#ddd;">

<?php

$rats = 0;
$laps = 0;

while ($rats < 20)
{
    $rats += rand(3, 5);
    $laps++;
}

echo "Apibego: $laps ratus.<br>";
echo "Pagavo: $rats peliu.";


?>
</body>