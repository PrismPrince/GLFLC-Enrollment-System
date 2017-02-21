<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level_id')->unsigned();
            $table->integer('schoolyear_id')->unsigned();
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname');
            $table->string('sex');
            $table->string('bdate');
            $table->string('bplace');
            $table->string('address');
            $table->string('contactno')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('citizenship');
            $table->string('civilstatus');
            $table->string('religion')->nullable();
            $table->string('father_fname')->nullable();
            $table->string('father_mname')->nullable();
            $table->string('father_lname')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('father_contactno')->nullable();
            $table->string('mother_fname')->nullable();
            $table->string('mother_mname')->nullable();
            $table->string('mother_lname')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('mother_contactno')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
