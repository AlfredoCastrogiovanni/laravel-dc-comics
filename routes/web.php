<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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

Route::get('/comics', [ComicController::class, 'index'])->name('guest.comics.index');
Route::post('/comics', [ComicController::class, 'store'])->name('guest.comics.store');
Route::get('/comics/create', [ComicController::class, 'create'])->name('guest.comics.create');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('guest.comics.show');
Route::get('/comics/{id}/edit', [ComicController::class, 'edit'])->name('guest.comics.edit');
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('guest.comics.update');
