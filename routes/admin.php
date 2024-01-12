<?php

use App\Http\Controllers\Admin\Categories;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Customer\LoginController;
use App\Http\Controllers\Customer\RegisterCustomer;
use App\Http\Controllers\Customer\UpdateController;
use App\Http\Controllers\DataTcontroller;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/dashboard', [DashBoardController::class, "index"]);
Route::get('/addcat', [Categories::class, "index"])->name('add.cat');
Route::post('/addcat', [Categories::class, "add_cat"])->name('save.cat');
Route::get('/all_categories', [Categories::class, "all_categories"])->name('all.cat');
Route::get('/editcat/edit/{id}', [Categories::class, "edit"])->name('view.cat');
Route::post('/editcat/edit/{id}', [Categories::class, "update_cat"])->name('update.cat');
Route::get('/delete/{id}', [Categories::class, "delete"])->name('delete.cat');
Route::resource('admin/products', ProductsController::class);
Route::resource('admin/dts', DataTcontroller::class);
