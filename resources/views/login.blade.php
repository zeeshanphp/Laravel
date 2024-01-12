@extends('layout.layout')
@section('login')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h4 class="py-3 mt-3 bg-primary bg-gradient text-white">
                    <center>Login user</center>
                </h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <table class="table table-borderless">
                        <tr>
                            <td><b>Enter Username</b></td>
                            <td><input type="text" class="form-control" name="uname"
                                    placeholder="Enter User Username " />
                            </td>
                        </tr>
                        @if ($errors->has('uname'))
                            <tr>
                                <td colspan="2">
                                    <span class="text-danger">
                                        @error('uname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </td>

                            </tr>
                        @endif
                        <tr>
                            <td><b>Enter Password</b></td>
                            <td><input type="password" class="form-control" name="upass"
                                    placeholder="Enter Password For User" required />
                            </td>
                        </tr>

                        @if ($errors->has('upass'))
                            <tr>
                                <span class="text-danger">
                                    @error('upass')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </tr>
                        @endif
                        <tr>
                            <td></td>
                            <td><input type="submit" name="login_user" class="btn-primary btn-gradient btn w-100"
                                    value="Login" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-primary">
                                        <input type="checkbox" name="remember" value="true"> Remember me
                                    </label>
                                </div>
                            </td>
                            <td><a href="{{ url('forgot-password') }}" class="text-primary"><b>Forgot Password</b></a></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center> <b> OR LOGIN WITH </b></center>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center><a href="{{ route('github-login') }}" class="btn btn-dark w-100">Login With
                                        GitHub</a>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center><a href="{{ route('facebook-login') }}" class="btn btn-primary w-100">Login With
                                        Facebook</a>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center><a href="{{ route('twitter-login') }}" class="btn btn-info w-100">Login With
                                        TWITTER</a>
                                </center>
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
