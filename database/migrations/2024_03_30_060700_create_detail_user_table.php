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
        Schema::create('detail_user', function (Blueprint $table) {
            $table->id('detail_user_id');
            $table->unsignedBigInteger('level_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->timestamps();

            $table->foreign('level_id')->references('level_id')->on('level');
            $table->foreign('user_id')->references('user_id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_user');
    }
};
