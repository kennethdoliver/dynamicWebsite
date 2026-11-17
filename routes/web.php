<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);
Route::get('/create-book', [BookController::class, 'create']);
Route::post('/store-book', [BookController::class, 'store'])->name('store-book');
Route::post('/destroy-book', [BookController::class, 'destroy'])->name('destroy-book');
Route::post('/edit-book/{book}', [BookController::class, 'edit'])->name('edit-book');
Route::post('/update-book/{book}', [BookController::class, 'update'])->name('update-book');