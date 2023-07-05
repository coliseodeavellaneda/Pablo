<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MensajeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::redirect('/', '/admin/product');
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('user', UserController::class)->middleware('accessrole');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/', [MensajeController::class, 'store']);
Auth::routes();
