<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvk_CT_HOA_DON extends Model
{
    use HasFactory;

    protected $table = 'nvk_CT_HOA_DON';  // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'id';  // Xác định khóa chính của bảng (mặc định là 'id')

    public $timestamps = true;  // Laravel tự động quản lý các cột created_at và updated_at

    // Các trường có thể được gán hàng loạt
    protected $fillable = [
       'nvkHoaDonID',   // Đảm bảo có trường nvkHoaDonID ở đây
        'nvkSanPhamID',
        'nvkSoLuongMua',
        'nvkDonGiaMua',
        'nvkThanhTien',
        'nvkTrangThai',
    ];

    // Quan hệ giữa bảng nvk_CT_HOA_DON và bảng nvk_SAN_PHAM
 // Quan hệ với bảng nvk_HOA_DON
public function hoaDon()
{
    return $this->belongsTo(nvk_HOA_DON::class, 'nvkHoaDonID', 'id');
}

// Quan hệ với bảng nvk_SAN_PHAM
public function sanPham()
{
    return $this->belongsTo(NVKSanPham::class, 'nvkSanPhamID', 'id');
}
}
