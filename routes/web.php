<?php

use App\Http\Controllers\AuthController;
use App\Livewire\User\AddProduct;
use App\Livewire\User\HitungHpp;
use App\Livewire\User\ListHpp;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth')->group(function(){

    Route::get('/product', AddProduct::class);
    Route::get('/hitung-hpp', HitungHpp::class);
    Route::get('/list-hpp', ListHpp::class);
});
