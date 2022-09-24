<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllowancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allowances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('allowance_type_id');
            $table->integer('month');
            $table->float('number_of_leaves')->nullable();
            $table->float('allowance_amount');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('allowance_type_id')->references('id')->on('allowance_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allowances');
    }
}
