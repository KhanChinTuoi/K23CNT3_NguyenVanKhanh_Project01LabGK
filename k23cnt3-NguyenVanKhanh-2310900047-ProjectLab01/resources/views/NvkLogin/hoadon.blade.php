@extends('_layouts.frontend.user1')

@section('title', 'Hóa Đơn')

@section('content-body')
<div class="container">
    <h1>Mua Sản Phẩm: {{ $sanPham->nvkTenSanPham }}</h1>

    <form action="{{ route('hoadon.store', ['sanPham' => $sanPham->id]) }}" method="POST">
        @csrf
        <!-- Các trường khách hàng -->
        <div class="mb-3">
            <label for="nvkMaKhachHang" class="form-label">Mã Khách Hàng</label>
            <input type="text" name="nvkMaKhachHang" value="{{ Session::get('nvkMaKhachHang', '') }}" class="form-control" required readonly>
        </div>

        <div class="mb-3">
            <label for="nvkHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
            <input type="text" name="nvkHoTenKhachHang" value="{{ Session::get('username1', '') }}" class="form-control" required readonly>
        </div>

        <div class="mb-3">
            <label for="nvkEmail" class="form-label">Email</label>
            <input type="email" name="nvkEmail" value="{{ Session::get('nvkEmail', '') }}" class="form-control" required readonly>
        </div>

        <div class="mb-3">
            <label for="nvkDienThoai" class="form-label">Số Điện Thoại</label>
            <input type="text" name="nvkDienThoai" value="{{ Session::get('nvkDienThoai', '') }}" class="form-control" required readonly>
        </div>

        <div class="mb-3">
            <label for="nvkDiaChi" class="form-label">Địa Chỉ</label>
            <input type="text" name="nvkDiaChi" value="{{ Session::get('nvkDiaChi', '') }}" class="form-control" required>
        </div>

        <!-- Chọn sản phẩm và số lượng -->
        <input type="hidden" name="nvkSanPhamId" value="{{ $sanPham->id }}" required>
        <div class="mb-3">
            <label for="nvkSoLuong" class="form-label">Số Lượng</label>
            <input type="number" name="nvkSoLuong" value="1" min="1" max="{{ $sanPham->nvkSoLuong }}" class="form-control" required>
        </div>

        <!-- Nút Mua -->
        <button type="submit" class="btn btn-primary">Mua Sản Phẩm</button>
        
    </form>
</div>
@endsection