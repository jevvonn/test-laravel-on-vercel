<?php

use App\Http\Controllers\GreetController;
use App\Http\Controllers\SapaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', [GreetController::class, 'greet']);
Route::view('/hello', 'greet');

// 2. Tambahkan Route baru ini
// Saat URL '/sapa' diakses, panggil method 'index' di 'SapaController'
Route::get('/sapa', [SapaController::class, 'index']);
