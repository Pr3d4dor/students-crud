<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'birthdate',
        'grade',
        'postcode',
        'street',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state',
        'mother_name',
        'mother_cpf',
        'preferred_day_for_monthly_payment'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function setBirthdateAttribute($value)
    {
        $this->attributes['birthdate'] = Carbon::createFromFormat('d/m/Y', $value);
    }

    public function getBirthdateAttribute()
    {
        $birthdate = $this->attributes['birthdate'];

        if (is_null($birthdate)) {
            return $birthdate;
        }

        if (is_string($birthdate)) {
            $birthdate = Carbon::createFromFormat('Y-m-d H:i:s', $birthdate);

            return $birthdate->format('d/m/Y');
        }

        return $this->attributes['birthdate']->format('d/m/Y');
    }
}
