<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MensajeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;






Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [MensajeController::class, 'store']);
Auth::routes();
