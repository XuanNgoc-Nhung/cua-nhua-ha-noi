<?php

use App\Http\Controllers\YeuCauHoTroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', require resource_path('views/welcome/data.php'));
});
Route::get('/home', function () {
    return view('home');
});
Route::post('/yeu-cau-ho-tro', [YeuCauHoTroController::class, 'store'])->name('yeu-cau-ho-tro.store');
