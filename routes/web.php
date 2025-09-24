<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::view('/','web.home.index');

Route::prefix('p')->group(function() {
    Route::get('/tugas-fungsi', [Web\TentangController::class, 'tugasFungsi'])->name('web.tugasFungsi');
    Route::get('/profil-perusahaan', [Web\TentangController::class, 'profil'])->name('web.profil');
    Route::get('/biodata-komisaris', [Web\TentangController::class, 'biodataKomisaris'])->name('web.biodata-komisaris');
    Route::get('/biodata-direktur', [Web\TentangController::class, 'biodataDirektur'])->name('web.biodata-direktur');

    Route::get('/lhkpn', [Web\LhkpnController::class, 'index'])->name('web.lhkpn');
});

Route::get('/dokumen', [Web\DokumenController::class, 'index'])->name('web.dokumen');

//route auth
Route::post('/user/login', Auth\LoginController::class)->middleware('guest')->name('login');

Route::middleware('auth')->group(function () {
    Route::controller(Auth\OTPController::class)->group(function () {
        Route::get('/otp', 'otp');
        Route::post('/verify-otp', 'verifyOtp');
    });
});
