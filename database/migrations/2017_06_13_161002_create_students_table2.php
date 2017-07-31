<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->integer('student_user_id_fkey');
            $table->string('student_name');
            $table->string('student_email');
            $table->integer('student_adviser')->default(0);
            $table->integer('student_supervisor')->default(0);
            $table->string('student_cell');
            $table->string('student_guardian_name');
            $table->string('student_guardian_email');
            $table->string('student_guardian_cell');
            $table->string('student_present_address');
            $table->string('student_permanent_address');
            $table->string('student_achievement');
            $table->integer('student_approved')->default(0);
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
        Schema::drop('students');
    }
}
