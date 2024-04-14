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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('car_id');
            $table->foreign('car_id')->references('id')->on('cars');

            $table->unsignedBigInteger('address_pickup');
            $table->foreign('address_pickup')->references('id')->on('places');
           
            $table->unsignedBigInteger('address_dropoff');
            $table->foreign('address_dropoff')->references('id')->on('places');


            $table->dateTime('time_pickup');
            $table->dateTime('time_dropoff');

            $table->string('name');
            $table->string('email');
            $table->string('phone');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
