<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NVKSanPham extends Model
{
    use HasFactory;
    protected $table="nvk_san_pham";
    protected $primaryKey = 'id';
    public $timestamps = true;

    
    // Các trường có thể được gán hàng loạt
    protected $fillable = [
        'nvkMaSanPham',
        'nvkTenSanPham',
        'nvkHinhAnh',
        'nvkSoLuong',
        'nvkDonGia',
        'nvkMaLoai',
        'nvkTrangThai',
    ];
    public function chiTietHoaDon()
    {
        return $this->hasMany(nvk_CT_HOA_DON::class, 'nvkSanPhamID','id');
    }
}
