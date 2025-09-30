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
        Schema::create('pets', function (Blueprint $table) { 
            $table->id('pet_id'); 
            $table->foreignId('owner_id')->constrained('users', 'user_id')->cascadeOnDelete(); 
            $table->foreignId('category_id')->nullable()->constrained('categories', 'category_id')->nullOnDelete(); 
            $table->string('name', 100); 
            $table->string('species', 50); 
            $table->string('breed', 100)->nullable(); 
            $table->integer('age')->nullable(); 
            $table->string('image_url', 255)->nullable(); 
            $table->text('description')->nullable();
            $table->timestamps(); 

            $table->index('owner_id', 'idx_pets_owner'); 
            $table->index('category_id', 'idx_pets_category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
