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
            'nvkMaSanPham'=> "AB001",
            'nvkTenSanPham'=> "Harry Potter and the Sorcerer's Stone, Book 1",
            'nvkHinhAnh'=>asset('img/san_pham/AB001.jpg'),
            'nvkSoLuong'=>100,
            'nvkDonGia'=>699000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "AB002",
            'nvkTenSanPham'=> "Can't Hurt Me,Master Your Mind and Defy the Odds",
            'nvkHinhAnh'=>asset('img/san_pham/AB002.jpg'),
            'nvkSoLuong'=>200,
            'nvkDonGia'=>550000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "AB003",
            'nvkTenSanPham'=> "Where the Crawdads Sing",
            'nvkHinhAnh'=>asset('img/san_pham/AB003.jpg'),
            'nvkSoLuong'=>150,
            'nvkDonGia'=>250000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "AB004",
            'nvkTenSanPham'=> "The Body Keeps the Score",
            'nvkHinhAnh'=>asset('img/san_pham/AB004.jpg'),
            'nvkSoLuong'=>300,
            'nvkDonGia'=>799000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "AB005",
            'nvkTenSanPham'=> "Atomic Habits",
            'nvkHinhAnh'=>asset('img/san_pham/AB005.jpg'),
            'nvkSoLuong'=>150,
            'nvkDonGia'=>590000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "AB006",
            'nvkTenSanPham'=> "Greenlights",
            'nvkHinhAnh'=>asset('img/san_pham/AB006.jpg'),
            'nvkSoLuong'=>100,
            'nvkDonGia'=>150000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "AB007",
            'nvkTenSanPham'=> "Lessons in Chemistry",
            'nvkHinhAnh'=>asset('img/san_pham/AB007.jpg'),
            'nvkSoLuong'=>200,
            'nvkDonGia'=>299000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
        DB::table("nvk_san_pham")->insert([
            'nvkMaSanPham'=> "AB008",
            'nvkTenSanPham'=> "Spare",
            'nvkHinhAnh'=>asset('img/san_pham/AB008.jpg'),
            'nvkSoLuong'=>300,
            'nvkDonGia'=>199000,
            'nvkMaLoai'=>1,
            'nvkTrangThai'=>0
        ]);
    }
}
