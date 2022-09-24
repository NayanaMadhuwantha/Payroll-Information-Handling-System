<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->float('attendance_allowance');
            $table->float('other_allowance');
            $table->float('normal_ot');
            $table->float('double_ot');
            $table->float('epf_8');
            $table->float('epf_12');
            $table->float('etf_3');
            $table->float('no_pay');
            $table->float('other_deductions');
            $table->float('welfare');
            $table->float('basic');
            $table->float('epf_gross');
            $table->float('gross_wage');
            $table->float('net_salary');
            $table->float('total_salary');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
