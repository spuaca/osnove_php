<?php

$a = 15;
$b = 10;

echo $a += $b; // Ekvivalent $a = $a + $b
echo "<br>";
echo $a -= $b; // Ekvivalent $a = $a - $b
echo "<br>";
echo $a *= $b; // Ekvivalent $a = $a * $b
echo "<br>";
echo $a /= $b; // Ekvivalent $a = $a / $b
echo "<br>";
echo $a %= $b; // Ekvivalent $a = $a % $b
echo "<br>";
echo $a .= $b; // Ekvivalent $a = $a . $b
echo "<br>";

$ime = "Stjepan";
$prezime = "Puača";

$punoIme = $ime . " " . $prezime;
echo $punoIme;
echo "<br>";

$ime .= " " . $prezime;
echo $ime;
echo "<br><br>";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($a . $b);
echo "<br>";
?>