@extends('_layouts.frontend.user1')

@section('title', 'Tạo Chi Tiết Hóa Đơn')

@section('content-body')
<div class="container">
    <h1>Tạo Chi Tiết Hóa Đơn</h1>

    <!-- Form tạo chi tiết hóa đơn -->
    <form action="{{ route('cthoadon.storecthoadon') }}" method="POST">
        @csrf

        <!-- Hóa đơn ID -->
        <div class="form-group">
            <label for="nvkHoaDonID">Hóa Đơn ID</label>
            <input type="number" name="nvkHoaDonID" value="{{ $hoaDon->id }}" class="form-control" readonly>
        </div>

        <!-- Sản phẩm ID -->
        <div class="form-group">
            <label for="nvkSanPhamID">Sản Phẩm ID</label>
            <input type="number" name="nvkSanPhamID" value="{{ $sanPham->id }}" class="form-control" readonly>
        </div>

        <!-- Số lượng sản phẩm -->
        <div class="form-group">
            <label for="nvkSoLuong">Số Lượng</label>
            <input type="number" name="nvkSoLuong" id="nvkSoLuong" value="{{ $soLuong }}" min="1" max="{{ $sanPham->nvkSoLuong }}" class="form-control" required>
        </div>

        <!-- Đơn Giá -->
        <div class="form-group">
            <label for="nvkDonGiaMua">Đơn Giá</label>
            <input type="text" class="form-control" value="{{ number_format($sanPham->nvkDonGia, 0, ',', '.') }} VND" disabled>
        </div>

        <!-- Thành Tiền (tính toán từ Số Lượng và Đơn Giá) -->
        <div class="form-group">
            <label for="nvkThanhTien">Thành Tiền</label>
            <input type="text" class="form-control" id="nvkThanhTien" value="{{ number_format($sanPham->nvkDonGia * $soLuong, 0, ',', '.') }} VND" disabled>
        </div>

        <button type="submit" class="btn btn-primary">Lưu Chi Tiết Hóa Đơn</button>
    </form>
</div>

@section('scripts')
<script>
    // Lắng nghe sự thay đổi của số lượng
    document.getElementById('nvkSoLuong').addEventListener('input', function() {
        var soLuong = parseInt(this.value); // Lấy giá trị số lượng
        var donGia = {{ $sanPham->nvkDonGia }}; // Lấy giá trị đơn giá

        // Kiểm tra số lượng hợp lệ (nếu số lượng < 1 thì mặc định là 1)
        if (isNaN(soLuong) || soLuong < 1) {
            soLuong = 1;
            this.value = soLuong;  // Đặt lại giá trị trong input nếu không hợp lệ
        }

        // Tính toán thành tiền (Số Lượng * Đơn Giá)
        var thanhTien = soLuong * donGia;

        // Hiển thị giá trị thành tiền đã tính toán lại
        document.getElementById('nvkThanhTien').value = new Intl.NumberFormat().format(thanhTien) + ' VND';
    });
</script>
@endsection

@endsection