<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->date('date_of_birth');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('marital_status');
            $table->string('semester');
            $table->string('student_id')->unique();
            $table->unsignedBigInteger('department_id'); // Foreign key for department
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->string('gender');
            $table->string('blood_group');
            $table->string('nationality');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
