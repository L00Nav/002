<head>
    <title>Lecture thing</title>
</head>
<body style="background-color:#111; color:#ddd;">
    <h1>Chicken butt</h1>

<?php
/*
echo "picked out elements:<br>";

$testArray = array();
for ($i = 1; $i < 31; $i++)
{
    array_push($testArray, $i);
    echo "$i  ";
}
echo '<br>';

for ($i = 0; $i < sizeof($testArray); $i++) //loop through array with all the numbers
{
    echo "<br>Picked out $i<br>";
    for ($w = 2; $w < ceil($testArray[$i] / 2); $w++) //loop from 2 to half the current element's value (rounded up)
    {
        echo ceil($testArray[$i] / 2);
        echo ' ';
        if ( !($testArray[$i] % $w) ) //if current element is divisible by X (2-half)
        {
            echo $testArray[$i] . "<br>"; //spell out the element
            array_splice($testArray, $i, 1); //remove it from the array
            $w = 60; //set x to above the loop limit, ending the loop
        }
    }
}

$testString = '';
for ($i = 0; $i < sizeof($testArray); $i++)
{
    $testString .= "$testArray[$i]<br>";
}

echo "String of Test:<br>$testString";

echo !!true;
*/

$testInt = 10;
echo ceil($testInt / 2);
echo ceil($testInt / 2);

?>
</body>