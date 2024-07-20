<?php

$primeNumbers = [2, 3, 5, 7, 11];

echo "Rezultat provjere da li postoji 3. element u nizu:<br>";
var_dump(isset($primeNumbers[2]));
echo "<br><br>";

if (isset($primeNumbers[2])) {
    echo "Vrijednost 3. elementa:<br> $primeNumbers[2]";
}
else {
    "Treci element u nizu ne postoji";
}
echo "<br><br>";


$primeNumbers[] = 13;

echo "Broj elemenata u nizu nakon dodjele nove vrijednosti (6. broj):<br>";
echo count($primeNumbers);
echo "<br><br>";

echo "Ispis cijelog niza:";
echo "<pre>";
print_r($primeNumbers);
echo "</pre>";

rsort($primeNumbers);

echo "============ rsort() ============";
echo "<pre>";
print_r($primeNumbers);
echo "</pre>";