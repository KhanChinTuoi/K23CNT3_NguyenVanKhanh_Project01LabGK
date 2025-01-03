    <!-- resources/views/nvkuser/hoadonshow.blade.php -->

    @extends('_layouts.frontend.user1')  <!-- Hoặc layout của bạn -->

    @section('title', 'Thông Tin Hóa Đơn')

    @section('content-body')
    <div class="container">
        <h1>Thông Tin Hóa Đơn</h1>
        
        <div class="card">
            <div class="card-header">
                <h3>Hóa Đơn ID: {{ $hoaDon->nvkMaHoaDon }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Tên Khách Hàng:</strong> {{ $hoaDon->nvkHoTenKhachHang }}</p>
                <p><strong>Email:</strong> {{ $hoaDon->nvkEmail }}</p>
                <p><strong>Số Điện Thoại:</strong> {{ $hoaDon->nvkDienThoai }}</p>
                <p><strong>Địa Chỉ:</strong> {{ $hoaDon->nvkDiaChi }}</p>
                <p><strong>Tổng Giá Trị:</strong> {{ number_format($hoaDon->nvkTongGiaTri, 0, ',', '.') }} VND</p>
                <p><strong>Ngày Hóa Đơn:</strong> {{ $hoaDon->nvkNgayHoaDon }}</p>
                <p><strong>Ngày Nhận:</strong> {{ $hoaDon->nvkNgayNhan }}</p>
                <p><strong>Trạng Thái:</strong> 
                    @if ($hoaDon->nvkTrangThai == 0)
                        Chưa Thanh Toán
                    @elseif ($hoaDon->nvkTrangThai == 1)
                        Đã Thanh Toán
                    @endif
                </p>
            </div>
            <a href="{{ route('cthoadon.create', ['hoaDonId' => $hoaDon->id, 'sanPhamId' => $sanPham->id]) }}">Xem chi tiết hóa đơn</a>

        </div>
    </div>

    @endsection