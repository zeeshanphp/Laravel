
<?php

use App\Http\Controllers\Customer\LoginController;
use App\Http\Controllers\Customer\RegisterCustomer;
use App\Http\Controllers\Customer\UpdateController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

Route::get('/twitter/redirect', function () {
    return Socialite::driver('twitter-oauth-2')->redirect();
})->name('twitter-login');

Route::get('/twitter/callback', function () {
    $user = Socialite::driver('twitter-oauth-2')->user();
    // dd($user);
    $customer = Customer::firstOrCreate([
        'email' => $user->email
    ], [
        'username' => $user->nickname,
        'password' => Hash::make(123),

    ]);
    Auth::guard('test_auth')->login($customer, true);
    session()->put('loggedIn', 'success');

    return redirect()->route('update.profile');
});
