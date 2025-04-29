<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CurhatinController;

Route::get('/', function () {
    return view('welcome');
});

// CRUD CURHATIN

Route::get("beranda", [CurhatinController::class, "beranda"]);
Route::get("curhat-dulu-yuk", [CurhatinController::class, "curhat_dulu_yuk"]);
Route::get("intip-cerita-orang", [CurhatinController::class, "intip_cerita_orang"]);
Route::get("kenalin-kami", [CurhatinController::class, "kenalin_kami"]);
Route::get("ada-saran", [CurhatinController::class, "ada_saran"]);

