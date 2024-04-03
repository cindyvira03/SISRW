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
        Schema::create('pengumuman_warga', function (Blueprint $table) {
            $table->id('pengumuman_id');
            $table->unsignedBigInteger('user_id')->index();
            $table->string('judul', 100);
            $table->string('isi_pengumuman', 200);
            $table->string('gambar', 200);
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengumuman_warga');
    }
};
