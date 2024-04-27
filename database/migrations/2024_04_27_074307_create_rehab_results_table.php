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
        Schema::create('rehab_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rehab_id');
            $table->string('sudut');
            $table->string('tekanan_depan');
            $table->string('tekanan_belakang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rehab_results');
    }
};
