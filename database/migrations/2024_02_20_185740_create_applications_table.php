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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('candidate_id');
            $table->enum('status', ['applied', 'withdrawn'])->default('applied');
            $table->string('cover_letter');
            $table->string('resume');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('job_id')->references('id')->on('jobs')->restrictOnDelete();
            $table->foreign('candidate_id')->references('id')->on('candidates')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
