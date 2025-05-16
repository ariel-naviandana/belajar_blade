<?php

use App\Http\Controllers\PenulisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/penulis', [PenulisController::class, 'index']);
Route::get('/penulis/add', [PenulisController::class, 'add']);
Route::post('/penulis/add', [PenulisController::class, 'addSave']);

Route::get('api/penulis', [PenulisController::class, 'getAll']);
Route::get('api/penulis/{id}', [PenulisController::class, 'getPenulis']);
