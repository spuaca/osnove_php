<?php

$users = [
    "linus" => [
        "ime" => "Linus",
        "prezime" => "Torvalds",
        "godine" => 54,
        "spol" => "M",
    ],
    "tim" => [
        "ime" => "Tim",
        "prezime" => "Berners-Lee",
        "godine" => 68,
        "spol" => "M",
    ],
];

echo "Ispis niza:";
echo "<pre>";
print_r($users);
echo "</pre>";

unset($users["linus"]["spol"]);
unset($users["tim"]["spol"]);

echo "Ispis niza nakon brisanja spola:";
echo "<pre>";
print_r($users);
echo "</pre>";

$users["richard"] = [
    "ime" => "Richard",
    "prezime" => "Stallman",
    "godine" => 71
];

echo "Ispis niza nakon dodavanja novog korisnika bez ključa spol:";
echo "<pre>";
print_r($users);
echo "</pre>";