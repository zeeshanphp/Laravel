<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //
    public function index()
    {
        $categories = Categories::all()->count();
        $products = Product::all()->count();
        $users = User::all()->count();
        return view('Admin.dashboard', compact('categories', 'products', 'users'));
    }
}
