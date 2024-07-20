<?php

$empty_array = [];
$names = ["Filip", "Marko", "Alex", "Jura"];
$names2 = ["Ivan", "Luka"];

var_dump(empty($empty_array)); // true
echo "<br>";
var_dump(empty($names)); // false
echo "<br>";
var_dump(isset($empty_array)); // true
echo "<br>";
var_dump(isset($names[3])); // true
echo "<br>";
var_dump(isset($names[4])); // false
echo "<br>";

// in_array and array_search funkcije
echo "<br>";
echo "in_array";
echo "<br>";
var_dump(in_array("Alex", $names));
echo "<br>";

echo "array_search";
echo "<br>";
var_dump(array_search("Alex", $names));
echo "<br>";
echo "<br>";

echo "========== PRIJE SORTIRANJA ==========";
echo "<pre>";
print_r($names);
echo "</pre>";

// sortiranje
echo "========== sort() ==========";
sort($names);
echo "<pre>";
print_r($names);
echo "</pre>";

echo "========== rsort() ==========";
rsort($names);
echo "<pre>";
print_r($names);
echo "</pre>";

echo "========== asort() ==========";
asort($names);
echo "<pre>";
print_r($names);
echo "</pre>";

echo "========== ksort() ==========";
ksort($names);
echo "<pre>";
print_r($names);
echo "</pre>";


// push and pop and shift
echo "========== array_push() ==========";
array_push($names, "Mosha");
echo "<pre>";
print_r($names);
echo "</pre>";

echo "========== array_pop() ==========";
$last_element = array_pop($names);
echo "<br>";
echo $last_element;
echo "<pre>";
print_r($names);
echo "</pre>";

echo "========== array_shift() ==========";
array_shift($names);
echo "<pre>";
print_r($names);
echo "</pre>";

// array_keys & array_values
echo "========== array_keys & array_values ==========";
echo "<pre>";
var_dump(array_keys($names));
echo "</pre>";
echo "<pre>";
var_dump(array_values($names));
echo "</pre>";
echo "<pre>";
var_dump(count($names));
echo "</pre>";

// array_merge
echo "========== array_merge ==========";
$merged = array_merge($names, $names2);
echo "<pre>";
var_dump($merged);
echo "</pre>";
