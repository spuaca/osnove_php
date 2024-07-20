<?php

$podaci = $_POST;
$poruka = "";

echo "empty: " . empty($podaci) . "<br>";
echo "isset: " . isset($podaci) . "<br>";

if (isset($podaci)) {
    $ime = $podaci["first_name"];
    $prezime = $podaci["last_name"];

    if (empty($ime) && empty($prezime)) {
        $poruka = "Nema podataka za obradu.";
    } elseif (empty($ime)) {
        $poruka = "Polje ime je obavezno.<br>Vase prezime je $prezime.";
    } elseif (empty($prezime)) {
        $poruka = "Vase ime je $ime.<br>Polje prezime je obavezno.";
    } else {
        $poruka = "Vase ime je $ime.<br>Vase prezime je $prezime.";
    }
} else {
    $poruka .= "Forma nije submitana.<br>";
}
echo $poruka;
