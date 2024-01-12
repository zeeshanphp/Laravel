@extends('Admin.Master.admin_master')
@section('content')
    <div class="section-header">
        <h1>Add Category</h1>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                @if (session('message') == 'success')
                    <div class="mt-4 alert alert-success bg-gradient">Category Added Successfully</div>
                @endif
                <form method="POST" action="{{ route('save.cat') }}">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label>
                                <b> Enter Category Name </b>
                            </label>
                            <input type="text" name="category" class="form-control">
                            @if ($errors->has('category'))
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            @endif


                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-success" type="submit">Add Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
