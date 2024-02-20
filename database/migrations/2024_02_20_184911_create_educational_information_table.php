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
        Schema::create('educational_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->string('degree');
            $table->string('institution');
            $table->string('department');
            $table->string('passing_year');
            $table->string('gpa'); 
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('candidate_id')->references('id')->on('candidates')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educational_information');
    }
};
