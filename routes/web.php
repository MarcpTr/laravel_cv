<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [LoginController::class, 'showLogin'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/admin/header', [AdminController::class, 'storeHeader'])->name('admin.storeHeader');
    Route::post('/admin/technology', [AdminController::class, 'storeTechnology'])->name('admin.storeTechnology');
    Route::post('/admin/description', [AdminController::class, 'storeDescription'])->name('admin.storeDescription');
    Route::post('/admin/url', [AdminController::class, 'storeUrl'])->name('admin.storeUrl');
    Route::post('/admin/project', [AdminController::class, 'storeProject'])->name('admin.storeProject');
    Route::post('/admin/project-technology', [AdminController::class, 'storeProjectTechnology'])->name('admin.storeProjectTechnology');
    
    
    Route::get('/admin/messages', [AdminController::class, 'showMessages'])->name('messages');
});
