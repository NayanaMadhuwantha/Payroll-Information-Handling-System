<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->text('description');
            $table->float('per_day_salary_rate');
            $table->float('epf_8_rate');
            $table->float('epf_12_rate');
            $table->float('etf_3_rate');
            $table->float('ot_rate');

            $table->float('attendance_allowance')->nullable();
            $table->float('basic_salary')->nullable();
            $table->float('maximum_advance')->nullable();
            $table->float('maximum_loan')->nullable();
            $table->float('salary_rate')->nullable();
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
        Schema::dropIfExists('grades');
    }
}
