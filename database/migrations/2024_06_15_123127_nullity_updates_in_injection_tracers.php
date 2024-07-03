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
        Schema::table('injection_tracers', function (Blueprint $table) {
            $table->double('tracer_mass')->nullable()->change();
            $table->double('concentration')->nullable()->change();
            $table->double('bg_concentration')->nullable()->change();
            $table->double('inj_duration')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('injection_tracers', function (Blueprint $table) {
            $table->double('tracer_mass')->nullable(false)->change();
            $table->double('concentration')->nullable(false)->change();
            $table->double('bg_concentration')->nullable(false)->change();
            $table->double('inj_duration')->nullable(false)->change();
        });
    }
};
