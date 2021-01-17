<?php

use App\Http\Controllers\{HomeController,InfoController};
use Illuminate\Support\Facades\Route;

Route::get('/' ,[ InfoController::class, 'infoIndonesia'])->name('home');
Route::get('provinsi' ,[ InfoController::class, 'infoWilayah'])->name('provinsi');
Route::get('global' ,[ InfoController::class, 'infoGlobal'])->name('global');
Route::get('info' ,[ InfoController::class, 'info'])->name('info');
// Route::get('/' ,HomeController::class)->name('home');
