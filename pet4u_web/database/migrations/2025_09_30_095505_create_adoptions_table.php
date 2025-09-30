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
        Schema::create('adoptions', function (Blueprint $table) {
            $table->id('adoption_id'); 
            $table->foreignId('pet_id')->constrained('pets', 'pet_id')->cascadeOnDelete(); 
            $table->foreignId('adopter_id')->constrained('users', 'user_id')->cascadeOnDelete(); 
            $table->timestamp('adoption_date')->useCurrent(); 
            $table->enum('status', ['pending', 'adopted', 'awaiting'])->default('pending'); 
            
            $table->index('pet_id', 'idx_adoptions_pet'); 
            $table->index('adopter_id', 'idx_adoptions_adopter');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoptions');
    }
};
