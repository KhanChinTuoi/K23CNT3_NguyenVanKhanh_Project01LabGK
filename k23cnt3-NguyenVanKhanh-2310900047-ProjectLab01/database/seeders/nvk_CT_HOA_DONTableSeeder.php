<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvk_CT_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvk_ct_hoa_don')->insert([
            'nvkHoaDonID'=>1,
            'nvkSanPhamID'=>1,
            'nvkSoLuongMua'=>5,
            'nvkDonGiaMua'=>599000,
            'nvkThanhTien'=>599000 * 5,
            'nvkTrangThai'=>0,
        ]);

        DB::table('nvk_ct_hoa_don')->insert([
            'nvkHoaDonID'=>2,
            'nvkSanPhamID'=>2,
            'nvkSoLuongMua'=>15,
            'nvkDonGiaMua'=>275000,
            'nvkThanhTien'=>275000 * 15,
            'nvkTrangThai'=>0,
        ]);

        DB::table('nvk_ct_hoa_don')->insert([
            'nvkHoaDonID'=>3,
            'nvkSanPhamID'=>5,
            'nvkSoLuongMua'=>5,
            'nvkDonGiaMua'=>727000,
            'nvkThanhTien'=>727000 *  5,
            'nvkTrangThai'=>0,
        ]);

        DB::table('nvk_ct_hoa_don')->insert([
            'nvkHoaDonID'=>4,
            'nvkSanPhamID'=>8,
            'nvkSoLuongMua'=>3,
            'nvkDonGiaMua'=>290000,
            'nvkThanhTien'=>290000 * 3,
            'nvkTrangThai'=>0,
        ]);
    }
    }

