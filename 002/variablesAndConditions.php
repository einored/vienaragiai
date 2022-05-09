<!-- http://localhost/vienaragiai/002/variablesAndConditions.php -->

<h2>Task 1</h2>
<span style="color: blue">Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".<br><br></span>
<?php
$name = 'Vardenis';
$surname = 'Pavardenis';
$bornYear = 1998;
$thisYear = 2022;

echo "As esu $name $surname Man yra ". $thisYear - $bornYear;
// echo '<br>';
?>


<h2>Task 2</h2>
<span style="color: blue">Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
<br><br></span>
<?php
$a = rand(0, 4);
$b = rand(0, 4);

echo 'a = '. $a .' b = '. $b;
echo '<br>';
if ($a == 0 || $b == 0) echo 'Can\'t divide by zero';
else if($a > $b) echo number_format($a / $b, 2);
else if (($a < $b)) echo number_format($b / $a, 2);
?>


<h2>Task 3</h2>
<span style="color: blue">Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
<br><br></span>
<?php
$a = rand(0, 25);
$b = rand(0, 25);
$c = rand(0, 25);

echo 'a = '. $a .' b = '. $b .' c = '. $c;
echo '<br>';
if ($a < $b && $a > $c || $a > $b && $a < $c) echo 'Middle value is variable a = '. $a;
else if ($b < $a && $b > $c || $b > $a && $b < $c) echo 'Middle value is variable b = '. $b;
else if ($c < $a && $c > $b || $c > $a && $c < $b) echo 'Middle value is variable c = '. $c;
else echo 'Cant\'t find middle value';
?>


<h2>Task 4</h2>
<span style="color: blue">Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
<br><br></span>
<?php
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo 'a = '. $a .' b = '. $b .' c = '. $c;
echo '<br>';
if ($b + $c > $a && $a + $c > $b && $a + $b > $c ) echo 'Triangle exists';
else echo 'Triangle does not exist';
?>


<h2>Task 5</h2>
<span style="color: blue">Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
<br><br></span>
<?php
$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);
$zero = 0;
$one = 0;
$two = 0;

echo 'a = '. $a .' b = '. $b .' c = '. $c .' d = '. $d;
echo '<br>';
if ($a == 0) $zero++;
else if ($a == 1) $one++;
else if ($a == 2) $two++;
if ($b == 0) $zero++;
else if ($b == 1) $one++;
else if ($b == 2) $two++;
if ($c == 0) $zero++;
else if ($c == 1) $one++;
else if ($c == 2) $two++;
if ($d == 0) $zero++;
else if ($d == 1) $one++;
else if ($d == 2) $two++;
echo 'zero = '. $zero .' one = '. $one .' two = '. $two;
?>

<h2>Task 6</h2>
<span style="color: blue">Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
</span>
<?php
echo '<h3>'. rand(1, 6) .'</h3>';
?>

<h2>Task 7</h2>
<span style="color: blue">Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 
<br><br></span>
<?php
$a = rand(-10, 10);
$b = rand(-10, 10);
$c = rand(-10, 10);

if($a < 0) echo 'a = <span style="color: green">'. $a .'</span>';
else if ($a == 0) echo 'a = <span style="color: red">'. $a .'</span>';
else if ($a > 0) echo 'a = <span style="color: blue">'. $a .'</span>';
echo '<br>';
if($b < 0) echo 'b = <span style="color: green">'. $b .'</span>';
else if ($b == 0) echo 'b = <span style="color: red">'. $b .'</span>';
else if ($b > 0) echo 'b = <span style="color: blue">'. $b .'</span>';
echo '<br>';
if($c < 0) echo 'c = <span style="color: green">'. $c .'</span>';
else if ($c == 0) echo 'c = <span style="color: red">'. $c .'</span>';
else if ($c > 0) echo 'c = <span style="color: blue">'. $c .'</span>';
?>


<h2>Task 8</h2>
<span style="color: blue">Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
<br><br></span>
<?php
$candles = rand(5, 3000);
$candlePrice = 1;

echo 'Buying '. $candles . ' candles';
echo '<br>';
if($candles * $candlePrice > 2000) echo 'One candle price = '. $candlePrice - $candlePrice * 0.04;
else if($candles * $candlePrice > 1000) echo 'One candle price = '. $candlePrice - $candlePrice * 0.03;
else echo 'One candle price = '. $candlePrice;
?>


<h2>Task 9</h2>
<span style="color: blue">Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
<br><br></span>
<?php
$a = rand(0, 100);
$b = rand(0, 100);
$c = rand(0, 100);
$arithmeticAverageAll = ($a + $b + $c) / 3;
$numberSum = 0;
$count = 0;

echo 'a = '. $a .' b = '. $b .' c = '. $c;
echo '<br>';

echo 'Arithmetic average of all numbers = '. round($arithmeticAverageAll, 0);
echo '<br>';

if($a >= 10 && $a <= 90) $numberSum += $a; $count++;
if($b >= 10 && $b <= 90) $numberSum += $b; $count++;
if($c >= 10 && $c <= 90) $numberSum += $c; $count++;
if($count > 0)
echo 'Arithmetic average of numbers from 10 to 90 = '. round($numberSum / $count, 0);
?>

<h2>Task 10</h2>
<span style="color: blue">Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.
<br><br></span>
<?php
$hours = rand(0, 23);
$minutes = rand(0, 59);
$seconds = rand(0, 59);
$addSeconds = rand(0, 300);

echo "$hours:$minutes:$seconds";
echo '<br>';
echo 'Seconds to add = '. $addSeconds;
echo '<br>';
$time_seconds = $hours * 3600 + $minutes * 60 + $seconds + $addSeconds;
echo floor($time_seconds / 3600) .':'. floor(($time_seconds / 60) % 60) .':'. $time_seconds % 60;
?>