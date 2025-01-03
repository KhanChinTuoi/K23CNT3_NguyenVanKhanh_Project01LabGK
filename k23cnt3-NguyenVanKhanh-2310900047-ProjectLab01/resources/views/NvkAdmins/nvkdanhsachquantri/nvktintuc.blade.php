@extends('_layouts.admins._master')

@section('title', 'Danh Sách Tin Tức')

@section('content-body')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Danh Sách Tin Tức</h1>

        <div class="row">
            @foreach ($nvktintucs as $article)
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card shadow-sm border-light rounded d-flex flex-column">
                        <!-- Image Section: Make sure the image is responsive and has a rounded top corner -->
                        <img src="{{ asset('storage/' . $article->nvkHinhAnh) }}" class="card-img-top rounded-top" alt="{{ $article->nvkTieuDe }}">

                        <div class="card-body d-flex flex-column">
                            <!-- Title: Make it more prominent -->
                            <h5 class="card-title mb-3" style="font-size: 1.25rem; font-weight: bold;">{{ $article->nvkTieuDe }}</h5>
                            
                            <!-- Description: Limit it and make sure it doesn't overflow -->
                            <p class="card-text" style="font-size: 0.9rem; color: #555;">{{ Str::limit($article->nvkMoTa, 120) }}</p>
                            
                            <!-- Button: Style it to stand out -->
                            <a href="{{ route('nvkadmin.nvktintuc.nvkDetail', $article->id) }}" class="btn btn-primary btn-sm mt-2">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Back button: Center it with a nice margin -->
        <div class="text-center mt-4">
            <a href="{{ route('nvkAdmins.nvkdanhsachquantri.danhmuc') }}" class="btn btn-secondary btn-lg">Quay lại</a>
        </div>
    </div>
@endsection