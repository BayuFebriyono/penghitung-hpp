<?php

use App\Http\Controllers\AuthController;
use App\Livewire\User\AddProduct;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/product', AddProduct::class);
