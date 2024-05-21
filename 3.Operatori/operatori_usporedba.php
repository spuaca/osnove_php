<?php

$a = 10;
$b = 5;
$c = "10";
$d = 10;
$e = 9;
$f = 11;

var_dump($a > $b);
echo "<br>";
var_dump($a >= $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a <= $b);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a == $c);
echo "<br>";
var_dump($a === $c);
echo "<br>";
var_dump($a === $d);
echo "<br>";

var_dump($a != $c);
echo "<br>";

var_dump($a !== $c);
echo "<br>";

var_dump($a !== $d);
echo "<br>";
?>