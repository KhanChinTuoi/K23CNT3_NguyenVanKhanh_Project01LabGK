@extends('_layouts.frontend.user')

@section('title', 'Trang Chủ')

@section('content-body')
    <div class="container">
        <h1>Chào mừng đến với Trang Chủ</h1>
    
        <p>Đây là giao diện người dùng, nơi bạn có thể xem thông tin và tương tác với các tính năng của website.</p>

        <!-- Danh sách sản phẩm -->
        <div class="row">
            @foreach ($sanPhams as $sanPham)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $sanPham->nvkHinhAnh) }}" class="card-img-top product-img" alt="{{ $sanPham->nvkTenSanPham }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $sanPham->nvkTenSanPham }}</h5>
                            <p class="card-text"><strong>{{ number_format($sanPham->nvkDonGia, 0, ',', '.') }} VND</strong></p>
                            <p class="card-text"><small class="text-muted">Số lượng còn lại: {{ $sanPham->nvkSoLuong }}</small></p>
                            
                            <!-- Nút xem chi tiết -->
                            <a href="{{ route('nvklogin.show', $sanPham->id) }}" class="btn btn-primary btn-sm">Xem Chi Tiết</a>

                            <!-- Nút Mua và icon giỏ hàng -->
                            <a href="{{route('nvklogin.login')}} "   
                               class="btn btn-success btn-sm" 
                              >
                                <i class="fa fa-shopping-cart"></i> Mua
                            </a>

                            <!-- Thêm vào giỏ hàng -->
                            <a href="{{route('nvklogin.login')}}"><button type="button" class="btn btn-warning btn-sm add-to-cart-btn" data-id="{{ $sanPham->id }}" data-name="{{ $sanPham->nvkTenSanPham }}">
                                <i class="fa fa-cart-plus"></i> Thêm vào giỏ
                            </button>
                        </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{ $sanPhams->links('pagination::bootstrap-5') }}
    </div>
@endsection

<!-- Thêm CSS cho layout sản phẩm -->
<style>
    .product-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .card-body {
        text-align: center;
    }

    .btn-primary, .btn-success, .btn-warning {
        margin-top: 10px;
    }

    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    @media (max-width: 767px) {
        .product-img {
            height: 200px;
        }
    }

    /* Custom styling for the "Add to Cart" button */
    .add-to-cart-btn {
        background-color: #ff9800;
        color: white;
    }

    .add-to-cart-btn:hover {
        background-color: #f57c00;
        cursor: pointer;
    }
</style>

<!-- JavaScript to handle confirmation and AJAX -->
<script>
    // Function to handle adding items to cart
    document.querySelectorAll('.add-to-cart-btn').forEach(function (btn) {
        btn.addEventListener('click', function () {
            var productName = btn.getAttribute('data-name');
            var productId = btn.getAttribute('data-id');

            var userConfirmed = confirm('Bạn có muốn thêm "' + productName + '" vào giỏ hàng không?');
            
            if (userConfirmed) {
                // AJAX request to add product to the cart
                fetch('/add-to-cart/' + productId, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ product_id: productId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Sản phẩm đã được thêm vào giỏ hàng!');
                        // Cập nhật giỏ hàng (nếu cần)
                        // Ví dụ, cập nhật số lượng giỏ hàng hiển thị trên trang
                        document.querySelector('.cart-count').innerText = data.cart_count;
                    } else {
                        alert('Có lỗi xảy ra, vui lòng thử lại!');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Có lỗi xảy ra, vui lòng thử lại!');
                });
            }
        });
    });
</script>