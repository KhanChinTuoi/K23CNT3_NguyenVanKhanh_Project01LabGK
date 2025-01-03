@extends('_layouts.admins._master')
@section('title', 'Danh Sách Tin Tức')

@section('content-body')
    <section class="container border my-3">
        <h1 class="mb-4">Danh Sách Tin Tức</h1>

        <!-- Thông báo thành công -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Tin Tức</th>
                    <th>Tiêu Đề</th>
                    <th>Mô Tả</th>
                    <th>Nội Dung</th>
                    <th>Ngày Đăng</th>
                    <th>Ngày Cập Nhật</th>
                    <th>Hình Ảnh</th>
                    <th>Trạng Thái</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nvktinTucs as $item)
                    <tr>
                        <td>{{ ($nvktinTucs->currentPage() - 1) * $nvktinTucs->perPage() + $loop->index + 1 }}</td>
                        <td>{{ $item->nvkMaTT }}</td>
                        <td>{{ $item->nvkTieuDe }}</td>
                        <td>{{ Str::limit($item->nvkMoTa, 50) }}</td>
                        <td>{{ Str::limit($item->nvkNoiDung, 50) }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->nvkNgayDangTin)->format('d/m/Y H:i') }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->nvkNgayCapNhat)->format('d/m/Y H:i') }}</td>
                        <td style="text-align: center;">
                            <img src="{{ asset('storage/' . $item->nvkHinhAnh) }}" alt="Tin tức {{ $item->nvkMaTT }}" width="100" height="100">
                        </td>
                        <td>
                            @if($item->nvkTrangThai == 0)
                                <span class="badge bg-success">Hiển Thị</span>
                            @else
                                <span class="badge bg-danger">Khóa</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="{{ route('nvkadmins.nvktintuc.nvkDetail', $item->id) }}" class="btn btn-success btn-sm">
                                    <i class="fa-solid fa-eye"></i> Xem
                                </a>
                                <a href="{{ route('nvkadmins.nvktintuc.nvkedit', $item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa-solid fa-pen"></i> Chỉnh sửa
                                </a>
                                <a href="{{ route('nvkadmins.nvktintuc.nvkdelete', $item->id) }}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Bạn muốn xóa Tin Tức này không? Mã: {{ $item->nvkMaTT }}');">
                                    <i class="fa-regular fa-trash-can"></i> Xóa
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Phân trang -->
        <div class="d-flex justify-content-center mt-3">
            {{ $nvktinTucs->links('pagination::bootstrap-5') }}
        </div>

        <!-- Thêm mới Tin Tức -->
        <div class="text-end mt-3">
            <a href="{{ route('nvkadmins.nvktintuc.nvkcreate') }}" class="btn btn-success">
                <i class="fa-solid fa-plus"></i> Thêm Mới Tin Tức
            </a>
        </div>
    </section>
@endsection