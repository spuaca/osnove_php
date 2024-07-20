<?php

const USERS_CSV = __DIR__ . '/podaci/users.csv';

// YODA CODING NOTATION
if (false !== $handle = fopen(USERS_CSV, 'r')) {

    $headers = fgetcsv($handle);
    $data = [];

    while (false !== $row = fgetcsv($handle)) {
        // $data[] = $row;
        $data[] = array_combine($headers, $row);
    }

    // zatvorite stream prema datoteci
    fclose($handle);

    echo "<pre>";
    print_r($data);
    echo "</pre>";
    
} else {
    echo 'Unable to open the file.';
}

// if("redak") {
//     echo "true";
// }