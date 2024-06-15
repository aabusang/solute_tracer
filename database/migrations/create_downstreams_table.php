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
        Schema::create('downstreams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sampling_location_no')->constrained('sampling_locations');
            $table->foreignId('injection_location_no')->constrained('injection_locations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('downstreams');
    }
};
