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
        Schema::create('stream_hydrologies', function (Blueprint $table) {
            $table->id();
            $table->float('flow_rate')->nullable();
            $table->float('flow_velocity')->nullable();
            $table->float('shear_velocity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stream_hydrologies');
    }
};
