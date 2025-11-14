<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;



Route::get('/', [CarroController::class, 'index']);
Route::resource('carros', CarroController::class);

Route::resource('carros', CarroController::class);