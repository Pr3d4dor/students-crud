<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
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
        'birthday' => 'date',
    ];
}
