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
        Schema::create('surat_undangan', function (Blueprint $table) {
            $table->id('surat_undangan_id');
            $table->unsignedBigInteger('user_id')->index();
            $table->string('nomor_surat', 20);
            $table->string('perihal', 20);
            $table->string('isi_surat', 200);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_undangan');
    }
};
