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
        Schema::create('favorites', function (Blueprint $table) { 
            $table->foreignId('user_id')->constrained('users', 'user_id')->cascadeOnDelete(); 
            $table->foreignId('pet_id')->constrained('pets', 'pet_id')->cascadeOnDelete(); 
            $table->timestamp('added_at')->useCurrent(); 
            $table->primary(['user_id', 'pet_id']); 
            
            $table->index('user_id', 'idx_favorites_user'); 
            $table->index('pet_id', 'idx_favorites_pet');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
