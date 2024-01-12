<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Frontend.Auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate(
            [
                "uname" => ["required", "alpha_num"],
                "upass" => ["required"]
            ],
            [
                "uname.required" => "Username Field is Required",
                "uname.alpha_num" => "Username Field Must Be Alpha Numeric",
                "upass.required" => "Password Field Cannot Be Empty"
            ]
        );
        if (Auth::guard('test_auth')->attempt(['username' => $request['uname'], 'password' =>  $request['upass']], $remember = $request['remember'])) {
            $request->session()->regenerate();
            $userId =  Auth::guard('test_auth')->id();
            session()->put('loggedIn', 'success');
            return redirect()->route('home');
        } else {

            return redirect()->route('login');
        }
    }
}
