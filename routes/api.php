<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(API\InstagramController::class)->group(function () {
    Route::get('/instagram/{subdomain}', 'index');
    Route::get('/instagram/{subdomain}/show/{id}', 'show');
});

//jadwal sholat
Route::get('/v2/jadwal-sholat', API\JadwalsholatController::class);
Route::get('/v1/otp', API\OTPController::class);
