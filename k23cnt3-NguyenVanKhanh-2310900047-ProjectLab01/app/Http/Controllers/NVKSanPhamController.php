<?php

namespace App\Http\Controllers;

use App\Models\Nvk_Loai_san_pham;
use Illuminate\Http\Request;
use App\Models\NVKSanPham;
use Illuminate\Support\Facades\Storage;

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

        $nvksanpham = new NVKSanPham();
        $nvksanpham->nvkMaSanPham = $request->nvkMaSanPham;
        $nvksanpham->nvkTenSanPham = $request->nvkTenSanPham;

        if ($request->hasFile('nvkHinhAnh')) {
            $file = $request->file('nvkHinhAnh');
            if ($file->isValid()) {
                $fileName = $request->nvkMaSanPham . '.' . $file->extension();
                $file->storeAs('public/img/san_pham', $fileName);
                $nvksanpham->nvkHinhAnh = 'img/san_pham/' . $fileName;
            }
        }
        $nvksanpham->nvkSoLuong = $request->nvkSoLuong;
        $nvksanpham->nvkDonGia = $request->nvkDonGia;
        $nvksanpham->nvkMaLoai = $request->nvkMaLoai;
        $nvksanpham->nvkTrangThai = $request->nvkTrangThai;
        $nvksanpham->save();

        return redirect()->route('nvkadmins.nvksanpham')->with('success', 'Sản phẩm đã được thêm thành công!');
    }
    public function nvkdelete($id)
    {
        NVKSanPham::where('id', $id)->delete();
        return back()->with('sanpham_deleted', 'Đã xóa Sản Phẩm thành công!');
    }

    // Sửa sản phẩm
    public function nvkEdit($id)
    {
        $nvksanpham = NVKSanPham::findOrFail($id);
        $nvkloaisanpham = nvk_LOAI_SAN_PHAM::all();
        return view('nvkAdmins.nvksanpham.nvk-edit', [
            'nvksanpham' => $nvksanpham,
            'nvkloaisanpham' => $nvkloaisanpham
        ]);
    }

    // Xử lý chỉnh sửa sản phẩm
    public function nvkEditSubmit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nvkMaSanPham' => 'required|max:20',
            'nvkTenSanPham' => 'required|max:255',
            'nvkHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nvkSoLuong' => 'required|integer',
            'nvkDonGia' => 'required|numeric',
            'nvkMaLoai' => 'required|max:10',
            'nvkTrangThai' => 'required|in:0,1',
        ]);

        $nvksanpham = NVKSanPham::findOrFail($id);
        $nvksanpham->nvkMaSanPham = $request->nvkMaSanPham;
        $nvksanpham->nvkTenSanPham = $request->nvkTenSanPham;
        $nvksanpham->nvkSoLuong = $request->nvkSoLuong;
        $nvksanpham->nvkDonGia = $request->nvkDonGia;
        $nvksanpham->nvkMaLoai = $request->nvkMaLoai;
        $nvksanpham->nvkTrangThai = $request->nvkTrangThai;

        if ($request->hasFile('nvkHinhAnh')) {
            if ($nvksanpham->nvkHinhAnh && Storage::disk('public')->exists('img/san_pham/' . $nvksanpham->nvkHinhAnh)) {
                Storage::disk('public')->delete('img/san_pham/' . $nvksanpham->nvkHinhAnh);
            }
            $imagePath = $request->file('nvkHinhAnh')->store('img/san_pham', 'public');
            $nvksanpham->nvkHinhAnh = $imagePath;
        }

        $nvksanpham->save();

        return redirect()->route('nvkadims.nvksanpham')->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }
}