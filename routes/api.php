<?php

use App\Http\Controllers\MovieCoverController;
use App\Http\Controllers\RdfController;
use Illuminate\Support\Facades\Route;

Route::post('query', [RdfController::class, 'query']);
Route::get('moviecover', [MovieCoverController::class, 'getMovies']);