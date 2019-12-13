<?php

namespace Tests\Unit\Http\Requests;

use App\Http\Requests\UpdateStudentRequest;
use Faker\Factory;
use Tests\TestCase;

class UpdateStudentRequestTest extends TestCase
{
    /** @var \App\Http\Requests\UpdateStudentRequest */
    private $rules;

    /** @var \Illuminate\Validation\Validator */
    private $validator;

    public function setUp(): void
    {
        parent::setUp();

        $this->validator = app()->get('validator');

        $this->rules = (new UpdateStudentRequest())->rules();
    }

    public function validationProvider()
    {
        /* WithFaker trait doesn't work in the dataProvider */
        $faker = Factory::create(Factory::DEFAULT_LOCALE);

        return [
            'request_should_fail_when_no_data_is_provided' => [
                'passed' => false,
                'data' => []
            ],
            'request_should_fail_when_invalid_data_is_provided' => [
                'passed' => false,
                'data' => [
                    'name' => $faker->name(),
                    'birthdate' => $faker->date(),
                    'grade' => 20,
                    'postcode' => '0000000',
                    'street' => '',
                    'number' => '',
                    'complement' => $faker->word(),
                    'neighborhood' => $faker->word(),
                    'city' => $faker->word(),
                    'state' => 'XX',
                    'mother_name' => $faker->name(),
                    'mother_cpf' => '124',
                    'preferred_day_for_monthly_payment' => '2'
                ]
            ],
            'request_should_pass_when_data_is_provided' => [
                'passed' => true,
                'data' => [
                    'name' => $faker->name(),
                    'birthdate' => $faker->date(),
                    'grade' => $faker->numberBetween(1, 9),
                    'postcode' => '85015310',
                    'street' => $faker->streetAddress,
                    'number' => $faker->numberBetween(1000, 2000),
                    'complement' => $faker->word(),
                    'neighborhood' => $faker->word(),
                    'city' => $faker->word(),
                    'state' => 'PR',
                    'mother_name' => $faker->name(),
                    'mother_cpf' => '088.463.559-70',
                    'preferred_day_for_monthly_payment' => '5'
                ]
            ]
        ];
    }

    /**
     * @test
     * @dataProvider validationProvider
     * @param bool $shouldPass
     * @param array $mockedRequestData
     */
    public function validation_results_as_expected($shouldPass, $mockedRequestData)
    {
        $this->assertEquals(
            $shouldPass,
            $this->validate($mockedRequestData)
        );
    }

    protected function validate($mockedRequestData)
    {
        return $this->validator
            ->make($mockedRequestData, $this->rules)
            ->passes();
    }
}
