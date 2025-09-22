<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

if (env('APP_ENV') == 'production') {
    $domain = 'tulangbawangkab.go.id';
} else {
    $domain = 'localhost';
}

Route::domain('{subdomain}.' . $domain)->group(function () {
    // Route::domain('{subdomain}.localhost')->group(function () {
    Route::middleware(['auth', 'operator'])->group(function () {
        Route::prefix('cms')->group(function () {
            Route::get('/dashboard', CMS\DashboardController::class)->name('cms-dashboard');

            //route berita
            Route::controller(CMS\BeritaController::class)->group(function () {
                Route::get('/berita', 'index')->name('cms-berita');
                Route::get('/berita/create', 'create')->name('cms-berita-create');
                Route::post('/berita/store', 'store')->name('cms-berita-store');
                Route::get('/berita/edit/{id}', 'edit')->name('cms-berita-edit');
                Route::post('/berita/update/{id}', 'update')->name('cms-berita-update');
                Route::post('/berita/hapus/{id}', 'delete')->name('cms-berita-delete');
            });

        //route kategori berita
            Route::controller(CMS\KategoriController::class)->group(function () {
                Route::get('/kategori', 'index')->name('cms-kategori');
                Route::post('/kategori/store', 'store')->name('cms-kategori-store');
                Route::post('/kategori/update/{id}', 'update')->name('cms-kategori-update');
                Route::post('/kategori/hapus/{id}', 'delete')->name('cms-kategori-delete');
            });

            //route menu
            Route::controller(CMS\MenuController::class)->group(function () {
                Route::get('/menu', 'index')->name('cms-menu');
                Route::post('/menu/store', 'store')->name('cms-menu-store');
                Route::post('/menu/update/{id}', 'update')->name('cms-menu-update');
                Route::post('/menu/hapus/{id}', 'delete')->name('cms-menu-delete');
            });

            //route submenu
            Route::controller(CMS\SubmenuController::class)->group(function () {
                Route::get('/menu/submenu/{menu_id}', 'index')->name('cms-submenu');
                Route::post('/submenu/store', 'store')->name('cms-submenu-store');
                Route::post('/submenu/update/{id}', 'update')->name('cms-submenu-update');
                Route::post('/submenu/hapus/{id}', 'delete')->name('cms-submenu-delete');
            });

            //route halaman
            Route::controller(CMS\HalamanController::class)->group(function () {
                Route::get('/halaman', 'index')->name('cms-halaman');
                Route::get('/halaman/create', 'create')->name('cms-halaman-create');
                Route::post('/halaman/store', 'store')->name('cms-halaman-store');
                Route::get('/halaman/edit/{id}', 'edit')->name('cms-halaman-edit');
                Route::post('/halaman/update/{id}', 'update')->name('cms-halaman-update');
                Route::post('/halaman/hapus/{id}', 'delete')->name('cms-halaman-delete');
            });

            //route berkas
            Route::controller(CMS\BerkasController::class)->group(function () {
                Route::get('/berkas', 'index')->name('cms-berkas');
                Route::post('/berkas/store', 'store')->name('cms-berkas-store');
                Route::post('/berkas/hapus/{id}', 'delete')->name('cms-berkas-delete');
            });

            //route pengaturan
            Route::controller(CMS\PengaturanController::class)->group(function () {
                Route::get('/pengaturan', 'index')->name('cms-pengaturan');
                Route::post('/pengaturan/update', 'update')->name('cms-pengaturan-update');
            });

            //route user
            Route::controller(CMS\UserController::class)->group(function () {
                Route::get('/user/edit', 'edit')->name('cms-user-edit');
                Route::post('/user/update-password', 'updatePassword')->name('cms-user-update-password');
            });

            //route Saran dan Aduan
            Route::controller(CMS\HalamanSaranController::class)->group(function () {
                Route::get('/saran', 'index')->name('cms-saran');
                Route::post('/saran/hapus/{id}', 'delete')->name('cms-saran-delete');
            });

            //route Saran dan Aduan
            Route::controller(CMS\HalamanIkmController::class)->group(function () {
                Route::get('/ikm', 'index')->name('cms-ikm');
                Route::post('/ikm/hapus/{id}', 'delete')->name('cms-ikm-delete');
            });

            //route upload konten gambar ketika membuat berita
            Route::post('/upload/gambar', [CMS\ImageController::class, 'upload'])->name('cms-upload-gambar');
            Route::post('/hapus/gambar', [CMS\ImageController::class, 'delete'])->name('cms-upload-delete');


            //route Instansi
            Route::controller(CMS\InstansiController::class)->group(function () {
                Route::get('/instansi', 'index')->name('cms-instansi');
                Route::get('/instansi/create', 'create')->name('cms-instansi-create');
                Route::post('/instansi/store', 'store')->name('cms-instansi-store');
                Route::get('/instansi/edit/{id}', 'edit')->name('cms-instansi-edit');
                Route::put('/instansi/update/{id}', 'update')->name('cms-instansi-update');
                Route::delete('/instansi/hapus/{id}', 'delete')->name('cms-instansi-delete');
            });


            //route Layanan
            Route::controller(CMS\LayananController::class)->group(function () {
                Route::get('/layanan', 'index')->name('cms-layanan');
                Route::get('/layanan/create', 'create')->name('cms-layanan-create');
                Route::post('/layanan/store', 'store')->name('cms-layanan-store');
                Route::get('/layanan/edit/{id}', 'edit')->name('cms-layanan-edit');
                Route::put('/layanan/update/{id}', 'update')->name('cms-layanan-update');
                Route::delete('/layanan/hapus/{id}', 'delete')->name('cms-layanan-delete');
            });

            //route Layanan-details
            Route::controller(CMS\LayananDetailsController::class)->group(function () {
                Route::get('/layanan-details', 'index')->name('cms-layanan-details');
                Route::get('/layanan-details/create/{instansi_id}', 'create')->name('cms-layanan-details-create');
                Route::post('/layanan-details/store', 'store')->name('cms-layanan-details-store');
                Route::get('/layanan-details/edit/{id}', 'edit')->name('cms-layanan-details-edit');
                Route::put('/layanan-details/update/{id}', 'update')->name('cms-layanan-details-update');
                Route::delete('/layanan-details/hapus/{id}', 'delete')->name('cms-layanan-details-delete');
                Route::get('/layanan-details/data-show/{instansi_id}', 'index')->name('cms-layanan-details-show');
            });


            //route Fasilitas
            Route::controller(CMS\FasilitasController::class)->group(function () {
                Route::get('/fasilitas', 'index')->name('cms-fasilitas');
                Route::get('/fasilitas/create', 'create')->name('cms-fasilitas-create');
                Route::post('/fasilitas/store', 'store')->name('cms-fasilitas-store');
                Route::get('/fasilitas/edit/{id}', 'edit')->name('cms-fasilitas-edit');
                Route::put('/fasilitas/update/{id}', 'update')->name('cms-fasilitas-update');
                Route::delete('/fasilitas/hapus/{id}', 'delete')->name('cms-fasilitas-delete');
            });
        });
    });
});
