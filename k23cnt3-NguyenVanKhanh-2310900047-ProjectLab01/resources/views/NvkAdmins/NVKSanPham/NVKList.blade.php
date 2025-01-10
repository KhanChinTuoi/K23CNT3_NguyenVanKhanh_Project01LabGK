@extends('_layouts.admins._master')
@section('title', 'Danh Sách Sản Phẩm')
@section('content-body')
    <div class="container border">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Sản Phẩm</h1>
                <a href="{{route('nvkadmins.nvksanpham.nvkcreate')}}" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Mã Loại</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                    @forelse ($NVKsanphams as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td>{{ $stt }}</td>
                            <td>{{ $item->nvkMaSanPham }}</td>
                            <td>{{ $item->nvkTenSanPham }}</td>
                            <td style="display: flex; justify-content: center; align-items: center; height: 100px;">
                                <img src="{{ asset('storage/' . $item->nvkHinhAnh) }}" alt="Sản phẩm {{ $item->nvkMaSanPham }}" class="img-fluid" style="max-height:80px ">
                            </td>
                            <td>{{ $item->nvkSoLuong }}</td>
                            <td>{{ number_format($item->nvkDonGia, 0, ',', '.') }} VND</td>
                            <td>{{ $item->nvkMaLoai }}</td>
                            <td>
                                @if($item->nvkTrangThai == 0)
                                    <span class="badge bg-success">Hiển Thị</span>
                                @else
                                    <span class="badge bg-danger">Khóa</span>
                                @endif
                            </td>
                            <td >
                                view
                                <a href="/NvkAdmins/NVKSanPham/NVKEdit/{{$item->id}}" class="btn btn-primary">Sửa</a>
                                <a href="/NvkAdmins/NVKSanPham/NVKDelete/{{$item->id}}" onclick="return confirm('Ban co chac chan xoa khong?')">/ Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center text-muted">
                                Chưa có thông tin sản phẩm
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection