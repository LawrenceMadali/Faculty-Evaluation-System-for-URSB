<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_year_id')->constrained();
            $table->foreignId('semester_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('course_name_id')->constrained();
            $table->foreignId('subject_code_id')->constrained();
            $table->foreignId('year_and_section_id')->constrained();

            // $table->string('school_year');
            // $table->string('semester');
            // $table->string('instructor');
            // $table->string('course_name');
            // $table->string('subject_code');
            // $table->string('year_and_section');
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
        Schema::dropIfExists('spes');
    }
}