<!-- http://localhost/vienaragiai/005/testas.php -->

<?php

$minReikiaPagautiZiurkiu = 20;
$ratuKiekis = 0;
$pagautaZiurkiu = 0;

do {
    $pagautaZiurkiu += rand(3, 5);
    $ratuKiekis++;
    echo "Ratas nr $ratuKiekis) bendrai pagauta ziurkiu: $pagautaZiurkiu <br>";
} while ($pagautaZiurkiu < $minReikiaPagautiZiurkiu);

?>