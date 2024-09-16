<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;



Route::get('/', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/products', [AdminController::class, 'products']);
Route::get('/admin/product/{id}', [AdminController::class, 'show']);
Route::put('/admin/products/update/{id}', [AdminController::class, 'update']);
Route::get('/admin/products/create', [AdminController::class, 'create']);
Route::post('/products', [AdminController::class, 'store']);


Route::get('/admin/categories', [CategoryController::class, 'index']);
Route::get('/admin/categories/create', [CategoryController::class, 'create']);
Route::post('/categories', [CategoryController::class, 'store']);

Route::get('/user',[UserController::class, 'index'])->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
