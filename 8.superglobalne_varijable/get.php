<?php

// var_dump($_REQUEST);
// var_dump($_POST);
var_dump($_GET);
?>

<!-- Primjer URl-a sa get parametrima -->
<!-- get.php?objekt=stolica&tkojezao=google -->

<!DOCTYPE html>
<html>

<body>

    <h2>GET Superglobal</h2>

    <!-- <form method="GET"> -->
    <form>

        <label for="first_name">Ime:</label><br>
        <input type="text" id="first_name" name="first_name" placeholder="John"><br>

        <label for="last_name">Prezime:</label><br>
        <input type="text" id="last_name" name="last_name"><br><br>

        <input type="submit" value="Pošalji">
    </form>

</body>

</html>