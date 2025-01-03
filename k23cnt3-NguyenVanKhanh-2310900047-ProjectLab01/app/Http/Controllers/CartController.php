<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Lấy thông tin sản phẩm từ request
        $productId = $request->input('product_id');
        $productName = $request->input('product_name');
        
        // Kiểm tra xem giỏ hàng đã tồn tại trong session chưa
        $cart = Session::get('cart', []);
        
        // Nếu sản phẩm đã có trong giỏ hàng, tăng số lượng
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            // Nếu chưa có, thêm sản phẩm vào giỏ hàng
            $cart[$productId] = [
                'name' => $productName,
                'quantity' => 1
            ];
        }

        // Lưu giỏ hàng vào session
        Session::put('cart', $cart);

        // Trả về số lượng giỏ hàng cập nhật
        return response()->json(['cart_count' => count($cart)]);
    }
}
