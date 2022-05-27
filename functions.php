<head>
    <title>Exercise set 6</title>
</head>
<body style="background-color:#111; color:#ddd;">
    <pre>
<?php



function recursiveMDSum($array)
{
    $sum = 0;
    foreach($array as $value)
    {
        if(is_int($value))
            $sum += $value;
        else if(is_array($value))
            $sum += recursiveMDSum($value);
    }
    return $sum;
}

function randColour()
{
    $red = dechex(rand(0, 255));
    if(strlen($red) == 1)
        $red = "0$red";

    $green = dechex(rand(0, 255));
    if(strlen($green) == 1)
        $green = "0$green";

    $blue = dechex(rand(0, 255));
    if(strlen($blue) == 1)
        $blue = "0$blue";

    $colour = "#$red$green$blue";

    return $colour;
}

//1
/*Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;*/
echo '====1====<br>';

function stuffItInAnH1($text)
{
    return "<h1>$text</h1>";
}
echo stuffItInAnH1('Sir Amon Guss');

echo '<br>';


//2
/*Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;*/
echo '====2====<br>';

function stuffItInAHeader($text, $hN = 1)
{
    return "<h$hN>$text</h$hN>";
}

echo stuffItInAHeader('Chicken butt, lol');
echo stuffItInAHeader("I'm very funny", 2);
echo stuffItInAHeader('Fore more laughs and gags subscribe to Big Bazingaroni', 4);

echo '<br><br>';


//3
/*Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();*/
echo '====3====<br>';

//adapted for taking in arrays
function stuffArrayInAnH1($text)
{
    return '<h1>'.$text[0].'</h1>';
}

$encryptedNoise = md5(time());
echo $encryptedNoise;

$encryptionOutput = preg_replace_callback('/[0-9]+/i', 'stuffArrayInAnH1', $encryptedNoise);
print_r ($encryptionOutput);

echo '<br><br>';


//4
/*Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;*/
echo '====4====<br>';

function howNotPrime(int $number)
{
    $number = abs($number);
    $sum = 0;

    if ($number > 3)
        for ($i = 2; $i < ($number - 1); $i++)
            if(!($number % $i))
                $sum++;
    
    return $sum;
}

echo howNotPrime(0);
echo '<br>';
echo howNotPrime(3);
echo '<br>';
echo howNotPrime(4);
echo '<br>';
echo howNotPrime(5);
echo '<br>';
echo howNotPrime(7);
echo '<br>';
echo howNotPrime(30);
echo '<br>';

echo '<br><br>';


//5
/*Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.*/
echo '====5====<br>';

//make the array
$threeSevenTenNumbers = array();
$threeSevenDivisibles = array();
for ($i = 0; $i < 100; $i++)
    $threeSevenTenNumbers[] = rand(33, 77);
print_r($threeSevenTenNumbers);
echo '<br>';

//sorts the array
function threeSevenSort($a, $b)
{
    return howNotPrime($a) <=> howNotPrime($b);
}
usort($threeSevenTenNumbers, 'threeSevenSort');

echo '<br>Sorted:<br>';
print_r($threeSevenTenNumbers);

echo '<br><br>';


//6
/*Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.*/
echo '====6====<br>';

$threeSevenHundredNumbers = array();
for ($i = 0; $i < 100; $i++)
    $threeSevenHundredNumbers[] = rand(333, 777);
print_r($threeSevenHundredNumbers);
echo '<br>';

$tempArray = array();
for ($i = 0; $i < 100; $i++)
    if( howNotPrime( $threeSevenHundredNumbers[$i] ) )
        $tempArray[] = $threeSevenHundredNumbers[$i];

$threeSevenHundredNumbers = $tempArray;
print_r($threeSevenHundredNumbers);

echo '<br><br>';


//7
/*Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;*/
echo '====7====<br>';

