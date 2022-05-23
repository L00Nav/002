<?php

$cats = [
    'catte1',
    'catte2',
    'catte3',
    'catte4'
];

$out = json_encode($cats);

header('Content-Type: application/json');

echo $out;