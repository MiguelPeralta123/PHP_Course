<?php

use PHPUnit\Framework\TestCase;

// Use the Calculator class in "projects/project_8.php"
require_once 'projects/project_8.php';

class CalculatorTest extends TestCase {
    public function testSumTwoNumbers() {
        $calculator = new Calculator();
        $result = $calculator->sum(2, 2);
        $this->assertEquals(4, $result, "Sum failed. Expected 4, got $result");
    }
    
    public function testSumSeveralNumbers() {
        $calculator = new Calculator();
        $result = $calculator->sum(2, 2, 2, 2);
        $this->assertEquals(8, $result, "Sum failed. Expected 8, got $result");
    }
    
    // This test will fail as strings are not allowed
    public function testSumNumbersAndStrings() {
        $calculator = new Calculator();
        $result = $calculator->sum(2, 'Miguel');
        $this->assertEquals(4, $result, "Sum failed. Expected 4, got $result");
    }
}