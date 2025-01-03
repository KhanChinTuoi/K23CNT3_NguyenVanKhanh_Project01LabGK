@extends('_layouts.admins._master')
@section('title','Create chi tiết Hóa Đơn')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('nvkadmin.nvkcthoadon.nvkCreateSubmit') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới chi tiết Hóa Đơn</h1>
                        </div>

                        <div class="mb-3">
                            <label for="nvkHoaDonID" class="form-label">Mã Hóa Đơn</label>
                            <select name="nvkHoaDonID" id="nvkHoaDonID" class="form-control">
                                @foreach ($nvkhoadon as $item)
                                    <option value="{{ $item->id }}">{{ $item->nvkMaHoaDon }}</option>
                                @endforeach
                            </select>
                            @error('nvkHoaDonID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nvkSanPhamID" class="form-label">Mã Sản Phẩm</label>
                            <select name="nvkSanPhamID" id="nvkSanPhamID" class="form-control">
                                @foreach ($nvksanpham as $item)
                                    <option value="{{ $item->id }}" data-price="{{ $item->nvkDonGia }}">{{ $item->nvkMaSanPham }}</option>
                                @endforeach
                            </select>
                            @error('nvkSanPhamID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nvkSoLuongMua" class="form-label">Số Lượng Mua</label>
                            <input type="number" class="form-control" id="nvkSoLuongMua" name="nvkSoLuongMua" value="{{ old('nvkSoLuongMua') }}" min="1" oninput="calculateThanhTien()">
                            @error('nvkSoLuongMua')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nvkDonGiaMua" class="form-label">Đơn Giá Mua</label>
                            <input type="number" class="form-control" id="nvkDonGiaMua" name="nvkDonGiaMua" value="{{ old('nvkDonGiaMua') }}" oninput="calculateThanhTien()">
                            @error('nvkDonGiaMua')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nvkThanhTien" class="form-label">Thành Tiền</label>
                            <input type="number" class="form-control" id="nvkThanhTien" name="nvkThanhTien" value="{{ old('nvkThanhTien') }}" readonly>
                            @error('nvkThanhTien')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nvkTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="nvkTrangThai0" name="nvkTrangThai" value="0" checked />
                                <label for="nvkTrangThai0">Hoàn Thành</label>
                                &nbsp;
                                <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="1" />
                                <label for="nvkTrangThai1">Trả Lại</label>
                                &nbsp;
                                <input type="radio" id="nvkTrangThai2" name="nvkTrangThai" value="2" />
                                <label for="nvkTrangThai2">Xóa</label>
                            </div>
                            @error('nvkTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{ route('nvkadmins.nvkcthoadon') }}" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Hàm tính Thành Tiền
        function calculateThanhTien() {
            var quantity = parseFloat(document.getElementById('nvkSoLuongMua').value);
            var unitPrice = parseFloat(document.getElementById('nvkDonGiaMua').value);
            var thanhTien = quantity * unitPrice;
            document.getElementById('nvkThanhTien').value = thanhTien.toFixed(2);  // Làm tròn đến 2 chữ số thập phân
        }

        // Sự kiện khi chọn sản phẩm, tự động cập nhật Đơn Giá Mua
        document.getElementById('nvkSanPhamID').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var price = selectedOption.getAttribute('data-price');
            document.getElementById('nvkDonGiaMua').value = price;
            calculateThanhTien();
        });
    </script>
@endsection