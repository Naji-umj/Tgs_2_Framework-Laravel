<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/test', function () {
    return 'Laravel routes now working ✅';
});

Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);