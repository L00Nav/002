<head>
    <title>Exercise set 4</title>
</head>
<body style="background-color:#111; color:#ddd;">
<?php


//1
/*Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.*/
echo '====1====<br>';

$daBigArray = array();

for ($i = 0; $i < 30; $i++)
    array_push($daBigArray, rand(5, 25));

echo '<pre>';
print_r($daBigArray);

echo '<br><br>';


//2
/*Naudodamiesi 1 uždavinio masyvu:
...*/
echo '====2====<br>';

echo '<br>a)<br>'; //a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
$moreThanTens = 0;
for ($i = 0; $i < sizeof($daBigArray); $i++)
    if ($daBigArray[$i] > 10)
        $moreThanTens++;

echo "10+: $moreThanTens<br>";

echo '<br>b)<br>'; //b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;

$largestFromDaBigOne = 0;
foreach($daBigArray as $value)
    if ($value > $largestFromDaBigOne)
        $largestFromDaBigOne = $value;

echo "Largest number: $largestFromDaBigOne<br>";
echo "...at indexes: ";

foreach($daBigArray as $key => $value)
    if ($value === $largestFromDaBigOne)
        echo "$key ";


echo '<br>c)<br>'; //c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;

$sumOfEvenIndexValues = 0;
for ($i = 2; $i < sizeof($daBigArray); $i += 2)
    $sumOfEvenIndexValues += $daBigArray[$i];

echo "Sum of even-indexed values: $sumOfEvenIndexValues<br>";


echo '<br>d)<br>'; //d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

$daBigPretenderArray = array();
foreach($daBigArray as $key => $value)
    $daBigPretenderArray[] = $value - $key;

print_r ($daBigPretenderArray);


echo '<br>e)<br>'; //e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

for ($i = 0; $i < 10; $i++)
    $daBigArray[] = rand(5, 25);

print_r($daBigArray);


echo '<br>f)<br>'; //f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

$daBigEvensArray = array();
$daBigOddsArray = array();
for ($i = 0; $i < 40; $i += 2)
    $daBigEvensArray[] = $daBigArray[$i];
for ($i = 1; $i < 40; $i += 2)
    $daBigOddsArray[] = $daBigArray[$i];

echo '<br>Evens:';
print_r($daBigEvensArray);

echo '<br>Odds:';
print_r($daBigOddsArray);


echo '<br>g)<br>'; //g) Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

for ($i = 0; $i < 40; $i += 2)
    if ($daBigArray[$i] > 15)
        $daBigArray[$i] = 0;

print_r($daBigArray);


echo '<br>h)<br>'; //h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;

echo 'Index of first element > 10: ';
for ($i = 0; $i < 40; $i++)
{
    if($daBigArray[$i] > 10)
    {
        echo $i;
        break;
    }
}
echo '<br>';

echo '<br>i)<br>'; //i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

for ($i = 0; $i < 40; $i += 2)
    unset($daBigArray[$i]);

print_r($daBigArray);


echo '<br><br>';


//3
/*Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.*/
echo '====3====<br>';

$daBigLetterArray = array();
$letterCounts = array(0, 1, 2, 3);
$letterBank = array('A', 'B', 'C', 'D');
foreach (range(0, 199) as $i)
{
    $letterIndex = rand(0, 3);
    $daBigLetterArray[] = $letterBank[$letterIndex];
    $letterCounts[$letterIndex]++;
}

echo "Total As: $letterCounts[0]  Total Bs: $letterCounts[1]  Total Cs: $letterCounts[2]  Total Ds: $letterCounts[3].<br><br>";
print_r($daBigLetterArray);


echo '<br><br>';


//4
/*Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.*/
echo '====4====<br>';

sort($daBigLetterArray);

print_r($daBigLetterArray);

echo '<br><br>';


//5
/*Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.*/
echo '====5====<br>';

//generates the arrays
$letterArrayToAdd1 = array();
$letterArrayToAdd2 = array();
$letterArrayToAdd3 = array();
$addedLetterArray = array();
foreach (range(0, 199) as $i)
{
    $letterIndex = rand(0, 3);
    $letterArrayToAdd1[] = $letterBank[$letterIndex];

    $letterIndex = rand(0, 3);
    $letterArrayToAdd2[] = $letterBank[$letterIndex];

    $letterIndex = rand(0, 3);
    $letterArrayToAdd3[] = $letterBank[$letterIndex];

    $addedLetterArray[] = $letterArrayToAdd1[$i];
    $addedLetterArray[$i] .= $letterArrayToAdd2[$i];
    $addedLetterArray[$i] .= $letterArrayToAdd3[$i];
}

print_r($addedLetterArray);

//a convenience
function doesArrayContain($checkedArray, $element)
{
    foreach ($checkedArray as $value)
        if ($value == $element)
            return true;
    return false;
}

$uniqueLetterScrambles = 1; 
for ($i = 1; $i < sizeof($addedLetterArray); $i++)
{
    if(!doesArrayContain(array_slice($addedLetterArray, 0, $i - 1), $addedLetterArray[$i]))
        $uniqueLetterScrambles++;
}
echo "<br>Unique values in the added-up array: $uniqueLetterScrambles<br>";

