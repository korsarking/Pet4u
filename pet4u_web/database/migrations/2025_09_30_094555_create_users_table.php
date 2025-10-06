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
        Schema::create('users', function (Blueprint $table) { 
            $table->id('user_id'); 
            $table->string('username', 50)->unique(); 
            $table->string('organization_name', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->timestamps();
            $table->string('avatar_url', 255)->nullable();
            $table->text('bio')->nullable();
            $table->boolean('is_admin')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
