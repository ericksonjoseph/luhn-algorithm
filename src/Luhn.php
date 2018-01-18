<?php

namespace EricksonJoseph;

class Luhn {

    public function isValid($input) {

        $this->validateInput($input);

        $total = 0;
        $parity = 1;

        for ($i=strlen($input)-1; $i >= 0; $i--) {

            $number = substr($input, $i, 1);

            if ($parity ^= 1) {
                $double = $number << 1;
                $number = ($double > 9) ? $double -= 9 : $double;
            }

            $total += $number;
        }

        return $total % 10 === 0;
    }

    private function validateInput($input) {
        if (!is_numeric($input) || intval($input) < 0) {
            throw new \InvalidArgumentException("Expected an unsigned number");
        }
    }
}
