<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BerandaVideoController;
use App\Http\Controllers\DashboardApiController;
use App\Http\Controllers\BerandaPosterController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\BerandaAlquranController;
use App\Http\Controllers\BerandaArtikelController;
use App\Http\Controllers\BerandaIsyaratController;
use App\Http\Controllers\DashboardVideoController;
use App\Http\Controllers\DashboardPosterController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DashboardIsyaratController;
use App\Http\Controllers\DashboardKategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Autentikasi
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/api-docs', [DashboardApiController::class, 'index'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('/dashboard/artikel', DashboardArtikelController::class)->names([
        'index' => 'dashboard.artikel.index',
        'create' => 'dashboard.artikel.create',
        'store' => 'dashboard.artikel.store',
        'show' => 'dashboard.artikel.show',
        'edit' => 'dashboard.artikel.edit',
        'update' => 'dashboard.artikel.update',
        'destroy' => 'dashboard.artikel.destroy',
    ]);

    Route::resource('/dashboard/video', DashboardVideoController::class)->names([
        'index' => 'dashboard.video.index',
        'create' => 'dashboard.video.create',
        'store' => 'dashboard.video.store',
        'show' => 'dashboard.video.show',
        'edit' => 'dashboard.video.edit',
        'update' => 'dashboard.video.update',
        'destroy' => 'dashboard.video.destroy',
    ]);

    Route::resource('/dashboard/poster', DashboardPosterController::class)->names([
        'index' => 'dashboard.poster.index',
        'create' => 'dashboard.poster.create',
        'store' => 'dashboard.poster.store',
        'show' => 'dashboard.poster.show',
        'edit' => 'dashboard.poster.edit',
        'update' => 'dashboard.poster.update',
        'destroy' => 'dashboard.poster.destroy',
    ]);

    Route::resource('/dashboard/isyarat', DashboardIsyaratController::class)->names([
        'index' => 'dashboard.isyarat.index',
        'create' => 'dashboard.isyarat.create',
        'store' => 'dashboard.isyarat.store',
        'show' => 'dashboard.isyarat.show',
        'edit' => 'dashboard.isyarat.edit',
        'update' => 'dashboard.isyarat.update',
        'destroy' => 'dashboard.isyarat.destroy',
    ]);

    Route::resource('/dashboard/kategori', DashboardKategoriController::class)->names([
        'index' => 'dashboard.kategori.index',
        'create' => 'dashboard.kategori.create',
        'store' => 'dashboard.kategori.store',
        'show' => 'dashboard.kategori.show',
        'edit' => 'dashboard.kategori.edit',
        'update' => 'dashboard.kategori.update',
        'destroy' => 'dashboard.kategori.destroy',
    ]);

    Route::resource('/dashboard/user', DashboardUserController::class)->names([
        'index' => 'dashboard.user.index',
        'create' => 'dashboard.user.create',
        'store' => 'dashboard.user.store',
        'show' => 'dashboard.user.show',
        'edit' => 'dashboard.user.edit',
        'update' => 'dashboard.user.update',
        'destroy' => 'dashboard.user.destroy',
    ]);
});

// Beranda
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/beranda', [BerandaController::class, 'index']);

Route::get('/alquran', [BerandaAlquranController::class, 'index']);
Route::get('/alquran/{nomor}', [BerandaAlquranController::class, 'show']);

Route::get('/isyarat', [BerandaIsyaratController::class, 'index']);

Route::get('/artikel', [BerandaArtikelController::class, 'index'])->name('beranda-artikel.index');
Route::get('/artikel/{id}', [BerandaArtikelController::class, 'show'])->name('beranda-artikel.show');

Route::get('/video', [BerandaVideoController::class, 'index'])->name('beranda-video.index');
Route::get('/video/{id}', [BerandaVideoController::class, 'show'])->name('beranda-video.show');

Route::get('/poster', [BerandaPosterController::class, 'index'])->name('beranda-poster.index');

// symbolic link use /storage-link (hosting)
Route::get('storage-link', function () {
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});