<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nvk_Loai_san_pham extends Model
{
    use HasFactory;

    protected $table="Nvk_Loai_san_pham";
    protected $primaryKey = 'id';
    public $incrementing = false; // Nếu nvknhacc không phải là auto-increment
    public $timestamps = true; // Đảm bảo là 'true' nếu bạn sử dụng timestamps
}
