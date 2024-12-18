<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NVKSanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "VP001",
            'nvkTenSanPham'=> "Cây phú quý",
            'nvkHinhAnh'=>"images/san-pham/VP001.jpg",
            'nvkSoLuong'=>100,
            'nvkDonGia'=>699000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "VP002",
            'nvkTenSanPham'=> "Cây đại phú gia",
            'nvkHinhAnh'=>"images/san-pham/VP002.jpg",
            'nvkSoLuong'=>200,
            'nvkDonGia'=>550000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "VP003",
            'nvkTenSanPham'=> "Cây hạnh phúc",
            'nvkHinhAnh'=>"images/san-pham/VP003.jpg",
            'nvkSoLuong'=>150,
            'nvkDonGia'=>250000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "VP004",
            'nvkTenSanPham'=> "Cây vạn lộc",
            'nvkHinhAnh'=>"images/san-pham/VP004.jpg",
            'nvkSoLuong'=>300,
            'nvkDonGia'=>799000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "PT001",
            'nvkTenSanPham'=> "Cây thiết mộc lan",
            'nvkHinhAnh'=>"images/san-pham/PT001.jpg",
            'nvkSoLuong'=>150,
            'nvkDonGia'=>590000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "PT002",
            'nvkTenSanPham'=> "Cây trường sinh",
            'nvkHinhAnh'=>"images/san-pham/PT002.jpg",
            'nvkSoLuong'=>100,
            'nvkDonGia'=>150000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "PT003",
            'nvkTenSanPham'=> "Cây hạnh phúc",
            'nvkHinhAnh'=>"images/san-pham/PT003.jpg",
            'nvkSoLuong'=>200,
            'nvkDonGia'=>299000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "PT004",
            'nvkTenSanPham'=> "Cây hoa nhài(Lài ta)",
            'nvkHinhAnh'=>"images/san-pham/PT004.jpg",
            'nvkSoLuong'=>300,
            'nvkDonGia'=>199000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
    }
}
