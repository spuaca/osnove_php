<?php

// Inicijalizacija praznog niza
$empty1 = [];
$empty2 = array();

// Inicijalizacija niza (lista) s podatcima
$names = ['Alex', 'Filip', 'Marko'];
$names = array('Alex', 'Filip', 'Marko');

echo "<pre>";
print_r($names);
echo "</pre>";
echo $names[1];

// Inicijalizacija niza (mapa) s podatcima -> Associative array
$status = ["name" => "James Potter"];

echo "<pre>";
print_r($status);
echo "</pre>";

echo $status["name"];

$fruits = array(
    "name" => "Banana",
    "cijena" => "12 EUR",
    "klasa" => "Prva"
);

$fruits = [
    "name" => "Banana",
    "cijena" => "12 EUR",
    "klasa" => [1,2,3],
    // "name" => "Jagoda"
];

echo "<pre>";
print_r($fruits["name"]);
echo "</pre>";
echo "<br>";

echo "<pre>";
var_dump($fruits);
echo "</pre>";
echo "<br>";

$imena = [1 => "Jura", 2 => "Mosha", 3 => "Nikolina"];
echo "<pre>";
print_r($imena);
echo "</pre>";
echo "<br>";