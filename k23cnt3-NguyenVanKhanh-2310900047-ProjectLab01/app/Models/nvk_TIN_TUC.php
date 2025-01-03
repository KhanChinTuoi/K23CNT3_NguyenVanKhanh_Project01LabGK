<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nvk_TIN_TUC extends Model
{
    use HasFactory;

    protected $table = 'nvk_TIN_TUC';
    protected $primaryKey = 'id';
    public $incrementing = false; // Nếu nvknhacc không phải là auto-increment
    public $timestamps = true; // Đảm bảo là 'true' nếu bạn sử dụng timestamps
}
