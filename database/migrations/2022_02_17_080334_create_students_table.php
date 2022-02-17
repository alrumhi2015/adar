<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('civil_number')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('email')->unique();
            $table->string('student_photo_path')->nullable();
            $table->string('student_passport_path')->nullable();
            $table->string('student_id_path')->nullable();
            $table->rememberToken();
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
