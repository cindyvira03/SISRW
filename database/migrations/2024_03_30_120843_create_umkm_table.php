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
        Schema::create('umkm', function (Blueprint $table) {
            $table->id('umkm_id');
            $table->unsignedBigInteger('warga_id')->index();
            $table->string('nama_usaha', 20);
            $table->string('alamat_usaha', 50);
            $table->string('jenis_usaha', 10);
            $table->enum('status_usaha', ['Aktif', 'Nonaktif']);
            $table->string('deskripsi', 200);
            $table->string('lampiran', 200);
            $table->timestamps();

            $table->foreign('warga_id')->references('warga_id')->on('warga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};
