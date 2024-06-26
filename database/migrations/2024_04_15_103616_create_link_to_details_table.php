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
        Schema::create('link_to_details', function (Blueprint $table) {
            $table->id();
            $table->text('link');
            $table->text('description')->nullable();
            $table->boolean('not_active')->default(false);
            $table->foreignId('detail_id')->nullable()->default(null)->nullable()->constrained()->restrictOnDelete()->restrictOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link_to_details');
    }
};
