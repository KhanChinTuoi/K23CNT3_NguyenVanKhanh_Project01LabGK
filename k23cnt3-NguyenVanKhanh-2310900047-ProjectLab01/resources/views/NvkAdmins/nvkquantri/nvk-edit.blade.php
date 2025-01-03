@extends('_layouts.admins._master')
@section('title', 'Chỉnh Sửa Quản Trị Viên')

@section('content-body')
    <div class="container">
        <form action="{{ route('nvkadmin.nvkquantri.nvkEditSubmit', $nvkquantri->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nvkTaiKhoan">Tài Khoản</label>
                <input type="text" class="form-control" id="nvkTaiKhoan" name="nvkTaiKhoan" value="{{ $nvkquantri->nvkTaiKhoan }}" required>
                @error('nvkTaiKhoan') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="nvkMatKhau">Mật Khẩu</label>
                <input type="password" class="form-control" id="nvkMatKhau" name="nvkMatKhau">
                @error('nvkMatKhau') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="nvkTrangThai">Trạng Thái</label>
                <select name="nvkTrangThai" id="nvkTrangThai" class="form-control" required>
                    <option value="0" {{ $nvkquantri->nvkTrangThai == 0 ? 'selected' : '' }}>Cho Phép Đăng Nhập</option>
                    <option value="1" {{ $nvkquantri->nvkTrangThai == 1 ? 'selected' : '' }}>Khóa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Cập Nhật</button>
        </form>
    </div>
@endsection