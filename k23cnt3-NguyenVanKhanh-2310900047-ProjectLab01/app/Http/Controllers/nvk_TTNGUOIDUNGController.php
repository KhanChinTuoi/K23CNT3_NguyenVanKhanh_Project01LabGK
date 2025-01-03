<?php

namespace App\Http\Controllers;

use App\Models\nvk_KHACH_HANG;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class nvk_TTNGUOIDUNGController extends Controller
{
    // Hiển thị form chỉnh sửa thông tin khách hàng
    public function nvkEdit($id)
    {
        // Lấy khách hàng theo id
        $nvklogin = nvk_KHACH_HANG::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$nvklogin) {
            return redirect()->route('nvklogin.home1')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Trả về view để chỉnh sửa khách hàng
        return view('NvkLogin.ttuser', ['nvklogin' => $nvklogin]);
    }
    
    // Xử lý submit form chỉnh sửa
    public function nvkEditSubmit(Request $request, $id)
    {
        // Xác thực dữ liệu
        $validate = $request->validate([
            'nvkMaKhachHang' => 'required|unique:nvk_khach_hang,nvkMaKhachHang,' . $id, // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'nvkHoTenKhachHang' => 'required|string',
            'nvkEmail' => 'required|email|unique:nvk_khach_hang,nvkEmail,' . $id,  // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'nvkMatKhau' => 'nullable|min:6', // Mật khẩu không bắt buộc khi cập nhật
            'nvkDienThoai' => 'required|numeric|unique:nvk_khach_hang,nvkDienThoai,' . $id,  // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'nvkDiaChi' => 'required|string',
            'nvkNgayDangKy' => 'required|date',
            'nvkTrangThai' => 'required|in:0,1,2',
        ]);
    
        // Lấy khách hàng theo id
        $nvklogin = nvk_KHACH_HANG::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$nvklogin) {
            return redirect()->route('nvklogin.home1')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Cập nhật các giá trị từ request
        $nvklogin->nvkMaKhachHang = $request->nvkMaKhachHang;
        $nvklogin->nvkHoTenKhachHang = $request->nvkHoTenKhachHang;
        $nvklogin->nvkEmail = $request->nvkEmail;
        
        // Kiểm tra nếu người dùng nhập mật khẩu mới
        if ($request->filled('nvkMatKhau')) {
            // Nếu có mật khẩu mới, mã hóa và cập nhật
            $nvklogin->nvkMatKhau = Hash::make($request->nvkMatKhau);
        }
        
        $nvklogin->nvkDienThoai = $request->nvkDienThoai;
        $nvklogin->nvkDiaChi = $request->nvkDiaChi;
        $nvklogin->nvkNgayDangKy = $request->nvkNgayDangKy;
        $nvklogin->nvkTrangThai = $request->nvkTrangThai;
    
        // Lưu khách hàng đã cập nhật
        $nvklogin->save();
    
        // Chuyển hướng đến danh sách khách hàng
        return redirect()->route('nvklogin.home1')->with('success', 'Cập nhật khách hàng thành công!');
    }
}
