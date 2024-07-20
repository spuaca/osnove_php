<?php

const FILE_PATH = __DIR__ . "/podaci/polaznici.txt";

is_writable(FILE_PATH);
$handle = fopen(FILE_PATH, "a");
$text = "Nikolina Pelivan\n";

if (false !== $handle) {

    if (fwrite($handle, $text)) {
        echo "Uspjeh!!!";
    } else {
        echo "Unable to append to the file.";
    }

    fclose($handle);

} else {
    echo "Unable to open the file.";
}
