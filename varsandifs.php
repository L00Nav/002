<head>
    <title>Exercise set 1</title>
</head>
<body style="background-color:#111; color:#ddd;">
<!--Don't mind this. I just enjoy having eyeballs-->

<?php
/*Forbodderino:
-Arrays
-Cycles
-Custom functions
*/

//1
/*Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".*/
echo '====1==== <br>';
$fName = 'Luna';
$lName = 'Noname';
$bYear = '1969';
$cYear = '2022';
echo "My name's $fName $lName. I am " . $cYear - $bYear . ' y/old';
echo '<br><br>';


//2
/*Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.*/
echo '====2==== <br>';

$a2 = rand(0, 4);
$b2 = rand(0, 4);
if ($a2 > $b2)
{
    if ($b2 === 0)
    {
        $b2++;
        echo 'Prevented division by 0. Dividing by 1 instead. <br>';
    }
    echo round(($a2 / $b2), 2);
}
else
{
    if ($a2 === 0)
    {
        $a2++;
        echo 'Prevented division by 0. Dividing by 1 instead. <br>';
    }
    echo round(($b2 / $a2), 2);
}
echo '<br><br>';


//3
/*Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.*/
echo '====3==== <br>';

$a3 = rand(0, 25);
$b3 = rand(0, 25);
$c3 = rand(0, 25);
$avg3 = -1;

if ($a3 != max($a3, $b3, $c3) && $a3 != min($a3, $b3, $c3))
    $avg3 = $a3;
if ($b3 != max($a3, $b3, $c3) && $b3 != min($a3, $b3, $c3))
    $avg3 = $b3;
if ($c3 != max($a3, $b3, $c3) && $c3 != min($a3, $b3, $c3))
    $avg3 = $c3;

if ($avg3 === -1)
    echo "Due to the way numbers generated, none of them can be considered average";
else
    echo 'Average: ' . $avg3;
echo '<br>';

echo "Generated numbers: $a3 $b3 $c3";
echo '<br><br>';


//4
/*Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.*/
echo '====4==== <br>';

$a4 = rand(1, 10);
$b4 = rand(1, 10);
$c4 = rand(1, 10);
$triangleStatus4 = true;

if ($a4 + $b4 <= $c4)
    $triangleStatus4 = false;
else if ($a4 + $c4 <= $b4)
    $triangleStatus4 = false;
else if ($c4 + $b4 <= $a4)
    $triangleStatus4 = false;

echo "Sides: $a4 $b4 $c4 <br>";
if ($triangleStatus4)
    echo "Triangle CAN be made!";
else
    echo "No triangles on this grim day...";
echo '<br><br>';

/* Old garbage solution: 
$long4 = max($a4, $b4, $c4);
$short4 = min($a4, $b4, $c4);

if ($a4 === $long4)
    $a4 = 0;
    else if ($b4 === $long4)
        $b4 = 0;
        else if ($c4 === $long4)
            $c4 = 0;

if ($a4 === $short4)
    $a4 = 0;
    else if ($b4 === $short4)
        $b4 = 0;
        else if ($c4 === $short4)
            $c4 = 0;

$avg4 = max($a4, $b4, $c4);

$triangleStatus4 = ($short4 + $avg4 > $long4);

echo "Sides: $short4 $avg4 $long4 <br>";
if ($triangleStatus4)
    echo "Triangle CAN be made!";
else
    echo "No triangles on this grim day...";
echo '<br><br>';*/


//5
/*Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).*/
echo '====5==== <br>';

$a5 = rand(0, 2);
$b5 = rand(0, 2);
$c5 = rand(0, 2);
$d5 = rand(0, 2);
$z5 = 0;
$o5 = 0;
$t5 = 0;

if($a5 === 0)
    $z5++;
if($b5 === 0)
    $z5++;
if($c5 === 0)
    $z5++;
if($d5 === 0)
    $z5++;

if($a5 === 1)
    $o5++;
if($b5 === 1)
    $o5++;
if($c5 === 1)
    $o5++;
if($d5 === 1)
    $o5++;

if($a5 === 2)
    $t5++;
if($b5 === 2)
    $t5++;
if($c5 === 2)
    $t5++;
if($d5 === 2)
    $t5++;

echo "Zeroes: $z5  Ones: $o5  Twos: $t5";
echo '<br><br>';


//6
/*Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>*/
echo '====6==== <br>';

$a6 = rand(1, 6);
echo "<h3>$a6</h3>";

echo '<br><br>';


//7
/*Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. */
echo '====7==== <br>';

$a7 = rand(-10, 10);
$b7 = rand(-10, 10);
$c7 = rand(-10, 10);

if ($a7 < 0)
    $colourA7 = 'green';
    else if ($a7 > 0)
        $colourA7 = 'blue';
        else
            $colourA7 = 'red';

if ($b7 < 0)
    $colourB7 = 'green';
    else if ($b7 > 0)
        $colourB7 = 'blue';
        else
            $colourB7 = 'red';

if ($c7 < 0)
    $colourC7 = 'green';
    else if ($c7 > 0)
        $colourC7 = 'blue';
        else
            $colourC7 = 'red';

