<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LaporanPenjualanController;

Route::get('/laporan', LaporanPenjualanController::class);

Route::get('/',function(){
    return view('welcome');
});

//Routing menuju Controller
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/{id}', [ProdukController::class, 'show']);
