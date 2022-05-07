<head>
    <title>Exercise set 2</title>
</head>
<body style="background-color:#111; color:#ddd;">
<?php

//1
/*Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.*/
echo '====1==== <br>';

$fName1 = 'Grey';
$lName1 = 'DeLisle';

if (strlen($fName1) < strlen($lName1))
    echo $fName1;
else
    echo $lName1;

echo '<br><br>';


//2
/*Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.*/
echo '====2==== <br>';

$fName2 = strtoupper('Grey');
$lName2 = strtolower('DeLisle');

echo "$fName2<br>$lName2";

echo '<br><br>';


//3
/*Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.*/
echo '====3==== <br>';

$fName3 = 'Grey';
$lName3 = 'DeLisle';
$initials3 = "$fName3[0]$lName3[0]";

echo $initials3;

echo '<br><br>';


//4
/*Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.*/
echo '====4==== <br>';

$fName4 = 'Grey';
$lName4 = 'DeLisle';

$output4 = $fName4[strlen($fName4) - 3];
$output4 .= $fName4[strlen($fName4) - 2];
$output4 .= $fName4[strlen($fName4) - 1];
$output4 .= $lName4[strlen($lName4) - 3];
$output4 .= $lName4[strlen($lName4) - 2];
$output4 .= $lName4[strlen($lName4) - 1];

echo $output4;

echo '<br><br>';


//5
/*Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.*/
echo '====5==== <br>';

$muricano5 = 'An American in Paris';

echo str_ireplace('a', '*', $muricano5);

echo '<br><br>';


//6
/*Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.*/
echo '====6==== <br>';

$muricano6 = 'An American in Paris';
$count6 = 0;

for ($i = 0; $i < strlen($muricano6); $i++)
{
    if ($muricano6[$i] == "a" || $muricano6[$i] == "A")
        $count6++;
}

echo $count6;

echo '<br><br>';


//7
/*Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.*/
echo '====7==== <br>';

$muricano7 = 'An American in Paris';

function purgeTheVowels($string)
{
    $purgeList = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');
    $string = str_replace($purgeList, '', $string);
    return $string;
}

echo purgeTheVowels($muricano7);
echo '<br>';
echo purgeTheVowels("Breakfast at Tiffany's");
echo '<br>';
echo purgeTheVowels('2001: A Space Odyssey');
echo '<br>';
echo purgeTheVowels("It's a Wonderful Life");

echo '<br><br>';


//8
/*Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.*/
echo '====8==== <br>';

$string8 = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $string8;
echo '<br>';
echo 'Episode number: '. trim($string8, 'Star Wars: Episode - A New Hope');

echo '<br><br>';


//9
/*Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.*/
echo '====9==== <br>';

$string9_1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string9_2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

function countFives ($string)
{
    $tempString = '';
    for ($i = 0; $i < strlen($string); $i++) //purge non-letter-non-space symbols
    {
        if (strtoupper($string[$i]) !== strtolower($string[$i]) || $string[$i] === ' ')
            $tempString .= $string[$i];
    }

    $strArray = explode(' ', $tempString); //split words into an array
    $shortWords = 0;
    for ($i = 0; $i < sizeof($strArray); $i++) //count the 5- letter words
    {
        if (strlen($strArray[$i]) < 6)
        $shortWords++;
    }

    return $shortWords;
}

echo countFives($string9_1). '<br>';
echo countFives($string9_2);

echo '<br><br>';


//10
/*Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.*/
echo '====10==== <br>';

$string10 = '';
$abcLower = 'abcdefghijklmnopqrstuvwxyz';

for ($i = 0; $i < 3; $i++)
    $string10 .= $abcLower[rand(0, 25)];

echo $string10;
echo '<br><br>';


//11
/*Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)*/
echo '====11==== <br>';

echo 'Debugging stuff:<br>';

//loop through the strings with a similar loop as in 9 and construct the arrays, then basically do 10's add-to-string algorhythm
$wordBankRaw = $string9_1;
$wordBankRaw .= ' ';
$wordBankRaw .= $string9_2;
$wordBankStr = '';

for ($i = 0; $i < strlen($wordBankRaw); $i++) //purge unnecessary symbols
{
    if (mb_convert_case($wordBankRaw[$i], 0) !== mb_convert_case($wordBankRaw[$i], 1) || $wordBankRaw[$i] === ' ')
        $wordBankStr .= $wordBankRaw[$i];
    else
        echo $i . ' ' . $wordBankRaw[$i] . $wordBankRaw[$i+1] . $wordBankRaw[$i+2] . $wordBankRaw[$i+3] . $wordBankRaw[$i+4] . $wordBankRaw[$i+5] . '<br>';
}
$wordBank = explode(' ', $wordBankStr); //split into word array

$usedWords = array(); //an int array
$output11 = '';

for ($i = 0; $i < 10; $i++)
{
    $wordIndex = rand(0, sizeof($wordBank) - 1); 
    while (true) //check for repeating words
    {
        $numberOk = true;
        for ($w = 0; $w < sizeof($usedWords); $w++)
        {
            if ($wordIndex === $usedWords[$w])
            {
                $numberOk = false;
                break;
            }
        }

        if ($numberOk)
            break;

        $wordIndex = rand(0, sizeof($wordBank) - 1);
    }

    array_push($usedWords, $wordIndex);
    $output11 .= $wordBank[$wordIndex];
    if ($i < 9)
        $output11 .= ' ';
}


//echo ('Ą' !== 'ą');
echo $wordBankRaw;
echo '<br>';
echo strlen($wordBankRaw);
echo '<br>';
echo '<br>Actual task output:<br>';
echo $output11;
echo '<br><br>';

?>
</body>