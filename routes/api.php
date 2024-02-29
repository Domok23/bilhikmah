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
    'index' => 'api.kategori.index',
    'store' => 'api.kategori.store',
    'show' => 'api.kategori.show',
    'update' => 'api.kategori.update',
    'destroy' => 'api.kategori.destroy',
]);

// Artikel
Route::apiResource('/artikel', ApiArtikelController::class)->names([
    'index' => 'api.artikel.index',
    'store' => 'api.artikel.store',
    'show' => 'api.artikel.show',
    'update' => 'api.artikel.update',
    'destroy' => 'api.artikel.destroy',
]);

// Poster
Route::apiResource('/poster', ApiPosterController::class)->names([
    'index' => 'api.poster.index',
    'store' => 'api.poster.store',
    'show' => 'api.poster.show',
    'update' => 'api.poster.update',
    'destroy' => 'api.poster.destroy',
]);

// Video
Route::apiResource('/video', ApiVideoController::class)->names([
    'index' => 'api.video.index',
    'store' => 'api.video.store',
    'show' => 'api.video.show',
    'update' => 'api.video.update',
    'destroy' => 'api.video.destroy',
]);

// Isyarat
Route::apiResource('/isyarat', ApiIsyaratController::class)->names([
    'index' => 'api.isyarat.index',
    'store' => 'api.isyarat.store',
    'show' => 'api.isyarat.show',
    'update' => 'api.isyarat.update',
    'destroy' => 'api.isyarat.destroy',
]);