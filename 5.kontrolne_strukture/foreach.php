<?php

$names = ["Harry", "Ron", "Hermione"];

echo "<pre>";
var_dump($names);
echo "</pre>";
foreach ($names as $name) {
    echo "$name, ";
}

echo "<br><br>";
foreach ($names as $key => $name) {
    $key++;
    echo "$key - $name<br>";
}


$users = [
    [
        "id" => 1,
        "name" => "John Doe",
        "email" => "john@example.com",
        "age" => 30
    ],
    [
        "id" => 2,
        "name" => "Jane Smith",
        "email" => "jane@example.com",
        "age" => 25
    ],
    [
        "id" => 3,
        "name" => "Mike Johnson",
        "email" => "mike@example.com",
        "age" => 35
    ],
    [
        "id" => 4,
        "name" => "Emily Davis",
        "email" => "emily@example.com",
        "age" => 28
    ],
    [
        "id" => 5,
        "name" => "Chris Brown",
        "email" => "chris@example.com",
        "age" => 40
    ]
];

echo "<br>";
foreach ($users as $key => $user) {
    echo ++$key . ". ";
    echo "$user[name] - $user[email]";
    echo "<br>";
    // unset($user['age']);

    // foreach ($user as $key2 => $value) {
    //     echo "$key2 - $value";
    // }

    // echo "<pre>";
    // var_dump($user);
    // echo "</pre>";
}
echo "<pre>";
var_dump($users);
echo "</pre>";
