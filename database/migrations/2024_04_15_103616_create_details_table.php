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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('producer');
            $table->text('description')->nullable();
            $table->decimal('min_price', 8, 2);
            $table->decimal('max_price', 8, 2);
            $table->integer('need');
            $table->integer('collected');
            $table->foreignId('link_to_detail_id')->nullable()->constrained()->restrictOnDelete()->restrictOnUpdate();
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
