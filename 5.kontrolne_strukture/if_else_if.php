<?php

$primeNumbers = [2, 3, 5, 7, 11];

echo "Rezultat provjere da li postoji 3. element u nizu:<br>";
var_dump(isset($primeNumbers[2]));
echo "<br><br>";

// if else
echo " =========== IF =========== ";
echo "<br>";
if (isset($primeNumbers[2])) {
    echo "Treci clan arraya primeNumbers postoji: " . $primeNumbers[2];
}
echo "<br><br>";

echo " =========== IF ELSE =========== ";
echo "<br>";
// if else iskaz
$a = 5;
$b = 10;
$c = 15;

if ($a == 4) {
    echo "\$a je 5";
}
echo "<br><br>";

if (($b > $a and $b < $c) or $b < $a) {
    echo "Ispisuje se kod unutar IF";
} else {
    echo "Ispisuje se kod unutar ELSE";
}
echo "<br><br>";

// if else if
$postotakIspita = -1;
if ($postotakIspita >= 90) {
    echo 'Ocjena je 5';
}
elseif($postotakIspita >= 80) {
    echo 'Ocjena je 4';
}
elseif($postotakIspita >= 70) {
    echo 'Ocjena je 3';
}
elseif($postotakIspita >= 60) {
    echo 'Ocjena je 2';
}
elseif($postotakIspita < 60 && $postotakIspita > 0) {
    echo 'Ocjena je 1';
}
else {
    echo 'Nismo mogli izracunaati vasu ocjenu';
}

if (count($primeNumbers) > 5) {
    echo "Array primeNumbers ima vise od 5 zapisa";
} elseif(count($primeNumbers) === 5) {
    echo "Array primeNumbers ima tocno 5 zapisa";
} else {
    echo "Array primeNumbers ima manje od 5 zapisa";
}

