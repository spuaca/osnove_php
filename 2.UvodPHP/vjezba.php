<?php

$int = 2;
$float = 6.4;
$string = "tekst";
$bool = true;

echo "TIPOVI:";
echo "<br>";
echo "int = $int";
echo "<br>";
echo "float = $float";
echo "<br>";
echo "string = $string";
echo "<br>";
echo "bool = $bool";
echo "<br>";

const PI = 3.14;
const e = 2.72;
const korijenIz2 = 1.41;

echo "<br>";
echo "KONSTANTE:";
echo "<br>";
echo "PI = " . PI;
echo "<br>";
echo "e = " . e;
echo "<br>";
echo "korijenIz2 = " . korijenIz2;
echo "<br>";

$a = 2;
$b =&$a;

echo "<br>";
echo "REFERENCE:";
echo "<br>";
echo "b = $b";
echo "<br>";

$a = 8;

echo "b = $b";
echo "<br>";

?>