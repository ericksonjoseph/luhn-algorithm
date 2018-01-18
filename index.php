<?php

namespace EricksonJoseph;

require_once('./vendor/autoload.php');

$input = $argv[1];

$Luhn = new Luhn();

if ($Luhn->isValid($input)) {

    echo "$input is valid\n";
    exit(0);
} else {

    echo "$input is not valid\n";
    exit(1);
}