$sortedAddedLetterArray = array();
foreach($addedLetterArray as $value)
{
    $tempArray = str_split($value);
    sort($tempArray);
    $sortedAddedLetterArray[] = implode($tempArray);
}
$uniqueLetterCombos = 1;
for ($i = 1; $i < sizeof($sortedAddedLetterArray); $i++)
{
    if(!doesArrayContain(array_slice($sortedAddedLetterArray, 0, $i - 1), $sortedAddedLetterArray[$i]))
        $uniqueLetterCombos++;
}
echo "<br>Unique letter combos: $uniqueLetterCombos<br>";

//output the numebers after <br><br>

//finish this

echo '<br><br>';


//6
/*Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).*/
echo '====6====<br>';

$daLargeArrayOne = array();
for ($i = 0; $i < 100; $i++)
{
    $daLargeArrayOne[] = rand(100, 999);
    if(doesArrayContain(array_slice($daLargeArrayOne, 0, $i - 1), $daLargeArrayOne[$i]))
    {
        $i--;
        array_pop($daLargeArrayOne);
    }
}

$daLargeArrayTwo = array();
for ($i = 0; $i < 100; $i++)
{
    $daLargeArrayTwo[] = rand(100, 999);
    if(doesArrayContain(array_slice($daLargeArrayTwo, 0, $i - 1), $daLargeArrayTwo[$i]))
    {
        $i--;
        array_pop($daLargeArrayTwo);
    }
}

print_r($daLargeArrayOne);
print_r($daLargeArrayTwo);

echo '<br><br>';


//7
/*Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.*/
echo '====7====<br>';

$uniquesToFirstArray = $daLargeArrayOne;
for ($i = 0; $i < sizeof($uniquesToFirstArray); $i++)
{
    if(doesArrayContain($daLargeArrayTwo, $uniquesToFirstArray[$i]))
    {
        array_splice($uniquesToFirstArray, $i, 1);
        $i--;
    }
}

print_r($uniquesToFirstArray);

echo '<br><br>';


//8
/*Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.*/
echo '====8====<br>';

$repeatingValues = array();
foreach($daLargeArrayOne as $v)
    if(doesArrayContain($daLargeArrayTwo, $v))
        $repeatingValues[] = $v;

print_r($repeatingValues);

echo '<br><br>';


//9
/*Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.*/
echo '====9====<br>';

$keyValueComboArray = array();
foreach($daLargeArrayOne as $i => $v)
    $keyValueComboArray[$v] = $daLargeArrayTwo[$i];

print_r($keyValueComboArray);

echo '<br><br>';


//10
/*Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.*/
echo '====10====<br>';

$randAdditionsArray = array(rand(5, 25), rand(5, 25));
for ($i = 2; $i < 10; $i++)
    $randAdditionsArray[] = $randAdditionsArray[$i - 1] + $randAdditionsArray[$i - 2];

print_r($randAdditionsArray);

echo '<br><br>';


//11
/*Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, kad jo didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). Jeigu sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)*/
echo '====11====<br>';

//generate the array
$finalArray = array();
for ($i = 0; $i < 101; $i++)
{
    $finalArray[] = rand(0, 300);
    if(doesArrayContain(array_slice($finalArray, 0, $i - 1), $finalArray[$i]))
    {
        $i--;
        array_pop($finalArray);
    }
}


//arrange the array
sort($finalArray);
$tempArray = array();
$daSwitch = false;

$placementCounter = 0;
for ($i = 0; $i < sizeof($finalArray); $i++)
{
    if($daSwitch)
    {
        $tempArray[$placementCounter] = $finalArray[$i];
        $placementCounter++;
    }
    else
    {
        $tempArray[100-$placementCounter] = $finalArray[$i];
    }

    
    $daSwitch = !$daSwitch;
}
ksort($tempArray);
$finalArray = $tempArray;

//initial count
$finalSum1 = 0;
$finalSum2 = 0;
for($i = 0; $i < 50; $i++)
    $finalSum1 += $finalArray[$i];

for($i = 51; $i < 101; $i++)
    $finalSum2 += $finalArray[$i];

//if the sums are too different, shuffle things about and recount
$safeguard = 100;
while (abs($finalSum1 - $finalSum2) > 30)
{
    $safeguard--;
    if (!$safeguard)
        break;

    $i = rand(0, 49);
    $tempInt = $finalArray[$i];
    $finalArray[$i] = $finalArray[100-$i];
    $finalArray[100-$i] = $tempInt;

    $finalSum1 = 0;
    $finalSum2 = 0;
    for($i = 0; $i < 50; $i++)
        $finalSum1 += $finalArray[$i];

    for($i = 51; $i < 101; $i++)
        $finalSum2 += $finalArray[$i];
}
$safeguard = 100 - $safeguard;

//final output
echo "Sum of first half: $finalSum1<br>";
echo "Sum of second half: $finalSum2<br>";

if (abs($finalSum1 - $finalSum2) > 30)
    echo 'Error. Ran our of reshuffles.<br>';
else
    echo "Reshuffles: $safeguard<br>";

print_r($finalArray);

echo '<br><br>';
echo '</pre>';

?>
</body>