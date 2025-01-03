@extends('_layouts.admins._master')

@section('title', 'Tạo Tin Tức')

@section('content-body')
<div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{ route('nvkadmins.nvktintuc.nvkCreateSubmit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h1>Thêm Mới Tin Tức</h1>
                    </div>
                    <div class="card-body">
                        <!-- Mã Tin Tức -->
                        <div class="mb-3">
                            <label for="nvkMaTT" class="form-label">Mã Tin Tức</label>
                            <input type="text" class="form-control" id="nvkMaTT" name="nvkMaTT" value="{{ old('nvkMaTT') }}">
                            @error('nvkMaTT')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Tiêu đề tin tức -->
                        <div class="mb-3">
                            <label for="nvkTieuDe" class="form-label">Tiêu đề tin tức</label>
                            <input type="text" class="form-control" id="nvkTieuDe" name="nvkTieuDe" value="{{ old('nvkTieuDe') }}">
                            @error('nvkTieuDe')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Mô tả tin tức -->
                        <div class="mb-3">
                            <label for="nvkMoTa" class="form-label">Mô tả tin tức</label>
                            <input type="text" class="form-control" id="nvkMoTa" name="nvkMoTa" value="{{ old('nvkMoTa') }}">
                            @error('nvkMoTa')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Nội dung tin tức -->
                        <div class="mb-3">
                            <label for="nvkNoiDung" class="form-label">Nội dung tin tức</label>
                            <textarea class="form-control" id="nvkNoiDung" name="nvkNoiDung" rows="5">{{ old('nvkNoiDung') }}</textarea>
                            @error('nvkNoiDung')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Hình ảnh tin tức -->
                        <div class="mb-3">
                            <label for="nvkHinhAnh" class="form-label">Hình Ảnh</label>
                            <input type="file" class="form-control" id="nvkHinhAnh" name="nvkHinhAnh" accept="image/*">
                            @error('nvkHinhAnh')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Ngày đăng tin -->
                        <div class="mb-3">
                            <label for="nvkNgayDangTin" class="form-label">Ngày Đăng</label>
                            <input type="datetime-local" class="form-control" id="nvkNgayDangTin" name="nvkNgayDangTin" value="{{ old('nvkNgayDangTin') }}">
                            @error('nvkNgayDangTin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Ngày cập nhật -->
                        <div class="mb-3">
                            <label for="nvkNgayCapNhat" class="form-label">Ngày Cập Nhật</label>
                            <input type="datetime-local" class="form-control" id="nvkNgayCapNhat" name="nvkNgayCapNhat" value="{{ old('nvkNgayCapNhat') }}">
                            @error('nvkNgayCapNhat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="nvkTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="0" checked/>
                                <label for="nvkTrangThai1"> Hiển Thị</label>
                                &nbsp;
                                <input type="radio" id="nvkTrangThai0" name="nvkTrangThai" value="1"/>
                                <label for="nvkTrangThai0">Khóa</label>
                            </div>
                            @error('nvkTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Create</button>
                        <a href="{{ route('nvkadmins.nvktintuc') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection