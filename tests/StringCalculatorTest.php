<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    private StringCalculator $nums;
    protected function setUp():void
    {
        $this->nums = new StringCalculator();
    }

    /**
     * @test
     */
    public function givenEmptyStringReturns0()
    {
        $res = $this->nums->add("");

        $this->assertEquals(0, $res);
    }

    /**
     * @test
     */
    public function givenOneNumberReturnsThatNumber()
    {
        $res = $this->nums->add("3");

        $this->assertEquals(3, $res);
    }

    /**
     * @test
     */
    public function givenTwoNumbersReturnsAddition()
    {
        $res = $this->nums->add("3,2");

        $this->assertEquals(5, $res);
    }

    /**
     * @test
     */
    public function givenMoreThanTwoNumbersReturnsAddition()
    {
        $res = $this->nums->add("3,2,5");

        $this->assertEquals("10",$res);
    }

    /**
     * @test
     */
    public function givenStringWithLineJumpInStaidOfCommaReturnsAddition()
    {
        $res = $this->nums->add("1\n3,2");

        $this->assertEquals("6", $res);
    }

    /**
     * @test
     */
    public function GivenStringWithDifferentSeparatorReturnsAddition()
    {
        $res = $this->nums->add("//;\n1;2");

        $this->assertEquals("3", $res);
    }

    /**
     * @test
     */
    public function GivenStringWithOneNegativeNumberReturnsException()
    {
        $res = $this->nums->add("-3,2");

        $this->assertEquals("negativos no soportados: -3", $res);
    }


}