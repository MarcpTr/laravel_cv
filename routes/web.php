<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactMessageController;

Route::get('/', function () {
    $data = include app_path('data/portfolio.php');

    $about = $data['about'];
    $projects = $data['projects'];
    $technologies = $data['technologies'];
    $links = $data['links'];

    return view('index', compact('about', 'projects', "technologies", 'links'));
});
Route::get('login', [LoginController::class, 'showLogin'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/contact', [ContactMessageController::class, 'store']);

Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admin/contacts', [AdminController::class, 'index'])->name('admin.contacts');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.contacts');
});
