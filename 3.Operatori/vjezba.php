<?php

$a = 1;
$b = 2;
$c = "hello";
$d = "world";

echo $a + $b;
echo "<br>";
echo $a - $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";

$f = $c . $d;
echo $f;
echo "<br>";

$a += 1;
echo $a;
echo "<br>";
$b *= 3;
echo $b;
echo "<br>";

var_dump($a > $b);
echo "<br>";

echo $a++;
echo "<br>";

echo $b--;
echo "<br>";

?>