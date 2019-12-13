<?php

namespace Tests\Unit\Rules;

use App\Rules\CPF;
use PHPUnit\Framework\TestCase;

class CPFTest extends TestCase
{
    protected $cpfRule;

    public function setUp(): void
    {
        parent::setUp();

        $this->cpfRule = new CPF();
    }

    /**
     * Check that valid cpfs passes
     *
     * @dataProvider validCPFs
     * @param int|float $number
     * @return void
     */
    public function testValidCPFsPasses($cpf)
    {
        $this->assertTrue($this->cpfRule->passes('test', $cpf));
    }

    /**
     * Check that invalid cpfs fails
     *
     * @dataProvider invalidCPFs
     * @param int|float $number
     * @return void
     */
    public function testInvalidCPFsFail($cpf)
    {
        $this->assertFalse($this->cpfRule->passes('test', $cpf));
    }

    public function validCPFs()
    {
        yield ['088.463.559-70'];
        yield ['08846355970'];
    }

    public function invalidCPFs()
    {
        yield [''];
        yield [' '];
        yield ['123.456.789-10'];
        yield ['12345678910'];
    }
}
