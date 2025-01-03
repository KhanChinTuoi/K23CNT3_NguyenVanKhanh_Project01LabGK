@extends('_layouts.admins._master')
@section('title','Sửa Loại Khách Hàng')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <!-- Update the form action route to pass the nvkMaKhachHang as a parameter -->
                <form action="{{ route('nvkadmin.nvkkhachhang.nvkEditSubmit', ['id' => $nvkkhachhang->id]) }}" method="POST">
                    @csrf
                    <!-- Hidden input for the ID -->
                    <input type="hidden" name="id" value="{{ $nvkkhachhang->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại Khách Hàng</h1>
                        </div>
                        <div class="card-body">
                            <!-- Mã Loại (disabled) -->
                            <div class="mb-3">
                                <label for="nvkMaKhachHang" class="form-label">Mã Khách Hàng</label>
                                <input type="text" class="form-control" id="nvkMaKhachHang" name="nvkMaKhachHang" value="{{ $nvkkhachhang->nvkMaKhachHang }}" >
                                @error('nvkMaKhachHang')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <!-- Tên Loại -->
                            <div class="mb-3">
                                <label for="nvkHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="nvkHoTenKhachHang" name="nvkHoTenKhachHang" value="{{ old('nvkHoTenKhachHang', $nvkkhachhang->nvkHoTenKhachHang) }}" >
                                @error('nvkHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="nvkEmail" name="nvkEmail" value="{{ old('nvkEmail', $nvkkhachhang->nvkEmail) }}" >
                                @error('nvkEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkMatKhau" class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" id="nvkMatKhau" name="nvkMatKhau" value="{{ old('nvkMatKhau', $nvkkhachhang->nvkMatKhau) }}" >
                                @error('nvkMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="nvkDienThoai" name="nvkDienThoai" value="{{ old('nvkDienThoai', $nvkkhachhang->nvkDienThoai) }}" >
                                @error('nvkDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="nvkDiaChi" name="nvkDiaChi" value="{{ old('nvkDiaChi', $nvkkhachhang->nvkDiaChi) }}" >
                                @error('nvkDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                                <input type="date" class="form-control" id="nvkNgayDangKy" name="nvkNgayDangKy" value="{{ old('nvkNgayDangKy', $nvkkhachhang->nvkNgayDangKy) }}" >
                                @error('nvkNgayDangKy')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Trạng Thái -->
                            <div class="mb-3">
                                <label for="nvkTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nvkTrangThai0" name="nvkTrangThai" value="0" {{ old('nvkTrangThai', $nvkkhachhang->nvkTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="nvkTrangThai0">Hoạt Động</label>
                                    &nbsp;
                                    <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="1" {{ old('nvkTrangThai', $nvkkhachhang->nvkTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="nvkTrangThai1">Tạm Khóa</label>
                           
                                    &nbsp;
                                    <input type="radio" id="nvkTrangThai2" name="nvkTrangThai" value="2" {{ old('nvkTrangThai', $nvkkhachhang->nvkTrangThai) == 2 ? 'checked' : '' }} />
                                    <label for="nvkTrangThai0">Khóa</label>
                                </div>
                                @error('nvkTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer">
                            <!-- Change button label to "Cập nhật" (Update) -->
                            <button class="btn btn-success" type="submit">Cập nhật</button>
                            <a href="{{ route('nvkadmins.nvkkhachhang') }}" class="btn btn-primary">Trở lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection