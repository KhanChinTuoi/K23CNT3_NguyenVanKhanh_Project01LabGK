@extends('_layouts.frontend.user')

@section('title', 'Chi Tiết Sản Phẩm')

@section('content-body')
    <div class="container mx-auto py-5">
        <!-- Phần hiển thị chi tiết sản phẩm -->
        <div class="text-center mb-5">
            <!-- Tên sản phẩm -->
            <h1 class="text-3xl font-bold text-blue-600 mb-3">{{ $sanPham->nvkTenSanPham }}</h1>
            
            <!-- Hình ảnh sản phẩm -->
            <img src="{{ asset('storage/' . $sanPham->nvkHinhAnh) }}" class="mx-auto my-4 rounded-lg shadow-lg" alt="{{ $sanPham->nvkTenSanPham }}" style="max-width: 80%; height: auto;">
            
            <!-- Giá -->
            <p class="mt-3 text-xl text-green-600"><strong>Giá: </strong>{{ number_format($sanPham->nvkDonGia, 0, ',', '.') }} VND</p>
            
            <!-- Mô tả sản phẩm -->
            <p class="mt-3 text-lg text-gray-700"><strong>Mô Tả: </strong>{{ $sanPham->nvkMoTa }}</p>
            
            <!-- Số lượng còn lại -->
            <p class="mt-2 text-lg text-yellow-600"><strong>Số Lượng: </strong>{{ $sanPham->nvkSoLuong }} sản phẩm còn lại</p>
        </div>

        <!-- Nút quay lại -->
        <div class="text-center mt-8">
            <a href="{{ url()->previous() }}" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600 transition duration-300" style="font-size: 1.1rem;">Quay Lại</a>
        </div>
    </div>
@endsection