function generateSpiralLayer($rec, &$array)
{
    $array = array();
    $length = rand(10, 20);
    for($i = 0; $i < ($length - 1); $i++)
    {
        $array[] = rand(0, 10);
    }

    if ($rec)
    {
        generateSpiralLayer( ($rec - 1), $array[$length - 1]);
    }
    else
        $array = 0;
}

$recursions = rand(10, 30);
$spiralArray = null;
generateSpiralLayer($recursions, $spiralArray);
echo '<br>';
print_r ($spiralArray);

echo '<br><br>';


//8
/*Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.*/
echo '====8====<br>';

function sumUpSpiralLayer($array)
{
    $sum = 0;
    foreach($array as $value)
    {
        if(is_array($value))
            $sum += sumUpSpiralLayer($value);
        else
            $sum += $value;
    }
    return $sum;
}

echo sumUpSpiralLayer($spiralArray);

echo '<br><br>';


//9
/*Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento.*/
echo '====9====<br>';

$oneThreeThreeArray = array();
$oneThreeThreeArray[] = rand(1, 33);
$oneThreeThreeArray[] = rand(1, 33);
$oneThreeThreeArray[] = rand(1, 33);

function conditionalExpand(&$array, $failsafe = 100)
{
    if(!$failsafe)
    {
        echo 'error: max amount of iterations exceeded<br>';
        return;
    }

    for ($i = (sizeof($array) - 3); $i < sizeof($array); $i++)
    {
        if ( howNotPrime($array[$i]) )
        {
            $array[] = rand(1, 33);
            conditionalExpand($array, ($failsafe - 1));
            break;
        }
    }
}

conditionalExpand($oneThreeThreeArray);

print_r($oneThreeThreeArray);

echo '<br><br>';


//10
/*Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite.*/
echo '====10====<br>';

//generates the square
$hundredSquare = array();
for ($i = 0; $i < 10; $i++)
{
    $hundredSquare[] = array();
    for ($x = 0; $x < 10; $x++)
    {
        $hundredSquare[$i][] = rand(1, 100);
    }
}


function daCubePrimesAvg($daSquare)
{
    $total = 0;
    $primes = 0;

    foreach ($daSquare as $line)
    {
        foreach ($line as $unit)
        {
            $total += $unit;
            $primes++;
        }
    }
    
    return ($total / $primes);
}

function addThreeToLowest(&$daSquare)
{
    $lowest = 101;
    $outterKey = -1;
    $innerKey = -1;
    for ($i = 0; $i < 10; $i++)
    {
        for ($x = 0; $x < 10; $x++)
        {
            if($daSquare[$i][$x] < $lowest)
            {
                $lowest = $daSquare[$i][$x];
                $outterKey = $i;
                $innerKey = $x;
            }
        }
    }

    $daSquare[$outterKey][$innerKey] += 3;
}

$safeguard = 2000;
do
{
    $avg = daCubePrimesAvg($hundredSquare);
    addThreeToLowest($hundredSquare);
    //raiseTo70($hundredSquare);
    $safeguard--;
}  while($avg < 70 && $safeguard > 0);


/*echo daCubePrimesAvg($hundredSquare);
echo '<br><br>';
addThreeToLowest($hundredSquare);
echo daCubePrimesAvg($hundredSquare);
echo '<br><br>';
addThreeToLowest($hundredSquare);
echo daCubePrimesAvg($hundredSquare);
echo '<br><br>';
addThreeToLowest($hundredSquare);
echo daCubePrimesAvg($hundredSquare);
echo '<br><br>';*/

//raiseTo70($hundredSquare);
$average = daCubePrimesAvg($hundredSquare);
echo "<br>Final average: $average<br>";

echo '<br>';
print_r($hundredSquare);


echo '<br><br>';


