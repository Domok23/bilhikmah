<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\IsyaratController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\kategoriController;

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
Route::apiResource('user', UserController::class);

// Kategori
Route::apiResource('kategori', kategoriController::class);

// Artikel
Route::apiResource('artikel', ArtikelController::class);

// Poster
Route::apiResource('poster', PosterController::class);

// Video
Route::apiResource('video', VideoController::class);

// Isyarat
Route::apiResource('isyarat', IsyaratController::class);
