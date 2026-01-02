<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/laporkan-sekarang', function () {
    return view('laporan.create');
})->name('laporan.create');

Route::get('/login', function () {
    return view('login');
})->name('login');