<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NVKQuanTriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mã hóa mật khẩu bằng Hash::make()
        $nvkMatKhau = Hash::make('123456789a@'); // Mã hóa mật khẩu

        // Kiểm tra nếu tài khoản đã tồn tại
    if (!DB::table('nvk_QUAN_TRI')->where('nvkTaiKhoan', 'khanhvank9t727@gmail.com')->exists()) {
        DB::table('nvk_QUAN_TRI')->insert([
            'nvkTaiKhoan' => 'khanhvank9t727@gmail.com',
            'nvkMatKhau' => $nvkMatKhau,
            'nvkTrangThai' => 0
        ]);
}

        DB::table('nvk_QUAN_TRI')->insert([
            'nvkTaiKhoan' => '0984915173',
            'nvkMatKhau' => $nvkMatKhau,
            'nvkTrangThai' => 0
        ]);

        DB::table('nvk_QUAN_TRI')->insert([
            'nvkTaiKhoan' => 'newuser@example.com',  // Thay đổi tài khoản
            'nvkMatKhau' => $nvkMatKhau,
            'nvkTrangThai' => 0
        ]);
        
    }
}
