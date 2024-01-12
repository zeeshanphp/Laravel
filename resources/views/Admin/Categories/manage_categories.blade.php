@extends('Admin.Master.admin_master')
@section('content')
    <div class="section-header">
        <h1>Manage Category</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-borderless table-striped">
                <thead>
                    <tr>
                        <td colspan="4"><a href="{{ route('add.cat') }}" class="btn btn-primary text-right">Add Category</a>
                        </td>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        {{-- <th>View</th> --}}
                        <th>Edit</th>
                        <th>
                            Delete
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($cat as $categories)
                        <tr>
                            <td>{{ $categories->iteration }}</td>
                            <td>{{ $categories->category }}</td>
                            {{-- <td><a href="#" class="btn btn-icon icon-left btn-success"><i class="far fa-file"></i>
                                    View</a></td> --}}
                            <td> <a href="{{ route('view.cat', $categories->category_id) }}"
                                    class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Edit
                                </a></td>

                            <td><a href="{{ route('delete.cat', $categories->category_id) }}"
                                    class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i>
                                    Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
