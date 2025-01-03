@extends('_layouts.admins._master')

@section('title', 'Chỉnh Sửa Sản Phẩm')

@section('content-body')
<div class="container border mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Chỉnh Sửa Sản Phẩm</h1>
                </div>
                <div class="card-body">
                    <!-- Form chỉnh sửa sản phẩm -->
                    <form action="{{ route('nvkadmins.nvksanpham.nvkEditSubmit', $nvksanpham->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <!-- Mã sản phẩm -->
                        <div class="mb-3">
                            <label for="nvkMaSanPham" class="form-label">Mã sản phẩm</label>
                            <input type="text" name="nvkMaSanPham" class="form-control" value="{{ old('nvkMaSanPham', $nvksanpham->nvkMaSanPham) }}">
                            @error('nvkMaSanPham')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tên sản phẩm -->
                        <div class="mb-3">
                            <label for="nvkTenSanPham" class="form-label">Tên sản phẩm</label>
                            <input type="text" name="nvkTenSanPham" class="form-control" value="{{ old('nvkTenSanPham', $nvksanpham->nvkTenSanPham) }}">
                            @error('nvkTenSanPham')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Hình ảnh sản phẩm -->
                        <div class="mb-3">
                            <label for="nvkHinhAnh" class="form-label">Hình ảnh</label>
                            <input type="file" name="nvkHinhAnh" class="form-control">
                            @if($nvksanpham->nvkHinhAnh)
                                <img src="{{ asset('storage/' . $nvksanpham->nvkHinhAnh) }}" alt="Sản phẩm {{ $nvksanpham->nvkMaSanPham }}" width="200" class="mt-2">
                            @endif
                            @error('nvkHinhAnh')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Số lượng -->
                        <div class="mb-3">
                            <label for="nvkSoLuong" class="form-label">Số lượng</label>
                            <input type="number" name="nvkSoLuong" class="form-control" value="{{ old('nvkSoLuong', $nvksanpham->nvkSoLuong) }}">
                            @error('nvkSoLuong')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Đơn giá -->
                        <div class="mb-3">
                            <label for="nvkDonGia" class="form-label">Đơn giá</label>
                            <input type="number" name="nvkDonGia" class="form-control" value="{{ old('nvkDonGia', $nvksanpham->nvkDonGia) }}">
                            @error('nvkDonGia')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Mã Loại -->
                        <div class="mb-3">
                            <label for="nvkMaLoai" class="form-label">Loại Danh Muc</label>
                            <select name="nvkMaLoai" id="nvkMaLoai" class="form-control">
                                @foreach ($nvkloaisanpham as $item)
                                    <option value="{{ $item->id }}" 
                                        {{ old('nvkMaLoai', $nvksanpham->nvkMaLoai) == $item->id ? 'selected' : '' }}>
                                        {{ $item->nvkTenLoai }}
                                    </option>
                                @endforeach
                            </select>
                            @error('nvkMaLoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="nvkTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="1" {{ old('nvkTrangThai', $nvksanpham->nvkTrangThai) == 1 ? 'checked' : '' }} />
                                <label for="nvkTrangThai1">Khóa</label>
                                &nbsp;
                                <input type="radio" id="nvkTrangThai0" name="nvkTrangThai" value="0" {{ old('nvkTrangThai', $nvksanpham->nvkTrangThai) == 0 ? 'checked' : '' }} />
                                <label for="nvkTrangThai0">Hiển Thị</label>
                            </div>
                            @error('nvkTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Nút lưu -->
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </form>
                </div>
                <div class="card-footer">
                    <!-- Nút quay lại danh sách sản phẩm -->
                    <a href="{{ route('nvkadmins.nvksanpham') }}" class="btn btn-secondary">Quay lại danh sách</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection