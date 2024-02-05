<?php

// The tests for this class are in "tests/calculatorTest.php"
class Calculator {
    public function sum(...$numbers) {
        $result = 0;
        foreach ($numbers as $number) {
            if (is_numeric($number)) {
                $result += $number;
            }
            else {
                throw new Exception("'$number' is not a number");
            }
        }
        return $result;
    }
}