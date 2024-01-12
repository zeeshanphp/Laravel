@extends('Admin.Master.admin_master')
@section('content')
    <div class="section-header">
        <h1>Manage Products</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-borderless table-striped">
                <thead>
                    <tr>
                        <td colspan="4"><a href="{{ route('products.create') }}" class="btn btn-primary text-right">Add
                                Product</a>
                        </td>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Product Category</th>
                        <th>Edit</th>
                        <th>
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $prod)
                        <tr>
                            <td>{{ $prod->iteration }}</td>
                            <td><img src="{{ asset($prod->pimage) }}" height="50" width="50"></td>
                            <td>{{ $prod->pname }}</td>
                            <td>{{ $prod->pprice }}</td>
                            <td>{{ $prod->category_id }}</td>
                            {{-- <td><a href="#" class="btn btn-icon icon-left btn-success"><i class="far fa-file"></i>
                                    View</a></td> --}}
                            <td> <a href="{{ route('products.edit', $prod->product_id) }}"
                                    class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Edit
                                </a></td>

                            <td><a href="{{ route('delete.cat', $prod->product_id) }}"
                                    class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i>
                                    Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
