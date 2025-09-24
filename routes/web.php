<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\TentangController;
use App\Http\Controllers\Web\LhkpnController;
use App\Http\Controllers\Web\DokumenController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\OTPController;

Route::view('/', 'web.home.index');

Route::prefix('p')->group(function() {
    Route::get('/tugas-fungsi', [TentangController::class, 'tugasFungsi'])->name('web.tugas-fungsi');
    Route::get('/profil-perusahaan', [TentangController::class, 'profil'])->name('web.profil');
    Route::get('/biodata-komisaris', [TentangController::class, 'biodataKomisaris'])->name('web.biodata-komisaris');
    Route::get('/biodata-direktur', [TentangController::class, 'biodataDirektur'])->name('web.biodata-direktur');

    Route::get('/lhkpn', [LhkpnController::class, 'index'])->name('web.lhkpn');
});

Route::get('/dokumen', [DokumenController::class, 'index'])->name('web.dokumen');

// route auth
Route::post('/user/login', LoginController::class)->middleware('guest')->name('login');

Route::middleware('auth')->group(function () {
    Route::controller(OTPController::class)->group(function () {
        Route::get('/otp', 'otp');
        Route::post('/verify-otp', 'verifyOtp');
    });
});
