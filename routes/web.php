<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\AdminController;

Route::get('/', [Home::class,"index"])->name('homepage');
Route::get('/artist/{artist}', [Home::class,"artist"])->name('home.artist');

Route::get('/artist/{name}?id={id}', [Home::class,"artist"])->name('artist');

Route::get('/song/{track}', [Home::class,"song"])->name('home.song');

Route::get('/music/search',[Home::class,"search"])->name('home.search');
Route::get('/package/{name}',[Home::class,"package"])->name('home.package');

//admin pannel

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class,"index"])->name('admin.dashboard');

    Route::get('/genre', [AdminController::class,"genre"])->name('admin.genre');
    Route::post('/genre', [AdminController::class,"genreInsert"])->name('admin.genre.store');
    
    Route::get('/artist', [AdminController::class,"artist"])->name('admin.artist');
    Route::post('/artist', [AdminController::class,"artistStore"])->name('admin.artist.store');

    Route::get('/song', [AdminController::class,"song"])->name('admin.song');
    Route::post('/song', [AdminController::class,"songStore"])->name('admin.song.store');

    Route::get('/album', [AdminController::class,"album"])->name('admin.album');
    Route::post('/album', [AdminController::class,"album_store"])->name('admin.album.store');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