echo "<p style='color:$colourA7'>$a7</p>";
echo "<p style='color:$colourB7'>$b7</p>";
echo "<p style='color:$colourC7'>$c7</p>";

echo '<br><br>';


//8
/*Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.*/
echo '====8==== <br>';

$candles = rand(5, 3000);
$cPrice = 1.00;
if ($candles > 1000 && $candles < 2001)
    $cPrice = 0.97;
else if ($candles > 2000)
    $cPrice = 0.94;

echo "$candles would cost $cPrice euro / candle for a total of " . $cPrice * $candles;

echo '<br><br>';


//9
/*Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.*/
echo '====9==== <br>';
$a9 = rand(0, 100);
$b9 = rand(0, 100);
$c9 = rand(0, 100);

echo "$a9<br>$b9<br>$c9<br>";
echo 'Avg: ' . round((($a9 + $b9 + $c9) / 3), 2) . '<br>';

$total9 = 0;
$n9 = 0;
if($a9 > 10 && $a9 < 91)
{
    $total9 += $a9;
    $n9++;
}
if($b9 > 10 && $b9 < 91)
{
    $total9 += $b9;
    $n9++;
}
if($c9 > 10 && $c9 < 91)
{
    $total9 += $c9;
    $n9++;
}
if ($n9 > 0)
    echo '10-90 avg: ' . round(($total9 / $n9), 2) . '<br>';
else
    echo '10-90 avg: unavailable. Not enough valid numbers';    

echo '<br><br>';


//10
/*Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.*/
echo '====10==== <br>';

$hours = rand(0, 24);
$minutes = rand(0, 59);
$seconds = rand(0, 59);
echo "$hours:$minutes:$seconds<br>";

$addSeconds = rand(0, 300);
$addMinutes = (int)($addSeconds / 60);
$addSeconds -= $addMinutes * 60;

$seconds += $addSeconds;
$minutes += $addMinutes;

if ($seconds > 59)
{
    $seconds -= 60;
    $minutes++;
}
if ($minutes > 59)
{
    $minutes -= 60;
    $hours++;
}
echo "$hours:$minutes:$seconds<br>";

echo '<br><br>';


//11
/*Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA.*/
echo '====11==== <br>';

$one = rand(1000, 9999);
$two = rand(1000, 9999);
$three = rand(1000, 9999);
$four = rand(1000, 9999);
$five = rand(1000, 9999);
$six = rand(1000, 9999);

if ($one === max($one, $two, $three, $four, $five, $six)) $temp =& $one;
else if ($two === max($one, $two, $three, $four, $five, $six)) $temp =& $two;
else if ($three === max($one, $two, $three, $four, $five, $six)) $temp =& $three;
else if ($four === max($one, $two, $three, $four, $five, $six)) $temp =& $four;
else if ($five === max($one, $two, $three, $four, $five, $six)) $temp =& $five;
else $temp =& $six;

$first = $temp;
$temp = 0;
unset ($temp);

if ($one === max($one, $two, $three, $four, $five, $six)) $temp =& $one;
else if ($two === max($one, $two, $three, $four, $five, $six)) $temp =& $two;
else if ($three === max($one, $two, $three, $four, $five, $six)) $temp =& $three;
else if ($four === max($one, $two, $three, $four, $five, $six)) $temp =& $four;
else if ($five === max($one, $two, $three, $four, $five, $six)) $temp =& $five;
else $temp =& $six;

$second = $temp;
$temp = 0;
unset ($temp);

if ($one === max($one, $two, $three, $four, $five, $six)) $temp =& $one;
else if ($two === max($one, $two, $three, $four, $five, $six)) $temp =& $two;
else if ($three === max($one, $two, $three, $four, $five, $six)) $temp =& $three;
else if ($four === max($one, $two, $three, $four, $five, $six)) $temp =& $four;
else if ($five === max($one, $two, $three, $four, $five, $six)) $temp =& $five;
else $temp =& $six;

$third = $temp;
$temp = 0;
unset ($temp);

if ($one === max($one, $two, $three, $four, $five, $six)) $temp =& $one;
else if ($two === max($one, $two, $three, $four, $five, $six)) $temp =& $two;
else if ($three === max($one, $two, $three, $four, $five, $six)) $temp =& $three;
else if ($four === max($one, $two, $three, $four, $five, $six)) $temp =& $four;
else if ($five === max($one, $two, $three, $four, $five, $six)) $temp =& $five;
else $temp =& $six;

$fourth = $temp;
$temp = 0;
unset ($temp);

if ($one === max($one, $two, $three, $four, $five, $six)) $temp =& $one;
else if ($two === max($one, $two, $three, $four, $five, $six)) $temp =& $two;
else if ($three === max($one, $two, $three, $four, $five, $six)) $temp =& $three;
else if ($four === max($one, $two, $three, $four, $five, $six)) $temp =& $four;
else if ($five === max($one, $two, $three, $four, $five, $six)) $temp =& $five;
else $temp =& $six;

$fifth = $temp;
$temp = 0;
unset ($temp);

$sixth = max($one, $two, $three, $four, $five, $six);

echo "$first $second $third $fourth $fifth $sixth";


?>
</body>