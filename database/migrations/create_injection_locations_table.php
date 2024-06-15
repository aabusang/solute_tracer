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
        Schema::create('injection_locations', function (Blueprint $table) {
            $table->id();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->string('name', 80);
            $table->integer('injection_order');
            $table->foreignId('stream_hydrology_id')->constrained('stream_hydrologies');
            $table->foreignId('stream_characteristic_id')->constrained('stream_characteristics');
            $table->foreignId('stream_geomorphology_id')->constrained('stream_geomorphologies');
            $table->foreignId('injection_tracer_id')->constrained('injection_tracers');
            $table->foreignId('watershed_characteristic_id')->constrained('watershed_characteristics');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('injection_locations');
    }
};
