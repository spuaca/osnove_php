<?php
$a = 5;
$b = $a;
echo "Vrijednost";
echo "<br>";
echo "Prije promjene vrijednosti a: " . $b;
echo "<br>";
$a = 6;

echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";

$a = 5;
$b = &$a;
echo "<br>";
echo "Referenca";
echo "<br>";
echo "Prije promjene vrijednosti a: " . $b;
echo "<br>";
$a = 6;

echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";

?>