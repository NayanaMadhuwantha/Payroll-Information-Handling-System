<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deductions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('deduction_type_id');
            $table->date('date');
            $table->string('reason',200)->nullable();
            $table->integer('number_of_leaves')->nullable();
            $table->integer('number_of_absents')->nullable();
            $table->float('rate')->nullable();
            $table->integer('month');
            $table->integer('number_of_dates');
            $table->float('per_amount');
            $table->float('full_amount');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('deduction_type_id')->references('id')->on('deduction_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deductions');
    }
}
