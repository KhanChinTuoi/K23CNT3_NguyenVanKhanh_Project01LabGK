<?php

namespace App\Http\Controllers;

use App\Models\nvk_KHACH_HANG;
use App\Models\nvk_TIN_TUC;
use App\Models\NVKSanPham;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NVKDanhSachQuanTriController extends Controller
{
    public function danhmuc()
    {
        // Truy vấn số lượng sản phẩm
        $productCount = NVKSanPham::count();
    
        // Truy vấn số lượng người dùng
        $userCount = nvk_KHACH_HANG::count();
        $ttCount = nvk_TIN_TUC::count();

    
        // Trả về view và truyền cả productCount và userCount
        return view('NvkAdmins.nvkdanhsachquantri.nvkdanhmuc', compact('productCount', 'userCount','ttCount'));
    }

    public function nguoidung()
    {
        $nvknguoidung = nvk_KHACH_HANG::all();
    
        // Chuyển đổi nvkNgayDangKy thành đối tượng Carbon thủ công
        foreach ($nvknguoidung as $user) {
            // Chuyển đổi ngày tháng thành đối tượng Carbon nếu chưa phải là Carbon
            $user->nvkNgayDangKy = Carbon::parse($user->nvkNgayDangKy);
        }
    
        return view('NvkAdmins.nvkdanhsachquantri.nvkdanhmuc.nvknguoidung', ['nvknguoidung' => $nvknguoidung]);
    }

    public function tintuc()
    {
        // Retrieve all news articles from the database (assuming you have a model named nvk_TIN_TUC)
        $nvktintucs = nvk_TIN_TUC::all();  // Fetching all articles
    
        // Loop through articles and add the full URL to the image
        foreach ($nvktintucs as $article) {
            // Assuming nvkHinhAnh stores the image name, we'll prepend the 'public/storage' path
            $article->image_url = asset('storage/' . $article->nvkHinhAnh);
        }
    
        // Return the view and pass the articles to it
        return view('NvkAdmins.nvkdanhsachquantri.nvkdanhmuc.nvktintuc', [
            'nvktintucs' => $nvktintucs, // Passing the news articles to the view
        ]);
    }

    public function sanpham()
    {
        $nvksanphams = NVKSanPham::all(); // Lấy tất cả sản phẩm
        return view('NvkAdmins.nvkdanhsachquantri.nvkdanhmuc.nvksanpham', ['nvksanphams' => $nvksanphams]);
    }


}
