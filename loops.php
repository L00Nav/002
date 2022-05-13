<head>
    <title>Exercise set 3</title>
</head>
<body style="background-color:#111; color:#ddd;">
<?php

//1
/*Naršyklėje nupieškite linija iš 400 “*”. 
    a) Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
    b) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; */
echo '====1====<br>';

$starLine = '';
for ($i = 0; $i < 40; $i++)
    $starLine .= '**********';

$starLine = wordwrap($starLine, 50, '<br>', true);

echo "<p style='overflow-wrap:break-word'>
$starLine
    </p>";

echo '<br>';


//2
/*Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.*/
echo '====2====<br>';

$numberLine2 = '';
$oneFiddies = 0;

for ($i = 0; $i < 300; $i++)
{
    $nGen = rand (0, 300);
    
    if ($nGen > 150)
        $oneFiddies++;
    
    if ($nGen <= 275)
        $numberLine2 .= $nGen;
    else
        $numberLine2 .= "<span class='redboi'>$nGen</span>";

    if ($i < 299)
        $numberLine2 .= ' ';
}

echo '<style>
.redboi {color: #e11;}
</style>';
echo "<p style='overflow-wrap:break-word'>$numberLine2</p>";
echo "150+: $oneFiddies";

echo '<br><br><br>';


//3
/*Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.*/
echo '====3====<br>';

$three2FourKLimit = rand(3000, 4000);
$numberLine3 = '';

for ($i = 77; $i < $three2FourKLimit; $i += 77)
{
    $numberLine3 .= "$i";

    if ($i + 77 < $three2FourKLimit)
        $numberLine3 .= ', ';
}

echo "<p style='overflow-wrap:break-word'>$numberLine3</p>";

echo '<br><br>';


//4
/*Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
*/
echo '====4====<br>';

$starSquare = '';
for ($i = 0; $i < 10; $i++)
{
    if ($i == 0 || $i == 9)
        for ($ii = 0; $ii < 10; $ii++)
            $starSquare .= '*';
    else
    {
        for ($ii = 0; $ii < 10; $ii++)
        {
            if ($ii == 0 || $ii == 9)
                $starSquare .= '*';
            else
                $starSquare .= ' ';
        }
    }
    
    if ($i < 9)
        $starSquare .= '<br>';
}

echo '<div class="starSquare">';
echo $starSquare;
echo '</div>';

echo '<style>
.starSquare {
    display: inline-block;
    white-space: pre-wrap;
    border: 1px solid #e11;
    letter-spacing: 10px;
    word-spacing: 4px;
    padding: 6px 0 0 6px;
}
</style>';

echo '<br><br>';


//5
/*Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.*/

//See the end of last section


//6
/*Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
    a) Iškritus herbui;
    b) Tris kartus iškritus herbui;
    c) Tris kartus iš eilės iškritus herbui;*/
echo '====6====<br>';

echo '<br>Scenario 1:<br>';
$failSafe = 200;
do 
{
    if (!(--$failSafe))
    {
        break;
        echo 'Fail-saved!<br>';
    }
    
    $coinToss = rand(0, 1);
    
    if ($coinToss)
        echo 'H<br>';
    else
        echo 'S<br>';
} while (!$coinToss);

echo '<br>Scenario 2:<br>';
$coinCounter = 3;
$failSafe = 200;
do 
{
    if (!(--$failSafe))
    {
        break;
        echo 'Fail-saved!<br>';
    }
    
    $coinToss = rand(0, 1);
    
    if ($coinToss)
    {
        echo 'H<br>';
        $coinCounter--;
    }
    else
        echo 'S<br>';
} while ($coinCounter);

echo '<br>Scenario 3:<br>';
$coinCounter = 3;
$failSafe = 200;
do 
{
    if (!(--$failSafe))
    {
        break;
        echo 'Fail-saved!<br>';
    }
    
    $coinToss = rand(0, 1);
    
    if ($coinToss)
    {
        echo 'H<br>';
        $coinCounter--;
    }
    else
    {
        echo 'S<br>';
        $coinCounter = 3;
    }
} while ($coinCounter);

echo '<br><br>';


//7
/*Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.*/
echo '====7====<br>';

$petrasScore = 0;
$kazysScore = 0;
$bingoWinner = false;

while (!$bingoWinner)
{
    $petrasAddScore = rand(10, 20);
    $petrasScore += $petrasAddScore;
    $kazysAddScore = rand(5, 25);
    $kazysScore += $kazysAddScore;
    echo "Petras: $petrasScore (+$petrasAddScore).  Kazys: $kazysScore (+$kazysAddScore).  Partija laimejo: ";
    if ($petrasAddScore > $kazysAddScore)
        echo 'Petras';
    else if ($petrasAddScore < $kazysAddScore)
        echo 'Kazys';
    else
        echo 'Lygiosios';

    echo '<br>';

    if ($petrasScore >= 222 && $kazysScore >= 222)
    {
        echo 'Lygiosios';
        $bingoWinner = true;
    }
    elseif ($petrasScore >= 222)
    {
        echo 'Petras laimejo zaidima.';
        $bingoWinner = true;
    }
    elseif ($kazysScore >= 222)
    {
        echo 'Kazys laimejo zaidima.';
        $bingoWinner = true;
    }
}

echo '<br><br>';


//8
/*Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).*/
echo '====8====<br>';

$rhombusSize = 41;
$daRhombus = '';
$rhombusNoiseX = 0 - (ceil($rhombusSize / 2) -1);
$rhombusNoiseY = 0 - (ceil($rhombusSize / 2) -1);

for ($h = 1; $h < ($rhombusSize ** 2) + 1; $h++)
{
    if(abs($rhombusNoiseX) + abs($rhombusNoiseY) > ceil(($rhombusSize / 2) - 1))
        $daRhombus .= ' ';
    else
    {
        $redLevels = rand(0, 255);
        $greenLevels = rand(0, 255);
        $blueLevels = rand(0, 255);
        $daRhombus .= "<span style='color:rgb($redLevels, $greenLevels, $blueLevels);'>*</span>";
    }

    $rhombusNoiseX++;

    if (!($h % $rhombusSize))
    {
        $daRhombus .= '<br>';
        $rhombusNoiseX = 0 - (ceil($rhombusSize / 2) - 1);
        $rhombusNoiseY++;
    }
}

/*for ($h = 0; $h < $rhombusSize; $h++)
{
    $rhombusMod = abs((ceil($rhombusSize / 2) - 1 - $h));

    //add spaces
    for ($i = 0; $i < $rhombusMod; $i++)
        $daRhombus .= ' ';
    //make stars for that line
    for ($i = 0; $i < $rhombusSize - ($rhombusMod * 2); $i++)
    {
        $redLevels = rand(0, 255);
        $greenLevels = rand(0, 255);
        $blueLevels = rand(0, 255);
        $daRhombus .= "<span style='color:rgb($redLevels, $greenLevels, $blueLevels);'>*</span>";
    }
    //add more spaces
    for ($i = 0; $i < $rhombusMod; $i++)
        $daRhombus .= ' ';

    $daRhombus .= '<br>';
}*/
echo '<div class="daRhombus">';
echo $daRhombus;
echo '</div>
<style>
.daRhombus {
    display: inline-block;
    white-space: pre-wrap;
    word-spacing: 4px;
    letter-spacing: 10px;
    padding: 6px 0 0 6px;
}
</style>';

echo '<br><br>';

//9
/*Panaudokite (nėra).*/
echo '====9====<br>';
echo 'Error: task not found;';
echo '<br><br>';


//10
/*Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.*/
echo '====10====<br>';

echo 'Light hammering:<br>';
for ($i = 1; $i < 6; $i++)
{
    $hammerStrikes = 0;
    $nailDepth = 0;

    while ($nailDepth < 85)
    {
        $nailDepth += rand(5, 20);
        $hammerStrikes++;
    }
    echo "$i) Strikes: $hammerStrikes<br>";
}
echo '<br>';

echo 'Heavy hammering:<br>';
for ($i = 0; $i < 5; $i++)
{
    $hammerStrikes = 0;
    $nailDepth = 0;

    while ($nailDepth < 85)
    {
        if (rand(0, 1))
            $nailDepth += rand(20, 30);
        $hammerStrikes++;
    }
    echo "$i) Strikes: $hammerStrikes<br>";
}

echo '<br><br>';


//11
/*Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.*/
echo '====11====<br>';

$stringNumberStorage = '';
$unusedNumbers = array();

for ($i = 0; $i < 200; $i++)
    array_push($unusedNumbers, $i);

$testArray = array();
for ($i = 0; $i < 200; $i++)
    array_push($testArray, $i);

//generates string 1
for ($i = 0; $i < 50; $i++)
{
    $nGen = rand(1, (sizeof($unusedNumbers) - 1));

    $tempStorage = array_splice($unusedNumbers, $nGen, 1);
    $tempStorage = $tempStorage[0];
    $stringNumberStorage .= "$tempStorage";
    if ($i < 49)
        $stringNumberStorage .= ' ';
}

echo "String 1: $stringNumberStorage<br><br>";

//converts string 1 to an array
$arrayNumberStorage = explode(' ', $stringNumberStorage);
for ($i = 0; $i < sizeof($arrayNumberStorage); $i++)
    $arrayNumberStorage[$i] = (int)$arrayNumberStorage[$i];

//echo "picked out elements:<br>";
for ($i = 0; $i < sizeof($arrayNumberStorage); $i++) //loop through array with all the numbers
{
    //echo "butt $i<br>";
    for ($w = 2; $w < $arrayNumberStorage[$i]; $w++) //loop from 2 to half the current element's value (rounded up)
    {
        if ( !($arrayNumberStorage[$i] % $w) ) //if current element is divisible by X (2-half)
        {
            //echo $arrayNumberStorage[$i] . "<br>"; //spell out the element
            array_splice($arrayNumberStorage, $i, 1); //remove it from the array
            $i--;
            break; //set x to above the loop limit, ending the loop
        }
    }
}

//convert array to string
$finalString = '';
for ($i = 0; $i < sizeof($arrayNumberStorage); $i++)
{
    $finalString .= "$arrayNumberStorage[$i]";

    if ($i < sizeof($arrayNumberStorage) - 1)
        $finalString .= ' ';
}

echo "String 2: $finalString";

echo '<br><br>';

?>
</body>