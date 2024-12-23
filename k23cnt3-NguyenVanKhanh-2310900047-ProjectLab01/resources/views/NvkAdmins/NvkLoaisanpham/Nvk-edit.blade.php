@extends('_layouts.admins._master')
@section('title','Quản trị nội dung')

@section('content-body')
    <div class="container">
        <div class="row">
           
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{route('nvkadmins.nvkloaisanpham.nvkeditsubmit')}}" method="post">
                
                <div class="card">
                <div class="card-header">
                    <h2>Sủa thông tin loại sản phẩm</h2>
                </div>

                <div class="card-body container-fluid">
                    <div class="mb-3 row">
                        <label for="nvkMaLoai" class="col-sm-2 col-form-label">Mã loại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                            value="{{$nvkLoaiSanPham->nvkMaLoai}}"
                            id="nvkMaLoai" name="nvkMaLoai">
                            @error('nvkMaLoai')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkTenLoai" class="col-sm-2 col-form-label">Tên loại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                            value="{{$nvkLoaiSanPham->nvkMaLoai}}"
                            id="nvkTenLoai" name="nvkTenLoai">
                            @error('nvkTenLoai')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nvkTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                        <div class="col-sm-10">
                            @if($nvkLoaiSanPham->nvkMaLoai ===1)
                            <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="1"
                            checked/>
                            <label for="nvkTrangThai1">Hiển thị</label>
                            &nbsp;
                            <input type="radio" id="nvkTrangThai0" name="nvkTrangThai" value="0"/>
                            <label for="nvkTrangThai0">Khóa</label>
                            @else
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-success">Ghi lại</button>
                    <a href="{{route('nvkadmins.nvkloaisanpham')}}" class="btn btn-secondary">Quay lại</a>
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection