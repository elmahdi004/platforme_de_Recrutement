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
        Schema::create('education_and_experiences', function (Blueprint $table) {
            $table->id();
            $table->timestamp('from')->nullable();
            $table->timestamp('to')->nullable();
            $table->text('description');
            $table->string('company');
            $table->string('type');
            $table->foreignId('candidate_id')->constrained('candidates')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education_and_experiences');
    }
};
