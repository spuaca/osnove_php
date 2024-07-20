<?php

$a = 10;
$b = 0;

// type casting -> promjena tipa podatka
(string)$a;

var_dump((bool)$a);
echo "<br>";
var_dump(boolval($b));
echo "<br>";

var_dump(!10); // false
echo "<br>";
var_dump(!true); // false
echo "<br>";

var_dump( !true && false);

// vrijednosti koje vracaju FALSE
$var = false;
$var = 0;
$var = 0.0;
$var = '';
$var = '0';
$var = [];
$var = NULL;

echo "<br>";
if (! '0') {
    echo "Izraz je istinit.";
}

?>