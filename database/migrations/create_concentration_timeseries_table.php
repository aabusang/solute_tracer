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
        Schema::create('concentration_timeseries', function (Blueprint $table) {
            $table->id(); // primary key
            $table->string("sheet_name", 80);
            $table->string('date', 15)->nullable();
            $table->string('time', 15);
            $table->string('observed_concentration', 15);
            $table->string('conserved_concentration', 15);
            $table->string('discharged_adjusted_concentration', 15);
            $table->foreignId('injection_tracer_no')->constrained('injection_tracers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concentration_timeseries');
    }
};
