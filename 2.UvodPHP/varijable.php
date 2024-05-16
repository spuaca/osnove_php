<?php
// Imena varijabli su osjetljiva na velika i mala slova
$ime = 'alex';
$Ime = 'Alex';

echo $ime;
echo "<br>";
echo $Ime;
echo "<br>";

// Nakon znaka & ime varijable moze zapoceti sa slovom ili _ (donja crta)

$_ime;

// Primjer neispravne definicije imena varijable
// $123ime;
// $-ime;
// $ ime;

// Primjer neispravne definijecije imena varijable
$_ime;
$ime123;
$ime_prezime; // -> snake_case
$imePrezime; // camelCase

// KONSTANTE
// Imena konstanti trebalo bi pisati velikim slovima
define("PI", 3.14);
const OIB = '11245678911';

$_ = function($v){return($v);};

echo "PI: " . PI;
echo "<br>";
echo "Vaš OIB je " . OIB . " a ime je " . $Ime . '.';

?>