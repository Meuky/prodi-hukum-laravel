<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tentang', [App\Http\Controllers\HomeController::class, 'tentang'])->name('tentang');
Route::get('/dosen', [App\Http\Controllers\HomeController::class, 'dosen'])->name('dosen');
Route::get('/berita', [App\Http\Controllers\HomeController::class, 'berita'])->name('berita');
Route::get('/pendaftaran', [App\Http\Controllers\HomeController::class, 'pendaftaran'])->name('pendaftaran');
Route::post('/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'store'])->name('pendaftaran.store');

Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('admin/berita', App\Http\Controllers\BeritaController::class)->names('admin.berita');
    Route::resource('admin/dosen', App\Http\Controllers\DosenController::class)->names('admin.dosen');
    Route::get('/admin/pendaftaran', [App\Http\Controllers\PendaftaranController::class, 'adminIndex'])->name('admin.pendaftaran.index');
});
