<?php

namespace EricksonJoseph;

class Luhn {

    public function isValid($input) {

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
                $number = $double;
            } else {
            }

            $total += $number;
        }

        return $total % 10 == 0;
    }
}
