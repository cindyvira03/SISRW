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
        Schema::create('syarat_bansos', function (Blueprint $table) {
            $table->id('syarat_bansos_id');
            $table->unsignedBigInteger('bansos_id')->index();
            $table->date('tgl_syarat_ketentuan');
            $table->string('jenis_bansos', 50);
            $table->string('deskripsi', 200);
            $table->string('gambar', 200);
            $table->timestamps();

            $table->foreign('bansos_id')->references('bansos_id')->on('penerima_bansos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syarat_bansos');
    }
};
