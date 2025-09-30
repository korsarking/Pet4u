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
        Schema::create('messages', function (Blueprint $table) { 
            $table->id('message_id'); 
            $table->foreignId('parent_message_id')->nullable()->constrained('messages', 'message_id')->cascadeOnDelete(); 
            $table->foreignId('sender_id')->constrained('users', 'user_id')->cascadeOnDelete(); 
            $table->foreignId('receiver_id')->constrained('users', 'user_id')->cascadeOnDelete(); 
            $table->text('content'); 
            $table->timestamp('sent_at')->useCurrent(); 
            $table->boolean('is_read')->default(false); 
            $table->string('image_url', 255)->nullable(); 
            
            $table->index('sender_id', 'idx_messages_sender'); 
            $table->index('receiver_id', 'idx_messages_receiver');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
