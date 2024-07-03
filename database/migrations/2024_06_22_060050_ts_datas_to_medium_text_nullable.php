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
            $table->mediumText('observed_concentration')->nullable()->change();
            $table->mediumText('conserved_concentration')->nullable()->change();
            $table->mediumText('discharged_adjusted_concentration')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('concentration_timeseries', function (Blueprint $table) {
            $table->text('observed_concentration')->nullable()->change();
            $table->text('conserved_concentration')->nullable()->change();
            $table->text('discharged_adjusted_concentration')->nullable()->change();
        });
    }
};
