<head>
    <title>Exercise set 2</title>
</head>
<body style="background-color:#111; color:#ddd;">
<?php


//1
/*Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.*/
echo '====1====<br>';

$daBigArray = array();

for ($i = 0; $i < 30; $i++)
    array_push($daBigArray, rand(5, 25));

print_r($daBigArray);

echo '<br><br>';


//2
/*Naudodamiesi 1 uždavinio masyvu:
    a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
    b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
    c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
    d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
    e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
    f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
    g) Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
    h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
    i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;*/
echo '====2====<br>';

echo 'a)<br>';
$moreThanTens = 0;
for ($i = 0; $i < sizeof($daBigArray); $i++)
    if ($daBigArray[$i] > 10)
        $moreThanTens++;

echo "$moreThanTens<br>";

echo 'b)<br>';

echo '<br><br>';


//3
/*task*/
echo '====3====<br>';



echo '<br><br>';


//4
/*task*/
echo '====4====<br>';



echo '<br><br>';


//5
/*task*/
echo '====5====<br>';



echo '<br><br>';


//6
/*task*/
echo '====6====<br>';



echo '<br><br>';


//7
/*task*/
echo '====7====<br>';



echo '<br><br>';


//8
/*task*/
echo '====8====<br>';



echo '<br><br>';


//9
/*task*/
echo '====9====<br>';



echo '<br><br>';


//10
/*task*/
echo '====10====<br>';



echo '<br><br>';


//11
/*task*/
echo '====11====<br>';



echo '<br><br>';

?>
</body>