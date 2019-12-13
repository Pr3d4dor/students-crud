<?php

namespace Tests\Unit\Http\Resources;

use App\Http\Resources\StudentResource;
use App\Models\Student;
use PHPUnit\Framework\TestCase;

class StudentResourceTest extends TestCase
{
    /**
     * @test
     * @dataProvider studentProvider
     * @param $studentData
     */
    public function it_converts_student_model_to_array_as_expected($studentData)
    {
        $student = new Student($studentData);

        $studentResource = new StudentResource($student);

        $studentData['id'] = $student->getKey();

        $this->assertEquals(
            $studentData,
            $studentResource->toArray(null)
        );
    }

    public function studentProvider()
    {
        yield [
            'student' => [
                'name' => 'Gianluca Bine',
                'birthdate' => '26/08/1996',
                'grade' => '9',
                'postcode' => '85015310',
                'street' => 'Rua Dom Álvaro Nunes C. de Vaca',
                'number' => '286',
                'complement' => 'Casa',
                'neighborhood' => 'Batel',
                'city' => 'Guarapuava',
                'state' => 'PR',
                'mother_name' => 'Marlene Campos Bine',
                'mother_cpf' => '410.299.509-97',
                'preferred_day_for_monthly_payment' => '5'
            ]
        ];
    }
}
