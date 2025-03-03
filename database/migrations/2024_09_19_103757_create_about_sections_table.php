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
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  
            $table->string('title')->nullable();
            $table->text('bio')->nullable();
            $table->dateTime('birthday')->nullable();       
            $table->text('phone')->nullable();       
            $table->string('address')->nullable();      
            $table->string('languages')->nullable();    
            $table->enum('freelance',['Available for freelance','Not Available']); 
            $table->string('cv_url')->nullable();  
            $table->string('image_url')->nullable();  
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
