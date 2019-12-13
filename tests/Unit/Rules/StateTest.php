<?php

namespace Tests\Unit\Rules;

use App\Rules\State;
use PHPUnit\Framework\TestCase;

class StateTest extends TestCase
{
    protected $stateRule;

    public function setUp(): void
    {
        parent::setUp();

        $this->stateRule = new State();
    }

    /**
     * Check that valid states passes
     *
     * @dataProvider validStates
     * @param int|float $number
     * @return void
     */
    public function testValidStatesPasses($state)
    {
        $this->assertTrue($this->stateRule->passes('test', $state));
    }

    /**
     * Check that invalid states fails
     *
     * @dataProvider invalidStates
     * @param int|float $number
     * @return void
     */
    public function testInvalidStatesFail($state)
    {
        $this->assertFalse($this->stateRule->passes('test', $state));
    }

    public function validStates()
    {
        yield ['AC'];
        yield ['AL'];
        yield ['AP'];
        yield ['AM'];
        yield ['BA'];
        yield ['CE'];
        yield ['DF'];
        yield ['ES'];
        yield ['GO'];
        yield ['MA'];
        yield ['MT'];
        yield ['MS'];
        yield ['MG'];
        yield ['PA'];
        yield ['PB'];
        yield ['PR'];
        yield ['PE'];
        yield ['PI'];
        yield ['RJ'];
        yield ['RN'];
        yield ['RS'];
        yield ['RO'];
        yield ['RR'];
        yield ['SC'];
        yield ['SP'];
        yield ['SE'];
        yield ['TO'];
    }

    public function invalidStates()
    {
        yield [''];
        yield [' '];
        yield ['XX'];
        yield ['PR '];
    }
}
