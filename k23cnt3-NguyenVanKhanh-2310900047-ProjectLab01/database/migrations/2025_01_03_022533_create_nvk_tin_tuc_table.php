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
        Schema::create('nvk_tin_tuc', function (Blueprint $table) {
            $table->id();
            $table->string('nvkMaTT')->unique(); // Assuming 'nvkMaTT' is unique, add unique constraint if needed
            $table->string('nvkTieuDe');
            $table->text('nvkMoTa'); // 'text' type is better for longer descriptions
            $table->longText('nvkNoiDung'); // 'longText' for potentially larger content
            $table->dateTime('nvkNgayDangTin'); // Store as datetime
            $table->dateTime('nvkNgayCapNhat'); // Store as datetime
            $table->string('nvkHinhAnh');
            $table->tinyInteger('nvkTrangThai'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvk_tin_tuc');
    }
};
