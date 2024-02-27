<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiUserController;
use App\Http\Controllers\ApiVideoController;
use App\Http\Controllers\ApiPosterController;
use App\Http\Controllers\ApiIsyaratController;
use App\Http\Controllers\ApiArtikelController;
use App\Http\Controllers\ApiKategoriController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// User
// Route::apiResource('/user', ApiUserController::class);

// Kategori
Route::apiResource('/kategori', ApiKategoriController::class)->names([
    'index' => 'kategori.index',
    'store' => 'kategori.store',
    'show' => 'kategori.show',
    'update' => 'kategori.update',
    'destroy' => 'kategori.destroy',
]);

// Artikel
Route::apiResource('/artikel', ApiArtikelController::class)->names([
    'index' => 'artikel.index',
    'store' => 'artikel.store',
    'show' => 'artikel.show',
    'update' => 'artikel.update',
    'destroy' => 'artikel.destroy',
]);

// Poster
Route::apiResource('/poster', ApiPosterController::class)->names([
    'index' => 'poster.index',
    'store' => 'poster.store',
    'show' => 'poster.show',
    'update' => 'poster.update',
    'destroy' => 'poster.destroy',
]);

// Video
Route::apiResource('/video', ApiVideoController::class)->names([
    'index' => 'video.index',
    'store' => 'video.store',
    'show' => 'video.show',
    'update' => 'video.update',
    'destroy' => 'video.destroy',
]);

// Isyarat
Route::apiResource('/isyarat', ApiIsyaratController::class)->names([
    'index' => 'isyarat.index',
    'store' => 'isyarat.store',
    'show' => 'isyarat.show',
    'update' => 'isyarat.update',
    'destroy' => 'isyarat.destroy',
]);