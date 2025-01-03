<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nvk_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvk_hoa_don')->insert([
            'nvkMaHoaDon'=>'HD001',
            'nvkMaKhachHang'=>1,
            'nvkNgayHoaDon'=>'2024/02/09',
            'nvkNgayNhan'=>'2024/02/10',
            'nvkHoTenKhachHang'=>'Nguyễn Văn Khánh',
            'nvkEmail'=>'khanhvank9t727@gmail.com',
            'nvkDienThoai'=>'0984915173',
            'nvkDiaChi'=>'Hà Nội',
            'nvkTongTriGia'=>'790000',
            'nvkTrangThai'=>2,
        ]);

        DB::table('nvk_hoa_don')->insert([
            'nvkMaHoaDon'=>'HD002',
            'nvkMaKhachHang'=>2,
            'nvkNgayHoaDon'=>'2024/11/20',
            'nvkNgayNhan'=>'2024/11/22',
            'nvkHoTenKhachHang'=>'Trần Văn Khang',
            'nvkEmail'=>'khangtr@gmail.com',
            'nvkDienThoai'=>'0125888998',
            'nvkDiaChi'=>'Phú Yên',
            'nvkTongTriGia'=>'125000',
            'nvkTrangThai'=>0,
        ]);

        DB::table('nvk_hoa_don')->insert([
            'nvkMaHoaDon'=>'HD003',
            'nvkMaKhachHang'=>3,
            'nvkNgayHoaDon'=>'2024/12/17',
            'nvkNgayNhan'=>'2024/12/17',
            'nvkHoTenKhachHang'=>'Hà Quang Minh',
            'nvkEmail'=>'hqminh@gmail.com',
            'nvkDienThoai'=>'0487563485',
            'nvkDiaChi'=>'Đống Đa',
            'nvkTongTriGia'=>'999000',
            'nvkTrangThai'=>1,
        ]);

        DB::table('nvk_hoa_don')->insert([
            'nvkMaHoaDon'=>'HD004',
            'nvkMaKhachHang'=>1,
            'nvkNgayHoaDon'=>'2024/12/12',
            'nvkNgayNhan'=>'2024/12/12',
            'nvkHoTenKhachHang'=>'Nguyễn Văn Khánh',
            'nvkEmail'=>'khanhvank9t727@gmail.com',
            'nvkDienThoai'=>'0984915173',
            'nvkDiaChi'=>'Hà Nội',
            'nvkTongTriGia'=>'660000',
            'nvkTrangThai'=>1,
        ]);

        DB::table('nvk_hoa_don')->insert([
            'nvkMaHoaDon'=>'HD005',
            'nvkMaKhachHang'=>4,
            'nvkNgayHoaDon'=>'2024/12/03',
            'nvkNgayNhan'=>'2024/12/04',
            'nvkHoTenKhachHang'=>'Phan Đình Tùng',
            'nvkEmail'=>'pdtung@gmail.com',
            'nvkDienThoai'=>'0943571532',
            'nvkDiaChi'=>'Hà Nội',
            'nvkTongTriGia'=>'777000',
            'nvkTrangThai'=>1,
        ]);
    }
}
