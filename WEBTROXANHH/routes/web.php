<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookCRUD;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\restfulApiController;

Route::get('/books', [BookController::class, 'index']);
Route::get('/book/create', [BookCRUD::class, 'create']);
Route::post('/book/store', [BookCRUD::class, 'store']);
Route::get('/book/edit/{id}', [BookCRUD::class, 'edit']);
Route::put('/book/update/{id}', [BookCRUD::class, 'update']);
Route::delete('/book/delete/{id}', [BookCRUD::class, 'destroy']);

Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/api/rest', [restfulApiController::class, 'index']);
