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
        Schema::table('nvk_ct_hoa_don', function (Blueprint $table) {
            $table->double('nvkThanhTien', 15, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nvk_ct_hoa_don', function (Blueprint $table) {
            $table->float('nvkThanhTien')->change();
        });
    }
};
