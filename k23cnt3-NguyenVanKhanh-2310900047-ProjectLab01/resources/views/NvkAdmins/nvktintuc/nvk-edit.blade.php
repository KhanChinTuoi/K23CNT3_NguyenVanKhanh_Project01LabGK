@extends('_layouts.admins._master')

@section('title', 'Chỉnh Sửa Tin Tức')

@section('content-body')
<div class="container border mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Chỉnh Sửa Tin Tức</h1>
                </div>
                <div class="card-body">
                    <!-- Form chỉnh sửa tin tức -->
                    <form action="{{ route('nvkadmins.nvktintuc.nvkEditSubmit', $nvktinTuc->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <!-- Tiêu đề tin tức -->
                        <div class="mb-3">
                            <label for="nvkTieuDe" class="form-label">Tiêu đề tin tức</label>
                            <input type="text" name="nvkTieuDe" class="form-control" value="{{ old('nvkTieuDe', $nvktinTuc->nvkTieuDe) }}">
                            @error('nvkTieuDe')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Mô tả tin tức -->
                        <div class="mb-3">
                            <label for="nvkMoTa" class="form-label">Mô tả tin tức</label>
                            <input type="text" name="nvkMoTa" class="form-control" value="{{ old('nvkMoTa', $nvktinTuc->nvkMoTa) }}">
                            @error('nvkMoTa')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Nội dung tin tức -->
                        <div class="mb-3">
                            <label for="nvkNoiDung" class="form-label">Nội dung tin tức</label>
                            <textarea name="nvkNoiDung" class="form-control" rows="5">{{ old('nvkNoiDung', $nvktinTuc->nvkNoiDung) }}</textarea>
                            @error('nvkNoiDung')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Hình ảnh tin tức -->
                        <div class="mb-3">
                            <label for="nvkHinhAnh" class="form-label">Hình ảnh</label>
                            <input type="file" name="nvkHinhAnh" class="form-control">
                            @if($nvktinTuc->nvkHinhAnh)
                                <img src="{{ asset('storage/' . $nvktinTuc->nvkHinhAnh) }}" alt="Tin tức {{ $nvktinTuc->nvkTieuDe }}" width="200" class="mt-2">
                            @endif
                            @error('nvkHinhAnh')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Ngày đăng -->
                        <div class="mb-3">
                            <label for="nvkNgayDangTin" class="form-label">Ngày Đăng</label>
                            <input type="datetime-local" name="nvkNgayDangTin" class="form-control" value="{{ old('nvkNgayDangTin', $nvktinTuc->nvkNgayDangTin) }}">
                            @error('nvkNgayDangTin')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Ngày cập nhật -->
                        <div class="mb-3">
                            <label for="nvkNgayCapNhat" class="form-label">Ngày Cập Nhật</label>
                            <input type="datetime-local" name="nvkNgayCapNhap" class="form-control" value="{{ old('nvkNgayCapNhat', $nvktinTuc->nvkNgayCapNhat) }}">
                            @error('nvkNgayCapNhat')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="nvkTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="1" {{ old('nvkTrangThai', $nvktinTuc->nvkTrangThai) == 1 ? 'checked' : '' }} />
                                <label for="nvkTrangThai1">Khóa</label>
                                &nbsp;
                                <input type="radio" id="nvkTrangThai0" name="nvkTrangThai" value="0" {{ old('nvkTrangThai', $nvktinTuc->nvkTrangThai) == 0 ? 'checked' : '' }} />
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
                    <!-- Nút quay lại danh sách tin tức -->
                    <a href="{{ route('nvkadmins.nvktintuc') }}" class="btn btn-secondary">Quay lại danh sách</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection