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
        Schema::create('stream_characteristics', function (Blueprint $table) {
            $table->id();
            $table->string('ph')->nullable();
            $table->string('dissolved_solute')->nullable();
            $table->string('vegetation')->nullable();
            $table->string('temperature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stream_characteristics');
    }
};
