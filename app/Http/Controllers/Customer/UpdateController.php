<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    public function fetchCustomer()
    {
        $id = Auth::guard('test_auth')->id();
        $user = Customer::find($id);
        return view('update_profile', compact('user'));
    }
    public function updateCustomer(Request $request){
        $id = Auth::guard('test_auth')->id();
        $user = Customer::find($id);
        $user->fullname =  $request['fname'];
        $user->username =  $request['uname'];
        $user->email =  $request['uemail'];
        $user->phone =  $request['uphone'];
        $user->save();
    return redirect()->route('fetch.profile');
    }
}
