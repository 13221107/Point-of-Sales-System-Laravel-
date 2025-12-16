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
        Schema::create('logs', function (Blueprint $table) {
            $table->id('logID');
            $table->string('ActionType'); // e.g., 'created', 'updated', 'deleted'
            $table->unsignedBigInteger('entityID'); // ID of the entity (product, transaction, etc.)
            $table->timestamp('timestamp')->useCurrent();
            $table->string('entityType'); // e.g., 'product', 'transaction', 'user'
            $table->text('details')->nullable(); // JSON or text description of changes
            $table->unsignedBigInteger('userID'); // FK to users table
            
            // Foreign key constraint
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            
            // Indexes for better query performance
            $table->index('entityType');
            $table->index('ActionType');
            $table->index('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};