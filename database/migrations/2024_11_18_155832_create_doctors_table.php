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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->text('about')->nullable();
            $table->text('work_experience')->nullable();
            $table->integer('year_experience')->unsigned();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->text('available_time')->nullable();
            $table->string('profile_img')->nullable();
            $table->string('specialization');
            $table->foreignId('specialization_id')->constrained('specialization')->onDelete('cascade');
            $table->string('email')->unique();
            $table->string('pass');
            $table->decimal('rating', 3, 2)->default(0); // Max: 999.99
            $table->string('phone');
            $table->boolean('is_admin_added')->default(true);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
