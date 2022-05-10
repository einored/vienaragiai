<!-- http://localhost/vienaragiai/003/strings.php -->

<h2>Task 1</h2>
<span style="color: blue">Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.
<br><br></span>
<?php
$actor1 = 'Leonardas';
$actor2 = 'Dikaprijas';

if(strlen($actor1) > strlen($actor2)) echo $actor2;
else if (strlen($actor1) < strlen($actor2)) echo $actor1;
else echo 'Strings same length'
?>


<h2>Task 2</h2>
<span style="color: blue">Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
<br><br></span>
<?php
$actor1 = 'Leonardas';
$actor2 = 'Dikaprijas';

echo strtoupper($actor1) .' '. strtolower($actor2);
?>


<h2>Task 3</h2>
<span style="color: blue">Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
<br><br></span>
<?php
$actor1 = 'Leonardas';
$actor2 = 'Dikaprijas';

$lastThreeLetters = substr($actor1, 0, 1) . substr($actor2, 0, 1) ; 
echo $lastThreeLetters;
?>


<h2>Task 4</h2>
<span style="color: blue">Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
<br><br></span>
<?php
$actor1 = 'Leonardas';
$actor2 = 'Dikaprijas';

$lastThreeLetters = substr($actor1, -3) . substr($actor2, -3) ; 
echo $lastThreeLetters;
?>


<h2>Task 5</h2>
<span style="color: blue">Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.
<br><br></span>
<?php
$word = 'An American in Paris';

$wordWithAllAReplace = str_replace('A', '*', $word); //str_ireplace
$wordWithAllAReplace = str_replace('a', '*', $wordWithAllAReplace);
echo $wordWithAllAReplace;
?>


<h2>Task 6</h2>
<span style="color: blue">Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
<br><br></span>
<?php
$word = 'An American in Paris';

$wordWithAllACount = 0;
$wordWithAllACount += substr_count($word, 'A');
$wordWithAllACount += substr_count($word, 'a');
echo $wordWithAllACount;
?>


<h2>Task 7</h2>
<span style="color: blue">Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
<br><br></span>
<?php
// $word = 'An American in Paris';
// $word = 'Breakfast at Tiffany\'s';
// $word = '2001: A Space Odyssey';
$word = 'It\'s a Wonderful Life';

$wordWithoutVowel = str_replace('A', '', $word);
$wordWithoutVowel = str_replace('a', '', $wordWithoutVowel);
$wordWithoutVowel = str_replace('E', '', $wordWithoutVowel);
$wordWithoutVowel = str_replace('e', '', $wordWithoutVowel);
$wordWithoutVowel = str_replace('I', '', $wordWithoutVowel);
$wordWithoutVowel = str_replace('i', '', $wordWithoutVowel);
$wordWithoutVowel = str_replace('O', '', $wordWithoutVowel);
$wordWithoutVowel = str_replace('o', '', $wordWithoutVowel);
$wordWithoutVowel = str_replace('U', '', $wordWithoutVowel);
$wordWithoutVowel = str_replace('u', '', $wordWithoutVowel);
echo $wordWithoutVowel;
?>


<h2>Task 8</h2>
<span style="color: blue">Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
<br><br></span>
<?php
$word = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $word .'<br>';

$episode = str_replace(' ', '', $word);
$episode = substr($episode, strpos($episode, 'Episode') + strlen('Episode'), +1);
echo $episode;
?>


<h2>Task 9</h2>
<span style="color: blue">Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
<br><br></span>
<?php
// $word = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$word = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
echo $word .'<br>';

$wordArray = explode(' ', $word);
// echo '<pre>';
// var_dump($wordArray);

$wordArrayLessThan6Letters = 0;
foreach ($wordArray as &$value) {
    if (strlen($value) <= 5) $wordArrayLessThan6Letters++;
}
echo $wordArrayLessThan6Letters;
?>


<h2>Task 10</h2>
<span style="color: blue">Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
<br><br></span>
<?php
function generateRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$string = generateRandomString(3);
echo $string;
?>


<h2>Task 11</h2>
<span style="color: blue">Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)
<br><br></span>
<?php
function generateString($length, $array) {
    $arrayLength = count($array);
    $randomString = '';
    for ($i = 0; $i < $length;) {
        $random = $array[rand(0, $arrayLength - 1)];
        // if(!strpos($random, $randomString)){
            $randomString .= $array[rand(0, $arrayLength - 1)]. ' ';
            $i++;
        // }
    }
    return $randomString;
}
$word1 = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$word2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$wordArray = array_merge(explode(' ', $word1), explode(' ', $word2));
// echo '<pre>';
// var_dump($wordArray);

$string = generateString(10, $wordArray);
echo $string;
?>