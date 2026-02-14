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
       Schema::create('programs', function (Blueprint $table) {
    $table->id(); // must be this
    $table->string('title');
    $table->text('description');
    $table->enum('type', ['weight_loss', 'weight_gain']);
    $table->integer('price')->nullable();
    $table->string('duration');
    $table->string('image')->nullable();
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
