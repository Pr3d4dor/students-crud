<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'birthdate' => $this->birthdate,
            'grade' => (int) $this->grade,
            'postcode' => $this->postcode,
            'street' => $this->street,
            'number' => (int) $this->number,
            'complement' => $this->complement,
            'neighborhood' => $this->neighborhood,
            'city' => $this->city,
            'state' => $this->state,
            'mother_name' => $this->mother_name,
            'mother_cpf' => $this->mother_cpf,
            'preferred_day_for_monthly_payment' => $this->preferred_day_for_monthly_payment,
        ];
    }
}
