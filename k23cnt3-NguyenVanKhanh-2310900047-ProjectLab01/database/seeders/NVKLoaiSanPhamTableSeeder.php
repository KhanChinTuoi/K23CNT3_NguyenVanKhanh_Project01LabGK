<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NVKLoaiSanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvk_loai_san_pham')->insert([
            'nvkMaLoai'=> "L001",
            'nvkTenLoai'=>"Sách nói phiêu lưu",
            'nvkTrangThai'=>0
        ]);
        DB::table('nvk_loai_san_pham')->insert([
            'nvkMaLoai'=> "L002",
            'nvkTenLoai'=>"Sách nói lãng mạn",
            'nvkTrangThai'=>0
        ]);
        DB::table('nvk_loai_san_pham')->insert([
            'nvkMaLoai'=> "L003",
            'nvkTenLoai'=>"Sách nói triết lý",
            'nvkTrangThai'=>0
        ]);
        DB::table('nvk_loai_san_pham')->insert([
            'nvkMaLoai'=> "L004",
            'nvkTenLoai'=>"Sách nói giải pháp",
            'nvkTrangThai'=>0
        ]);
    }
}
