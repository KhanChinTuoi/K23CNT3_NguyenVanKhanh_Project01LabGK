@extends('_layouts.admins._master')

@section('title', 'Danh Mục Quản Trị')

@section('content-body')
    <div class="container mt-4">
        <h1 class="mb-4 text-center text-primary">Danh Mục Quản Trị</h1>

        <!-- Nút dẫn đến các danh mục với số lượng -->
        <div class="row">
            <!-- Loại sản phẩm -->
            <div class="col-md-4">
                <div class="card text-center shadow-lg">
                    <div class="card-body bg-primary text-white">
                        <h5 class="card-title">Sản Phẩm</h5>
                        <p class="card-text">{{ $productCount }} sản phẩm</p> <!-- Hiển thị số lượng sản phẩm -->
                        <a href="/nvk-admins/nvkdanhsachquantri/nvksanpham" class="btn btn-outline-light">Xem Sản Phẩm</a>
                    </div>
                </div>
            </div>

            <!-- Tin tức -->
            <div class="col-md-4">
                <div class="card text-center shadow-lg">
                    <div class="card-body bg-info text-white">
                        <h5 class="card-title">Tin Tức</h5>
                        <p class="card-text" >Tin Tức New : {{ $ttCount }}</p>
                        <a href="{{route('nvkadmins.nvkdanhsachquantri.nvkdanhmuc.nvktintuc')}}" class="btn btn-outline-light">Xem Tin Tức</a>
                    </div>
                </div>
            </div>

            <!-- Tài khoản người dùng -->
            <div class="col-md-4">
                <div class="card text-center shadow-lg">
                    <div class="card-body bg-success text-white">
                        <h5 class="card-title">Tài Khoản Người Dùng</h5>
                        <p class="card-text"> Số lượng người dùng: {{$userCount}}</p>
                        <a href="/nvk-admins/nvkdanhsachquantri/nvknguoidung" class="btn btn-outline-light">Xem Người Dùng</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    /* Tùy chỉnh giao diện nếu cần */
    .card {
        margin-bottom: 30px;
        border-radius: 10px;
        border: none;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1.1rem;
        margin-bottom: 20px;
        font-style: italic;
    }

    .btn {
        font-size: 1.1rem;
        border-radius: 20px;
        padding: 10px 20px;
    }

    .btn-outline-light {
        border-color: #fff;
        color: #fff;
    }

    .btn-outline-light:hover {
        background-color: #fff;
        color: #007bff;
        border-color: #007bff;
    }

    /* Card hover effect */
    .card:hover {
        transform: scale(1.05);
        transition: all 0.3s ease;
    }
</style>