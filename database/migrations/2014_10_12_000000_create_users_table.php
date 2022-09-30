<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username',30);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('position',30);
            $table->string('etf_epf_number',30)->nullable();
            $table->string('full_name',50)->nullable();
            $table->string('name_with_initials',30)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('contact',30)->nullable();
            $table->string('address',100)->nullable();
            $table->string('nic_number',30)->nullable();
            $table->string('gender',10);
            $table->date('date_hired')->nullable();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->float('basic_salary')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('grade_id')->references('id')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
