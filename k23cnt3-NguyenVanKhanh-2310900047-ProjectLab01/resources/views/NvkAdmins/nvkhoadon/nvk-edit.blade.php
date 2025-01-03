@extends('_layouts.admins._master')
@section('title','Sửa Loại Hóa Đơn')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <!-- Update the form action route to pass the nvkMaKhachHang as a parameter -->
                <form action="{{ route('nvkadmin.nvkhoadon.nvkEditSubmit', ['id' => $nvkhoadon->id]) }}" method="POST">
                    @csrf
                    <!-- Hidden input for the ID -->
                    <input type="hidden" name="id" value="{{ $nvkhoadon->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại Hóa Đơn</h1>
                        </div>
                        <div class="card-body">
                            <!-- Mã Loại (disabled) -->
                            <div class="mb-3">
                                <label for="nvkMaHoaDon" class="form-label">Mã Hóa Đơn</label>
                                <input type="text" class="form-control" id="nvkMaHoaDon" name="nvkMaHoaDon" value="{{ $nvkhoadon->nvkMaHoaDon }}" >
                                @error('nvkMaHoaDon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkMaKhachHang" class="form-label">Khách Hàng</label>
                                <select name="nvkMaKhachHang" id="nvkMaKhachHang" class="form-control">
                                    @foreach ($nvkkhachhang as $item)
                                        <option value="{{ $item->id }}" 
                                            {{ old('nvkMaKhachHang', $nvkhoadon->nvkMaKhachHang) == $item->id ? 'selected' : '' }}>
                                            {{ $item->nvkHoTenKhachHang }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('nvkMaKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                             
                             <div class="mb-3">
                                <label for="nvkNgayHoaDon" class="form-label">Ngày Hóa Đơn</label>
                                <input type="date" class="form-control" id="nvkNgayHoaDon" name="nvkNgayHoaDon" value="{{ old('nvkNgayHoaDon', $nvkhoadon->nvkNgayHoaDon) }}" >
                                @error('nvkNgayHoaDon')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>

                             <div class="mb-3">
                                <label for="nvkNgayNhan" class="form-label">Ngày Nhận</label>
                                <input type="date" class="form-control" id="nvkNgayNhan" name="nvkNgayNhan" value="{{ old('nvkNgayNhan', $nvkhoadon->nvkNgayNhan) }}" >
                                @error('nvkNgayNhan')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>


                            <!-- Tên Loại -->
                            <div class="mb-3">
                                <label for="nvkHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="nvkHoTenKhachHang" name="nvkHoTenKhachHang" value="{{ old('nvkHoTenKhachHang', $nvkhoadon->nvkHoTenKhachHang) }}" >
                                @error('nvkHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="nvkEmail" name="nvkEmail" value="{{ old('nvkEmail', $nvkhoadon->nvkEmail) }}" >
                                @error('nvkEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            

                            <div class="mb-3">
                                <label for="nvkDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="nvkDienThoai" name="nvkDienThoai" value="{{ old('nvkDienThoai', $nvkhoadon->nvkDienThoai) }}" >
                                @error('nvkDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="nvkDiaChi" name="nvkDiaChi" value="{{ old('nvkDiaChi', $nvkhoadon->nvkDiaChi) }}" >
                                @error('nvkDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nvkTongGiaTri" class="form-label">Tổng Giá Trị</label>
                                <input type="number" class="form-control" id="nvkTongGiaTri" name="nvkTongGiaTri" value="{{ old('nvkTongGiaTri', $nvkhoadon->nvkTongGiaTri) }}" >
                                @error('nvkTongGiaTri')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Trạng Thái -->
                            <div class="mb-3">
                                <label for="nvkTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nvkTrangThai0" name="nvkTrangThai" value="0" {{ old('nvkTrangThai', $nvkhoadon->nvkTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="nvkTrangThai0">Chờ Sử Lý</label>
                                    &nbsp;
                                    <input type="radio" id="nvkTrangThai1" name="nvkTrangThai" value="1" {{ old('nvkTrangThai', $nvkhoadon->nvkTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="nvkTrangThai1">Đang Sử Lý</label>
                           
                                    &nbsp;
                                    <input type="radio" id="nvkTrangThai2" name="nvkTrangThai" value="2" {{ old('nvkTrangThai', $nvkhoadon->nvkTrangThai) == 2 ? 'checked' : '' }} />
                                    <label for="nvkTrangThai0">Đã Hoàn Thành</label>
                                </div>
                                @error('nvkTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer">
                            <!-- Change button label to (edit) -->
                            <button class="btn btn-success" type="submit">Sửa</button>
                            <a href="{{ route('nvkadmins.nvkhoadon') }}" class="btn btn-primary">Trở lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection