<?php

var_dump(time());

$expiresIn = time() + 60 * 60;

setcookie("user", "Aleksandar", $expiresIn); // 86400 = 1 day

var_dump($_COOKIE);

setcookie("user", "Aleksandar", time() - 3600); // 86400 = 1 day

var_dump($_COOKIE);
