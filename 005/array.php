<!-- http://localhost/vienaragiai/005/array.php -->

<h2>Task 1</h2>
<span style="color: blue">Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
<br></span>
<?php
$array;
for ($i=0; $i < 30; $i++) { 
    $array[$i] = rand(5, 25);
}

echo '<pre>';
print_r($array);
?>


<h2>Task 2</h2>
<span style="color: blue">Naudodamiesi 1 uždavinio masyvu:
<br>a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
<br>b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
<br>c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
<br>d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
<br>e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
<br>f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
<br>g) Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
<br>h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
<br>i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
<br><br></span>
<?php
echo 'a) <br>';

$min = 10;
$arrayA = array_filter(
    $array,
    function ($value) use($min) {
        return ($value > $min);
    }
);
print_r($arrayA);

echo 'b) <br>';
$maxValueInArray = max($array);
for ($i=0; $i < count($array); $i++) { 
    if($array[$i] == $maxValueInArray)
        echo '['. $i .'] => '. $array[$i] .'<br>';
}

echo 'c) <br>';
$sum = 0;
for ($i=0; $i < count($array); $i++) { 
    if ($array[$i] % 2 == 0)
        $sum += $array[$i];
}
echo $sum .'<br>';

echo 'd) <br>';
$arrayNew;
for ($i=0; $i < count($array); $i++) { 
    $arrayNew[$i] = $array[$i] - $i;
}
print_r($arrayNew);

echo 'e) <br>';
for ($i=count($array); $i < 40; $i++) { 
    $array[$i] = rand(5, 25);
}
print_r($array);

echo 'f) <br>';
$arrayPorinis; $a = 0;
$arrayNeporinis; $b = 0;
for ($i=0; $i < count($array); $i++) { 
    if ($i % 2 == 0){
        $arrayPorinis[$a] = $array[$i];
        $a++;
    }
    else{
        $arrayNeporinis[$b] = $array[$i];
        $b++;
    }
}
print_r($arrayPorinis);
print_r($arrayNeporinis);

echo 'g) <br>';
for ($i=0; $i < count($arrayPorinis); $i++) { 
    if($arrayPorinis[$i] > 15)
        $arrayPorinis[$i] = 0;
}
print_r($arrayPorinis);

echo 'h) <br>';
for ($i=0; $i < count($array); $i++) { 
    if($array[$i] > 10){
        echo $i .'<br>';
        break;
    }
}

echo 'i) <br>';
for ($i=0; $i < count($array); $i++) { 
    if ($i % 2 == 0){
        unset($array[$i]);
    }
}
print_r($array);
?>


<h2>Task 3</h2>
<span style="color: blue">Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
</span>
<?php
function randLetter()
{
    $int = rand(0,3);
    $letters = "ABCD";
    $rand_letter = $letters[$int];
    return $rand_letter;
}

for ($i=0; $i < 200; $i++) { 
    $lettersArray[$i] = randLetter();
}
$a = 0;
$b = 0;
$c = 0;
$d = 0;
for ($i=0; $i < count($lettersArray); $i++) { 
    if($lettersArray[$i] == 'A')
        $a++;
    else if($lettersArray[$i] == 'B')
        $b++;
    else if($lettersArray[$i] == 'C')
        $c++;
    else if($lettersArray[$i] == 'D')
        $d++;
}
echo 'A = '. $a .'<br>';
echo 'B = '. $b .'<br>';
echo 'C = '. $c .'<br>';
echo 'D = '. $d .'<br>';
?>


<h2>Task 4</h2>
<span style="color: blue">Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
<br><br></span>
<?php
sort($lettersArray);
print_r($lettersArray);
?>


<h2>Task 5</h2>
<span style="color: blue">Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
</span>
<?php
// function randLetter()
// {
//     $int = rand(0,3);
//     $letters = "ABCD";
//     $rand_letter = $letters[$int];
//     return $rand_letter;
// }
$lettersArray1;
$lettersArray2;
$lettersArray3;

for ($i=0; $i < 200; $i++) { 
    $lettersArray1[$i] = randLetter();
    $lettersArray2[$i] = randLetter();
    $lettersArray3[$i] = randLetter();
}

// $letters123;
for ($i=0; $i < 200; $i++) { 
    $letters123[$i] = ($lettersArray1[$i] .''. $lettersArray2[$i] .''. $lettersArray3[$i]);
}
// print_r($letters123);
print_r(array_unique($letters123));
?>


<h2>Task 6</h2>
<span style="color: blue">Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
</span>
<?php
function randomGeneration(){
    $array[0] = rand(100, 999);;
    for ($i=1; $i < 100;) { 
        $value = rand(100, 999);
        if(!in_array($value, $array)){
            $array[$i] = $value;
            $i++;
        }
            
    }
    return $array;
}

$arrayUnique1 = randomGeneration();
$arrayUnique2 = randomGeneration();

print_r($arrayUnique1);
print_r($arrayUnique2);
?>


<h2>Task 7</h2>
<span style="color: blue">Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
</span>
<?php
$arrayUnique12;
$j = 0;
for ($i=1; $i < count($arrayUnique1); $i++) { 
    if(!in_array($arrayUnique1[$i], $arrayUnique2)){
        $arrayUnique12[$j] = $arrayUnique1[$i];
        $j++;
    }        
}
print_r($arrayUnique12);
?>


<h2>Task 8</h2>
<span style="color: blue">Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
</span>
<?php
$arrayJoinSameValues12;
$j = 0;
for ($i=1; $i < count($arrayUnique1); $i++) { 
    if(in_array($arrayUnique1[$i], $arrayUnique2)){
        $arrayJoinSameValues12[$j] = $arrayUnique1[$i];
        $j++;
    }        
}
print_r($arrayJoinSameValues12);
?>


<h2>Task 9</h2>
<span style="color: blue">Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.
</span>
<?php
$arrayJoinSameValues12;
for ($i=0; $i < count($arrayUnique1); $i++) { 
    $arrayJoinSameValues12[$arrayUnique1[$i]] = $arrayUnique2[$i];
}
print_r($arrayJoinSameValues12);
?>


<h2>Task 10</h2>
<span style="color: blue">Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
</span>
<?php
$array10;
for ($i=0; $i < 10; $i++) { 
    if($i == 0 || $i == 1)
        $array10[$i] = rand(5, 25);
    else
        $array10[$i] = $array10[($i - 2)] + $array10[($i - 1)];
}
print_r($array10);
?>