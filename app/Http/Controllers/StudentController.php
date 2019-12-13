<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * List students
     *
     * [List all the stored students in the database]
     *
     * @apiResourceCollection App\Http\Resources\StudentResource
     * @apiResourceModel App\Models\Student
     */
    public function index()
    {
        return StudentResource::collection(Student::all());
    }

    /**
     * Create a student
     *
     * [Store a new student in the database]
     *
     * @apiResource App\Http\Resources\StudentResource
     * @apiResourceModel App\Models\Student
     * @bodyParam name string required The name of the student (max: 100 characters). Example: Max Silva
     * @bodyParam birthdate string required The birthdate of the student (format: dd/mm/yyyy). Example: 26/08/1996
     * @bodyParam grade int required The grade of the student (integer between 1-9). Example: 5
     * @bodyParam postcode string required The postcode of the student address (max: 8 characters), must be a valid one. Example: 85015310
     * @bodyParam street string required The street address of the student (max: 120 characters). Example: Rua Dom Álvaro Nunes C. de Vaca
     * @bodyParam number int required The number of the student address. Example: 286
     * @bodyParam complement string The complement of the student address (max: 50 characters). Example: Casa
     * @bodyParam neighborhood string required The neighborhood of the student address (max: 100 characters). Example: Batel
     * @bodyParam city string required The city of the student address. Example: Guarapuava
     * @bodyParam state string required The state of the student address (must be a valid one and max: 2 characters). Example: PR
     * @bodyParam mother_name string required The name of the student mother. Example: Marlene Campos Bine
     * @bodyParam mother_cpf string required The name of the student mother. Example: 41029950997
     * @bodyParam preferred_day_for_monthly_payment string required The preferred day for the monthly payment ( must be: 5, 10, 15, 20 or 25). Example: 5
     */
    public function store(StoreStudentRequest $request)
    {
        $student = new Student($request->validated());

        $student->saveOrFail();

        return StudentResource::make($student);
    }

    /**
     * Show a student
     *
     * [Show a specific student by id from the database]
     *
     * @apiResourceCollection App\Http\Resources\StudentResource
     * @apiResourceModel App\Models\Student
     *
     * @urlParam id required The ID of the student.
     */
    public function show(Student $student)
    {
        return StudentResource::make($student);
    }

    /**
     * Update a student
     *
     * [Update a specific student by id in the database]
     *
     * @urlParam id required The ID of the student.
     * @apiResource App\Http\Resources\StudentResource
     * @apiResourceModel App\Models\Student
     *
     * @bodyParam name string The name of the student (max: 100 characters). Example: Max Silva
     * @bodyParam birthdate string The birthdate of the student (format: dd/mm/yyyy). Example: 26/08/1996
     * @bodyParam grade int The grade of the student (integer between 1-9). Example: 5
     * @bodyParam postcode string The postcode of the student address (max: 8 characters), must be a valid one. Example: 85015310
     * @bodyParam street string The street address of the student (max: 120 characters). Example: Rua Dom Álvaro Nunes C. de Vaca
     * @bodyParam number int The number of the student address. Example: 286
     * @bodyParam complement string The complement of the student address (max: 50 characters). Example: Casa
     * @bodyParam neighborhood string The neighborhood of the student address (max: 100 characters). Example: Batel
     * @bodyParam city string The city of the student address. Example: Guarapuava
     * @bodyParam state string The state of the student address (must be a valid one and max: 2 characters). Example: PR
     * @bodyParam mother_name string The name of the student mother. Example: Marlene Campos Bine
     * @bodyParam mother_cpf string The name of the student mother. Example: 41029950997
     * @bodyParam preferred_day_for_monthly_payment string The preferred day for the monthly payment ( must be: 5, 10, 15, 20 or 25). Example: 5
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        $student->saveOrFail();

        return StudentResource::make($student);
    }

    /**
     * Delete a student
     *
     * [Delete a specific student by id from the database]
     *
     * @apiResource App\Http\Resources\StudentResource
     * @apiResourceModel App\Models\Student
     * @urlParam id required The ID of the student.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return StudentResource::make($student);
    }
}
