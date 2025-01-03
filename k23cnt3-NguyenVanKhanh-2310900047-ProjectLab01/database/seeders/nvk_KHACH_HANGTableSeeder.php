<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class nvk_KHACH_HANGTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nvk_khach_hang')->insert([
            'nvkMaKhachHang'=>'KH001',
            'nvkHoTenKhachHang'=>'Nguyễn Văn Khánh',
            'nvkEmail'=>'khanhvank9t727@gmail.com',
            'nvkMatKhau'=>Hash::make('123456a@'), // Mã hóa mật khẩu
            'nvkDienThoai'=>'0475834234',
            'nvkDiaChi'=>'Hà Nội',
            'nvkNgayDangKy'=>'2022/10/12',
            'nvkTrangThai'=>0,
        ]);

        DB::table('nvk_khach_hang')->insert([
            'nvkMaKhachHang'=>'KH002',
            'nvkHoTenKhachHang'=>'Trần Văn Khang',
            'nvkEmail'=>'khangtr@gmail.com',
            'nvkMatKhau'=>Hash::make('khangtran123'), // Mã hóa mật khẩu
            'nvkDienThoai'=>'0125888998',
            'nvkDiaChi'=>'Phú Yên',
            'nvkNgayDangKy'=>'2022/09/19',
            'nvkTrangThai'=>0,
        ]);

        DB::table('nvk_khach_hang')->insert([
            'nvkMaKhachHang'=>'KH003',
            'nvkHoTenKhachHang'=>'Hà Quang Minh',
            'nvkEmail'=>'hqminh@gmail.com',
            'nvkMatKhau'=>Hash::make('hqminh69'), // Mã hóa mật khẩu
            'nvkDienThoai'=>'0487563485',
            'nvkDiaChi'=>'Đống Đa',
            'nvkNgayDangKy'=>'2024/12/18',
            'nvkTrangThai'=>2,
        ]);

        DB::table('nvk_khach_hang')->insert([
            'nvkMaKhachHang'=>'KH004',
            'nvkHoTenKhachHang'=>'Phan Đình Tùng',
            'nvkEmail'=>'pdtung@gmail.com',
            'nvkMatKhau'=>Hash::make('tungphan99'), // Mã hóa mật khẩu
            'nvkDienThoai'=>'0943571532',
            'nvkDiaChi'=>'Hà Nội',
            'nvkNgayDangKy'=>'2024/12/03',
            'nvkTrangThai'=>0,
        ]);
    }
}

