<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('make');
            $table->string('model');
            $table->string('year');
            $table->string('color');
            $table->string('mileage');
            $table->string('transmission');
            $table->string('fuel'); 
            $table->string('rentalprice');
            $table->string('Airconditions')->nullable();
            $table->string('ChildSeat')->nullable();
            $table->string('GPS')->nullable();
            $table->string('Luggage')->nullable();
            $table->string('Music')->nullable();
            $table->string('SeatBelt')->nullable();
            $table->string('SleepingBed')->nullable(); 
            $table->string('Water')->nullable();
            $table->string('Bluetooth')->nullable();
            $table->string('OnboardComputers')->nullable();
            $table->string('AudioInput')->nullable();
            $table->string('LongTermTrips')->nullable();
            $table->string('CarKit')->nullable();
            $table->string('RemoteCentralLocking')->nullable();
            $table->string('ClimateControl')->nullable();
            $table->string('description');
            $table->string('image');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
