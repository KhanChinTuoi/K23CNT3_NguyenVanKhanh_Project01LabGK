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
            'nvkTenLoai'=>"Cây cảnh văn phòng",
            'nvkTrangThai'=>0
        ]);
        DB::table('nvk_loai_san_pham')->insert([
            'nvkMaLoai'=> "L002",
            'nvkTenLoai'=>"Cây để bàn",
            'nvkTrangThai'=>0
        ]);
        DB::table('nvk_loai_san_pham')->insert([
            'nvkMaLoai'=> "L003",
            'nvkTenLoai'=>"Cây cảnh phong thủy",
            'nvkTrangThai'=>0
        ]);
        DB::table('nvk_loai_san_pham')->insert([
            'nvkMaLoai'=> "L004",
            'nvkTenLoai'=>"Cây thủy canh",
            'nvkTrangThai'=>0
        ]);
    }
}
