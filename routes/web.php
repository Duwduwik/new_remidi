<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WarungController; // Pastikan ini diimpor

// ... rute lainnya

// Rute untuk menampilkan data warung di halaman utama (Home)
Route::get('/', [WarungController::class, 'home'])->name('home');

// Jika Anda ingin rute /warungs tetap ada, gunakan ini:
Route::get('/warungs', [WarungController::class, 'home'])->name('warungs.index');


Route::get('/about', [AboutController::class, 'showAbout'])->name('about');