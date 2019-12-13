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
            'name' => 'sometimes|required|max:100',
            'birthdate' => 'sometimes|required|date_format:d/m/Y',
            'grade' => ['sometimes', 'required', Rule::in(self::GRADES)],
            'postcode' => 'sometimes|required|max:8',
            'street' => 'sometimes|required|max:120',
            'number' => 'sometimes|required|numeric',
            'complement' => 'sometimes|max:50',
            'neighborhood' => 'sometimes|required|max:100',
            'city' => 'sometimes|required',
            'state' => ['sometimes', 'required', new State()],
            'mother_name' => 'sometimes|required|max:100',
            'mother_cpf' => ['sometimes', 'required', new CPF()],
            'preferred_day_for_monthly_payment' => ['sometimes', 'required', new MonthlyPaymentDay()],
        ];
    }
}
