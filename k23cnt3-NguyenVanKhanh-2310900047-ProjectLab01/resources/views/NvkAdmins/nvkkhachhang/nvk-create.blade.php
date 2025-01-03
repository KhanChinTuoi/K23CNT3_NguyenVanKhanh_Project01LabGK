@extends('_layouts.admins._master')
@section('title','Tạo Mới Khách Hàng')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('nvkadmins.nvkkhachhang.nvkCreateSubmit')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới Khách Hàng</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nvkMaKhachHang" class="form-label">Mã Khách Hàng</label>
                                <input type="text" class="form-control" id="nvkMaKhachHang" name="nvkMaKhachHang" value="{{ old('nvkMaKhachHang') }}" >
                                @error('nvkMaKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="nvkHoTenKhachHang" name="nvkHoTenKhachHang" value="{{ old('nvkHoTenKhachHang') }}" >
                                @error('nvkHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="nvkEmail" name="nvkEmail" value="{{ old('nvkEmail') }}" >
                                @error('nvkEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkMatKhau" class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" id="nvkMatKhau" name="nvkMatKhau" value="{{ old('nvkMatKhau') }}" >
                                @error('nvkMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="nvkDienThoai" name="nvkDienThoai" value="{{ old('nvkDienThoai') }}" >
                                @error('nvkDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="nvkDiaChi" name="nvkDiaChi" value="{{ old('nvkDiaChi') }}" >
                                @error('nvkDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                                <input type="date" class="form-control" id="nvkNgayDangKy" name="nvkNgayDangKy" value="{{ old('nvkNgayDangKy') }}" >
                                @error('nvkNgayDangKy')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nvkTrangThai0" name="nvkTrangThai" value="0" checked/>
                                    <label for="nvkTrangThai1"> Hoạt Động</label>
                                    &nbsp;
                                    <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="1"/>
                                    <label for="nvkTrangThai0">Tạm Khóa</label>
                                    &nbsp;
                                    <input type="radio" id="nvkTrangThai2" name="nvkTrangThai" value="2"/>
                                    <label for="nvkTrangThai0">Khóa</label>
                                </div>
                                @error('nvkTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{route('nvkadmins.nvkkhachhang')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection