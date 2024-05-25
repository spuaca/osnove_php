<?php

$variable = date('N');

switch ($variable) {
    case 1:
        echo "Ponedjeljak";
        break;
    case 2:
        echo "Utorak";
        break;
    case 3:
        echo "Srijeda";
        break;
    case 4:
        echo "Četvrtak";
        break;
    case 5:
        echo "Petak";
        break;
    case 6:
        echo "Subota";
        break;
    case 7:
        echo "Nedjelja";
        break;

    default:
        echo "Dan ne postoji";
        break;
}

$variable = "pon";

switch ($variable) {
    case "pon":
        echo "Ponedjeljak";
        break;
    case "uto":
        echo "Utorak";
        break;
    case "sri":
        echo "Srijeda";
        break;
    case "cet":
        echo "Četvrtak";
        break;
    case "pet":
        echo "Petak";
        break;
    case "sub":
        echo "Subota";
        break;
    case "ned":
        echo "Nedjelja";
        break;

    default:
        echo "Dan ne postoji";
        break;
}

$variable = "pon";

switch ($variable) {
    case "pon":
    case "uto":
    case "sri":
        echo "Prvi dio tjedna";
        break;
    case "cet":
    case "pet":
    case "sub":
        echo "Drugi dio tjedna";
        break;
    case "ned":
        echo "Nedjelja";
        break;

    default:
        echo "Dan ne postoji";
        break;
}

$dan = match ($variable) {
    "pon" => "Ponedjeljak",
    "uto" => "Utorak",
    "sri" => "Srijeda",
    default => "Dan ne postoji"
};

echo "<br><br>";
echo $dan;