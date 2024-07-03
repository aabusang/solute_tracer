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
        Schema::table('concentration_timeseries', function (Blueprint $table) {
            // make time, obs_concentration, and obs_concentration_sd text fields
            $table->text('time')->change();
            $table->text('observed_concentration')->change();
            $table->text('conserved_concentration')->change();
            $table->text('discharged_adjusted_concentration')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('concentration_timeseries', function (Blueprint $table) {
            // make time, obs_concentration, and obs_concentration_sd text fields
            $table->string('time')->change();
            $table->string('observed_concentration')->change();
            $table->string('conserved_concentration')->change();
            $table->string('discharged_adjusted_concentration')->change();
        });
    }
};
