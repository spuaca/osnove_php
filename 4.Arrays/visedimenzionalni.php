<?php

// Višedimenzionalni niz

$fruits = [
    ["ime" => "Banana", "cijena" => "12 EUR", "klasa" => 1, "masa" => 1],
    ["ime" => "Jagoda", "cijena" => "9 EUR", "klasa" => 1, "masa" => 2],
    [
        "ime" => "Lubenica", "cijena" => "7 EUR", "klasa" => 1, "masa" => [
            1, 2, 3
        ]
    ],
];

echo $fruits[0]["ime"];

echo "<pre>";
print_r($fruits);
echo "</pre>";

$fruits2 = [
    "banana" => ["ime" => "Banana", "cijena" => "12 EUR", "klasa" => 1, "masa" => 1],
    "jagoda" => ["ime" => "Jagoda", "cijena" => "9 EUR", "klasa" => 1, "masa" => 2],
    "lubenica" => [
        "ime" => "Lubenica", "cijena" => "7 EUR", "klasa" => 1, "masa" => [
            1, 2, 3
        ]
    ],
];

echo $fruits2["banana"]["ime"];
echo "<pre>";
print_r($fruits2["banana"]);
echo "<pre>";
