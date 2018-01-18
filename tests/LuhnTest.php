<?php

namespace EricksonJoseph;

final class LuhnTest extends \PHPUnit_Framework_TestCase {

    public function testValidInputs() {

        $Luhn = new Luhn();

        $inputs = [
            18,
            12344,
            84739230324784,
            "84739230324784",
            79927398713,
        ];

        foreach ($inputs as $input) {
            $this->assertTrue($Luhn->isValid($input));
        }
    }

    public function testInvalidInputs() {

        $Luhn = new Luhn();

        $inputs = [
            12343,
            84739230324785,
            79927398710,
            "79927398711",
            79927398712,
            79927398714,
            79927398715,
            79927398716,
            79927398717,
            79927398718,
            79927398719,
        ];

        foreach ($inputs as $input) {
            $this->assertFalse($Luhn->isValid($input));
        }
    }

    public function testInvalidArgumentThrowsException() {

        $Luhn = new Luhn();

        $inputs = [
            "abcdefg",
            -18,
            null,
            false,
            true,
            function(){},
            "",
        ];

        foreach ($inputs as $input) {
            try {
                $Luhn->isValid($input);
                $this->fail();
            } catch (\Exception $e) {
                $this->assertTrue($e instanceof \InvalidArgumentException);
            }
        }
    }
}
