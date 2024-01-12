<?php

use App\Http\Controllers\Customer\LoginController;
use App\Http\Controllers\Customer\RegisterCustomer;
use App\Http\Controllers\Customer\UpdateController;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Password;

Route::get('/forgot-password', function () {
    return view('ForgotPassword.forgot_password');
});
Route::post('/forgot-password', function (Request $request) {
    // dd($request->all());
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);

    // return view('ForgotPassword.forgot_password');
})->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('ForgotPassword.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');
