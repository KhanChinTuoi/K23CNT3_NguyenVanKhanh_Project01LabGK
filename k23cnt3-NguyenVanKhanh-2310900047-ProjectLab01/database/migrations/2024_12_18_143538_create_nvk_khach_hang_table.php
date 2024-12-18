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
        Schema::create('nvk_khach_hang', function (Blueprint $table) {
            $table->id();
            $table->string('nvkMaKhachHang',255)->unique();
            $table->string('nvkHoTenKhachHang',255);
            $table->string('nvkEmail',255);
            $table->string('nvkMatKhau',255);
            $table->string('nvkDienThoai',255);
            $table->string('nvkDiaChi',255);
            $table->dateTime('nvkNgayDangKy');
            $table->tinyInteger('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvk_khach_hang');
    }
};
