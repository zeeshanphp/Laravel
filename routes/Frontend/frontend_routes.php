<?php

use App\Http\Controllers\Customer\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('Frontend.index');
})->name('home');
Route::get('/loginUser', [LoginController::class, "index"])->name('f.loginuser');
Route::post('/loginUser', [LoginController::class, "login"]);