//11
/*Sugeneruokite masyvą, kurio ilgis atsitiktinai kinta nuo 10 iki 100. Masyvo reikšmes sudaro atsitiktiniai skaičiai 0-100 ir masyvai. Santykis skaičiuojamas atsitiktinai, bet taip, kad skaičiai sudarytų didesnę dalį nei masyvai. Reikšmių masyvų ilgis nuo 1 iki 5, o reikšmės analogiškos (nuo 50% iki 100% atsitiktiniai skaičiai 0-100, o likusios masyvai) ir t.t. kol visos galutinės reikšmės bus skaičiai ne masyvai. Suskaičiuoti kiek elementų turi masyvas. Suskaičiuoti masyvo elementų (tie kurie ne masyvai) sumą. Suskaičiuoti maksimalų masyvo gylį. Atvaizduokite masyvą grafiškai . Masyvą pavazduokite kaip div elementą, kuris yra display:flex, kurio viduje yra skaičiai. Kiekvienas div elementas turi savo unikalų id ir unikalią background spalvą (spalva pvz nepavaizduota). pvz: <div id=”M1”>10, 46, 67, <div id=”M2”> 89, 45, 89, 34, 90, <div id=”M3”> 84, 97 </div> 90, 56 </div> </div>*/
//also see an attached image
echo '====11====<br>';

/*
main array size - 10-100
numbers - 0-100
number/array ratio - 50+%
inner arrays length - 1-5
generation ends when no more arrays are generated

count:
the sum of all the numbers
max array depth

display the bloody thing visually:
outter array: div with display: flex
numbers are just there
arrays are divs
all divs have unique IDs and unique bg-colours
*/

function generateMessyLayer(&$layer, $length)
{
    $numberRatio = rand( ceil($length/2), $length );
    $arrayRatio = $length - $numberRatio;
    for($i = 0; $i < $length; $i++)
    {
        //decide which one to do
        $coinToss = rand(0, 1);
        
        //adjust if out of one or the other
        if(!$numberRatio)
            $coinToss = 1;
        if(!$arrayRatio)
           $coinToss = 0;

        //add a number or an array
        if(!$coinToss)
        {
            $layer[] = rand(0, 100);
            $numberRatio--;
        }
        else
        {
            $layer[] = array();
            $l = rand(1, 5);
            generateMessyLayer($layer[$i], $l);
            $arrayRatio--;
        }
    }
}

function mixedArrayCounting($array)
{
    $sum = 0;
    foreach ($array as $v)
    {
        if (is_int($v))
            $sum += $v;
        else if (is_array($v))
            $sum += mixedArrayCounting($v);
    }
    return $sum;
}

function mixedArrayDepth($array, &$maxDepth = 0, &$currentDepth = 0)
{
    $currentDepth++;
    if ($currentDepth > $maxDepth)
        $maxDepth = $currentDepth;

    foreach ($array as $v)
    {
        if (is_array($v))
        {
            mixedArrayDepth($v, $maxDepth, $currentDepth);
            $currentDepth--;
        }
    }

    return $maxDepth;
}

//come up with a display mechanism
function render($array)
{
    $colour = randColour();
    echo "<div class='finalBox' style='background-color:$colour'>";
    foreach ($array as $v)
    {
        if (is_int($v))
            echo $v;
        else if (is_array($v))
            render($v);
    }
    echo "</div>";
}


//////////////////////////////////////////////////////
//function calls and output
//////////////////////////////////////////////////////

//generate the array
$theGrandArray = array();
$gLength = rand(10, 100);
generateMessyLayer($theGrandArray, $gLength);

//display the array in full glory
print_r($theGrandArray);

//count the sum
$mixedSum = mixedArrayCounting($theGrandArray);
echo "The sum of all numbers: $mixedSum<br>";

//count max depth
$mixedDepth = mixedArrayDepth($theGrandArray);
echo "The max depth: $mixedDepth<br>";

//render
echo '<style>
.finalBox {
    display: flex;
    flex-wrap: wrap;
    margin: 20px;
    padding: 20px;
}
</style>';

render($theGrandArray);

echo '<br><br>';

?>
    </pre>
</body>