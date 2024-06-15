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
        Schema::create('sampling_locations', function (Blueprint $table) {
            $table->id();
            $table->float('sampling_latitude')->nullable();
            $table->float('sampling_longitude')->nullable();
            $table->integer('sampling_order');
            $table->foreignId('stream_hydrology_id')->constrained('stream_hydrologies');
            $table->foreignId('stream_characteristic_id')->constrained('stream_characteristics');
            $table->foreignId('stream_geomorphology_id')->constrained('stream_geomorphologies');
            $table->string('sheet_name', 80)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sampling_locations');
    }
};
