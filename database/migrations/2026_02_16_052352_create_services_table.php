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
       Schema::create('services', function (Blueprint $table) {
    $table->id();

    $table->string('title');

    $table->string('short_description')->nullable();   // Short text for cards

    $table->text('description'); // Full description

    $table->string('icon')->nullable();

    $table->string('image_one')->nullable();   // First image
    $table->string('image_two')->nullable();   // Second image

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
