@extends('Admin.Master.admin_master')
@section('content')
    <div class="section-header">
        <h1>Add Products</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                @if (session('message') == 'success')
                    <div class="mt-4 alert alert-success bg-gradient">Product Added Successfully</div>
                @endif
                <form method="POST" action="{{ route('products.update', $product->product_id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">

                        <div class="form-group">
                            <label>
                                <b> Enter Product Name </b>
                            </label>
                            <input type="text" name="pname" class="form-control" value="{{ $product->pname }}">
                            @if ($errors->has('pname'))
                                @error('pname')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            @endif


                        </div>
                        <div class="form-group">
                            <label>
                                <b> Enter Product Price </b>
                            </label>
                            <input type="text" name="pprice" class="form-control" value="{{ $product->pprice }}">
                            @if ($errors->has('pprice'))
                                @error('pprice')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            @endif


                        </div>
                        <div class="form-group">
                            <label>
                                <b> Select Image </b>
                            </label>
                            <input type="file" class="form-control" name="pimage">
                        </div>

                        <div class="form-group">
                            <label>
                                <b> Select Category </b>
                            </label>
                            <select name="pcat" class="form-control">
                                <option value="{{ $product->category_id }}">{{ $product->category_id }}</option>
                                @foreach ($category as $cat)
                                    <option value="{{ $cat->category_id }}">{{ $cat->category }}</option>
                                @endforeach

                            </select>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-success" type="submit">Update Product</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset($product->pimage) }}" height="300" width="300" alt="">

        </div>
    </div>
@endsection
