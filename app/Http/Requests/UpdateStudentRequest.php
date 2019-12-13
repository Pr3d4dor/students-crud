<?php

namespace App\Http\Requests;

use App\Rules\CPF;
use App\Rules\MonthlyPaymentDay;
use App\Rules\State;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
{
    const GRADES = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'birthdate' => 'required|date',
            'grade' => ['required', Rule::in(self::GRADES)],
            'postcode' => 'required|max:8',
            'street' => 'required|max:120',
            'number' => 'required|numeric',
            'complement' => 'max:50',
            'neighborhood' => 'required|max:100',
            'city' => 'required',
            'state' => ['required', new State()],
            'mother_name' => 'required|max:100',
            'mother_cpf' => ['required', new CPF()],
            'preferred_day_for_monthly_payment' => ['required', new MonthlyPaymentDay()],
        ];
    }
}
