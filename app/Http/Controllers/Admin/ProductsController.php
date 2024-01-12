<?php

namespace App\Http\Controllers\Admin;

use App\Traits\ImageUploadTrait;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $comments = Post::find(1)->comments;

        $products = Categories::with(['products'])->find(4);
        dd($products);
        // return view('Admin.Products.manage_products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $category = Categories::all();
        return view('Admin.Products.addproducts', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $imagePath = $this->uploadImage($request, 'pimage', 'products');
        $products = new Product;
        $products->pname = $request->pname;
        $products->pprice = $request->pprice;
        $products->pimage = $imagePath;
        $products->category_id = $request->pcat;
        $products->save();
        session()->flash('success', 'Product Added Successfully');
        return redirect()->route('products.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Categories::all();
        $product = Product::find($id);
        return view('Admin.Products.editproducts', compact('category', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
