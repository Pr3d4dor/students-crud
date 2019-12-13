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

    public function setBirthdateAttribute($value)
    {
        $this->attributes['birthdate'] = Carbon::createFromFormat('d/m/Y', $value);
    }

    public function getBirthdateAttribute()
    {
        return $this->attributes['birthdate']->format('d/m/Y');
    }
}
