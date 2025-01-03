<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NVK_Quan_Tri extends Model
{
    use HasFactory;

    protected $table="NVK_Quan_Tri";
    
    protected $fillable = ['nvkTaiKhoan', 'nvkMatKhau', 'nvkTrangThai'];

    // Tắt timestamp nếu không cần
    public $timestamps = false;
}
