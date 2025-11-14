<?php

use Illuminate\support\facades\route;
use App\Http\Controllers\WarungController;

Route::get('/', [WarungController::class, 'home']);

