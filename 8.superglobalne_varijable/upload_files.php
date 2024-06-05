<?php

function prettyPrint(array $print): void
{
    echo "<pre>";
    echo print_r($print);
    echo "</pre>";
}

prettyPrint($_FILES);

$uploadDir = __DIR__ . '/uploads';

if (!empty($_FILES) && isset($_FILES)) {
    if (is_dir($uploadDir) === false) {
        mkdir($uploadDir);
    }

    var_dump(basename($_FILES['datoteka']['name']));
    $file = $_FILES['datoteka']['name'];
    $fileName = $uploadDir . '/' . $file;

    if (move_uploaded_file($_FILES['datoteka']['tmp_name'], $fileName)) {
        echo 'File dodan';
        echo "<a href='uploads/$file'>File</a>";
    } else {
        echo "Problem kod file uploada;";
    }
}

?>

<!DOCTYPE html>
<html>

<body>

    <h2>File Upload</h2>

    <form method="POST" enctype="multipart/form-data">

        <label for="datoteka">Datoteka:</label><br>
        <input type="file" id="datoteka" name="datoteka"><br><br>

        <input type="submit" value="Pošalji">
    </form>
</body>

</html>