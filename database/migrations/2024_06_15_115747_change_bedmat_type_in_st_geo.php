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
        Schema::table('stream_geomorphologies', function (Blueprint $table) {
            $table->string('bed_material', 255)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stream_geomorphologies', function (Blueprint $table) {
            $table->double('bed_material', 100)->change();
        });
    }
};
