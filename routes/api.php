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
Route::apiResource('user', ApiUserController::class);

// Kategori
Route::apiResource('kategori', ApiKategoriController::class);

// Artikel
Route::apiResource('artikel', ApiArtikelController::class);

// Poster
Route::apiResource('poster', ApiPosterController::class);

// Video
Route::apiResource('video', ApiVideoController::class);

// Isyarat
Route::apiResource('isyarat', ApiIsyaratController::class);