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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('date_of_birth');
            $table->enum('blood_group', ['A+', 'A-',"B+","B-","AB+","AB-","O+","O-"])->nullable();
            $table->string('social_id')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('mobile_no');
            $table->string('emergency_contact_no');
            $table->string('address');
            $table->string('email');
            $table->string('whatsapp')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('behance_dribble_link')->nullable();
            $table->string('portfolio_website')->nullable();
            $table->string('resume')->nullable();
            $table->string('image_url')->nullable();
            $table->string('skills')->nullable();
            $table->string('expected_salary')->nullable();
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
