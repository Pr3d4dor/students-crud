<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
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

    const GRADES = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    const MONTHLY_PAYMENT_ALLOWED_DAYS = [5, 10, 15, 20, 25];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->date('birthdate');
            $table->enum('grade', self::GRADES);
            $table->string('postcode', 8);
            $table->string('street', 120);
            $table->integer('number', false, true);
            $table->string('complement', 50);
            $table->string('neighborhood', 100);
            $table->string('city');
            $table->enum('state', self::BRAZIL_STATES);
            $table->string('mother_name', 100);
            $table->string('mother_cpf', 11);
            $table->enum('preferred_day_for_monthly_payment', self::MONTHLY_PAYMENT_ALLOWED_DAYS);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
