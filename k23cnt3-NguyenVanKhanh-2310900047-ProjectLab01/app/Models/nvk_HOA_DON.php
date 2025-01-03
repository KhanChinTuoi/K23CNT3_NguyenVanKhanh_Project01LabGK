<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvk_HOA_DON extends Model
{
    use HasFactory;

    protected $table = 'nvk_HOA_DON';  // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'id';  // Xác định khóa chính của bảng (mặc định là 'id')

    public $timestamps = true;  // Laravel tự động quản lý các cột created_at và updated_at

    // Các trường có thể được gán hàng loạt
    protected $fillable = [
        'nvkMaHoaDon',  // Thêm trường nvkMaHoaDon vào mảng fillable
        'nvkMaKhachHang',
        'nvkNgayHoaDon',
        'nvkNgayNhan',
        'nvkHoTenKhachHang',
        'nvkEmail',
        'nvkDienThoai',
        'nvkDiaChi',
        'nvkTongGiaTri',
        'nvkTrangThai',
    ];

    // Quan hệ với bảng nvk_KHACH_HANG
    public function khachHang()
    {
        return $this->belongsTo(nvk_KHACH_HANG::class, 'nvkMaKhachHang', 'id');
    }

    // Quan hệ với bảng nvk_CT_HOA_DON
    public function chiTietHoaDon()
    {
        return $this->hasMany(nvk_CT_HOA_DON::class, 'nvkHoaDonID', 'id');
    }
}
