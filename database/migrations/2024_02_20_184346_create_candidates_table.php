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
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('date_of_birth');
            $table->enum('blood_group', ['A+', 'A-',"B+","B-","AB+","AB-","O+","O-"])->nullable();
            $table->string('mobile_no');
            $table->string('emergency_contact_no');
            $table->string('address');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('linkedin_link');
            $table->string('facebook_link');
            $table->string('github_link');
            $table->string('behance_dribble_link')->nullable();
            $table->string('portfolio_website')->nullable();
            $table->string('image_url');
            $table->string('skills');
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
