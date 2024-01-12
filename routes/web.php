<?php

use App\Http\Controllers\Customer\LoginController;
use App\Http\Controllers\Customer\RegisterCustomer;
use App\Http\Controllers\Customer\UpdateController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', function () {
    if (Auth::guard('test_auth')->id() != null) {
        return view('dashboard');
    } else {
        return view('index');
    }
})->name('home');

Route::get('/register', [RegisterCustomer::class, "index"])->name('register.userform');
Route::post('/register', [RegisterCustomer::class, "addUser"])->name('register.user');
Route::get('/login', [LoginController::class, "index"])->name('login.user');
Route::post('/login', [LoginController::class, "login"])->name('login');
Route::get('/userProfile', [UpdateController::class, "fetchCustomer"])->name('fetch.profile');
Route::post('/userProfile', [UpdateController::class, "updateCustomer"])->name('update.profile');

Route::get('/logout', function () {
    session()->forget('loggedIn');
    Auth::guard('test_auth')->logout();
    return redirect()->route('home');
})->name('logout');
Route::get('/check', function () {
    return view('Frontend.index');
})->name('index');
//Socialite urls

Route::get('/getInfo', function () {
    dd(Auth::guard('test_auth')->id());
});
