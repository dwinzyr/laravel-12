<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    FilmController,
    KritikController,
};

Route::get('/', [FilmController::class, 'movieHome'])->name('home');
Route::get('/movies', [FilmController::class, 'movies'])->name('movies');
Route::get('/movies/{film}', [FilmController::class, 'show'])->name('movies.show');
Route::get('/movies/genre/{genre}', [FilmController::class, 'moviesByGenre'])->name('genre');
Route::post('/movie/kritik/store', [KritikController::class, 'store'])->name('kritik.store');

Route::middleware('auth')->group(function () {
    Route::post('/kritik', [KritikController::class, 'store']);
    // Rute lain yang membutuhkan autentikasi
});
