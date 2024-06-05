<?php
// 1.
// Kreirajte datoteku obrazac.php i u njoj kreirajte HTML obrazac za upload datoteke. Obrazac treba poslati podatke na obradu datoteci obrada.php.
// Kreirajte datoteku obrada.php i u njoj dohvatite datoteku te učinite sljedeće:
// Provjerite je li datoteka poslana
// Kreirajte novu mapu u koju ćete pohraniti datoteku
// Provjerite je li poslana datoteka slika
// Pohranite poslanu datoteku.

// function prettyPrint(array $print): void
// {
//     echo "<pre>";
//     echo print_r($print);
//     echo "</pre>";
// }

// prettyPrint($_FILES);

if (!empty($_FILES["datoteka"])) {

    $fileArray = $_FILES["datoteka"];

    // Provjera je li došlo do pogreške pri uploadu
    $errorCode = $fileArray["error"];

    $errorMessages = [
        UPLOAD_ERR_INI_SIZE => "Učitana datoteka premašuje upload_max_filesize direktivu u php.ini.",
        UPLOAD_ERR_FORM_SIZE => "Učitana datoteka premašuje naredbu MAX_FILE_SIZE koja je navedena u HTML obrascu.",
        UPLOAD_ERR_PARTIAL => "Učitana datoteka samo je djelomično učitana.",
        UPLOAD_ERR_NO_FILE => "Nijedna datoteka nije uploadana.",
        UPLOAD_ERR_NO_TMP_DIR => "Nedostaje privremena mapa.",
        UPLOAD_ERR_CANT_WRITE => "Neuspješno pisanje datoteke na disk.",
        UPLOAD_ERR_EXTENSION => "PHP proširenje zaustavilo je učitavanje datoteke.",
    ];

    $errorMessage = $errorMessages[$errorCode] ?? "Nepoznata greška";
    if ($errorCode) {
        die($errorMessage);
    }

    // Kreiranje nove mape za pohranu datoteka
    $uploadDirName = "datoteka";
    $uploadDir = __DIR__ . "/$uploadDirName";
    if (file_exists($uploadDir)) {
        if (is_dir($uploadDir)) {
            echo "Mapa <strong>'$uploadDirName'</strong> već postoji.<br><br>";
        } else {
            die("Datoteka <strong>'$uploadDirName'</strong> postoji, ali nije mapa.<br>Molim preimenovati ili obrisati <strong>'$uploadDirName'</strong>.<br><br>");
        }
    } else if (mkdir($uploadDir)) {
        echo "Uspješno kreirana mapa <strong>'$uploadDirName'</strong>.<br><br>";
    } else {
        die("Greška pri kreiranju mape <strong>'$uploadDirName'</strong>.<br>Provjerite dozvole usera.<br><br>");
    }

    // Provjera je li poslana datoteka slika
    $tmpName = $fileArray["tmp_name"];
    if (!exif_imagetype($tmpName)) {
        die("Datoteka nije slika.");
    }

    echo "Datoteka je slika<br><br>";
    $fileName = $fileArray["name"];
    $uploadPath = $uploadDir . '/' . $fileName;

    // Pohrana datoteke
    if (move_uploaded_file($tmpName, $uploadPath)) {
        echo "Datoteka pohranjena.<br><br>";
        echo "<a href='datoteka/$fileName'>Link na datoteku</a>.<br>";
    } else {
        echo "Greška pri pohrani.";
    }
} else {
    echo "Datoteka nije poslana.";
}
