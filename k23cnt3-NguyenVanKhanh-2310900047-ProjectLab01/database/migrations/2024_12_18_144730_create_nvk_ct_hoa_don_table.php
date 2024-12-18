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
        Schema::create('nvk_ct_hoa_don', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nvkHoaDonID')->references('id')->on('nvk_hoa_don');
            $table->bigInteger('nvkSanPhamID')->references('id')->on('nvk_san_pham');
            $table->integer('nvkSoLuongMua');
            $table->float('nvkDonGiaMua');
            $table->float('nvkThanhTien');
            $table->tinyInteger('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvk_ct_hoa_don');
    }
};
