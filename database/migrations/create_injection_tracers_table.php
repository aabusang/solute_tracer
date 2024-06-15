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
        Schema::create('injection_tracers', function (Blueprint $table) {
            $table->id();
            $table->float('mass_ex_co')->nullable();
            $table->float('tracer_mass');
            $table->float('concentration');
            $table->float('bg_concentration');
            $table->float('inj_duration');
            $table->string('type', 80);
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->date('date')->nullable();
            $table->string('note', 80)->nullable();
            $table->string('monitor_method', 80)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iinjection_tracers');
    }
};
