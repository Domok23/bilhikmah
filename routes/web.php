<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BerandaVideoController;
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

Route::get('/', [BerandaController::class, 'index']);
Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/alquran', [BerandaAlquranController::class, 'index']);
Route::get('/alquran/{nomor}', [BerandaAlquranController::class, 'show']);
Route::get('/isyarat', [BerandaIsyaratController::class, 'index']);


Route::resource('/artikel', BerandaArtikelController::class);
Route::resource('/video', BerandaVideoController::class);
Route::resource('/poster', BerandaPosterController::class);

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/isyarat', DashboardIsyaratController::class)->middleware('auth');
Route::resource('/dashboard/kategori', DashboardKategoriController::class)->middleware('auth');
Route::resource('/dashboard/poster', DashboardPosterController::class)->middleware('auth');
Route::resource('/dashboard/artikel', DashboardArtikelController::class)->middleware('auth');
Route::resource('/dashboard/video', DashboardVideoController::class)->middleware('auth');
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('auth');

// symbolic link use /storage-link (hosting)
Route::get('storage-link', function () {
    $targetFolder = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});
