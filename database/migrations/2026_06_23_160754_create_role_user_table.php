<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('role_user', function (Blueprint $table) {
       
        $table->id();
        $table->unsignedBigInteger('course_id')->nullable();
        $table->unsignedBigInteger('teacher_id')->nullable();
        $table->foreign('course_id')
              ->references('id')
              ->on('courses')
              ->onDelete('cascade');

        $table->foreign('teacher_id')
              ->references('id')
              ->on('teacher')
              ->onDelete('cascade');

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};
