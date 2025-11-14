<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
// ... route lainnya

Route::get('/home', function () {
    return view('home');    
});


Route::get('/about', [AboutController::class, 'showAbout'])->name('about');
