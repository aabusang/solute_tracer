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
            // make time, observed_concentration, conserved_concentration, discharged_adjusted_concentration, and discharged_concentration nullable 
            $table->text('time')->nullable()->change();
            $table->text('observed_concentration')->nullable()->change();
            $table->text('conserved_concentration')->nullable()->change();
            $table->text('discharged_adjusted_concentration')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('concentration_timeseries', function (Blueprint $table) {
            //
            $table->text('time')->nullable(false)->change();
            $table->text('observed_concentration')->nullable(false)->change();
            $table->text('conserved_concentration')->nullable(false)->change();
            $table->text('discharged_adjusted_concentration')->nullable(false)->change();
            
        });
    }
};
