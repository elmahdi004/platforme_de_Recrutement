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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('gender');
            $table->string('min_salary');
            $table->string('max_salary');
            $table->string('salaryType');
            $table->string('experience');
            $table->timestamp('deadline')->nullable();
            $table->string('degree');
            $table->string('career_level');
            $table->string('job_type');
            $table->string('skills_and_experiences');
            $table->string('location');
            $table->foreignId('employer_id')->constrained('employers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
