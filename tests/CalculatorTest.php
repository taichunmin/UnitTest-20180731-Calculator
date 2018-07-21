<?php

namespace Tests\Demo;

use Demo\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $_calculator;

    public function setUp()
    {
        $this->_calculator = new Calculator;
    }

    public function test_add_positive_integer()
    {
        $this->sumShouldBe(1, 2, 3);
    }

    public function test_add_negative_integer()
    {
        $this->sumShouldBe(1, -2, -1);
    }

    private function sumShouldBe(int $first, int $second, int $expected)
    {
        $sum = $this->_calculator->add($first, $second);

        $this->assertEquals($expected, $sum);
    }
}

