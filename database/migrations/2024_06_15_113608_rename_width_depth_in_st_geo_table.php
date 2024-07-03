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
            $table->renameColumn('width', 'channel_width');
            $table->renameColumn('depth', 'channel_depth');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stream_geomorphologies', function (Blueprint $table) {
            $table->renameColumn('channel_width', 'width');
            $table->renameColumn('channel_depth', 'depth');
        });
    }
};
