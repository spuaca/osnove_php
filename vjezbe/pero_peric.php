<?php

// napraviti funkciju koja prima ime, prezime, (pErO,pErIć) i kao rezultat vraca P. Preic

function formatName(string $name): string
{
    $nameArray = explode(",", $name);
    
    // implode('|', $nameArray);

    prettyPrint($nameArray);
    $name = ucfirst($nameArray[0]);
    $surname = ucfirst(mb_strtolower($nameArray[1]));
    // $surname = mb_convert_case($nameArray[1], MB_CASE_TITLE, "UTF-8");
    $firstLetter = substr($name, 0, 1);
    return "$firstLetter. $surname";
}

$formattedName = formatName('pErO,ćErIć');

echo $formattedName;

function prettyPrint(array $print): void
{
    echo "<pre>";
    echo print_r($print);
    echo "</pre>";
}

?>