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
        Schema::create('uploaded_data', function (Blueprint $table) {
            $table->id();
            $table->string('units', 80);
            $table->float('river_order')->nullable();
            $table->string('tracer_type', 80);
            $table->string('notes', 80);
            $table->string('file_path', 80);
            $table->string('status', 80)->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uploaded_data');
    }
};
