<?php

$podaci = $_POST;

var_dump($_POST);

if (!empty($podaci)) {
    echo "Kliknuto na posalji";
    $ime = $podaci["first_name"];
    $prezime = $podaci["last_name"];

    echo "Vase ime je $ime a prezime $prezime";
} else {
    echo "Nije Kliknuto na posalji";
}

?>

<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form method="POST">

        <label for="first_name">Ime:</label><br>
        <input type="text" id="first_name" name="first_name" placeholder="John"><br>

        <label for="last_name">Prezime:</label><br>
        <input type="text" id="last_name" name="last_name"><br><br>

        <input type="submit" value="Pošalji">
    </form>

</body>

</html>