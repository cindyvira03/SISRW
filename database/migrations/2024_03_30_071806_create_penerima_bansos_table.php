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
        Schema::create('penerima_bansos', function (Blueprint $table) {
            $table->id('bansos_id');
            $table->unsignedBigInteger('kk_id')->index();
            $table->string('jenis_bansos', 50);
            $table->timestamps();

            $table->foreign('kk_id')->references('kk_id')->on('kk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penerima_bansos');
    }
};
