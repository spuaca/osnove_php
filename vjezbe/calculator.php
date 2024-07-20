<?php

// 3.
// Napraviti kalkulator koji koristi 4 osnovne
// matematicke funkcije koristenjem web formi

$sum = "";
$diff = "";
$mult = "";
$div = "";
$error = "";

if (!empty($_POST)) {

    $sum1 = $_POST["sum1"];
    $sum2 = $_POST["sum2"];

    $diff1 = $_POST["diff1"];
    $diff2 = $_POST["diff2"];

    $mult1 = $_POST["mult1"];
    $mult2 = $_POST["mult2"];

    $div1 = $_POST["div1"];
    $div2 = $_POST["div2"];

    if (is_numeric($sum1) && is_numeric($sum2)) {
        $sum = $sum1 + $sum2;
    }
    
    if (is_numeric($diff1) && is_numeric($diff2)) {
        $diff = $diff1 - $diff2;
    }

    if (is_numeric($mult1) && is_numeric($mult2)) {
        $mult = $mult1 * $mult2;
    }

    if (is_numeric($div1) && is_numeric($div2)) {
        if ($div2 == 0) {
            $error = "Greška! Nemoguće dijeliti s nulom!";
        } else {
            $div = $div1 / $div2;
        }
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            font-size: 2rem;
        }

        input:not([type="submit"]) {
            width: 5em;
        }
    </style>
</head>

<body>

    <h1>Kalkulator</h1>

    <form method="POST">

        <!-- Sum -->
        <label for="sum1"></label>
        <input type="number" id="sum1" name="sum1" value="<?= $sum1 ?>">
        <span>+</span>
        <label for="sum2"></label>
        <input type="number" id="sum2" name="sum2" value="<?= $sum2 ?>">
        <span><?= " = $sum"; ?></span>
        <input type="submit" value="Zbroji">
        <br><br>

        <!-- Diff -->
        <label for="diff1"></label>
        <input type="number" id="diff1" name="diff1" value="<?= $diff1 ?>">
        <span>-</span>
        <label for="diff2"></label>
        <input type="number" id="diff2" name="diff2" value="<?= $diff2 ?>">
        <span><?= " = $diff"; ?></span>
        <input type="submit" value="Oduzmi">
        <br><br>

        <!-- Multiply -->
        <label for="mult1"></label>
        <input type="number" id="mult1" name="mult1" value="<?= $mult1 ?>">
        <span>*</span>
        <label for="mult2"></label>
        <input type="number" id="mult2" name="mult2" value="<?= $mult2 ?>">
        <span><?= " = $mult"; ?></span>
        <input type="submit" value="Mnozi">
        <br><br>

        <!-- Division -->
        <label for="div1"></label>
        <input type="number" id="div1" name="div1" value="<?= $div1 ?>">
        <span>/</span>
        <label for="div2"></label>
        <input type="number" id="div2" name="div2" value="<?= $div2 ?>">
        <span><?= " = $div"; ?></span>
        <input type="submit" value="Dijeli">
        <br><span><?= $error; ?></span>

    </form>

</body>

</html>