@extends('layout.layout')
@section('loggedin')
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-primary">
                <h4>Dashboard</h4>
            </div>
            <div class="col-md-4 float-end"><a href="{{ url('logout') }}" class="btn btn-danger">Logout</a></div>
        </div>
    </div>
@endsection
