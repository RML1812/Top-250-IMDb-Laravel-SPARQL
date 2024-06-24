<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\MovieDetailController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\CastDetailController;
use App\Http\Controllers\GenreController;

Route::get('/', [TopController::class, 'topPage'])->name('topPage');
Route::get('/genre/{filter?}', [GenreController::class, 'filter'])->name('genre.filter');
Route::get('/movieDetail/{rank}', [MovieDetailController::class, 'show'])->name('movieDetail');
Route::get('/movieDetail/{rank}/cast', [CastController::class, 'show'])->name('cast');
Route::get('/castDetail/{name}', [CastDetailController::class, 'show'])->name('castDetail');