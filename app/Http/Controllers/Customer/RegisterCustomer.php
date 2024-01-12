<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterCustomer extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function addUser(Request $request)
    {
        $request->validate(
            [
                "fname" => ["required"],
                "uemail" => ["required", "email"],
                "uname" => ["required"],
                "upass" => ["required"],
                "uphone" => ["required"]
            ],
            [
                "fname.required" => "Fullname is required",
                "uemail.required" => "Email Field is required",
                "uname.required" => "Email Field is required",
                "upass.required" => "Password Field is required",
                "uphone.required" => "Phone Field is required"
            ]
        );
        $insertCustomers = Customer::create([
            "fullname" => $request['fname'],
            "username" => $request['uname'],
            "email" => $request['uemail'],
            "phone" => $request['uphone'],
            "password" => Hash::make($request['upass'])
        ]);
        session()->flash('message', 'success');
        return redirect()->route('register.userform');
    }
}
