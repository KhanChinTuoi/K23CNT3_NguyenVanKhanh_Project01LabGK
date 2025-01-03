@extends('_layouts.admins._master')
@section('title','Thêm mới sản phẩm')

@section('content-body')
    <div class="container">
        <div class="row">
           
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{'route('nvkadmins.nvksanpham.nvkcreatesubmit')'}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                <div class="card-header">
                    <h2>Thêm mới sản phẩm</h2>
                </div>

                <div class="card-body container-fluid">
                    <div class="mb-3 row">
                        <label for="nvkMaSanPham" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                            value="{{old('nvkMaSanPham')}}"
                            id="nvkMaSanPham" name="nvkMaSanPham">
                            @error('nvkMaSanPham')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkTenSanPham" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control"
                            value="{{old('nvkTenSanPham')}}"
                            id="nvkTenSanPham" name="nvkTenSanPham">
                            @error('nvkTenSanPham')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkSoLuong" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                            value="{{old('nvkSoLuong')}}"
                            id="nvkSoLuong" name="nvkSoLuong">
                            @error('nvkSoLuong')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkDonGia" class="col-sm-2 col-form-label">Mã sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control"
                            value="{{old('nvkDonGia')}}"
                            id="nvkDonGia" name="nvkDonGia">
                            @error('nvkDonGia')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nvkTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                        <div class="col-sm-10">
                            <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="1"
                            checked/>
                            <label for="nvkTrangThai1">Hiển thị</label>
                                &nbsp;
                                <input type="radio" id="nvkTrangThai0" name="nvkTrangThai" value="0"/>
                                <label for="nvkTrangThai0">Khóa</label>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-success">Ghi lại</button>
                    <a href="{{route('nvkadmins.nvkSanPham')}}" class="btn btn-secondary">Quay lại</a>
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection