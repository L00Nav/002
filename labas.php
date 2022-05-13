<head>
    <title>Lecture notes</title>
</head>
<body style="background-color:#111; color:#ddd;">
    <h1>Tests and stuff</h1>

<?php

echo '<pre><br>';

$test = array(3 => 0, 2 => 1, 1 => 2, 0 => 3, );
unset($test[0]);

echo '<br><br>';
print_r($test);

echo '</pre>';

?>
</body>