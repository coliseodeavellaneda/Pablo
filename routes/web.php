<?php

use App\Http\Controllers\CanchaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->group(function () {
    Route::redirect('/', '/admin/cancha')->middleware('auth');
    Route::resource('cancha', CanchaController::class)->middleware('auth');
    Route::resource('user', UserController::class)->middleware(['auth', 'roleadmin']);
    Route::resource('role', RoleController::class)->middleware(['auth', 'roleadmin']);
    Route::resource('permission', PermissionController::class)->middleware(['auth', 'roleadmin']);
    
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [MensajeController::class, 'store']);
Route::get('/reservar', [ReservasController::class, 'reserva'])->middleware('auth');
Auth::routes();
