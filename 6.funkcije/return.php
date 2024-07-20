<?php

$a = 5;
$b = 6;

function addTwoNumbers(int $a, int $b): int
{
    return $a + $b;
}

$zbroj = addTwoNumbers(8, 16);
var_dump($zbroj);