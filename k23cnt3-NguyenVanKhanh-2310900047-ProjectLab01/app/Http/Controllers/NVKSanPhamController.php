<?php

namespace App\Http\Controllers;

use App\Models\Nvk_Loai_san_pham;
use Illuminate\Http\Request;
use App\Models\NVKSanPham; 

class NVKSANPHAMController extends Controller
{
    public function search(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ input của người dùng
        $search = $request->input('search');
    
        // Nếu có từ khóa tìm kiếm, lọc sản phẩm theo tên
        if ($search) {
            // Sử dụng where để lọc các sản phẩm có tên giống hoặc chứa từ khóa tìm kiếm
            $products = NVKSanPham::where('nvkTenSanPham', 'like', '%' . $search . '%')->paginate(10);
        } else {
            // Nếu không có từ khóa tìm kiếm, hiển thị tất cả sản phẩm
            $products = NVKSanPham::paginate(10);
        }
    
        // Trả về view với danh sách sản phẩm và từ khóa tìm kiếm   
        return view('NvkLogin.search', compact('products', 'search'));
    }

    public function search1(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ input của người dùng
        $search = $request->input('search');
    
        // Nếu có từ khóa tìm kiếm, lọc sản phẩm theo tên
        if ($search) {
            // Sử dụng where để lọc các sản phẩm có tên giống hoặc chứa từ khóa tìm kiếm
            $products = NVKSanPham::where('nvkTenSanPham', 'like', '%' . $search . '%')->paginate(10);
        } else {
            // Nếu không có từ khóa tìm kiếm, hiển thị tất cả sản phẩm
            $products = NVKSanPham::paginate(10);
        }
    
        // Trả về view với danh sách sản phẩm và từ khóa tìm kiếm   
        return view('NvkLogin.search1', compact('products', 'search'));
    }

    public function searchAdmins(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ input của người dùng
        $search = $request->input('search');
    
        // Nếu có từ khóa tìm kiếm, lọc sản phẩm theo tên
        if ($search) {
            // Sử dụng where để lọc các sản phẩm có tên giống hoặc chứa từ khóa tìm kiếm
            $products = NVKSanPham::where('nvkTenSanPham', 'like', '%' . $search . '%')->paginate(10);
        } else {
            // Nếu không có từ khóa tìm kiếm, hiển thị tất cả sản phẩm
            $products = NVKSanPham::paginate(10);
        }
    
        // Trả về view với danh sách sản phẩm và từ khóa tìm kiếm   
        return view('NvkAdmins.nvksanpham.NVKSearch', compact('products', 'search'));
    }

    //List sản phẩm
    public function NVKList()
    {
        $NVKsanphams = NVKSanPham::where('nvkTrangThai',0)->get();
        return view('NvkAdmins.NVKSanPham.NVKList',['NVKsanphams'=>$NVKsanphams]);
    }

    public function NVKDetail($id)
    {
        // Tìm sản phẩm theo ID
        $nvksanpham = NVKSanPham::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('nvkAdmins.nvksanpham.NVKDetail', ['nvksanpham' => $nvksanpham]);
    }

    public function NVKCreate()
    {
        $nvkloaisanpham = Nvk_Loai_san_pham::all();
        return view('NVKAdmins.NVKSanPham.NVKCreate',['nvkloaisanpham'=>$nvkloaisanpham]);
    }


    public function NVKCreateSubmit(Request $request)
    {
    // Validate input
        $validationData = $request->validate
        ([
        'NVKMaSanPham' => 'required|unique:NVKSANPHAM,NVKMaSanPham',
        'NVKTenSanPham' => 'required|string|max:255',
        'NVKHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'NVKSoLuong' => 'required|numeric|min:1',
        'NVKDonGia' => 'required|numeric',
        'NVKMaLoai' => 'required|exists:Nvk_Loai-san-pham,id',
        'NVKTrangThai' => 'required|in:0,1',
        ]);
    }
}