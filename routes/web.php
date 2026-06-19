<?php

use App\Http\Controllers\YeuCauHoTroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/yeu-cau-ho-tro', [YeuCauHoTroController::class, 'store'])->name('yeu-cau-ho-tro.store');
