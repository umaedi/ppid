<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::view('/','web.home.index');

Route::prefix('p')->group(function() {
    Route::get('/profil-perusahaan', [Web\TentangController::class, 'profil'])->name('web.profil');
    Route::get('/biodata-komisaris', [Web\TentangController::class, 'biodataKomisaris'])->name('web.biodata-komisaris');
});
//route auth
Route::post('/user/login', Auth\LoginController::class)->middleware('guest')->name('login');

Route::middleware('auth')->group(function () {
    Route::controller(Auth\OTPController::class)->group(function () {
        Route::get('/otp', 'otp');
        Route::post('/verify-otp', 'verifyOtp');
    });
});
//akhir route auth

Route::get('/puskesmas', [Web\PuskesController::class, 'index'])->name('puskes');
Route::get('/puskesmas/{subdomain}/detail', [Web\PuskesController::class, 'showDetailPuskesmas']);


// Route::middleware('subdomain')->group(function () {
//     if (env('APP_ENV') == 'production') {
//         $domain = 'tulangbawangkab.go.id';
//     } else {
//         $domain = 'localhost';
//     }


//     Route::domain(config('services.subdomain') . '.' . $domain)->group(function () {
//         require __DIR__ . '/mpp.php';
//     });

//     Route::domain('{subdomain}.' . $domain)->group(function () {
//         // Route::domain('{subdomain}.localhost')->group(function () {
//         Route::get('/', Web\HomeController::class)->name('home');

//         Route::controller(Web\BeritaController::class)->group(function () {
//             Route::get('/berita', 'index')->name('berita');
//             Route::get('/berita/{slug}', 'show')->name('berita.show');
//         });

//         Route::controller(Web\KategoriController::class)->group(function () {
//             Route::get('/kategori/{slug}', 'index')->name('berita.index');
//         });

//         Route::controller(Web\HalamanController::class)->group(function () {
//             Route::get('/halaman', 'index')->name('kontak');
//             Route::get('/halaman/{slug}', 'show')->name('halaman.show');
//         });

//         Route::controller(Web\BerkasController::class)->group(function () {
//             Route::get('/berkas', 'index')->name('berkas');
//         });

//         Route::controller(Web\HalamanSaranController::class)->group(function () {
//             Route::get('/saran', 'index')->name('saran');
//             Route::post('/saran/store', 'store')->name('saran.store');
//         });

//         Route::controller(Web\HalamanSurveiController::class)->group(function () {
//             Route::get('/survei', 'index')->name('survei');
//         });

//         Route::controller(Web\HalamanIkmController::class)->group(function () {
//             Route::get('/ikm', 'index')->name('ikm');
//             Route::post('/ikm/store', 'store')->name('ikm.store');
//         });
//     });
// });

//route untuk menampilkan asset file
// Route::controller(Web\FileController::class)->group(function () {
//     Route::get('files/{type}/{year}/{filename}', 'thumbnail')->name('thumbnail');
//     Route::get('files/{filename}', 'konten')->name('konten');
//     Route::get('photo-pimpinan/{filename}', 'photoPimpinan')->name('photo-pimpinan');

//     // berkas 
//     Route::get('dokumen/{filename}', 'berkas')->name('dokumen');
// });

//module route mpp



// if(request()->subdomain == 'config('services.subdomain')') {


// } 

//route untuk menampilkan asset file
// Route::controller(Web\FileController::class)->group(function () {
//     Route::get('files/{type}/{year}/{filename}', 'thumbnail')->name('thumbnail');
//     Route::get('files/{filename}', 'konten')->name('konten');
//     Route::get('photo-pimpinan/{filename}', 'photoPimpinan')->name('photo-pimpinan');
//     Route::get('mpp-instansi/{filename}', 'mppInstansi')->name('mpp-instansi');
//     Route::get('mpp-fasilitas/{filename}', 'mppFasilitas')->name('mpp-fasilitas');
// });
