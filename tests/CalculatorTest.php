<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {

        $this->assertEquals(
            10,
            $this->calc->sum(2, 3, 5),
            'wrong sum'
        );

        $this->assertEquals(
            27,
            $this->calc->pow(3, 3),
            'wrong pow'
        );

        $this->assertEquals(
            1,
            $this->calc->minus(4, 3),
            'wrong minus'
        );

        $this->assertEquals(
            9,
            $this->calc->multiply(3, 3),
            'wrong multiply'
        );

        $this->assertEquals(
            2,
            $this->calc->divide(6, 3),
            'wrong divide'
        );

        $this->assertEquals(
            1,
            $this->calc->procent(11, 2),
            'wrong procent'
        );

        $this->assertIsFloat(
            $this->calc->divide(27, 3),
            'wrong divide'
        );

        $this->assertTrue(
            $this->calc->equal(3, 3),
            'wrong equal'
        );

        $this->assertTrue(
            $this->calc->more(5, 3),
            'wrong more'
        );

        $this->assertTrue(
            $this->calc->less(1, 3),
            'wrong less'
        );

        $this->assertEquals(
            [1, 5, 8],
            $this->calc->sort([5,8,1]),
            'wrong sort'
        );

        $this->assertEquals(
            [1, 8, 5],
            $this->calc->reverse([5,8,1]),
            'wrong reverse'
        );

    }

    protected function tearDown(): void
    {
    }
}
