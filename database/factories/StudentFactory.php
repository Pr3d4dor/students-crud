<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'birthdate' => $faker->date('d/m/Y'),
        'grade' => $faker->numberBetween(1, 9),
        'postcode' => '85015310',
        'street' => $faker->streetAddress,
        'number' => $faker->numberBetween(1000, 2000),
        'complement' => $faker->word(),
        'neighborhood' => $faker->word(),
        'city' => $faker->word(),
        'state' => 'PR',
        'mother_name' => $faker->name(),
        'mother_cpf' => '088.463.559-70',
        'preferred_day_for_monthly_payment' => '5'
    ];
});
