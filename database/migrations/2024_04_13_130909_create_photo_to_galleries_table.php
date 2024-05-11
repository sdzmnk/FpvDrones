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
        Schema::create('photo_to_galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gallery_id')->constrained()->restrictOnDelete()->restrictOnUpdate();
            $table->text('description')->nullable();
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_to_galleries');
    }
};
