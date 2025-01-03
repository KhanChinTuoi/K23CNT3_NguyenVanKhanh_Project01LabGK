@extends('_layouts.admins._master')
@section('title', 'Thêm Quản Trị Viên')

@section('content-body')
    <div class="container">
        <form action="{{ route('nvkadmin.nvkquantri.nvkCreateSubmit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nvkTaiKhoan">Tài Khoản</label>
                <input type="text" class="form-control" id="nvkTaiKhoan" name="nvkTaiKhoan" required>
                @error('nvkTaiKhoan') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="nvkMatKhau">Mật Khẩu</label>
                <input type="password" class="form-control" id="nvkMatKhau" name="nvkMatKhau" required>
                @error('nvkMatKhau') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="nvkTrangThai">Trạng Thái</label>
                <select name="nvkTrangThai" id="nvkTrangThai" class="form-control" required>
                    <option value="0">Cho Phép Đăng Nhập</option>
                    <option value="1">Khóa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Thêm Quản Trị Viên</button>
        </form>
    </div>
@endsection
