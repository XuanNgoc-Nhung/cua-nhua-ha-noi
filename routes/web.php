<?php

use App\Http\Controllers\YeuCauHoTroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', require resource_path('views/welcome/data.php'));
});
Route::post('/yeu-cau-ho-tro', [YeuCauHoTroController::class, 'store'])->name('yeu-cau-ho-tro.store');
Route::get('/download', function () {
    return view('download');
})->name('download.index');

Route::get('/download/proxy', function () {
    $url = request()->query('url');

    if (! is_string($url) || ! filter_var($url, FILTER_VALIDATE_URL)) {
        abort(400, 'URL không hợp lệ.');
    }

    if (! in_array(parse_url($url, PHP_URL_SCHEME), ['http', 'https'], true)) {
        abort(400, 'Chỉ hỗ trợ URL http/https.');
    }

    $context = stream_context_create([
        'http' => [
            'timeout' => 30,
            'user_agent' => 'Mozilla/5.0 (compatible; ImageDownloader/1.0)',
        ],
        'ssl' => [
            'verify_peer' => true,
            'verify_peer_name' => true,
        ],
    ]);

    $contents = @file_get_contents($url, false, $context);

    if ($contents === false) {
        abort(502, 'Không thể tải hình ảnh từ URL.');
    }

    $contentType = 'application/octet-stream';
    if (isset($http_response_header)) {
        foreach ($http_response_header as $header) {
            if (stripos($header, 'Content-Type:') === 0) {
                $contentType = trim(substr($header, strlen('Content-Type:')));
                break;
            }
        }
    }

    return response($contents, 200, [
        'Content-Type' => $contentType,
        'Cache-Control' => 'no-store',
    ]);
})->name('download.proxy');