@extends('_layouts.admins._master')
@section('title','Create Hóa Đơn')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('nvkadmin.nvkhoadon.nvkCreateSubmit')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới Hóa Đơn</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nvkMaHoaDon" class="form-label">Mã Hóa Đơn</label>
                                <input type="text" class="form-control" id="nvkMaHoaDon" name="nvkMaHoaDon" value="{{ old('nvkMaHoaDon') }}" >
                                @error('nvkMaHoaDon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkMaKhachHang" class="form-label">Khách Hàng</label>
                                <select name="nvkMaKhachHang" id="nvkMaKhachHang" class="form-control">
                                    @foreach ($nvkkhachhang as $item)
                                        <option value="{{ $item->id }}">{{ $item->nvkHoTenKhachHang }}</option>
                                    @endforeach
                                </select>
                                @error('nvkMaKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkNgayHoaDon" class="form-label">Ngày Hóa Đơn</label>
                                <input type="date" class="form-control" id="nvkNgayHoaDon" name="nvkNgayHoaDon" value="{{ old('nvkNgayHoaDon') }}" >
                                @error('nvkNgayHoaDon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkNgayNhan" class="form-label">Ngày Nhận</label>
                                <input type="date" class="form-control" id="nvkNgayNhan" name="nvkNgayNhan" value="{{ old('nvkNgayNhan') }}" >
                                @error('nvkNgayNhan')
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
                                <input type="Email" class="form-control" id="nvkEmail" name="nvkEmail" value="{{ old('nvkEmail') }}" >
                                @error('nvkEmail')
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
                                <label for="nvkTongTriGia" class="form-label">Tổng Giá Trị</label>
                                <input type="number" class="form-control" id="nvkTongTriGia" name="nvkTongTriGia" value="{{ old('nvkTongTriGia') }}" >
                                @error('nvkTongTriGia')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nvkTrangThai0" name="nvkTrangThai" value="0" checked/>
                                    <label for="nvkTrangThai1">Chờ Sử Lý</label>
                                    &nbsp;
                                    <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="1"/>
                                    <label for="nvkTrangThai0">Đang Sử Lý</label>
                                    &nbsp;
                                    <input type="radio" id="nvkTrangThai2" name="nvkTrangThai" value="2"/>
                                    <label for="nvkTrangThai0">Đã hoàn Thành</label>
                                </div>
                                @error('nvkTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{route('nvkadmins.nvkhoadon')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection