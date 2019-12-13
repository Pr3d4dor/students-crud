<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function it_can_create_a_student()
    {
        $data = [
            'name' => 'Gianluca Bine',
            'birthdate' => '26/08/1996',
            'grade' => '9',
            'postcode' => '85015310',
            'street' => 'Rua Dom Álvaro Nunes Cabeza de Vaca',
            'number' => '286',
            'complement' => 'Casa',
            'neighborhood' => 'Batel',
            'city' => 'Guarapuava',
            'state' => 'PR',
            'mother_name' => 'Marlene Campos Bine',
            'mother_cpf' => '410.299.509-97',
            'preferred_day_for_monthly_payment' => '25'
        ];

        $this
            ->post(route('api.students.store'), $data)
            ->assertStatus(201)
            ->assertJson([
                'data' => $data
            ]);
    }

    /** @test */
    public function it_can_update_a_student()
    {
        $student = factory(Student::class)->create();

        $data = [
            'name' => 'New name',
        ];

        $this
            ->put(route('api.students.update', $student->id), $data)
            ->assertStatus(200)
            ->assertJson([
                'data' => $data
            ]);
    }

    /** @test */
    public function it_can_show_a_student()
    {
        $student = factory(Student::class)->create();

        $this
            ->get(route('api.students.show', $student->id))
            ->assertStatus(200);
    }

    /** @test */
    public function it_can_delete_a_student()
    {
        $student = factory(Student::class)->create();

        $this
            ->delete(route('api.students.destroy', $student->id))
            ->assertStatus(200);
    }

    /** @test */
    public function it_can_list_all_students()
    {
        $students = factory(Student::class, 2)->create();

        $this
            ->get(route('api.students.index'))
            ->assertStatus(200)
            ->assertJson([
                'data' => $students->toArray(),
            ]);
    }
}
