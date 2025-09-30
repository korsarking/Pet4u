<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) { 
            $table->id('review_id'); 
            $table->foreignId('reviewer_id')->constrained('users', 'user_id')->cascadeOnDelete(); 
            $table->foreignId('reviewee_id')->constrained('users', 'user_id')->cascadeOnDelete(); 
            $table->integer('rating'); 
            $table->text('comment')->nullable(); 
            $table->timestamp('created_at')->useCurrent(); 
            
            $table->index('reviewer_id', 'idx_reviews_reviewer'); 
            $table->index('reviewee_id', 'idx_reviews_reviewee');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
