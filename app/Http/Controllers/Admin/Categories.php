<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories as ModelsCategories;
use Illuminate\Http\Request;

class Categories extends Controller
{
    public function index()
    {

        return view('Admin.Categories.addcat');
    }
    public function add_cat(Request $request)
    {
        $request->validate(
            [
                "category" => ["required"],
            ],
            [
                "category.required" => "Category name is Required",
            ]
        );

        //Put this code in controller
        $insertCustomers = ModelsCategories::create([
            "category" => $request['category']
        ]);
        session()->flash('message', 'success');
        return redirect()->route('add.cat');
    }

    public function all_categories()
    {
        $cat = ModelsCategories::all();
        return view('Admin.Categories.manage_categories', compact('cat'));
    }
    public function edit($id)
    {
        $category = ModelsCategories::find($id);
        return view('Admin.Categories.editcat', compact('category'));
    }
    public function update_cat($id, Request $request)
    {
        $category = ModelsCategories::find($id);
        $category->category = $request['category'];
        $category->save();
        session()->flash('message', 'success');
        return redirect()->route('all.cat');
    }
    public function delete($id)
    {
        $delete = ModelsCategories::find($id);
        $delete->delete();
        return redirect()->route('all.cat');
    }
}
