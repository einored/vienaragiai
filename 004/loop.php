<!-- http://localhost/vienaragiai/004/loop.php -->

<h2>Task 1</h2>
<span style="color: blue">Naršyklėje nupieškite linija iš 400 “*”. 
<br>a) Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
<br>b)Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
<br><br></span>
<?php
echo 'a)';
echo '<p style="overflow-wrap: break-word;">';
for ($i=0; $i < 400; $i++) { 
    echo '*';
}
echo '</p>';

echo 'b)';
echo '<p style="overflow-wrap: break-word;">';
for ($i=0; $i < 400;) { 
    for ($j=0; $j < 50; $j++) { 
        echo '*';
        $i++;
    }
    echo '<br>';
}
echo '</p>';
?>


<h2>Task 2</h2>
<span style="color: blue">Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.
<br><br></span>
<?php
function createArray($num_elements){
    for ($i=0; $i < 300; $i++) { 
        $array[$i] = rand(0, 300);
    }
    return $array;
}

$randomArrayOfNumbers = createArray(300);
// var_dump ($randomArrayOfNumbers);

function arrayPrint($array){
    for ($i=0; $i < count($array); $i++) { 
        if($array[$i] > 275)
            echo '<font style="color: red">' . $array[$i] . ' </font>';
        else
            echo $array[$i]. ' ';
    }
}
arrayPrint($randomArrayOfNumbers);

function biggerThan150($array){
    $count = 0;
    for ($i=0; $i < count($array); $i++) { 
        if ($array[$i] > 150){
            $count++;
        }
    }
    return $count;
}
echo '<br>Count of numbers biger than 150 = '. biggerThan150($randomArrayOfNumbers);
?>


<h2>Task 3</h2>
<span style="color: blue">Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
<br><br></span>
<?php
$maxNumber = rand(3000, 4000);
$array;
$j = 0;

for ($i=77; $i <= $maxNumber; $i++) { 
    if($i % 77 === 0){
        $array[$j] = $i; 
        $j++;
    }
}
// var_dump($array);

for ($i=0; $i < count($array); $i++) { 
    if($i == count($array) - 1)
        echo $array[$i];
    else
        echo $array[$i]. ', ';
}
?>


<h2>Task 4</h2>
<span style="color: blue">Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
<br>* * * * * * * * * * *
<br>* * * * * * * * * * *
<br>* * * * * * * * * * *
<br>* * * * * * * * * * *
<br>* * * * * * * * * * *
<br>* * * * * * * * * * *
<br>* * * * * * * * * * *
<br><br></span>
<?php
$count = 0;
echo '<p>';
for ($i=0; $i < 100; $i++) { 
    echo '* &nbsp;';
    $count++;
    if($count === 10){
        echo '<br>';
        $count = 0;
    }
}
echo '</p>';
?>


<h2>Task 5</h2>
<span style="color: blue">Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
<br><br></span>
<?php
$starCount = 100;
$oneLine = strval(sqrt($starCount));
$count = 0;
$d1 = 1;
$d2 = $oneLine;

echo '<p>';

for ($i=1; $i <= $starCount; $i++) { 
    if ($d1 === $i % $oneLine || $i === $starCount || $d2 === $i % $oneLine || $i == $oneLine){
        echo '<font style="color: red">'. '* &nbsp;' .'</font>';
    }   
    else{
        echo '* &nbsp;';
    }
    $count++;

    if ($count == $oneLine){
        echo '<br>';
        $count = 0;
        $d1++;
        $d2--;
    }
}
echo '</p>';
?>


<h2>Task 6</h2>
<span style="color: blue">Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
<br>a) Iškritus herbui;
<br>b) Tris kartus iškritus herbui;
<br>c) Tris kartus iš eilės iškritus herbui;
<br><br></span>
<?php
$moneta;
echo 'a) ';
do {
    $moneta = rand(0, 1);
    if($moneta === 0)
        echo 'H';
    else
        echo 'S';

} while ($moneta != 0);

echo '<br> b) ';
$count = 0;
do {
    $moneta = rand(0, 1);
    if($moneta === 0){
        echo 'H';
        $count++;
    }
    else{
        echo 'S';
    }
} while ($count != 3);

echo '<br> c) ';
$count = 0;
do {
    $moneta = rand(0, 1);
    if($moneta === 0){
        echo 'H';
        $count++;
    }
    else{
        echo 'S';
        $count = 0;
    }
} while ($count != 3);
?>


<h2>Task 7</h2>
<span style="color: blue">Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.
<br><br></span>
<?php
$petras = 0;
$kazys = 0;
do {
    $petras += rand(10, 20);
    $kazys += rand(5, 25);
    echo "Petras turi tasku: $petras ; Kazys turi tasku: $kazys <br>"; 
} while ($petras < 222 || $kazys < 222);

if ($petras > $kazys) echo 'Partiją laimėjo: Petras';
else if ($petras < $kazys) echo 'Partiją laimėjo: Kazys';
else echo 'Partija laimejo: Lygiosios';
?>


<h2>Task 10</h2>
<span style="color: blue">Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
<br>a) “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
<br>b) “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
<br><br></span>
<?php
echo 'a)<br>';
$viniesIlgis = 85;
function kalama($viniesIlgis){
$ikalta = 0;
$count = 0;
do {
    $ikalta += rand(5, 20);
    // echo "Ikalta $ikalta (mm) <br>"; 
    $count++;
} while ($ikalta < $viniesIlgis);
echo "Ikalta per: $count smugius <br>";
}
kalama($viniesIlgis);
kalama($viniesIlgis);
kalama($viniesIlgis);
kalama($viniesIlgis);
kalama($viniesIlgis);

echo 'b)<br>';
function kalamaSuTikimybe($viniesIlgis){
$ikalta = 0;
$count = 0;
do {
    if(rand(0, 1))
        $ikalta += rand(5, 20);
    $count++;
} while ($ikalta < $viniesIlgis);
echo "Ikalta per: $count smugius <br>";
}
kalamaSuTikimybe($viniesIlgis);
kalamaSuTikimybe($viniesIlgis);
kalamaSuTikimybe($viniesIlgis);
kalamaSuTikimybe($viniesIlgis);
kalamaSuTikimybe($viniesIlgis);
?>


<h2>Task 11</h2>
<span style="color: blue">Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.
<br><br></span>
<?php
$array;
$stringas;
for ($i=0; $i < 50; $i++) { 
    $sk = rand(1, 200);
    if(!in_array($sk, $array))
    $array[$i] = $sk;
}
print_r($array);
echo '<br>';

for ($i=0; $i < count($array); $i++) { 
    $count = 0;
    for ($j=1; $j <= $array[$i]; $j++) { 
        if (($array[$i] % $j) == 0) {  
            $count++;  
        }  
    }  
    if ($count < 3)  {  
        echo "$array[$i] is a prime number.<br>";  
    }
    // else{
        // echo "$array[$i] is not a prime number.<br>"; 
    // }
}

?>


<h2>Task 8</h2>
<span style="color: blue">Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).
<br><br></span>
<?php
function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}

$heigth = 21;

echo '<p>';
for ($i = 1; $i < $heigth; $i++) {
    for ($j = $i; $j < $heigth; $j++)
        echo '&nbsp;&nbsp;&nbsp;';
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo '<font style="color: '. random_color() .';>'. '&nbsp;*' .'</font>';
    echo '<br>';
}
$n = $heigth;
for ($i = $heigth; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo '&nbsp;&nbsp;&nbsp;';
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo '<font style="color: '. random_color() .';>'. '&nbsp;*' .'</font>';
    echo '<br>';
}
echo '</p><br>';
?>


