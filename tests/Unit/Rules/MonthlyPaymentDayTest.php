<?php

namespace Tests\Unit\Rules;

use App\Rules\MonthlyPaymentDay;
use PHPUnit\Framework\TestCase;

class MonthlyPaymentDayTest extends TestCase
{
    protected $monthlyPaymentRule;

    public function setUp(): void
    {
        parent::setUp();

        $this->monthlyPaymentRule = new MonthlyPaymentDay();
    }

    /**
     * Check that valid days passes
     *
     * @dataProvider validMonthlyPaymentDays
     * @param int|float $number
     * @return void
     */
    public function testValidMonthlyPaymentDaysPasses($day)
    {
        $this->assertTrue($this->monthlyPaymentRule->passes('test', $day));
    }

    /**
     * Check that invalid days fails
     *
     * @dataProvider invalidMonthlyPaymentDays
     * @param int|float $number
     * @return void
     */
    public function testInvalidMonthlyPaymentDaysFail($day)
    {
        $this->assertFalse($this->monthlyPaymentRule->passes('test', $day));
    }

    public function validMonthlyPaymentDays()
    {
        yield ['5'];
        yield ['10'];
        yield ['15'];
        yield ['20'];
        yield ['25'];
        yield ['25 '];
        yield [5];
        yield [10];
        yield [15];
        yield [20];
        yield [25];
    }

    public function invalidMonthlyPaymentDays()
    {
        yield [''];
        yield [' '];
        yield ['1'];
        yield ['2'];
        yield [1];
        yield [2];
    }
}
