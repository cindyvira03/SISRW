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
        Schema::create('warga', function (Blueprint $table) {
            $table->id('warga_id');
            $table->unsignedBigInteger('nik')->unique();
            $table->unsignedBigInteger('kk_id')->index();
            $table->string('nama_warga', 100);
            $table->string('tempat_tgl_lahir', 100);
            $table->string('hubungan_keluarga', 100);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('rt_rw', 10);
            $table->string('kel_desa', 50);
            $table->string('kecamatan', 50);
            $table->string('agama', 20);
            $table->string('status_perkawinan', 50);
            $table->string('pekerjaan', 50);
            $table->enum('status_warga', ['menetap', 'sementara', 'pindah', 'meninggal']);
            $table->timestamps();

            $table->foreign('kk_id')->references('kk_id')->on('kk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warga');
    }
};
