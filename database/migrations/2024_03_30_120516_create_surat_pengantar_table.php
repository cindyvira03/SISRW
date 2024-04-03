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
        Schema::create('surat_pengantar', function (Blueprint $table) {
            $table->id('surat_pengantar_id');
            $table->unsignedBigInteger('warga_id')->index();
            $table->string('nomor_surat', 20);
            $table->string('keperluan', 100);
            $table->timestamps();

            $table->foreign('warga_id')->references('warga_id')->on('warga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_pengantar');
    }
};
