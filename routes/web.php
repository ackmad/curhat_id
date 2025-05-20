<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CurhatinController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\IntipCeritaController;
use App\Http\Controllers\SaranController;


Route::get('/', function () {
    return view('beranda');
});

// CRUD CURHATIN

Route::get("beranda", [CurhatinController::class, "beranda"]);
Route::get("curhat-dulu-yuk", [CurhatinController::class, "curhat_dulu_yuk"]);
Route::get('/intip-cerita', [StoriesController::class, 'intipCeritaOrang'])->name('intip.cerita');
Route::get("kenalin-kami", [CurhatinController::class, "kenalin_kami"]);
Route::get("ada-saran", [CurhatinController::class, "ada_saran"]);
Route::get("post-curhat", [CurhatinController::class, "post_curhat"]);

Route::get('/', [StoriesController::class, 'index'])->name('beranda');
Route::get('/kategori/{kategori}', [StoriesController::class, 'filterByKategori'])->name('kategori.filter');
Route::get('/curhat', [StoriesController::class, 'create'])->name('curhat.create');
Route::post('/curhat', [StoriesController::class, 'store'])->name('curhat.store');
Route::get('/intip-cerita-orang', [IntipCeritaController::class, 'index'])->name('intip-cerita');
Route::get('/cerita/{id}', [StoriesController::class, 'show'])->name('cerita.show');
Route::get('/ajax-search-cerita', [IntipCeritaController::class, 'ajaxSearch'])->name('ajax.search.cerita');
Route::get('/ajax/search-cerita', [\App\Http\Controllers\IntipCeritaController::class, 'ajaxSearch'])->name('ajax.search.cerita');

Route::post('/saran', [SaranController::class, 'store'])->name('saran.store');

Route::get('/elfan', function () {
    return view('elfan');
});

Route::get('/aldi', function () {
    return view('aldi');
});

