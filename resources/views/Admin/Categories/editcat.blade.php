@extends('Admin.Master.admin_master')
@section('content')
    <div class="section-header">
        <h1>Edit Category</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                @if (session('message') == 'success')
                    <div class="mt-4 alert alert-success bg-gradient">Category Added Successfully</div>
                @endif
                <form method="POST" action="">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>
                                <b> Enter Category Name </b>
                            </label>
                            <input type="text" name="category" class="form-control" value="{{ $category->category }}">
                            @if ($errors->has('category'))
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            @endif


                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-warning" type="submit">Updae Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
