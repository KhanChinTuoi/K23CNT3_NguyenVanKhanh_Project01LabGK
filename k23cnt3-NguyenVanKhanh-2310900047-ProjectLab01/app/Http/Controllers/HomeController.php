<?php

namespace App\Http\Controllers;

use App\Models\nvk_CT_HOA_DON;
use App\Models\nvk_HOA_DON;
use App\Models\NVKSanPham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     // Trang chủ - hiển thị tất cả sản phẩm
     public function index()
     {
         // Lấy tất cả sản phẩm với phân trang, 6 sản phẩm mỗi trang
         $sanPhams = NVKSanPham::paginate(6);  // Sử dụng paginate() để phân trang
     
         // Trả về view và truyền dữ liệu sản phẩm vào
         return view('nvkuser.home', compact('sanPhams'));
     }
     
     public function index1()
     {
         // Lấy tất cả sản phẩm với phân trang, 6 sản phẩm mỗi trang
         $sanPhams = NVKSanPham::paginate(6);  // Sử dụng paginate() để phân trang
         
         // Trả về view và truyền dữ liệu sản phẩm vào
         return view('nvkuser.home1', compact('sanPhams'));
     }
     
 
     // Hiển thị chi tiết sản phẩm
     public function show($id)
     {
         // Lấy sản phẩm theo id
         $sanPham = NVKSanPham::findOrFail($id); 
         
         // Trả về view chi tiết sản phẩm
         return view('nvkuser.show', compact('sanPham')); 
}
}