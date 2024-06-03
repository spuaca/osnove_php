<?php

$podaci = $_POST;

// var_dump($_POST);

if (!empty($podaci)) {
    echo "Kliknuto na posalji<br>";
    $ime = $podaci["first_name"];
    $prezime = $podaci["last_name"];

    if ($ime === "") {
        die("Polje ime je obavezno.<br>");
    }
    if ($prezime === "") {
        echo "Polje prezime je obavezno.<br>";
    }

    echo "Vase ime je $ime a prezime $prezime<br>";
} else {
    echo "Nije Kliknuto na posalji.<br>";
}

?>