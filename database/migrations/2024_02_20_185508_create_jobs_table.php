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
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('job_category_id');
            $table->string('title');
            $table->string('description');
            $table->string('requirements');
            $table->string('experience')->default("Intern");
            $table->string('vacancy')->default(0);
            $table->string('skills');
            $table->enum('employmentstatus',['full_time','part_time','junior','senior','internship']);
            $table->string('salary');
            $table->string('location');
            $table->date('deadline');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('company_id')->references('id')->on('companies')->restrictOnDelete();
            $table->foreign('job_category_id')->references('id')->on('job_categories')->restrictOnDelete();
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
