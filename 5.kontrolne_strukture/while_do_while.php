<?php

$i = 1;

echo " ========== WHILE ========== <br>";
while ($i <= 10) {
    echo "$i ";
    $i++;
}
echo "<br>";

$i = 2;
echo " ========== DO-WHILE ========== <br>";
do {
    echo "$i ";
    $i += 2;
} while ($i <= 100);
echo "<br><br>";

// echo date("Y.m.d");
// echo date("d.m.y");
