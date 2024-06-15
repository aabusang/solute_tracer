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
        Schema::create('stream_geomorphologies', function (Blueprint $table) {
            $table->id();
            $table->float('bed_slope')->nullable();
            $table->float('width')->nullable();
            $table->float('depth')->nullable();
            $table->float('cross_sectional_area')->nullable();
            $table->float('bed_material')->nullable();
            $table->float('bed_mat_thickness')->nullable();
            $table->float('mannings_n')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stream_geomorphologies');
    }
};
