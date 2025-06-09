<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurhatinController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\IntipCeritaController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminAuthController;

// ====================
// Halaman Utama
// ====================

// Beranda (halaman utama), menggunakan controller StoriesController@index
Route::get('/', [StoriesController::class, 'index'])->name('beranda');

// ====================
// CURHATIN (Halaman & Form)
// ====================

// Halaman beranda khusus Curhatin
Route::get('beranda', [CurhatinController::class, 'beranda']);

// Form curhat
Route::get('curhat-dulu-yuk', [CurhatinController::class, 'curhat_dulu_yuk'])->name('curhat-dulu-yuk');

// Halaman kenalan tim
Route::get('kenalin-kami', [CurhatinController::class, 'kenalin_kami']);

// Halaman saran
Route::get('ada-saran', [CurhatinController::class, 'ada_saran']);

// Halaman post curhat (mungkin untuk admin/khusus)
Route::get('post-curhat', [CurhatinController::class, 'post_curhat']);

// ====================
// STORIES (Cerita)
// ====================

// Menampilkan cerita orang lain (StoriesController)
Route::get('/intip-cerita', [StoriesController::class, 'intipCeritaOrang'])->name('intip.cerita');

// Filter cerita berdasarkan kategori
Route::get('/kategori/{kategori}', [StoriesController::class, 'filterByKategori'])->name('kategori.filter');

// Form buat curhat baru
Route::get('/curhat', [StoriesController::class, 'create'])->name('curhat.create');

// Simpan curhat baru (POST)
Route::post('/curhat', [StoriesController::class, 'store'])->name('curhat.store');

// Menampilkan list cerita (IntipCeritaController)
Route::get('/intip-cerita-orang', [IntipCeritaController::class, 'index'])->name('intip-cerita');

// Detail cerita berdasarkan ID
Route::get('/cerita/{id}', [StoriesController::class, 'show'])->name('cerita.show');

// Tambahkan ini untuk hapus cerita
Route::delete('/cerita/{id}', [StoriesController::class, 'destroy'])->name('cerita.destroy');

// ====================
// AJAX Search Cerita
// ====================

// AJAX search cerita (gunakan salah satu saja, hapus yang duplikat)
Route::get('/ajax-search-cerita', [IntipCeritaController::class, 'ajaxSearch'])->name('ajax.search.cerita');

// ====================
// Saran
// ====================

// Simpan saran dari user (POST)
Route::post('/saran', [SaranController::class, 'store'])->name('saran.store');

// ====================
// Halaman Statis Lainnya
// ====================

// Halaman statis elfan
Route::get('/elfan', function () {
    return view('elfan');
});

// Halaman statis aldi
Route::get('/aldi', function () {
    return view('aldi');
});



// ====================
// Halaman Admin
// ====================


// Halaman login admin
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Halaman Dahsboard Admin (hanya untuk admin login)
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminDashboardController::class, 'profile'])->name('admin.profile');
});

// Endpoint AJAX untuk detail cerita (khusus admin, return JSON)
Route::get('/admin/ajax-cerita/{id}', [StoriesController::class, 'ajaxShow'])->middleware('auth:admin');

