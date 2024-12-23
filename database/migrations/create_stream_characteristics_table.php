<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DissolvedSoluteToDissolvedSolids extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stream_characteristics', function (Blueprint $table) {
            $table->renameColumn('dissolved_solute', 'tot_dissolved_solids');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('stream_characteristics', function (Blueprint $table) {
            $table->renameColumn('tot_dissolved_solids', 'dissolved_solute')->nullable();
        });
    }
}
