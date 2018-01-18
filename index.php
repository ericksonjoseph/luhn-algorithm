<?php

namespace EricksonJoseph;

require_once('Luhn.php');

$input = $argv[1];

if (!is_numeric($input)) {
    error_log("Expected a number");
    exit(1);
}

$Luhn = new Luhn();

if ($Luhn->isValid($input)) {

    echo "$input is valid\n";
} else {

    echo "$input is not valid\n";
}
