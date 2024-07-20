<?php

$names = ["Alex", "Filip", "Marko"];
// $names[5] = "Robert";  > ovo ne raditi
$names[] = "Angelo";

echo "<pre>";
print_r($names);
echo "</pre>";

$fruits = [
    "ime" => "Banana",
    "cijena" => "12 EUR",
    "klasa" => 1,
    "masa" => 2
];

// $fruits[] = "sddsad"; -> ovo ne raditi
$fruits["klasa"] = 3;

echo "<pre>";
print_r($fruits);
echo "</pre>";

// Uklanjanje elemenata iz niza
unset($fruits["ime"]);
echo "<pre>";
print_r($fruits);
echo "</pre>";
