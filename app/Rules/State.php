<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class State implements Rule
{
    const BRAZIL_STATES = [
        'AC',
        'AL',
        'AP',
        'AM',
        'BA',
        'CE',
        'DF',
        'ES',
        'GO',
        'MA',
        'MT',
        'MS',
        'MG',
        'PA',
        'PB',
        'PR',
        'PE',
        'PI',
        'RJ',
        'RN',
        'RS',
        'RO',
        'RR',
        'SC',
        'SP',
        'SE',
        'TO'
    ];

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $state = preg_replace('/[^A-Za-z0-9\-]/', '', (string) $value);

        if (strlen($state) > 2) {
            return false;
        }

        return in_array($value, self::BRAZIL_STATES);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O campo :attribute precisa ser uma UF válida. Ex: PR, SC, etc.';
    }
}
