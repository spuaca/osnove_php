<?php

function prettyPrint(array $print): void
{
    echo "<pre>";
    echo print_r($print);
    echo "</pre>";
}

const URL = "https://www.hnb.hr/tecajn-eur/htecajn.htm";

$lista = file(URL);

array_shift($lista);

// prettyPrint($lista);

foreach ($lista as $valutniRedak) {
    if (str_contains($valutniRedak, "USD")) {
        break;
    }
}

$usdValues = explode("       ", $valutniRedak);

// prettyPrint($usdValues);

$usdSrednjiTecaj = (float)str_replace(",", ".", $usdValues[2]);

echo "<h2>USD srednji tecaj: $usdSrednjiTecaj</h2>";


// 2.
// Dovrsiti zadatak tecajnica.php
// napravit web formu za konverziju EUR u USD
// korisnik u formu upisuje iznos u eurima i nakon submita
// vi ispisujete konvertiranu vrijednost

if (isset($_POST["eur"])) {
    // prettyPrint($_POST);
    // echo "<br>";
    // var_dump($_POST["eur"]);

    // Set eur & usd from POST
    $eur = $_POST["eur"];
    $usd = $_POST["usd"];

    // Moze se upisati bilo sto
    // $eur = "314..,..,.34t.,.*?(/\"#\"//()/\"##%%=)fdssadf---545354";

    // Remove all except numbers and ".,"
    $eur = preg_replace("/[^0-9.,]/", "", $eur);
    $usd = preg_replace("/[^0-9.,]/", "", $usd);

    // Replace , with .
    $eur = str_replace(",", ".", $eur);
    $usd = str_replace(",", ".", $usd);

    // Find position of 1st . & insert back
    $firstDotPos = strpos($eur, ".");
    if ($firstDotPos !== false) {
        $eur = str_replace(".", "", $eur);
        $eur = substr_replace($eur, ".", $firstDotPos, 0);
    }

    // Convert currency
    $eur = (float)$eur;
    $usd = (float)($eur * $usdSrednjiTecaj);

    // // Format 2 decimals
    // $eur = number_format($eur, 2, ",", "");
    // $usd = number_format($usd, 2, ",", "");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator valuta</title>
    <style>
        * {
            text-align: center;

        }
        input,
        label {
            font-size: 2em;
            text-align: left;
        }

        h1,
        h2 {
            font-size: 3em;
        }

        h2 {
            font-size: 2em;
        }

        table {
            width: 100%;
            margin: 0 auto;
            text-align: center;
        }
        table,
        th,
        td {
            font-size: 1.5em;
            border: 1px solid black;
            padding: 0;
            margin: 0;
            border-collapse: collapse;
        }

        div {
            width: 50%;
            margin: 0 auto;
        }
        span {
            color: red;
        }
    </style>
</head>

<body>
    <div>
        <h1>Kalkulator valuta</h1>
        <h2>Moze se upisati bilo sto PRIMJER: <br>
            <span>314..,..,.34t.,.*?(/\"#\"//()/\"##%%=)fdssadf---545354";</span></h2>

        <form method="POST">
            <label for="eur">EUR</label>
            <input type="text" id="eur" name="eur" value="<?= $eur ?? "" ?>">


            <label for="usd">USD</label>
            <input type="text" id="usd" name="usd" value="<?= $usd ?? "" ?>">

            <br><br>

            <input type="submit" value="Pretvori">
        </form>

        <table>
            <thead>
                <tr>
                    <th>Valuta</th>
                    <th>Kupovni Tečaj</th>
                    <th>Srednji Tečaj</th>
                    <th>Prodajni Tečaj</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $valutniRedak) : ?>
                    <tr>
                        <?php
                        // Split line by space
                        $values = preg_split('/\s+/', trim($valutniRedak));
                        foreach ($values as $value) {
                            echo "<td>$value</td>";
                        }
                        ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>