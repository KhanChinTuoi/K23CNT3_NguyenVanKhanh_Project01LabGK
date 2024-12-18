<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NVKQuanTriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nvkMatkhau = md5("123456a@");
        DB::table('nvk_quan_tri')->insert([
            'nvkTaiKhoan'=>"khanhvank9t727@gmail.com",
            'nvkMatKhau'=> $nvkMatkhau,
            'nvkTrangThai'=>0
        ]);
        DB::table('nvk_quan_tri')->insert([
            'nvkTaiKhoan'=>"00984915173",
            'nvkMatKhau'=> $nvkMatkhau,
            'nvkTrangThai'=>0
        ]);
    }
}
