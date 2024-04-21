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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mark');
            $table->decimal('price', 10, 2);
            $table->integer('doors');
            $table->integer('passengers');
            $table->integer('luggage');
            $table->enum('transmission', ['manual', 'automatic']);
            $table->string('air_conditioning');
            $table->integer('minimum_age');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
