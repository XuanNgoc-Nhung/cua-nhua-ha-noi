<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'ten_khach_hang',
    'sdt_khach_hang',
    'noi_dung_yeu_cau',
    'trang_thai',
])]
class YeuCauHoTro extends Model
{
    public const TRANG_THAI_CHUA_HO_TRO = 'chưa hỗ trợ';

    public const TRANG_THAI_DA_HO_TRO = 'đã hỗ trợ';

    protected $table = 'yeu_cau_ho_tro';
}
