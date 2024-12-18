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
        Schema::create('nvk_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('nvkMaSanPham',255)->unique();
            $table->string('nvkTenSanPham',255);
            $table->string('nvkHinhAnh',255);
            $table->integer('nvkSoLuong');
            $table->float('nvkDonGia');
            $table->bigInteger('nvkMaLoai')->references('id')->on('nvk_loai_san_pham');
            $table->tinyInteger('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvk_san_pham');
    }
};
