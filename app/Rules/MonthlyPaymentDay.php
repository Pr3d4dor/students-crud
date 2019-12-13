<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MonthlyPaymentDay implements Rule
{
    const MONTHLY_PAYMENT_ALLOWED_DAYS = [5, 10, 15, 20, 25];

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $monthlyPaymentDay = (int) $value;

        return in_array($monthlyPaymentDay, self::MONTHLY_PAYMENT_ALLOWED_DAYS);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O campo :attribute precisa ser um dia de vencimento de mensalidade válido (5, 10, 15, 20 ou 25)';
    }
}
