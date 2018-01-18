<?php

namespace EricksonJoseph;

if (!isset($argv[1])) {
    echo "usage: php index.php 79927398713\n";
    exit(2);
}

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
