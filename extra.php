<head>
    <title>Extra</title>
</head>
<body style="background-color:#111; color:#ddd;">
    <pre>
<?php

$sk = rand(100, 999);

$functions = array();

/*for ($i = 3; $i < 8; $i+=2)
{
    $functions[] = function($n)
    {
        echo $n * $i;
    };
}*/


$functions[] = function($n)
{
    return $n * 3 . '<br>';
};

$functions[] = function($n)
{
    return $n * 5 . '<br>';
};

$functions[] = function($n)
{
    return $n * 7 . '<br>';
};

foreach($functions as &$value)
{
    echo $value($sk);
    $value = $value($sk);
}

print_r($functions);


?>
    </pre>
</body>