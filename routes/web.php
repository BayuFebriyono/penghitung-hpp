<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [AuthController::class, 'index']);

Route::get('/tes', function(){
    return view('components.layouts.sidebar');
});
