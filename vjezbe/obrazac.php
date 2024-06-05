<!-- // 1.
// Kreirajte datoteku obrazac.php i u njoj kreirajte HTML obrazac za upload datoteke. Obrazac treba poslati podatke na obradu datoteci obrada.php.
// Kreirajte datoteku obrada.php i u njoj dohvatite datoteku te učinite sljedeće:
// Provjerite je li datoteka poslana
// Kreirajte novu mapu u koju ćete pohraniti datoteku
// Provjerite je li poslana datoteka slika
// Pohranite poslanu datoteku. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <h1>Upload</h1>

    <form action="obrada.php" method="POST" enctype="multipart/form-data">

        <label for="datoteka">Datoteka:</label><br><br>
        <input type="file" id="datoteka" name="datoteka">

        <br><br><input type="submit" value="Upload">

    </form>

</body>

</html>