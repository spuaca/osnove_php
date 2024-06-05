<?php

$errors = [];
$poruka = "";

// echo "empty: " . empty($podaci) . "<br>";
// echo "isset: " . isset($podaci) . "<br>";

if (isset($_POST["first_name"]) || isset($_POST["last_name"])) {

    $podaci = $_POST;

    $ime = $podaci["first_name"] ?? "";
    $prezime = $podaci["last_name"] ?? "";

    if (empty($ime) && empty($prezime)) {
        $poruka = "Nema podataka za obradu.";
    } elseif (empty($ime)) {
        $poruka = "Vase prezime je $prezime.";
        $errors["first_name"] = "Polje ime je obavezno";
    } elseif (empty($prezime)) {
        $poruka = "Vase ime je $ime.";
        $errors["last_name"] = "Polje prezime je obavezno";
    } else {
        $poruka = "Vase ime je $ime.<br>Vase prezime je $prezime.";
    }
}

?>

<!DOCTYPE html>
<html>

<body>

    <form method="POST">

        <label for="first_name">Ime</label>
        <input type="text" id="first_name" name="first_name"><br>
        <p style="color: red;"><?= $errors["first_name"] ?? ""; ?></p> <!-- ?? => Null coalescing operator -->

        <label for="last_name">Prezime</label>
        <input type="text" id="last_name" name="last_name"><br>
        <p style="color: red;"><?= $errors["last_name"] ?? ""; ?></p> <!-- ?? => Null coalescing operator -->

        <input type="submit" value="Pošalji">
        <br><br>
        <?= $poruka ?? ""; ?>
    </form>

    <?php

    if (isset($errors) && !empty($isset)) {
        foreach ($errors as $key => $error) {
            echo "$key => $error";
        }
    }

    ?>

</body>

</html>