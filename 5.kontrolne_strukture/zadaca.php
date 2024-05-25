<?php

echo "1. Koristeći petlju while, ispišite prvih deset brojeva.<br>";
$i = 1;
echo "<pre>\t";
while ($i <= 10) {
    echo "$i ";
    $i++;
}
echo "</pre>";

echo "2. Koristeći petlju for, ispišite visekratnike broja 3 do 100.<br>";
echo "<pre>\t";
for ($i = 3; $i <= 100; $i += 3) {
    echo "$i ";
}
echo "</pre>";

echo "<pre>\t";
for ($i = 3; $i <= 100; $i += 3) {
    if ($i % 3 === 0) {
        echo "$i ";
    }
}
echo "</pre>";

echo "3. Tablica množenja: Napiši PHP program koji koristi petlje za generiranje tablice množenja od 1 do 10.<br>";
echo "<pre>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "\t$i x $j = " . $i * $j . "<br>";
    }
    echo "<br>";
}
echo "</pre>";

echo "4. Definirajte varijablu \$names i dodijelite joj niz koji sadrži pet imena.<br>";
$names = ["Harry", "Ron", "Hermione", "Dumbledore", "Hagrid"];
echo "<pre>";
foreach ($names as $key => $name) {
    echo "\t$key => $name<br>";
}
echo "</pre>";

echo "5. Ispisati imena iz niza \$names spojene sa zarezom i razmakom tako da iza zadnjeg imena ne budu zarez i razmak<br>";
echo "<pre>\t";
foreach ($names as $key => $name) {
    if (count($names) - 1 === $key) {
        echo $name;
    } else {
        echo "$name, ";
    }
}
echo "</pre>";

echo "6. Definirajte varijable a, b i c, te im istim redoslijedom dodijelite vrijednosti 5,10 i 15.<br>";
$a = 5;
$b = 10;
$c = 15;
echo "<pre>\t";
if ($a < $b && $b < $c) {
    echo "$b je između $a i $c";
} else {
    echo "$b nije između $a i $c";
}
echo "</pre>";

echo "7. Koristeći uvjetovani tip kontrolne strukture switch ili match ispišite koji je trenutno dan u tjednu.<br>";
$numDay = date('N');
echo "<pre>";
echo "\t<b>1. nacin (MATCH)</b><br>";
$day = match ($numDay) {
    "1" => "Ponedjeljak",
    "2" => "Utorak",
    "3" => "Srijeda",
    "4" => "Četvrtak",
    "5" => "Petak",
    "6" => "Subota",
    "7" => "Nedjelja",
    default => "Dan ne postoji!"
};
echo "\t$day";
echo "</pre>";

echo "<pre>";
echo "\t<b>2. nacin (MATCH DATE)</b><br>";
$day = match ($numDay) {
    "1", "2", "3", "4", "5", "6", "7" => date('l'),
    default => "Dan ne postoji!"
};
echo "\t$day";
echo "</pre>";

echo "<pre>";
echo "\t<b>3. nacin (IF DATE)</b><br>";
if ($numDay >= 1 && $numDay <= 7) {
    echo "\t" . date('l');
} else {
    echo "\tDan ne postoji!";
}
echo "</pre>";

echo "<pre>";
echo "\t<b>4. nacin (LOCALE)</b><br>";
setlocale(LC_TIME, 'hr_HR.UTF-8');
echo "\t" . strftime('%A');
echo "</pre>";