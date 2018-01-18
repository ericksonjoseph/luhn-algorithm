<?php

echo "\n--------\n";

$input = $argv[1];

if (!is_numeric($input)) {
    error_log("Expected a number");
    exit(1);
}

$total = 0;
$parity = 1;

for ($i=strlen($input); $i > 0; $i--) {

    $number = substr($input, ($i-1), 1);

    $parity = $parity ^ 1;

    if ($parity) {
        $double = $number << 1;
        if ($double > 9) {
            $double -= 9;
        }
        echo "Doubled $number to get $double\n";
        $number = $double;
    } else {
        echo "$i: $number\n";
    }

    $total += $number;
}

if ($total % 10 == 0) {

    echo "Number is valid";
} else {

    echo "Number is NOT valid";
}
