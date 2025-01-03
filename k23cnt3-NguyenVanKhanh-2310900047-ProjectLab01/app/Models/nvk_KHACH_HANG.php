<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class nvk_KHACH_HANG extends Model
{
    use HasFactory;

    protected $table = 'nvk_KHACH_HANG';
    protected $primaryKey = 'nvkMaKhachHang'; // Đảm bảo rằng nvkMaKhachHang là khóa chính

    protected $fillable = [
        'nvkMaKhachHang', 'nvkHoTenKhachHang', 'nvkEmail', 'nvkMatKhau', 
        'nvkDienThoai', 'nvkDiaChi', 'nvkNgayDangKy', 'nvkTrangThai'
    ];

    public $incrementing = false; // Nếu nvkMaKhachHang không tự tăng thì bạn cần đặt false
    public $timestamps = true;

    protected $dates = ['nvkNgayDangKy'];

    public function setnvkMatKhauAttribute($value)
{
    if (!empty($value)) {
        $this->attributes['nvkMatKhau'] = Hash::make($value);
    }
}

}
