<head>
    <title>Exercise set 5</title>
</head>
<body style="background-color:#111; color:#ddd;">
<?php

function doesArrayContain($checkedArray, $element)
{
    foreach ($checkedArray as $value)
        if ($value == $element)
            return true;
    return false;
}

/*function does2dArrayContain($checkedArray, $element)
{
    foreach ($checkedArray as $outter)
        foreach ($outter as $inner)
            if ($inner == $element)
                return true;
    return false;
}*/

//...make a unique number generator function that returns an array
    //utilise doesArrayContain. Make it efficient enough to generate large numbers
function generateUniqueNumbers($min, $max, $length)
{
    $numberBank = range($min, $max);
    $uNumbers = array();
    for($i = 0; $i < $length; $i++)
    {
        $index = rand(0, (sizeof($numberBank) - 1));
        $uNumbers[] = $numberBank[$index];
        $numberBank[$index] = $numberBank[sizeof($numberBank) - 1];
        unset($numberBank[sizeof($numberBank) - 1]);
    }
    return $uNumbers;
}

echo '<pre>';


//1
/*Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.*/
echo '====1====<br>';

$daFirstArray = array();
for ($i = 0; $i < 10; $i++)
{
    $array = array();
    for ($ii = 0; $ii < 5; $ii++)
    {
        $daFirstArray[$i][] = rand(5, 25);
    }
}
print_r($daFirstArray);

echo '<br><br>';


//2
/*Naudodamiesi 1 uždavinio masyvu:*/
echo '====2====<br>';

//a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
echo '<br>a)<br>';

$moreThanTensCounter = 0;
foreach ($daFirstArray as $v)
    foreach ($v as $value)
        if($value > 10)
            $moreThanTensCounter++;
echo "Amount of elements higher than 10: $moreThanTensCounter<br>";

//b) Raskite didžiausio elemento reikšmę;
echo '<br>b)<br>';

$highest2dElement = 0;
foreach ($daFirstArray as $v)
    foreach ($v as $value)
        if($value > $highest2dElement)
            $highest2dElement = $value;
echo "Highest element: $highest2dElement<br>";

//c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
echo '<br>c)<br>';

foreach ($daFirstArray[0] as $d => $value)
{
    $sumByIndex = 0;
    foreach ($daFirstArray as $w)
    {
        $sumByIndex += $w[$d];
    }
    echo "Sum of row $d: $sumByIndex<br>";
}

//d) Visus masyvus “pailginkite” iki 7 elementų
echo '<br>d)<br>';

foreach ($daFirstArray as $k => $v)
{
    $daFirstArray[$k][] = rand(5, 25);
    $daFirstArray[$k][] = rand(5, 25);
}
print_r($daFirstArray);

//e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai
echo '<br>e)<br>';

$sumsByArray = array();
foreach($daFirstArray as $k => $v)
{
    $sumsByArray[] = 0;
    foreach($v as $add)
        $sumsByArray[$k] += $add;
}
print_r($sumsByArray);


echo '<br><br>';


//3
/*Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).*/
echo '====3====<br>';

$variedLengthArrays = array();
$abc = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
for ($i = 0; $i < 10; $i++)
{
    $variedLengthArrays[] = array();
    $length = rand(2, 20);
    for ($ii = 0; $ii < $length; $ii++)
        $variedLengthArrays[$i][] = $abc[rand(0, sizeof($abc) - 1)];
}

foreach ($variedLengthArrays as $k => $v)
    sort($variedLengthArrays[$k]);

print_r($variedLengthArrays);

echo '<br><br>';


//4
/*Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.*/
echo '====4====<br>';

$tempKArrays = array();
$tempNKArrays = array();
foreach ($variedLengthArrays as $v)
{
    if (doesArrayContain($v, 'k'))
        $tempKArrays[] = $v;
    else
        $tempNKArrays[] = $v;
}
sort($tempKArrays);
sort($tempNKArrays);

//print_r($tempKArrays);
//echo '<br>';
//print_r($tempNKArrays);
//echo '<br>';

$variedLengthArrays = $tempKArrays;
foreach($tempNKArrays as $value)
    $variedLengthArrays[] = $value;
print_r($variedLengthArrays);

echo '<br><br>';


//5
/*Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100.*/
echo '====5====<br>';

$arrayIDs = generateUniqueNumbers(1, 1000000, 30);
$arrayPlaces = generateUniqueNumbers(0, 100, 30);
$usersArray = array();
for ($i = 0; $i < 30; $i++)
    $usersArray[] = array('user_id' => $arrayIDs[$i], 'place_in_row' => $arrayPlaces[$i]);

print_r($usersArray);

echo '<br><br>';


//6
/*Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.*/
echo '====6====<br>';
//try foreach
    //...asort(value[0])

echo '<br><br>';


//7
/*Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.*/
echo '====7====<br>';
//loop outter
    //generate name and surname through random length loops (use the letter array)
    //add them as values

echo '<br><br>';


//8
/*Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.*/
echo '====8====<br>';
//loop 10 times
    //generate a random number 0-5
    //if (random number)
        //loop random number times and fill with rand(0, 10)
    //else
        //add rand(1, 10)

echo '<br><br>';


//9
/*Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.*/
echo '====9====<br>';
//make a new array
//loop through outter
    //if number, add to new array as-is
    //if array, add 0 as a new element to the tempArray and then loop through the main array, =+'ing each element
//sort the temp array, leave keys intact

//make a new array
//foreach through the order array with $key
    //add [$key] element from the main array to the temp array
//main array = temp array

echo '<br><br>';


//10
/*Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.*/
echo '====10====<br>';
//make a color array
//make a symbol array
//loop 10 times
    //add an empty array to the color array
    //loop 10 times
        //generate a symbol from the array (index = rand())
        //generate a random colour (see the rhombus)
        //add these as the element

//loop 100 times
    //generate a span tag with symbol and colour from [$i / 10][$i % 10]
    //if (!$i % 10), add a <br>

echo '<br><br>';


//11
/*Duotas kodas, generuojantis masyvą:
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.
NEGALIMA! naudoti jokių palyginimo operatorių (if-else, match, swich, ()?:)
NEGALIMA! naudoti jokių regex ir string funkcijų.
GALIMA naudotis tik aritmetiniais veiksmais ir matematinėmis funkcijomis iš skyrelio: https://www.php.net/manual/en/ref.math.php

Jeigu reikia, kodo patogumui galima panaudoti įvairias funkcijas, bet sprendimo pagrindas turi būti matematinis.

Atsakymą reikia pateikti formatu:
echo '<h3>Skaičius 789 yra pakartotas '.$sk1.' kartų, o skaičius 123 - '.$sk2.' kartų.</h3>';

Kur rudi skaičiai yra pakeisti skaičiais $a ir $b generuojamais kodo.
*/
echo '====11====<br>';
//first bit of code:
    //generate a and b, unique numbers 1-1000
    //generate $long 1-30
    //sk1 and sk2 = 0
    //output a and b in a header
    //c = empty array
    //loop long times
        //c[] = a or b (randomly chosen)
    //outputs c

//sk1 = amount of times a has been repeated
//sk2 = amount of times b has been repeated
//no comparison functions / statements
//no regex or string functions
//various functions can be used for code convenience, but the solution has to be math based
//math functions are allowed

//loop through c
    //get abs(c[i] - b), mutiply by 0.0001, round up. sk1 += that number.
    //do the same for a

echo '<br><br>';
echo '</pre>';

?>
</body>