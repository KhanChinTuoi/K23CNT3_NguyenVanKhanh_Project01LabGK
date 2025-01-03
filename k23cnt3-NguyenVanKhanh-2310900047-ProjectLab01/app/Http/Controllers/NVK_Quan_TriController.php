<?php

namespace App\Http\Controllers;

use App\Models\NVK_Quan_Tri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class NVK_Quan_TriController extends Controller
{
    //GET: login (authentication)
    public function nvkLogin(){
        return view('NvkAdmins.nvk-login');
    }
    public function nvkLoginSubmit(Request $request){
        $request->validate([
            'nvkTaiKhoan' => 'required|string',
            'nvkMatKhau' => 'required|string',
        ]);

        // Tìm người dùng trong bảng nvk_QUAN_TRI
        $user = NVK_Quan_Tri::where('nvkTaiKhoan', $request->nvkTaiKhoan)->first();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
        if ($user && Hash::check($request->nvkMatKhau, $user->nvkMatKhau)) {
            // Đăng nhập thành công
            Auth::loginUsingId($user->id);

            // Lưu tên tài khoản vào session
            Session::put('username', $user->nvkTaiKhoan);

            // Chuyển hướng về trang admin với thông báo thành công
            return redirect('/nvk-admins')->with('message', 'Đăng Nhập Thành Công');
        } else {
            // Thông báo lỗi nếu tài khoản hoặc mật khẩu sai
            return redirect()->back()->withErrors(['nvkMatKhau' => 'Tài khoản hoặc mật khẩu không đúng']);
        }
    }

        public function nvklist()
    {
        $nvkquantris = NVK_Quan_Tri::all(); // Lấy tất cả quản trị viên
        return view('NvkAdmins.nvkquantri.nvk-list', ['nvkquantris'=>$nvkquantris]);
    }

        public function nvkDetail($id)
    {
        $nvkquantri = nvk_QUAN_TRI::where('id', $id)->first();
        return view('NvkAdmins.nvkquantri.nvk-detail',['nvkquantri'=>$nvkquantri]);
    }
    
    // GET: Hiển thị form thêm mới quản trị viên
        public function nvkCreate()
    {
        return view('NvkAdmins.nvkquantri.nvk-create');
    }

        public function nvkCreateSubmit(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'nvkTaiKhoan' => 'required|string|unique:nvk_quan_tri,nvkTaiKhoan',
            'nvkMatKhau' => 'required|string|min:6',
            'nvkTrangThai' => 'required|in:0,1', 
        ]);

        // Tạo bản ghi mới trong cơ sở dữ liệu
        $nvkquantri = new nvk_QUAN_TRI();
        $nvkquantri->nvkTaiKhoan = $request->nvkTaiKhoan;
        $nvkquantri->nvkMatKhau = Hash::make($request->nvkMatKhau); // Mã hóa mật khẩu
        $nvkquantri->nvkTrangThai = $request->nvkTrangThai;
        $nvkquantri->save();

        // Chuyển hướng về trang danh sách với thông báo thành công
        return redirect()->route('nvkadmins.nvkquantri')->with('success', 'Thêm quản trị viên thành công');
    }

        public function nvkEdit($id)
    {
        $nvkquantri = nvk_QUAN_TRI::find($id); // Lấy thông tin quản trị viên cần chỉnh sửa
        if (!$nvkquantri) {
            return redirect()->route('nvkadmins.nvkquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }
        return view('NvkAdmins.nvkquantri.nvk-edit', ['nvkquantri'=>$nvkquantri]);
    }

        public function nvkEditSubmit(Request $request, $id)
    {
        // Xác thực dữ liệu
        $request->validate([
            'nvkTaiKhoan' => 'required|string|unique:nvk_quan_tri,nvkTaiKhoan,' . $id,
            'nvkMatKhau' => 'nullable|string|min:6', // Cho phép mật khẩu trống
            'nvkTrangThai' => 'required|in:0,1',
        ]);

        // Lấy quản trị viên cần sửa
        $nvkquantri = nvk_QUAN_TRI::find($id);
        if (!$nvkquantri) {
            return redirect()->route('nvkadmins.nvkquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }

        // Cập nhật thông tin
        $nvkquantri->nvkTaiKhoan = $request->nvkTaiKhoan;
        if ($request->nvkMatKhau) {
            $nvkquantri->nvkMatKhau = Hash::make($request->nvkMatKhau); // Cập nhật mật khẩu nếu có
        }
        $nvkquantri->nvkTrangThai = $request->nvkTrangThai;
        $nvkquantri->save();

        return redirect()->route('nvkadmins.nvkquantri')->with('success', 'Cập nhật quản trị viên thành công');
    }

        public function nvkDelete($id)
    {
        $nvkquantri = nvk_QUAN_TRI::find($id); // Tìm quản trị viên cần xóa
        if (!$nvkquantri) {
            return redirect()->route('nvkadmins.nvkquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }
        $nvkquantri->delete(); // Xóa bản ghi

        return redirect()->route('nvkadmins.nvkquantri')->with('success', 'Xóa quản trị viên thành công');
    }

}
