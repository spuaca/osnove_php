<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <?php
    session_start();
    if (isset($_SESSION["error"])) {
        echo $_SESSION["error"];
        unset($_SESSION["error"]);
    }

    ?>
    <form method="POST" action="obrada.php">

        <label for="first_name">Ime:</label><br>
        <input type="text" id="first_name" name="first_name" placeholder="John"><br>

        <label for="last_name">Prezime:</label><br>
        <input type="text" id="last_name" name="last_name"><br><br>

        <input type="submit" value="Pošalji">
    </form>

</body>

</html>