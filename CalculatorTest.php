<?php
require_once 'Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->calculator = new Calculator();
    }

    public function testCalculate()
    {
        $this->assertEquals(42, $this->calculator->calculate(20, 22, '+'));
    }
}
