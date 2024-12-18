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
        Schema::create('nvk_hoa_don', function (Blueprint $table) {
            $table->id();
            $table->string('nvkMaHoaDon',255)->unique();
            $table->bigInteger('nvkMaKhachHang')->references('id')->on('nvk_khach_hang');
            $table->dateTime('nvkNgayHoaDon');
            $table->dateTime('nvkNgayNhan');
            $table->string('nvkHoTenKhachHang',255);
            $table->string('nvkEmail',255);
            $table->string('nvkDienThoai',255);
            $table->string('nvkDiaChi',255);
            $table->float('nvkTongTriGia');
            $table->tinyInteger('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvk_hoa_don');
    }
};
