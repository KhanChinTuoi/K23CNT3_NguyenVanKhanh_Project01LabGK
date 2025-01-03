<div class="product-details">
    <img src="{{ asset('storage/'.$sanPham->nvkHinhAnh) }}" alt="{{ $sanPham->nvkTenSanPham }}" class="product-image">
    <h2 class="product-title">{{ $sanPham->nvkTenSanPham }}</h2>
    <p class="product-price">Giá: {{ number_format($sanPham->nvkDonGia, 0, ',', '.') }} VND</p>
    
    <form action="{{ route('nvklogin.storeThanhtoan') }}" method="POST" class="payment-form">
        @csrf
        <input type="hidden" name="product_id" value="{{ $sanPham->id }}">
        
        <div class="form-group">
            <label for="quantity">Số lượng:</label>
            <input type="number" name="nvkSoLuong" id="quantity" min="1" value="1" class="form-control">
        </div>
        
        <button type="submit" class="btn">Thanh toán</button>
    </form>
    
   
@if(isset($tongTien))
    <h3 class="total-price" style="text-align: center">Tổng tiền: {{ number_format($tongTien, 0, ',', '.') }} VND</h3>
@endif

<style>
    .product-details {
        max-width: 400px;
        margin: 20px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .product-image {
        width: 100%;
        max-height: 300px;
        object-fit: cover;
        border-radius: 8px;
    }

    .product-title {
        font-size: 24px;
        font-weight: bold;
        margin-top: 15px;
        color: #333;
    }

    .product-price {
        font-size: 18px;
        color: #ff5733;
        margin: 10px 0;
    }

    .payment-form {
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .form-group label {
        font-size: 16px;
        font-weight: bold;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
    }

    .form-control:focus {
        border-color: #ff5733;
        outline: none;
    }

    .btn {
        padding: 12px 20px;
        background-color: #ff5733;
        color: white;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #e14f2d;
    }

    .btn1 {
        padding: 12px 20px;
        background-color: blue;
        color: white;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s;
    }

    .btn1:hover {
        background-color: #3b82f6;
    }

    .total-price {
        margin-top: 20px;
        font-size: 20px;    
        font-weight: bold;
        color: #333;
    }
</style>