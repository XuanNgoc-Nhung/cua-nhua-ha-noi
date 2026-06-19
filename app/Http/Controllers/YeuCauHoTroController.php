<?php

namespace App\Http\Controllers;

use App\Models\YeuCauHoTro;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class YeuCauHoTroController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'ten_khach_hang' => ['required', 'string', 'max:255'],
            'sdt_khach_hang' => ['required', 'string', 'max:20'],
            'noi_dung_yeu_cau' => ['nullable', 'string', 'max:2000'],
        ], [
            'ten_khach_hang.required' => 'Vui lòng nhập họ và tên.',
            'sdt_khach_hang.required' => 'Vui lòng nhập số điện thoại.',
        ]);

        $yeuCau = YeuCauHoTro::create([
            ...$validated,
            'trang_thai' => YeuCauHoTro::TRANG_THAI_CHUA_HO_TRO,
        ]);

        return response()->json([
            'message' => 'Gửi yêu cầu tư vấn thành công. Chúng tôi sẽ liên hệ lại sớm nhất.',
            'data' => $yeuCau,
        ], 201);
    }
}
