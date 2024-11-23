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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
    $table->integer('rating')->unsigned();
    $table->text('comment')->nullable();
    $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
    $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');
    $table->enum('status', ['approved', 'pending', 'rejected'])->default('pending');
    $table->boolean('is_active')->default(true);
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
