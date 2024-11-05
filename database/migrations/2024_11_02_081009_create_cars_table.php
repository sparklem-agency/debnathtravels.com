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
            $table->text('description'); // Changed to text to allow for longer descriptions
            $table->string('type')->nullable(); // Optional: Car type (e.g., SUV, sedan)
            $table->integer('seats')->nullable(); // Optional: Number of seats
            $table->decimal('price', 10, 2)->nullable(); // Optional: Price with two decimal places
            $table->string('fuel')->nullable(); // Optional: Fuel type (e.g., gas, diesel)
            $table->integer('order')->nullable()->default(0); // Optional: Order or display priority
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
