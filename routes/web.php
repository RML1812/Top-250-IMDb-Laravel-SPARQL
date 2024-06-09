<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\MovieDetailController;
use App\Http\Controllers\castController;
use App\Http\Controllers\CastDetailController;
use App\Http\Controllers\GenreController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [TopController::class, 'topPage'])->name('topPage');
Route::get('/movieDetail', [MovieDetailController::class, 'movieDetail'])->name('movieDetail');
Route::get('/cast', [CastController::class, 'cast'])->name('cast');
Route::get('/castDetail', [CastDetailController::class, 'castDetail'])->name('castDetail');
Route::get('/genre', [GenreController::class, 'genre'])->name('genre');