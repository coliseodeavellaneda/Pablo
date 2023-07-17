<?php

use App\Http\Controllers\CanchaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MensajeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::redirect('/', '/admin/cancha');
    Route::resource('cancha', CanchaController::class);
    Route::resource('user', UserController::class);
    
    // Route::resource('category', CategoryController::class);
    // Route::resource('role', RoleController::class);
    // Route::resource('permission', PermissionController::class);
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [MensajeController::class, 'store']);
Auth::routes();
