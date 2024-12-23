<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NVKSanPhamController extends Controller
{
   // Đọc toàn bộ dữ liệu trong bảng môn học
        public function getSanPhams()
        {
        $sanPhams = DB::table('SanPham')->get();
        return view('nvk-sanpham.index',['sanPhams'=>$sanPhams]);
        }


}
